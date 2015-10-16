<?php

require('access.php');


$option = $_REQUEST['pluginr'];

switch ($option) {
    case 'on':
        echo "on";
        break;
    case 'off':
        echo "off";
        break;
    default:
        echo "wtf";
        break;
}

   $option1 = $_REQUEST['pluginb'];

switch ($option1) {
    case 'on':
        echo "on";
        break;
    case 'off':
        echo "off";
        break;
    default:
        echo "wtf";
        break;
}
?>