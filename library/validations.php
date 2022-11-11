<?php

function required($field)
{
    if (empty($field)) {
        throw new \Exception("Field must not be empty");
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

$string = "Destiny and Shullamite";

try {
    $v = required($string);
} catch (\Exception $exception) {
    echo $exception->getMessage();
}