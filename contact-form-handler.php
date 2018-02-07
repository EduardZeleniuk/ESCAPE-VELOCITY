<?php
require 'function.php';

set_message('Пожалуйста, заполните все поля!');


header('Location: index.php');

/*$max_filesize = 2048; //KB
$allowed_types = ['image/jpeg', 'image/png'];
$allowed_extensions = ['jpg', 'jpeg', 'png'];

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);

if(empty($name) OR empty($email) OR empty($message))
{
    set_message('Пожалуйста, заполните все поля!');
}
elseif(mb_strlen($name) > 250 OR mb_strlen($email) > 250)
{
    set_message('Слишком длинное имя или email');
}
elseif(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE)
{
    set_message('Введите правильный email');
}
else
{

    $fh = fopen('data/requests.txt', 'a');

    $image = $_FILES['image'];
    $tmp_name = $image['tmp_name'];
    $original_name = $image['name'];
    $files_amount = count($original_name);
    $counter_fils = 1;
    for ($i = 0; $i < $files_amount ; $i++) { 
        if($original_name[$i]){
            $dotpos = strripos($original_name[$i], '.');
            $extension = substr($original_name[$i], $dotpos+1);

            if(filesize($tmp_name[$i]) > $max_filesize * 1024){
                set_message('Размер слишком велик');
            }
            elseif(!in_array($image['type'][$i], $allowed_types) OR !in_array($extension, $allowed_extensions)){
                set_message('Этот файл не подходит');
            }
            else{
                $dir = 'uploads';
                $subdir = mt_rand(0, 10);
                $path = $dir . '/' . $subdir;

                if(!is_dir($path))
                    mkdir($path);

                do {
                    $randname = generate_random_string(8);
                    $filename = $randname . '.' . $extension;
                } while(file_exists($path . '/' .$filename));



                $path_file_host = (isset($_SERVER['HTTPS']) ? "https" : "http") . '://' . $_SERVER[HTTP_HOST] . '/'; //хост
                $path_file_name = $path . '/' .$filename; // путь к файду и его имя
                $path_file_url[]= 'Файл #' .  $counter_fils++ . ' ' . $path_file_host . $path_file_name; //URL


                $result = move_uploaded_file($tmp_name[$i], $path . '/' . $filename);
                if($result){
                    set_message('Файл успешно отправлен.');
                } else {
                    set_message('Произошла ошибка.');
                }
            }
        }
    }
    $date = date('F, d, Y H:i');
    $path_file = implode ("\r\n" , $path_file_url);

    $row = [$date, 'Имя: '.$name, 'Email: '.$email, $message, $path_file,"========================"."\r\n"];
    $rows = implode ( "\r\n" , $row );
    fwrite($fh, $rows);

    fclose($fh);
    
   
   


    
    // $fh = fopen('data/requests.csv', 'a');

    // $date = date('d.m.Y H:i');
    // $row = [$date, $name, $email, $message];
    // fputcsv($fh, $row);

    // fclose($fh);


    


    header('Location: index.php');
}
*/


