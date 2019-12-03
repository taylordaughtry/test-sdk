#!/bin/sh

set -e

COMMAND="swagger-codegen"

if [[ "$@" == "--debug" ]]; then
    COMMAND="swagger-codegen-debug"
fi

rm -rf ./tests/Fixtures/Generated

LATEST=`curl https://api.swaggerhub.com/apis/jordan-hoff/test_fixtures | jq -r '.apis[-1].properties[] | select(.type=="Swagger") | .url'`

# generate the testing fixtures from the swagger specs
$COMMAND generate \
    --input-spec $LATEST \
    --template-dir ./codegen-template \
    --template-engine mustache \
    --lang php \
    --output ./tests \
    -D "variableNamingConvention=camelCase, \
        invokerPackage=HappyCog\\OsborneApi\\ErpService, \
        packagePath=Fixtures, \
        srcBasePath=Generated"

cd tests/Fixtures

# Cleanup the additional scaffolding that swagger-codegen creates
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
