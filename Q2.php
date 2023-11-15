<?php

$email = "abc@grepsr.com";

// Use regex to extract components
// ^-Start of the string.
// ([^\@]+)-one or more string that isn't @.
// \@ - literally @.
// (^\.\@]+) Strings that are Neither @ nor .
// \.: matches the "." symbol literally, separating the domain name and the top-level domain (TLD).
// ([^\.\@]+): captures one or more characters that are neither "." nor "@". This represents the TLD part of the email address.
// $: asserts the end of the string.
// This represents the domain name part of the email address.
// Username: One or more characters that are not "@".
// Domain name: One or more characters that are neither "." nor "@".
// TLD: One or more characters that are neither "." nor "@", occurring at the end of the string.
// For example, when applied to the email address "abc@grepsr.com," it captures the username "abc," the domain name "grepsr," and the TLD "com" into three separate capturing groups.

if (preg_match('/^([^\@]+)\@([^\.\@]+)\.([^\.\@]+)$/', $email, $matches)) {
    // Extracted components are in $matches array
    $result = array_slice($matches, 1);

    // Print the result array
    echo "[\"{$result[0]}\",\"{$result[1]}\",\"{$result[2]}\"]";
    
} else {
    echo "Invalid email format";
}

?>