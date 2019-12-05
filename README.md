<p align="center"><img src="./src/logo.png" width="300" alt="Osborne Wood Logo"></p>

<h1 align="center">Osborne API SDK</h1>

PHP SDK for the Osborne Wood ERP API.

## Requirements

This SDK requires PHP 7.0 or greater

## API Specs

Swagger API Specs are available at https://app.swaggerhub.com/apis/jordan-hoff

## Installation

Because this repository is private, it is not registered on Packagist. You will need to add a repository reference to your project's `composer.json` file first:

```json
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/happycog/osborne-api-sdk.git"
    }
  ]
```

Then, use composer to require the most recent version of the SDK.

```bash
composer require happycog/osborne-api-sdk
```

## Usage

The swagger generated code leaves a little to be desired, so it has been extended to support an interface that is inspired by [Laravel Eloquent](https://laravel.com/docs/5.8/eloquent). This will abstract most of the logic needed to interact with the API, and allows the developer to focus on writing clean, organized code.

> Note: Currently only basic CRUD operations are supported. No filtering / pagination / etc.

Interaction with the API is handled through classes that extend `HappyCog\OsborneApi\ErpService\Model`.

### Model Operations

#### Get all models

Use the `all` method to get an array of models:

```php
use HappyCog\OsborneApi\ErpService\Model\Customer;

$customers = Customer::all();

foreach ($customers as $customer) {
    echo $customer->firstName;
}
```

#### Find a specific model

Use the `find` method to get a model:

```php
use HappyCog\OsborneApi\ErpService\Model\Customer;

$customer = Customer::find(123);

echo $customer->firstName;
```

#### Create a model instance

Use the `create` method to create a model:

```php
use HappyCog\OsborneApi\ErpService\Model\Customer;

$customer = Customer::create([
    'firstName' => 'foobar',
]);
```

#### Save a model instance

Use the `save` method to create a new model or save an existing one:

```php
use HappyCog\OsborneApi\ErpService\Model\Customer;

$customer = new Customer([
    'firstName' => 'foobar',
]);

$customer->save();

// OR

$customer = Customer::find(123);

$customer->firstName = 'foobar';

$customer->save();
```

#### Update a model instance

Use the `update` method to save changes to an existing model:

```php
use HappyCog\OsborneApi\ErpService\Model\Customer;

$customer = Customer::find(123);

$customer->update([
    'firstName' => 'foobar',
]);
```

#### Delete a model instance

Use the `delete` method to delete an existing model:

```php
use HappyCog\OsborneApi\ErpService\Model\Customer;

$customer = Customer::find(123);

$customer->delete();
```

#### Destroy a model instance

Use the `destroy` method to delete a model by id:

```php
use HappyCog\OsborneApi\ErpService\Model\Customer;

Customer::destroy(123);
```

#### Nested resources

TODO more documentation

Generally, any nested resources are supported as well using the same syntax:

```php
// Returns a collection of shipping addresses
Customer::find(123)->shippingAddresses;
```

## Testing

Unit and Integration tests are available via phpunit for this SDK. Additionally, [php-cs-fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer) and [phpmd](https://phpmd.org/) are used to maintain code quality and consistency.

To run the full test suite, simply run the following command:

```bash
php artisan test
```

To run phpunit (optionally) with only the "Unit tests" suite:

```bash
php artisan test:phpunit --testsuite "Unit Tests"
```

To run php-cs-fixer and (optionally) automatically fix all issues:

```bash
php artisan test:php-cs-fixer --fix
```

To run phpmd:

```bash
php artisan test:phpmd
```

### Integration Tests

The integration tests will by default rely on [SwaggerHub Auto Mocking](https://app.swaggerhub.com/help/integrations/api-auto-mocking) which has a rate limit of 10 requests per minute. The test suite will automatically wait and retry when rate limited.

For better performance, it is recommended that you spin up a docker instance of [danielgtaylor/apisprout](https://github.com/danielgtaylor/apisprout) by running the following command ( using the current api spec version ):

```bash
docker run -d -p 8000:8000 danielgtaylor/apisprout https://api.swaggerhub.com/apis/jordan-hoff/osborne_erp_service_api/1.0.6
```

Then, you can create a `.env.testing` file that contains the following:

```
MOCK_AUTH_TOKEN="yKBaSXOehEeTflxBJVG"
MOCK_SPEC_URL="http://localhost:8000"
```

## Code Generation

This library uses code generated with [Swagger Codegen](https://swagger.io/tools/swagger-codegen/). Make sure swagger codegen installed on your machine ( via homebrew ) along with [jq](https://stedolan.github.io/jq/). There are two scripts included to generate both the production client as well as unit test fixtures.

### Production Client

Client code is generated from [https://api.swaggerhub.com/apis/jordan-hoff/osborne_erp_service_api/x.x.x](https://app.swaggerhub.com/apis/jordan-hoff/osborne_erp_service_api). To re-generate, run the `generate-client.sh` script. This script will automatically use the latest version of the client spec.

```bash
./generate-client.sh
```

### Unit Test Fixtures

Similar to the client code, there are test fixtures generated from [https://api.swaggerhub.com/apis/jordan-hoff/test_fixtures/x.x.x](https://app.swaggerhub.com/apis/jordan-hoff/test_fixtures). To re-generate, run the `generate-fixtures.sh` script. This script will automatically use the latest version of the fixtures spec.

```bash
./generate-fixtures.sh
```
