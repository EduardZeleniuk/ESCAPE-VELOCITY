<?php
session_start();
function set_message($message){
		$messages = $_SESSION['messages'] ?? [];
		$messages[] = $message;
		$_SESSION['messages'] = $messages;
	}

function print_message(){
	$messages = $_SESSION['message'] ?? [];
	if($messages)
	{
		foreach($messages as $message)
			echo $message.'<br>';
	}
		unset($_SESSION['messages']);
}
	

function generate_random_string($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}