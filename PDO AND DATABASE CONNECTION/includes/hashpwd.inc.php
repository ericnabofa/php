<?php

$pwdSignup = "Eric";

$options = [
    'cost' => 12
];

$hashedPwd = password_hash($pwdSignup, PASSWORD_BCRYPT, $options);


$pwdLogin = "Eric";

if(password_verify($pwdLogin, $hashedPwd)){
    echo 'They are the same';
} else {
    echo 'They are not the same';
}