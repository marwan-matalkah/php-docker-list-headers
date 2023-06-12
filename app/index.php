<?php
if (!function_exists('getallheaders'))
{
    function getallheaders()
    {
           $headers = [];
       foreach ($_SERVER as $name => $value)
       {
           if (substr($name, 0, 5) == 'HTTP_')
           {
               $headers[str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($name, 5)))))] = $value;
           }
       }
       return $headers;
    }
}
    echo "<pre>\n";
    echo 'Headers: '; print_r(getallheaders());
    echo '$_SERVER = '; print_r($_SERVER);
    echo '$_ENV = '; print_r($_ENV);
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo "POST body:\n";
        echo file_get_contents("php://input");
    } else {
        echo '$_GET = '; print_r($_GET);
    }
    echo "</pre>\n";
?>
