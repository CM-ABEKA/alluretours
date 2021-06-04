<?php 
try{
$conn = new PDO('pgsql:host=localhost port=5432 dbname=postgres password=40Twenty');

echo 'connected';
}
catch($e){
    echo $e;
}
?>