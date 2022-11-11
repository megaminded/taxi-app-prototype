<?php

function required($field, $input)
{
    if (empty($field)) {
        throw new \Exception("$input must not be empty");
    } else {
        return true;
    }
}
function numeric_data()
{
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

$string = "";

try {
    $v = required($string, 'password');
} catch (\Exception $exception) {
    echo $exception->getMessage();
}