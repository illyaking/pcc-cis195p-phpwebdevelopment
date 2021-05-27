<?php
function require_secure() {
    if ($_SERVER['HTTPS'] != 'on') {
        header("Location: https://" . $_SERVER['HTTP HOST'] . $_SERVER['REQUEST_URI']);
        exit();
    }
}

function login($username, $password) {
    $file = fopen('data/users.csv', 'r');
    flock($file, LOCK_SH);
    do {
        $line = fgetcsv($file);
        if ($line[KEY_FIELD] === $username) {
            $user = $line;
            break;
        }
    } while($line);
    flock($file, LOCK_UN);
    fclose($file);
    if (!isset($user)) {
        echo 'Error: unknown user.';
        return;
    }
    if (!password_verify($password, $user[VALUE_FIELD])) {
       echo 'Error: incorrect password.';
       return;
    }
    echo 'Password successful!';
}

function update_file($key, $value) {
    $file = fopen('data/users.csv', 'r+');
    flock($file, LOCK_EX);
    $contents = [];
    do {
        $line = fgetcsv($file);
        if(!$line) {
            break;
        }
        $contents[$line[KEY_FIELD]] = $line;
    } while($line);
    $contents[$key] = [$key, $value];
    ftruncate($file, 0);
    rewind($file);
    foreach ($contents as $line) {
        fputcsv($file, $line);
    }
    flock($file, LOCK_UN);
    fclose($file);
}