<p align="center">
    <a href="https://github.com/terabytesoftw/helper-timezone" target="_blank">
        <img src="https://lh3.googleusercontent.com/D9TFw1F6ddPuheDc_tpNptTdvTg-FNNpjLSBN14X6Sc-3JDiOxfE67rEh4OZfygonx1tKei2b2DEOHDLjF6T3xl8e-rkEEPZeGqLTWcS_v2cBRlyo0vcZLDHG5ivSDGIWCsenbol=w2400" height="50px;">
    </a>
    <h1 align="center">Helper TimeZone</h1>
</p>

<p align="center">
    <a href="https://packagist.org/packages/terabytesoftw/helper-timezone" target="_blank">
        <img src="https://poser.pugx.org/terabytesoftw/helper-timezone/v/unstable" alt="Unstable Version">
    </a>
    <a href="https://travis-ci.org/terabytesoftw/helper-timezone" target="_blank">
        <img src="https://travis-ci.org/terabytesoftw/helper-timezone.svg?branch=master" alt="Build Status">
    </a>  
    <a href="https://scrutinizer-ci.com/g/terabytesoftw/helper-timezone/" target="_blank">
        <img src="https://scrutinizer-ci.com/g/terabytesoftw/helper-timezone/badges/build.png?b=master" alt="Build Status">
    </a>
    <a href="https://scrutinizer-ci.com/g/terabytesoftw/helper-timezone/" target="_blank">
        <img src="https://scrutinizer-ci.com/g/terabytesoftw/helper-timezone/badges/coverage.png?b=master" alt="Build Status">
    </a>    
    <a href="https://scrutinizer-ci.com/g/terabytesoftw/helper-timezone/?branch=master" target="_blank">
     	<img src="https://scrutinizer-ci.com/g/terabytesoftw/helper-timezone/badges/quality-score.png?b=master" alt="Code Quality">
    </a>
    <a href="https://scrutinizer-ci.com/code-intelligence" target="_blank">
     	<img src="https://scrutinizer-ci.com/g/terabytesoftw/helper-timezone/badges/code-intelligence.svg?b=master" alt="Code Intelligence Status">
    </a>
    <a href="https://codeclimate.com/github/terabytesoftw/helper-timezone/maintainability" target="_blank">
        <img src="https://api.codeclimate.com/v1/badges/9bbe65b6fda1abd74c2c/maintainability" alt="Maintainability">
    </a>		
</p>

</br>

### **DIRECTORY STRUCTURE:**

```
config/             contains application configurations
src/                contains source files
tests/              contains tests codeception for the web application
vendor/             contains dependent 3rd-party packages
```

### **REQUIREMENTS:**

- The minimum requirement by this project template that your Web server supports:
    - PHP 7.2 or higher.

### **INSTALLATION:**

<p align="justify">
If you do not have <a href="http://getcomposer.org/" title="Composer" target="_blank">Composer</a>, you may install it by following the instructions at <a href="http://getcomposer.org/doc/00-intro.md#installation-nix" title="getcomposer.org" target="_blank">getcomposer.org</a>.
</p>

You can then install this extension using the following command composer:

~~~
composer require terabytesoftw/helper-timezone '^1.0@dev'
~~~

or add composer.json:

~~~
"terabytesoftw/helper-timezone":"^1.0@dev"
~~~

### **USAGE:**

~~~
<?php

/**
 * @var array $timezone
 */
private $timezone;

use terabytesoft\helpers\TimeZone;

// Show list all time zone utc order timezone, name
$this->timezone = \yii\helpers\ArrayHelper::map(
    $this->timezone->getAll(), 
    'timezone',
    'name'
);

var_dump($this->timezone);
~~~

### **RUN TESTS CODECEPTION:**

~~~
// download all composer dependencies root project
$ composer update --prefer-dist -vvv

// run all tests with code coverage
$ vendor/bin/codecept run unit --coverage-xml
~~~

### **WEB SERVER SUPPORT:**

- Apache.
- Nginx.
- OpenLiteSpeed.

### **DOCUMENTATION STYLE GUIDE:**

[Style CI Documentation PSR2.](https://docs.styleci.io/presets#psr2)

### **LICENCE:**

[![License](https://poser.pugx.org/terabytesoftw/helper-timezone/license)](LICENSE.md)
[![YiiFramework](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)](https://www.yiiframework.com/)
[![Total Downloads](https://poser.pugx.org/terabytesoftw/helper-timezone/downloads)](https://packagist.org/packages/terabytesoftw/helper-timezone)
[![StyleCI](https://github.styleci.io/repos/195531459/shield?branch=master)](https://github.styleci.io/repos/195531459)
