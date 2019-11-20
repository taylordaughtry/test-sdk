#!/bin/sh

set -e

# generate the initial codebase from the swagger specs
swagger-codegen generate \
    -i https://api.swaggerhub.com/apis/jordan-hoff/osborne_erp_service_api/1.0.3 \
    -l php \
    -o ./generated \
    -c .swagger-codegen.json

# All Api classes should extend a base class for additional customization
cd generated/ErpService/src/Api
egrep -rl '^class [A-Za-z]+$' * | xargs -I@ sed -E -i '' 's/^class ([A-Za-z]+)$/class \1 extends \\HappyCog\\OsborneApi\\Resources\\Base\\ApiClient/g' @

# All Model classes should extend a base class for additional customization
cd ../Model
egrep -rl '^class [A-Za-z]+' * | xargs -I@ sed -E -i '' 's/^class ([A-Za-z]+)/class \1 extends \\HappyCog\\OsborneApi\\Resources\\Base\\Model/g' @

# Cleanup the additional scaffolding that swagger-codegen creates
cd ../../
rm -rf test/
rm -f \
    .php_cs \
    .travis.yml \
    composer.json \
    git_push.sh \
    phpunit.xml.dist

# Autoload all of the new classes
cd ../../
composer dump-autoload
