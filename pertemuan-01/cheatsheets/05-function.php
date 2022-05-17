<?php

// BASIC
function basic_function() {
    echo 'BASIC' . PHP_EOL;
}

basic_function();


// RETURN
function return_function() {
    return 'RETURN FUNCTION' . PHP_EOL;
}

$result = return_function();
echo $result . PHP_EOL;


// WITH ARGUMENT
function arg_function($name) {
    return "ARGUMENT FUNCTION WITH $name" . PHP_EOL;
}

$result = arg_function('ME');
echo $result . PHP_EOL;


// WITH DEFAULT ARGUMENT
function default_arg_function($name = 'ME') {
    return "DEFAULT ARGUMENT FUNCTION WITH $name" . PHP_EOL;
}

# $result = default_arg_function('NOT ME');
$result = default_arg_function('ME');
echo $result . PHP_EOL;


// WITH DEFAULT ARGUMENT AND THE TYPE
function default_arg_type_function(string $name = 'ME') {
    return "DEFAULT ARGUMENT FUNCTION WITH $name" . PHP_EOL;
}

# $result = default_arg_type_function([1,2,3]);
$result = default_arg_type_function('ME');
echo $result . PHP_EOL;



// MORE THAN ONE ARGUMENT
function more_arg_function($name, $age, $from = 'BANJARMASIN') {
    return "MORE ARGUMENT FUNCTION WITH $name, $age, $from" . PHP_EOL;
}

# $result = more_arg_function('ME', 16, 'BANJARMASIN');
$result = more_arg_function('NOT ME', 16);
echo $result . PHP_EOL;



// WITH SPREAD OPERATOR AS ARGUMENT
function spread_arg_function(...$ages) {
    $total_ages = 0;
    foreach ($ages as $age) {
        $total_ages += $age;
    }
    return $total_ages;
}

# $result = spread_arg_function(1);
$result = spread_arg_function(1,2,3,4,5);
echo $result . PHP_EOL;



// VARIABLE FUNCTION
function another_function() {
    echo 'CALL ANOTHER FUNCTION' . PHP_EOL;
}

$another_name = 'another_function';
# another_function();
# $another_name();

function another_function_again(string $name, $func) {
    $func();
    echo 'THEN WE CALL ANOTHER FUNCTION AGAIN' . PHP_EOL;
}

# another_function_again('ME', 'another_function');
another_function_again('ME', $another_name);

