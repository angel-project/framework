<p align="center"><img src="http://www.zuggr.com/file/angel.jpg"></p>
**Angel** is a lean PHP framework that focuses on **rapid prototyping** for web applications. **Install** Angel with Composer with the following command:
```
composer create-project angel-framework/project .
```
[![GitHub php](https://img.shields.io/packagist/php-v/symfony/symfony.svg)
[![GitHub license](https://img.shields.io/cocoapods/l/AFNetworking.svg)

Getting Started
-------------
Create your first page using **build::get()** module. Create a PHP file name hello_world.php, under folder /build.
```php
build::get('angel/[input]', function($input){
  echo 'angel'.$input.'!';
});
```
As shown above, build::get method contains two parameters:
* a router: 'yoursite.com/hello/[a_variable_name_input]', variables in url are defined by [brackets].
* a function: a block of code (codeblock) that will execute when user visits the router's path using GET request.
So now, if you visit 'yoursite.com/angel/fly':
```php
angel fly!
```

Documentation
-------------
Read our [wiki](https://github.com/angel-framework/project/wiki) on GitHub!

Roadmap
-------------
* Support Apache URI configuration
* Add welcome page
* Autoload Composer plugins
* Documentation
* Improve image processing capability: (resize, crop, blur, and watermark)
* math:: module
* ...
