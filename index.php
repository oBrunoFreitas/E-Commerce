<?php 

require_once("vendor/autoload.php");

$app = new \Slim\Slim();


$app->config('debug', true);

$app->get('/', function() {
    
	$sql = new config\DB\Sql();
    $teste = $sql->select("select * from tbusers");

    echo '<pre>';
    print_r($teste);
    echo '</pre>';
    

    // echo json_decode($teste);

});

$app->run();

 ?>