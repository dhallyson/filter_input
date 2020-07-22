<?php

$name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRIPPED);
var_dump($name);

$filter = [
    "name" => FILTER_SANITIZE_STRIPPED,
    "email" => FILTER_VALIDATE_EMAIL,
    "url" => FILTER_VALIDATE_URL,
    "number" => FILTER_VALIDATE_INT,
    "script" => FILTER_SANITIZE_STRIPPED
];

$data = filter_input_array(INPUT_POST, $filter);
var_dump($data);

if(in_array(false, $data)){
    echo "Erro";
}else{
    echo "Tudo certo";
}