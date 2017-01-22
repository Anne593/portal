# hiltonportal
Portal/administration website for the Hilton dorm. Powered by CakePhp3.
Keep in mind that this project is currently in an early **development** stage!

## Installation

Stuff like MySQL user and password is configured by using PHP Dotenv.
Be sure to set `SESSION_COOKIE_NAME` and `MAIN_DOMAIN` in the `.env`, as these values are mandatory for a correct session setup.
Also, rename `app.default.php` to `app.php` and change the settings fitting your needs.

Install plugins with `$ composer install`

Install some npm packages and the bower dependencies:

```
$ npm install
```

Install the bower dependencies:

`$ bower install`


Next, setup your database. We're using cakephp/migrations for that:

`$ bin/cake migrations migrate`

Now seed the database with a default user

`$ bin/cake migrations seed`

Start at least one worker that handels all email jobs:
`$ bin/cake queuesadilla -Q notification`


### Development
In order to test the email functions properly you should set up a hook like [MailHog](https://github.com/mailhog/MailHog).
Install `MailHog` and modify `.env`:
```
export EMAIL_HOST=127.0.0.1
export EMAIL_PORT=1025
export EMAIL_FROM=hiltonportal@localhost
```

Set the sendmail path in the `php.ini` config file to `/usr/local/bin/mailhog sendmail
`. You can view all outgoing mails at [localhost:8025](http://localhost:8025/).


## Credits

This template is based on the [CakePHP Application Skeleton](https://github.com/cakephp/app) and the [scherersoftware/cake-app-template](https://github.com/scherersoftware/cake-app-template) pre-configured template.

Also, we're using the following awesome open-source projects:
- [CakePHP Framework](https://github.com/cakephp/cakephp)
- [Asset Compress by Mark Story](https://github.com/markstory/asset_compress)
- [Bootstrap UI by FriendsOfCake](https://github.com/FriendsOfCake/bootstrap-ui)
- [CakePHP Glide by ADmad](https://github.com/admad/cakephp-glide)
- [PHP Dotenv by Jose Diaz-Gonzalez](https://github.com/josegonzalez)
- [JShrink by Robert Hafner](https://github.com/tedivm/jshrink)
- [Assert by Benjamin Eberlei](https://github.com/beberlei/assert)
