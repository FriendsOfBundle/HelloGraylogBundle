# HelloGreylogBundle

[![Latest Stable Version](https://poser.pugx.org/hgtan/graylog-bundle/v/stable)](https://packagist.org/packages/hgtan/graylog-bundle) 
[![Total Downloads](https://poser.pugx.org/hgtan/graylog-bundle/downloads)](https://packagist.org/packages/hgtan/graylog-bundle) 
[![Latest Unstable Version](https://poser.pugx.org/hgtan/graylog-bundle/v/unstable)](https://packagist.org/packages/hgtan/graylog-bundle) 
[![License](https://poser.pugx.org/hgtan/graylog-bundle/license)](https://packagist.org/packages/hgtan/graylog-bundle)

[![Build Status](https://img.shields.io/travis/FriendsOfBundle/HelloGraylogBundle.svg?style=flat-square)](https://travis-ci.org/FriendsOfBundle/HelloGraylogBundle)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/FriendsOfBundle/HelloGraylogBundle.svg?style=flat-square)](https://scrutinizer-ci.com/g/FriendsOfBundle/HelloGraylogBundle/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/FriendsOfBundle/HelloGraylogBundle.svg?style=flat-square)](https://scrutinizer-ci.com/g/FriendsOfBundle/HelloGraylogBundle)
[![HHVM Status](https://img.shields.io/hhvm/hgtan/graylog-bundle.svg?style=flat-square)](http://hhvm.h4cc.de/package/hgtan/graylog-bundle)
[![Dependency Status](https://img.shields.io/versioneye/d/user/projects/55964fbb616634001b000001.svg?style=flat-square)](https://www.versioneye.com/user/projects/55964fbb616634001b000001)

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/4e4c6ca7-f398-44d1-8472-4b24bd1c32de/big.png)](https://insight.sensiolabs.com/projects/4e4c6ca7-f398-44d1-8472-4b24bd1c32de)

Connecting logging through Graylog2 to projects on Symfony2 and the following Library:
* [Graylog2 gelf-php](https://github.com/graylog2/gelf-php)

Installation
------------

### Step 1: Using Composer

composer.json
```bash
    php composer.phar require hgtan/graylog-bundle:dev-master
```

### Step 2 : Register the bundle

Then register the bundle with your kernel:

```
    <?php

    // in AppKernel::registerBundles()
    $bundles = array(
        // ...
        new Hgtan\Bundle\HelloGraylogBundle\HgtanHelloGraylogBundle(),
        // ...
    );
```

### Step 3 : Configure the bundle

Then register the bundle with your kernel:

```
    # app/config/parameters.yml
    parameters:
        graylog_host: 172.16.4.105
        graylog_port: 12201
    
    # app/config/config.yml
    monolog:
        handlers:
            gelf:
                type: service
                id: monolog.gelf_handler
                level: debug    
```

### Step 4 : Test
```
    $ php app/console server:run
    
    http://127.0.0.1:8000/hello/graylog

```