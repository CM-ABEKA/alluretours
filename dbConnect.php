<?php 


$conn = mysqli_connect('localhost', 'root', '', 'd7skoghl2kgf0q');
if ($conn){
    $message='connected';
}else{
    echo 'Unable to connect'.mysqli_connect_error();
}
?>