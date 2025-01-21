```php
function processArray(array $arr): array {
  foreach ($arr as &$value) {
    $value = $value * 2; 
  }
  return $arr;
}

$numbers = [1, 2, 3, 4, 5];
$result = processArray($numbers);
print_r($result); // Output: Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 ) 

//Problem:
$numbers = [1, 2, 3, 4, 5];
$result = processArray($numbers);
print_r($numbers); // Output: Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 )
//The original array is modified.  This can lead to unexpected behavior if the function is used where the original array's integrity is needed.

```