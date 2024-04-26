<?php 

spl_autoload_register(function($classname){

	require $filename = "../app/models/".ucfirst($classname).".php";
});

require '../app/notification/notifiFunction.php';
require '../app/image/image.php';
require '../app/email/send_email.php';
require 'config.php';
require 'functions.php';
require 'Database.php';
require 'Model.php';
require 'Controller.php';
require 'App.php';