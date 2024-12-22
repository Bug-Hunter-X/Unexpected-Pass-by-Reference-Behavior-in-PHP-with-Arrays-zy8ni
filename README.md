# PHP Pass-by-Reference Array Bug

This repository demonstrates a subtle but important quirk in PHP's pass-by-reference mechanism when dealing with arrays.  The core issue lies in the difference between modifying an array *element* via a reference and modifying the array *itself* via a reference.

The `bug.php` file shows the problem.  The solution is detailed in `bugSolution.php`.

## Problem:

When a single element of an array is passed by reference to a function and modified, the original array reflects the change.  However, when the *entire* array is passed by reference and the function modifies it, the original array is not always updated as expected. This discrepancy can lead to confusion and unexpected behavior.

## Solution:

The solution involves a deeper understanding of how PHP handles references with arrays and how to explicitly control this behavior.