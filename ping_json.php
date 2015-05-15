<?php
    $host = $_POST['host'];
    
    require_once('/debug.php'); 

    //function to have anothe way to handle warnings
    function warning_handler($errno, $errstr) { 
        // disable only warning where errono = 2
        if ($errno !== 2) {
            echo $errno."\r\n" ;
            echo $errstr."\r\n" ;
        }
    }
    
    function ping($host,$port=80,$timeout=6)
    {
        //set warning handler 
        set_error_handler("warning_handler", E_WARNING);      
        $fsock = fsockopen($host, $port, $errno, $errstr, $timeout);
        restore_error_handler();
        if ( ! $fsock ) {
            return 'fail'; //FALSE;
        } else {
            return 'ok'; //TRUE;
        }
    }

    $result = array(
	   ping($host)
	   //ping('www.google1.com'),
	   //ping('http://74.125.224.72')
       //ping('74.125.224.72')
       //ping('74.125.224.72'),
       //ping('www.google1.com'),
       //ping('74.125.224.722')
    );
    
    echo json_encode($result);
?>