<?php

use Twig\Loader\FilesystemLoader;

require_once 'vendor/autoload.php';
//testing phpdotenv
use Mon\Classproject\App;

//create app from APp class
$app =new App();
$site_name=$app -> site_name;

/*
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__); 
$dotenv->load();*/

//create data variables
$page_title = "Class Project Home Page";
$greeting ="Welcome to my website";

/*include "header.php";
echo"<h1 style='color: blue;'> Hello World</h1>";
include "footer.php";*/
$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig =new \Twig\Environment( $loader);
$template = $twig -> load('page.twig');
//render the output
echo $template -> render( [ 
    'title' => $page_title, 
    'greeting' => $greeting,
    'website_name' => $site_name
    ] );

?>