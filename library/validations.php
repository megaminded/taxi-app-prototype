<?php

function required($user_input, $input_name)
{
    if (empty($user_input)) {
        throw new \Exception("$input_name must not be empty");
    } else {
        return true;
    }
}
function numeric_data($user_input, $input_name)
{
    if (required($user_input, $input_name) && ctype_digit($user_input)) {
        return true;
    } else {
        throw new \Exception("$input_name contains invalid characters");
    }
}
function string_data($user_input, $input_name)
{
    if (required($user_input, $input_name) && ctype_alpha($user_input)) {
        return true;
    } else {
        throw new \Exception("$input_name cannot contain a number");
    }
}
function valid_date($user_input, $input_name)
{
    // $user_input = YYYY-MM-DD
    $date   = explode("-", $user_input);
    $year   = numeric_data($date[0] ?? "Invalid", $input_name);
    $month  = numeric_data($date[1] ?? "Invalid", $input_name);
    $day    = numeric_data($date[2] ?? "Invalid", $input_name);

    if (required($user_input, $input_name) && checkdate($month, $day, $year)) {
        return true;
    } else {
        throw new \Exception("Invalid date format");
    }
}
function valid_password($user_input, $input_name)
{
    if (required($user_input, $input_name) && ctype_alnum($user_input)) {
        return true;
    } else {
        throw new \Exception("Invalid password, $input_name must contain numbers and alphanumeric characters");
    }
}
function valid_email($user_input, $input_name)
{
    if (required($user_input, $input_name) && filter_var($user_input, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        throw new \Exception("Invalid email");
    }
}
function email_exists($storage, $user_input, $input_name)
{
    if (valid_email($user_input, $input_name)) {
        $file = fopen($storage, 'r');
        while (!feof($file)) {
            $each_line = fgets($file);
            if ($each_line == $user_input) {
                fclose($file);
                return true;
            }
        }
        fclose($file);
        return false;
    }
}
function valid_phone($user_input, $input_name)
{
    if (required($user_input, $input_name) && ctype_digit($user_input) && strlen($user_input) == 11) {
        return true;
    } else {
        throw new \Exception("Invalid phone number");
    }
}

// $string = "08069208957s";

// try {
//     $v = valid_phone($string, 'Driver phone number');
// } catch (\Exception $exception) {
//     echo $exception->getMessage();
// }


try {
    $v = email_exists('storage/drivers.txt', "teste@mail2.com", "Registration email address");
    var_dump($v);
} catch (\Exception $exception) {
    echo $exception->getMessage();
}