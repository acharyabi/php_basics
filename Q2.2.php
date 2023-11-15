<?php
$string = "73wqw4rn3242";
// Apply the regex pattern
if (preg_match('/^.{2}(.{3})/', $string, $matches)) {
    $result = $matches[1];
    echo "Result: $result\n";
} else {
    echo "No match found\n";
}

/*
Explanation:

^: asserts the start of the string.
.{2}: matches any two characters (index 0 to 1).
(.{3}): captures the next three characters (index 2 to 4) into a capturing group. 
n regular expressions in PHP (and many other programming languages), capturing groups are used to extract specific parts of a matched pattern. In the regular expression /^.{2}(.{3})/, the parentheses () define a capturing group.

Here's a breakdown of how it works:

^.{2}: Matches the first two characters in the string (index 0 and 1).
(.{3}): This is a capturing group that matches the next three characters (index 2, 3, and 4). The content matched by this group will be stored in the $matches array.
When preg_match finds a match, it populates the $matches array with the entire match at index 0 and the content of capturing groups at subsequent indices. In this case, the result you're interested in (the substring from position 3 to 5) is captured in the first (and only) capturing group.

Therefore, $matches[1] retrieves the content captured by the first capturing group. In the example, this corresponds to the substring "4rn" from the original string "734rn3242".

If you had multiple capturing groups in your regular expression, you would use $matches[2], $matches[3], and so on for additional groups.
*/
?>

