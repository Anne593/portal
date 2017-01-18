![CakePHP 3 Notifications Plugin](https://raw.githubusercontent.com/scherersoftware/cake-app-template/master/app-template.png)

[![Build Status](https://travis-ci.org/scherersoftware/cake-app-template.svg?branch=master)](https://travis-ci.org/scherersoftware/cake-app-template)
[![License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.txt)

Pre-Configured Application Template for CakePHP 3

## Installation

Stuff like MySQL user and password is configured by using PHP Dotenv.
Be sure to set `SESSION_COOKIE_NAME` and `MAIN_DOMAIN` in the `.env`, as these values are mandatory for a correct session setup.
Also, rename `app.default.php` to `app.php` and change the settings fitting your needs.
Install plugins with `$ composer install`

Be sure to have `npm` installed and make sure afterwards `bower` is installed globally:

```
$ npm install -g bower
```

Now we have to install some npm packages and the bower dependencies:

```
$ npm install
```

Install the bower dependencies:

`$ bower install`


Next, setup your database. We're using cakephp/migrations for that:

`$ bin/cake migrations migrate`

Now seed the database with a default user

`$ bin/cake migrations seed`


## Credits

This template is based on the [CakePHP Application Skeleton](https://github.com/cakephp/app)

Also, we're using the following awesome open-source projects:
- [CakePHP Framework](https://github.com/cakephp/cakephp)
- [Asset Compress by Mark Story](https://github.com/markstory/asset_compress)
- [Bootstrap UI by FriendsOfCake](https://github.com/FriendsOfCake/bootstrap-ui)
- [CakePHP Glide by ADmad](https://github.com/admad/cakephp-glide)
- [PHP Dotenv by Jose Diaz-Gonzalez](https://github.com/josegonzalez)
- [JShrink by Robert Hafner](https://github.com/tedivm/jshrink)
- [Assert by Benjamin Eberlei](https://github.com/beberlei/assert)
