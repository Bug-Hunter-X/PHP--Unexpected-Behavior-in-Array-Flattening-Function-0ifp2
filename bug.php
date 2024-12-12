function foo(array $arr): array {
  if (empty($arr)) {
    return [];
  }
  $result = [];
  foreach ($arr as $value) {
    if (is_array($value)) {
      $result = array_merge($result, foo($value)); // Recursive call
    } else {
      $result[] = $value;
    }
  }
  return $result;
}

$arr = [1, [2, 3], [4, [5, 6]]];
$flattened = foo($arr);
print_r($flattened); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 )

//Bug: The function only works correctly with numerical arrays. If strings or other data types are included, it will output unexpected results or produce an error. 
$arr = [1, 'a', [2, 3]];
$flattened = foo($arr); 
print_r($flattened); //Output: Notice: Array to string conversion in ...