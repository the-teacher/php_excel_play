#### Create reader XLSx

```php
$objReader = PHPExcel_IOFactory::createReader('Excel2007');
```

#### Load file

```php
$objPHPExcel = $objReader->load('./test.xlsx');
```

#### Set Active Sheet

```php
$sheet = $objPHPExcel->setActiveSheetIndex(0);
```

#### Get Active Sheet

```php
$sheet = $objPHPExcel->getActiveSheet();
```

#### Get Cell Value

```php
$sheet->getCell('A1')->getValue();
```

or

```php
$sheet->getCellByColumnAndRow(0, 1)->getValue();
```

#### Set Cell Value

```php
$sheet->setCellValue('A1', 'Hello World');
```

or

```php
$sheet->setCellValueByColumnAndRow(0, 1, 'Hello World');
```

#### Get Count of rows

```php
$sheet->getHighestRow();
```

#### Create reader XLSx

```php
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
```

#### Save excel file

```php
$objWriter->save('./output.xslx');
```