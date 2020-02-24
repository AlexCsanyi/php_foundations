<?php
	function counter(){
		static $count = 1;
		echo $count . "<br>";
		$count = $count + 1;
	};
	
	counter();
	counter();
	counter();
	counter();
	counter();
	
	global $new_count;
	$new_count = 1;
	
	function global_counter(){
		global $new_count;
		echo $new_count . "<br>";
		$new_count = $new_count + 1;
	}
	
	echo "<hr>";
	
	global_counter();
	global_counter();
	global_counter();
	global_counter();
	global_counter();

	echo "<hr>";

	global $message;
	$message = "Welcome to PHP";
	echo $GLOBALS['message'] . "<br>";

	echo "<hr>";

	function print_message(){
		echo $GLOBALS['message'];
	};

	print_message();

	echo "<hr>";

	// variable of variables

	$student = "Alex Csanyi";
	$male = "student";
	$gender = "male";

	echo $gender . "<br>";
	echo $$gender . "<br>";
	echo $$$gender . "<br>";

	echo "<hr>";

	// ternary operator & isset()

	$name;
	echo isset($name) ? "Variable is set" : "Variable is not set";
?>