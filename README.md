# PHP Array Flattening Bug
This repository demonstrates a bug in a PHP function designed to flatten multidimensional arrays. The function works correctly for numerical arrays but encounters unexpected behavior or errors when non-numerical values are present. The `bug.php` file contains the buggy code, and `bugSolution.php` provides a corrected version.

## Bug Description
The `foo()` function uses recursion to flatten arrays.  While it works fine with purely numerical arrays, it produces incorrect results (or warnings/errors) if the arrays contains string or other non-numerical values. This is because the function doesn't explicitly check for the type of elements within the array before processing them, leading to type-related issues during the array merge operation.

## Solution
The improved version in `bugSolution.php` adds type checking and handles various data types more robustly.