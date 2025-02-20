<?php
namespace Mon\Classproject;
use Dotenv\Dotenv;
use \Exception;

class App{
    protected $config;
    public $site_name;
    public function __construct()
    {
        //class constructor
        $this -> loadConfig();
    
    }
    private function loadconfig()
    {
        try{
            //cwd = current working directory
            $app_dir =getcwd();
            $dotenv = Dotenv::createImmutable($app_dir); 
            $dotenv->load();
            $this -> site_name =$_ENV['SITENAME'];

        }
        catch (Exception $exception) {
            $msg =$exception -> getMessage();
            exit($msg);


        }

    }
}
?>