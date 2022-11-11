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
        throw new \Exception("$input must be numbers");
    }
}
function string_data()
{
}
function valid_date()
{
}
function valid_password()
{
}
function valid_email()
{
}
function valid_phone()
{
}

$string = "1000divine and destiny";

try {
    $v = numeric_data($string, 'street number');
} catch (\Exception $exception) {
    echo $exception->getMessage();
}