<?php
// This is how variables are defined.
// This can be changed over the course of time as below.
$first_Name = "Abinash";
$first_Name = "Joe";
echo $first_Name;
// Defining constants.
// ----Defined at runtime.

define('STATUS_PAID', 'paid');
// Prints 1 if the checked constant is present.
echo defined('STATUS_PAID');
// Won't return 0 just won't display anything.
echo defined('STATUS_VOID');

// Doesn't require $ sign like variables.
echo STATUS_PAID;

// ----Defined at compile time.
const STATUS_HELP = 'paid';
echo STATUS_HELP;

//Dynamic changes.
$pay = 'PAY';
define('STATUS_'.$pay,4);
echo STATUS_PAY;

// Magic constants changes with the parameters like line and file.
echo __LINE__;
echo __FILE__;
?>