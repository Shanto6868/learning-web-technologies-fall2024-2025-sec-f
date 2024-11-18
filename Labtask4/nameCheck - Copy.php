<?php
    session_start();

    if(isset($_POST['submit'])){

        $name  =  $_REQUEST['name'];
        

        $flag = false;

        function validateString($string) { 
            $STRINGS = 'abcdefghijklmnopqrstuvwxyz ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-'; 
            for ($i = 0; $i < strlen($string); $i++) { 
                if (strpos($STRINGS, $string[$i]) === false) { 
                    return false; } 
            } return true;
        }
        for($i=0; $i < strlen($name); $i++){
            if($name[$i] == " "){
                $flag = true;
                echo "<h2>Your Input:</h2>";
                echo $name;
            }     
        }
        if($name == null){
            echo "Null data found!";
        }
        else if (!$flag){
            echo "Enter at least 2 words";
        }
        else if (ctype_digit($name[0])){
            echo "Name should be start with a letter";
        }
        else if (!validateString($name)) { 
            echo "Invalid string!"; 
        }
        else{
        }
    }else{
        //echo "Invalid request!";
        header('location: Name.html');
    }


    //print_r($_GET);
    //echo "Test";
?>