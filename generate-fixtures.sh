#!/bin/sh

set -e

# generate the testing fixtures from the swagger specs
swagger-codegen generate \
    -i https://api.swaggerhub.com/apis/jordan-hoff/test_fixtures/1.0.0 \
    -l php \
    -o ./tests \
    -c .swagger-codegen-fixtures.json

# All Api classes should extend a base class for additional customization
cd tests/Fixtures/Generated/Api
egrep -rl '^class [A-Za-z]+$' * | xargs -I@ sed -E -i '' 's/^class ([A-Za-z]+)$/class \1 extends \\HappyCog\\OsborneApi\\Resources\\Base\\ApiClient/g' @

# All Model classes should extend a base class for additional customization
cd ../Model
egrep -rl '^class [A-Za-z]+' * | xargs -I@ sed -E -i '' 's/^class ([A-Za-z]+)/class \1 extends \\HappyCog\\OsborneApi\\Resources\\Base\\Model/g' @

# Cleanup the additional scaffolding that swagger-codegen creates
cd ../../
rm -rf test/ \
    docs/
rm -f \
    .php_cs \
    .travis.yml \
    composer.json \
    git_push.sh \
    phpunit.xml.dist \
    README.md

# Autoload all of the new classes
cd ../../
composer dump-autoload
