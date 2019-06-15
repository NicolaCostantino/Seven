[![Build Status](https://travis-ci.com/NicolaCostantino/Seven.svg?branch=master)](https://travis-ci.com/NicolaCostantino/Seven)
[![codecov](https://codecov.io/gh/NicolaCostantino/Seven/branch/master/graph/badge.svg)](https://codecov.io/gh/NicolaCostantino/Seven)


# Seven

Seven: a compatibility library like ["Six"](https://github.com/benjaminp/six), but between Python and PHP :)

A simple toolbox containing all the pieces of Python (functions, methods, etc.) that are missing or differently implemented in PHP.  
It's useful for making easier the porting of a project (Python to PHP) or as a support for a polyglot or Python developer writing in PHP.

## Table of Contents

* **[Setup](#setup)**
  * [PHP](#php)
  * [Requirements](#requirements)
* **[Usage](#usage)**
  * [Example](#usage-example)
* **[Development](#development)**
  * [General](#development-general)
  * [Code](#development-code)
  * [Setup](#development-setup)
  * [Testing](#development-testing)
* **[Contributing](#contributing)**
* **[Author](#author)**
* **[License](#license)**
* **[Acknowledgments](#acknowledgments)**
  * [Inspiration](#inspiration)

## Setup <a name="setup"></a>

### PHP <a name="php"></a>
Tested and developed on version: 7.2.*  

### Requirements <a name="requirements"></a>
Use [Composer](https://getcomposer.org/) to install the requirements needed
```bash
composer install
```

## Usage <a name="usage"></a>
All the helper functions are outside namespaces and autoloaded by Composer to be used wherever in the code as globals.
### Example <a name="usage-example"></a>
Example: use the `array_setdefault` helper function
```php
// With default value
$result = array_setdefault($array, $key, $default);
// Without default value
$result = array_setdefault($array, $key);
```

## Development <a name="development"></a>

### General <a name="development-general"></a>
All the needed commands are listed as [GNU `make`](https://www.gnu.org/software/make/) target rules in the [Makefile](Makefile) file.  
Each subfolder could contain a local Makefile file, if needed.

### Code <a name="development-code"></a>
The source code is hosted on [GitHub](https://github.com/NicolaCostantino/Seven).

### Setup <a name="development-setup"></a>
Use [Composer](https://getcomposer.org/) to install also the requirements for development and testing (Composer's default behavior)
```bash
composer install
```
or use the `make` rule:
```bash
make develop
```

### Testing <a name="development-testing"></a>
Tests are executed using [PHPUnit](https://phpunit.de/) also for coverage.

## Contributing <a name="contributing"></a>
Pull requests are welcome!  

For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## Author <a name="author"></a>
[Nicola Costantino](https://github.com/NicolaCostantino)  

## License <a name="license"></a>
[MIT](https://choosealicense.com/licenses/mit/) as listed in [LICENSE file](LICENSE)  
Copyright (c) 2019 Nicola Costantino