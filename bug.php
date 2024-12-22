```php
<?php
function myFunc(&$param) {
  $param = 'modified';
}

$var = 'original';
myFunc($var);
echo $var; // Outputs 'modified'

$arr = ['a', 'b'];
myFunc($arr[0]);
echo $arr[0]; //Outputs 'modified'.  This is expected.

$arr2 = ['a','b'];
myFunc($arr2);
echo $arr2[0]; //Outputs 'a'. This is unexpected.
?>
```