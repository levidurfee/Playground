<?php

include("vendor/autoload.php");

use levi\doc\CreateRequest;
use levi\doc\CreateContract;
use levi\doc\RequestContract;

$request = new CreateRequest;

$request->get();

function test(CreateContract $create) {
	echo 'hi';
}

function send(RequestContract $request) {
	echo "\nokay";
}

test($request);
send($request);