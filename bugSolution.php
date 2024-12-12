function foo(array $arr): array {
  $result = [];
  foreach ($arr as $value) {
    if (is_array($value)) {
      $result = array_merge($result, foo($value));
    } elseif (!is_null($value)) { // Check for null values
        $result[] = $value;
    }
  }
  return $result;
}

$arr = [1, 'a', [2, 3], null, [4, [5, 6]]];
$flattened = foo($arr);
print_r($flattened); // Output: Array ( [0] => 1 [1] => a [2] => 2 [3] => 3 [4] => 4 [5] => 5 [6] => 6 )

//The improved version handles null values and different data types correctly.