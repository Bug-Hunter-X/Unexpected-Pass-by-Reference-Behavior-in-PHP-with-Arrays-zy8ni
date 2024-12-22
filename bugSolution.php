```php
<?php
function myFunc2(&$param) {
  $param = ['modified']; //Overwrite the array entirely
}

function myFunc3(&$param){
  $param[0] = 'modified'; //Modify the array element
}

$arr = ['a', 'b'];
myFunc2($arr); //Overwrites $arr
echo $arr[0]; // Outputs 'modified'

$arr2 = ['a','b'];
myFunc3($arr2); //Modifies the first array element only
echo $arr2[0]; //Outputs 'modified'
?>
```