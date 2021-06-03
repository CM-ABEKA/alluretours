<?php 

try{
    $pdo = new PDO("pgsql:host=ec2-52-19-164-214.eu-west-1.compute.amazonaws.com;dbname=d7skoghl2kgf0q", "uurjvqciualsjp", "87fb850b56b702e037ee86dbc0d6583b5a47062600277a87e6cf55e60d413283");
    echo 'connected to postgresql with pdo';


    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e){
    echo $e->getMessage();
}
?>

<html>

<head>
    <title>Heroku Test</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="<?php echo ROOT_URL; ?>">Heroku Test</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li>
                    <a class="nav-link" href="<?php echo ROOT_URL; ?>">Home</a>
                </li>
                <li>
                    <a class="nav-link" href="<?php echo ROOT_URL; ?>about">About</a>
                </li>
                <li>
                    <a class="nav-link" href="<?php echo ROOT_URL; ?>contact">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>

    <?php
  //echo 'This is Index Page';

  $sql = 'SELECT * FROM users';
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $rowCount = $stmt->rowCount();
  $details = $stmt->fetch();

  print_r ($details);
?>

</body>

</html>