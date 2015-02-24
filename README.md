php-common-utilities
====================

[![Build Status](https://travis-ci.org/cerealean/php-common-utilities.svg?branch=master)](https://travis-ci.org/cerealean/php-common-utilities) [![Latest Stable Version](https://poser.pugx.org/cerealean/php-common-utilities/v/stable.svg)](https://packagist.org/packages/cerealean/php-common-utilities) [![Total Downloads](https://poser.pugx.org/cerealean/php-common-utilities/downloads.svg)](https://packagist.org/packages/cerealean/php-common-utilities) [![License](https://poser.pugx.org/cerealean/php-common-utilities/license.svg)](https://packagist.org/packages/cerealean/php-common-utilities)
[![Dependency Status](https://www.versioneye.com/user/projects/54ecf43b78b4605a75000011/badge.svg?style=flat)](https://www.versioneye.com/user/projects/54ecf43b78b4605a75000011)

This package uses a variadic wrapper functions for core PHP functionality to make calls to those functions easier, cleaner, and reduce duplication. Please see the examples below.

Author
------
- Michael Crawford
- github.com/cerealean

Installation Instructions
-------------------------

###Using Composer
Simply add `cerealean/php-common-utilities : 1.0.*` to your composer.json file. For more information on composer, please go [here](https://getcomposer.org/).

###Packagist
You can view all of the versions of this package on Packagist [here](https://packagist.org/packages/cerealean/php-common-utilities).

Examples
--------

###Example using IsEmpty

Are you tired of writing code that looks like this?

```php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$address = $_POST['address'];

if(!empty($first_name) && !empty($last_name) && !empty($address)){
/* do something */
}
```

Instead, using this package, you can write this:

```php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$address = $_POST['address'];

if(IsEmpty::none($first_name, $last_name, $address)){
/* do something */
}
```

###Example using IsString

Instead of writing this

```php
/* Stuff done */

if(is_string($first_example) && is_string($second_example) && is_string('This is a string')){
/* Do more stuff */
}
```

Write this

```php
/* Stuff done */

if(IsString::all($first_example, $second_example, 'This is a string')){
/* Do more stuff */
}
```

Variable Handling
-----------------

All variable handling classes, as seen above, follow the same interface. As such, they all have the following functions:
 
 - any
     - Returns true if **any** of the parameters match what is being tested. Otherwise returns false.
     - `IsEmpty::any("I will return true", "");` returns true because of the second parameter
     - `IsEmpty::any("I will return false", "Not empty");` returns false because both are not empty
 - none
     - Opposite of any
     - `IsEmpty::none("I will return false", "");` returns false because of the second parameter
     - `IsEmpty::none("I will return true", "Not empty");` returns true because both are not empty
 - all
     - Returns true if **all** of the parameters match what is being tested. Otherwise returns false.
     - `IsEmpty::all("I will return true", "");` returns false because of the first parameter
     - `IsEmpty::all(array(), "");` returns true because both are empty
 - value
     - Only accepts one parameter. A simple OOP wrapper for the core function. This is mostly useful in the instantiated version for testing (see below).
     - `IsEmpty::value('not empty');` returns false
     - `IsEmpty::value(0);` returns true
     
**Important Note:** All functions are variadic which means they can accept any number of parameters. For more information on variadic functions, please see [php.net](http://php.net/manual/en/functions.arguments.php#functions.variable-arg-list).

Currently Supported Functionality
----------------------------------
*reminder that all below functionality implements the VariableHandling interface*

- IsArray
- IsBool
- IsCallable
- IsDeclared *(different name for [isset](http://php.net/manual/en/function.isset.php) in core functionality)*
- IsDouble
- IsEmpty
- IsFile
- IsFinite
- IsFloat
- IsInfinite
- IsInteger
- IsLong
- IsNotANumber
- IsNull
- IsNumeric
- IsObject
- IsReadable
- IsResource
- IsScalar
- IsString

Instantiated (Non-Static) Classes
---------------------------------

This package also has instantiated versions of every class. I am a firm believer in testing all code (although this package currently doesn't have many tests) 
and having instantiated versions of all classes can help in your testing. By using instantiated versions of this package in your code in place of the static 
versions, you can mock them out in testing.

###Example using IsReadable:

It would be difficult to unit test a function where you are reading from a file using core functionality

```php
/* Do stuff */

if(is_readable($first_file) && is_readable($second_file)){
/* do stuff */
}
```

Instead, if you use the instantiated version of IsReadable

```php
/* Do stuff and instantiate IsReadable into $is_readable */

if($is_readable->all($first_file, $second_file)){
/* Do stuff */
}
```

You can stub out $is_readable and control what it returns during unit testing. This is easiest to do using a Mocking/Stubbing framework.

**Note:** All instantiated classes are wrappers of the static classes. Calling a function from an instantiated class simply returns a call 
from its associated static class.

Final Notes
-----------
If there are any questions or comments please let me know. If you have any suggested functionality for this package that is not already 
currently implemented, feel free to suggest it or make the addition into a merge request and I will review. This is my first major 
standalone Github package, so feedback is always welcome. Thanks!


