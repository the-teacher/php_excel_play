#### To JSON

```php
$json = json_encode($array);
```

#### From JSON

**parse to PHP stdClass**

```php
$phpClassData = json_encode($json);

foreach($phpClassData as $item){
  echo ($item->{'field_name'});
}
```

**parse to PHP Array**

```php
$array = json_encode($json, true);

foreach($array as $item){
  echo ($item['field_name']);
}
```