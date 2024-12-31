function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'bar') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['foo', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )

//This is not what you expect.
$arr = ['foo', 'bar', 'bar'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [2] => bar )