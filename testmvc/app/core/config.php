<?php 

if($_SERVER['SERVER_NAME'] == 'localhost')
{
	/** database config **/
	define('DBNAME', 'group_32');
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBDRIVER', '');
	
	define('ROOT', 'http://localhost/Group-32/testmvc/public');

}else
{
	/** database config **/
	define('DBNAME', 'group_32');
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBDRIVER', '');

	define('ROOT', 'https://www.yourwebsite.com');

}

define('APP_NAME', "My Webiste");
define('APP_DESC', "Best website on the planet");
define('PUBROOT', dirname(dirname(dirname(__FILE__))).DIRECTORY_SEPARATOR.'public');
/** true means show errors **/
define('DEBUG', true);
