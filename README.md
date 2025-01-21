# PHP Foreach Loop Pass-by-Reference Bug

This example demonstrates a common, yet subtle, error in PHP related to pass-by-reference in `foreach` loops.  When using `&` within a `foreach` loop, the original array is modified directly, even if the function returns a copy. This can lead to unexpected side effects and errors in your code.

## How to Reproduce
1. Run the `bug.php` file.
2. Observe that the original `$numbers` array is modified after calling the function.

## Solution
The `bugSolution.php` file shows how to resolve this issue by avoiding the `&` (pass-by-reference) in the `foreach` loop and instead creating a new array for manipulation.