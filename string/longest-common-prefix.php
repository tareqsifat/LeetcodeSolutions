<?php

function longestCommonPrefix($strs) {
    if (empty($strs)) {
        return "";
    }

    // Find the minimum length string in the array
    $minLen = PHP_INT_MAX;

    foreach ($strs as $str) {
        $minLen = min($minLen, strlen($str));
    }

    // Initialize the common prefix as an empty string
    $commonPrefix = "";

    // Iterate through characters at the same index in all strings
    for ($i = 0; $i < $minLen; $i++) {
        $currentChar = $strs[0][$i]; // Get the character from the first string

        foreach ($strs as $str) {
            if ($str[$i] !== $currentChar) {
                return $commonPrefix;
            }
        }

        $commonPrefix .= $currentChar;
    }

    return $commonPrefix;
}

// Example usage:
$strs1 = ["flower", "flow", "flight"];
echo longestCommonPrefix($strs1); // Output: "fl"

$strs2 = ["dog", "racecar", "car"];
echo longestCommonPrefix($strs2); // Output: ""
