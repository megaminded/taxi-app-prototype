<?php
# Help use open files as stream data
function open($file, $flag = 'r')
{
    if (file_exists($file)) {
        $file = fopen($file, $flag);
        return $file;
    } else {
        throw new \Exception("Unable to open file");
    }
}
# Help us read from files
function read($file, $filename)
{
    if (file_exists($file)) {
        $stream = open($filename, 'r');
        $data = fread($stream, filesize($filename));
        fclose($stream);
        return $data;
    } else {
        throw new \Exception("Unable to open file");
    }
}
# Help us write to a file;
function write($file, $data, $flag = 'a')
{
    $stream = open($file, $flag);
    $result = fwrite($stream, $data);
    fclose($stream);
    return $result;
}
function delete($file)
{
    $bitterleaf_and_water = open($file, 'r');
    $cup = [];
    $filter = [];
    while (!feof($bitterleaf_and_water)) {
        $line = fgets($bitterleaf_and_water);
        // todo
    }
    exit;
    fclose($bitterleaf_and_water);
    var_dump($cup, $filter);
}
function update()
{
}

try {
    $admin = __DIR__ . '/../storage/admin.txt';
    // $data = "This is to introduce to every student of megamindset that divine is jealous of shubaby \n";
    delete($admin);
} catch (\Exception $th) {
    echo $th->getMessage();
}