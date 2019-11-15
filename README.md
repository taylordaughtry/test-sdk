<p align="center"><img src="./src/logo.png" width="300" alt="Osborne Wood Logo"></p>

<h1 align="center">Osborne Api Plugin</h1>

Craft 3 plugin to interface with the Osborne Wood ERP API.

## Requirements

This plugin requires Craft CMS 3.3.0 or later as well as Craft Commerce 2.2.0 or later.

## API Specs

Swagger API Specs are available ( temporarily ) at https://app.swaggerhub.com/apis/jordan-hoff

## Installation

Because this repository is private, it is not registered on Packagist. You will need to add a repository reference to your project's `composer.json` file first:

```json
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/happycog/osborne-api-plugin.git"
    }
  ]
```

Then, use composer to require the most recent version of the plugin and install it in craft

```bash
composer require happycog/osborne-api-plugin

./craft install/plugin osborne-api-plugin
```

## Setup

TODO
