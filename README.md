### Play with PhpExcel

#### Notes for Sublime Text Editor

Use Unix line endings with Sublime [View =>Line Endings => Unix]

**Preferences => Stettings - Default**

```
"default_line_ending": "unix"
```

#### PHP

```
> php -v

  PHP 5.3.3 (cli) (built: Jul  3 2012 16:53:21)
  Copyright (c) 1997-2010 The PHP Group
  Zend Engine v2.3.0, Copyright (c) 1998-2010 Zend Technologies
```

#### Example of new php file

```
touch filename.php
```

```php
#!/usr/bin/php
<?php

  // your code here
  
?>
```

then

```
chmod 744 filename.php
```

```
./filename.php
```

#### PHPExcel includes

```php
include './PHPExcel/Classes/PHPExcel.php';
include './PHPExcel/Classes/PHPExcel/Calculation.php';
include './PHPExcel/Classes/PHPExcel/Cell.php';
```

#### Project Structure

**docs** -- notes about functions

**files** -- excel files for processing

**fn_tests** -- playground for PHP code

**converter** -- main folder for my experiments

**converter.php** -- excel files processing