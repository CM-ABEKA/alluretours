<?php 

try{
    $myPDO = new PDO("pgsql:host=ec2-52-19-164-214.eu-west-1.compute.amazonaws.com;dbname=d7skoghl2kgf0q", "uurjvqciualsjp", "87fb850b56b702e037ee86dbc0d6583b5a47062600277a87e6cf55e60d413283");
    echo 'connected to postgresql with pdo';

} catch(PDOException $e){
    echo $e->getMessage();
}



?>