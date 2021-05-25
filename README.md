<p align="center">
    <a href="https://github.com/yii-extension" target="_blank">
        <img src="https://lh3.googleusercontent.com/ehSTPnXqrkk0M3U-UPCjC0fty9K6lgykK2WOUA2nUHp8gIkRjeTN8z8SABlkvcvR-9PIrboxIvPGujPgWebLQeHHgX7yLUoxFSduiZrTog6WoZLiAvqcTR1QTPVRmns2tYjACpp7EQ=w2400" height="100px">
    </a>
    <h1 align="center">Simple web application for Yii3.</h1>
    <br>
</p>

[![Total Downloads](https://poser.pugx.org/yii-extension/simple-app/downloads.png)](https://packagist.org/packages/yii-extension/simple-app)
[![Build Status](https://github.com/yii-extension/simple-app/workflows/build/badge.svg)](https://github.com/yii-extension/simple-app/actions?query=workflow%3Abuild)
[![codecov](https://codecov.io/gh/yii-extension/simple-app/branch/master/graph/badge.svg?token=GLO748TP63)](https://codecov.io/gh/yii-extension/simple-app)
[![static analysis](https://github.com/yii-extension/simple-app/workflows/static%20analysis/badge.svg)](https://github.com/yii-extension/simple-app/actions?query=workflow%3A%22static+analysis%22)
[![type-coverage](https://shepherd.dev/github/yii-extension/user-view-bootstrap5/coverage.svg)](https://shepherd.dev/github/yii-extension/user-view-bootstrap5)

## Directory structure

      config/             application directory configurations
          common          contains common config local classes
          packages        contains config module/extension packages classes
          web             contains web config local classes
          
      src/                application directory
          Action          contains action classes
          Command         contains command console classes
          Handler         contains handlers classes
          Runner          contains runner classes

## Installation

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install this project template using the following command:

```shell
composer create-project --prefer-dist --stability dev yii-extension/simple-app <your project>
```

Now you should be able to access the application through the following URL, assuming `app` is the directory
directly under the `public` root.

## Configuring your application

All the configuration is in the `config directory` of the `application`.

## Using PHP built-in server

```shell
php -S 127.0.0.1:8080 -t public
```

## Wait till it is up, then open the following URL in your browser

~~~
http://localhost:8080
~~~

## Codeception testing

The package is tested with [Codeception](https://github.com/Codeception/Codeception). To run tests:

```shell
php -S 127.0.0.1:8080 -t public > yii.log 2>&1 &
vendor/bin/codecept run
```

## Static analysis

The code is statically analyzed with [Psalm](https://psalm.dev/docs). To run static analysis:

```shell
./vendor/bin/psalm
```
### Support the project

[![Open Collective](https://img.shields.io/badge/Open%20Collective-sponsor-7eadf1?logo=open%20collective&logoColor=7eadf1&labelColor=555555)](https://opencollective.com/yiisoft)

### License

The simple-app for Yii Packages is free software. It is released under the terms of the BSD License.
Please see [`LICENSE`](./LICENSE.md) for more information.

Maintained by [Yii Extension](https://github.com/yii-extension).
