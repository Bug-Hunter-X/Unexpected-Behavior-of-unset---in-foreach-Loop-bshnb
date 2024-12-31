# PHP foreach Loop and unset() Bug
This repository demonstrates an uncommon bug in PHP related to the use of `unset()` within a `foreach` loop iterating over an array.  When `unset()` is used to remove elements from the array during iteration, the loop's internal pointer may skip elements, leading to unexpected behavior.

The `bug.php` file contains the buggy code, while `bugSolution.php` provides a corrected version that avoids this issue.