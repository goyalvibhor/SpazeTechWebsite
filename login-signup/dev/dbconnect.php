<?php



if (!defined('APP_NAME'))                       define('APP_NAME', 'Spaze Analytics');
if (!defined('APP_ORGANIZATION'))               define('APP_ORGANIZATION', 'Spazetech Solutions');
if (!defined('APP_OWNER'))                      define('APP_OWNER', 'Vibhor');
if (!defined('APP_DESCRIPTION'))                define('APP_DESCRIPTION', 'Data Analytics Services');

if (!defined('ALLOWED_INACTIVITY_TIME'))        define('ALLOWED_INACTIVITY_TIME', time()+1*60);

if (!defined('DB_DATABASE'))                    define('DB_DATABASE', 'u392818579_contact_sa');
if (!defined('DB_HOST'))                        define('DB_HOST','localhost');
if (!defined('DB_USERNAME'))                    define('DB_USERNAME','u392818579_contact_form');
if (!defined('DB_PASSWORD'))                    define('DB_PASSWORD' ,'4DzH/iggxk:');
if (!defined('DB_PORT'))                        define('DB_PORT' ,'');

if (!defined('MAIL_HOST'))                      define('MAIL_HOST', 'smtp.hostinger.in');
if (!defined('MAIL_USERNAME'))                  define('MAIL_USERNAME', 'no-reply@vibhorgoyal.tech');
if (!defined('MAIL_PASSWORD'))                  define('MAIL_PASSWORD', 'SpazeTech@123');
if (!defined('MAIL_ENCRYPTION'))                define('MAIL_ENCRYPTION', 'ssl');
if (!defined('MAIL_PORT'))                      define('MAIL_PORT', '465');


$conn = mysqli_connect('localhost', 'u392818579_contact_form', '4DzH/iggxk:', 'u392818579_contact_sa');

if (!$conn)
{
    die("Connection failed: ". mysqli_connect_error());
}
