<?php
//header('Refresh: 5; URL=http://localhost/sgs/login/login.php');
    //echo "<img src=tn.php height=100% width=100%>";

    //set it to writable location, a place for temp generated PNG files
    $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;

    //html PNG location prefix
    $PNG_WEB_DIR = 'temp/';

    include "qrlib.php";

    //ofcourse we need rights to create temp dir
    if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);


    $filename = $PNG_TEMP_DIR.$_GET['data'];

   $matrixPointSize = 7;
        $matrixPointSize = 7;
$errorCorrectionLevel='L';

    if (isset($_GET['data'])) {

        //it's very important!
        if (trim($_GET['data']) == '')
            die('data cannot be empty! <a href="?">back</a>');

        // user data
        $filename = $PNG_TEMP_DIR.$_GET['data'].'.png';
        QRcode::png($_GET['data'], $filename, $errorCorrectionLevel, $matrixPointSize, 5);

    } else {

        //default data
        echo 'You can provide data in GET parameter: <a href="?data=like_that">like that</a><hr/>';
        QRcode::png('PHP QR Code :)', $filename, $errorCorrectionLevel, $matrixPointSize, 5);

    }

  header('location:http://uddeshah.com/qrgen/imggg1.php?source='.$_GET['data']);     

    ?>
