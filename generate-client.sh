#!/bin/sh

set -e

COMMAND="swagger-codegen"

if [[ "$@" == "--debug" ]]; then
    COMMAND="swagger-codegen-debug"
fi

rm -rf ./generated

LATEST=`curl https://api.swaggerhub.com/apis/jordan-hoff/osborne_erp_service_api | jq -r '.apis[-1].properties[] | select(.type=="Swagger") | .url'`

# generate the initial codebase from the latest availabe swagger specs
$COMMAND generate \
    --input-spec $LATEST \
    --template-dir ./codegen-template \
    --template-engine mustache \
    --lang php \
    --output ./generated \
    -D "variableNamingConvention=camelCase, \
        invokerPackage=HappyCog\\OsborneApi\\ErpService, \
        packagePath=ErpService, \
        srcBasePath=src"

cd generated/ErpService

# Cleanup the additional scaffolding that swagger-codegen creates
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
