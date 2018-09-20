<?php

const READ_POST = 1;
const WRITE_POST = 2;
const DELETE_POST = 4;
const ADD_USER = 8;
const DELETE_USER = 16;

// Set User Permissions
$user = READ_POST + DELETE_POST + DELETE_USER;

if ($user & READ_POST) {
    echo 'Permission: READ_POST ok!' . PHP_EOL;
}

if ($user & WRITE_POST) {
    echo 'Permission: WRITE_POST ok!' . PHP_EOL;
}

if ($user & DELETE_POST) {
    echo 'Permission: DELETE_POST ok!' . PHP_EOL;
}

if ($user & ADD_USER) {
    echo 'Permission: ADD_USER ok!' . PHP_EOL;
}

if ($user & DELETE_USER) {
    echo 'Permission: DELETE_USER ok!' . PHP_EOL;
}
