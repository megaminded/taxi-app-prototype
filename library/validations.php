<?php

function required($field, $input)
{
    if (empty($field)) {
        throw new \Exception("$input must not be empty");
    } else {
        return true;
    }
}
function numeric_data($field, $input)
{
    if (required($field, $input) && ctype_digit($field)) {
        return true;
    } else {
        throw new \Exception("$input contains invalid characters");
    }
}
function string_data($field, $input)
{
    if (required($field, $input) && ctype_alpha($field)) {
        return true;
    } else {
        throw new \Exception("$input cannot contain a number");
    }
}
function valid_date($field, $input)
{
    // $field = YYYY-MM-DD
    $date   = explode("-", $field);
    $year   = numeric_data($date[0] ?? "Invalid", $input);
    $month  = numeric_data($date[1] ?? "Invalid", $input);
    $day    = numeric_data($date[2] ?? "Invalid", $input);

    if (required($field, $input) && checkdate($month, $day, $year)) {
        return true;
    } else {
        throw new \Exception("Invalid date format");
    }
}
function valid_password($field, $input)
{
    if (required($field, $input) && ctype_alnum($field)) {
        return true;
    } else {
        throw new \Exception("Invalid password, $input must contain numbers and alphanumeric characters");
    }
}
function valid_email($field, $input)
{
    if (required($field, $input) && filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        throw new \Exception("Invalid email");
    }
}
function valid_phone($field, $input)
{
    if (required($field, $input) && ctype_digit($field) && strlen($field) == 11) {
        return true;
    } else {
        throw new \Exception("Invalid phone number");
    }
}

$string = "08069208957s";

try {
    $v = valid_phone($string, 'Driver phone number');
} catch (\Exception $exception) {
    echo $exception->getMessage();
}