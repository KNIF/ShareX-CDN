<?php

error_reporting(0); // Disables errors.

// Configure your CDN here.
$password = 'MySecretPassword';                  // Your password prevents others from using your CDN.
$domain_url = 'https://your_domain.extension/';  // Make sure it has a '/' at the end of the domain!
$length = 10;                                    // The length of the filename.

// Don't touch anything further than this if you don't know what you're doing!

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    die('You shouldn\'t be here.');
}

if (isset($_POST['password'])) {
    if ($_POST['password'] == $password) {
        if (isset($_POST['type'])) {
            $sharexdir = $_POST['type'] . '/';
            if (!file_exists($sharexdir)) {
                mkdir($sharexdir, 0755, true);
                copy($_POST['type'] . '/index.html', $sharexdir . 'index.html');
            }
            $filename = RandomString($length);
            $target_file = $_FILES['file']['name'];
            $fileType = pathinfo($target_file, PATHINFO_EXTENSION);
            if (move_uploaded_file($_FILES['file']['tmp_name'], $sharexdir . $filename . '.' . $fileType)) {
                echo $domain_url . $sharexdir . $filename . '.' . $fileType;
            } else {
                echo 'File upload failed.';
            }
        } else {
            echo 'No file type recieved.';
        }
    } else {
        echo 'Wrong password.';
    }
} else {
    echo 'No POST data received.';
}

function RandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

?>
