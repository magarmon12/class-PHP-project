<?php

use Twig\Loader\FilesystemLoader;

require_once 'vendor/autoload.php';
//testing phpdotenv
use Mon\Classproject\App;

//create app from APp class
$app =new App();
$site_name=$app -> site_name;


//create data variables
$page_title = $site_name ." | " . "About Page";
$greeting ="About" . $site_name;

/*include "header.php";
echo"<h1 style='color: blue;'> Hello World</h1>";
include "footer.php";*/
$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig =new \Twig\Environment( $loader);
$template = $twig -> load('about.twig');
//render the output
echo $template -> render( [ 
    'title' => $page_title, 
    'greeting' => $greeting,
    'website_name' => $site_name
    ] );

?>