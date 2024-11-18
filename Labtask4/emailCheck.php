<?php
    session_start();

    if(isset($_POST['submit'])){

        $email  =  $_REQUEST['email'];
        

        $flag = false;
        $last4Char = substr($email, strlen($email)-4);


        function validateString($string) { 
            $STRINGS = 'abcdefghijklmnopqrstuvwxyz0123456789@.'; 
            for ($i = 0; $i < strlen($string); $i++) { 
                if (strpos($STRINGS, $string[$i]) === false) { 
                    return false; } 
            } return true;
        }
        for($i=0; $i < strlen($email); $i++){
            if($email[$i] == " "){
                $flag = true;
                
            }     
        }
        if($email == null){
            echo "Null data found!";
        }else if ($last4Char =! ".com"){
            echo "Enter the email correctly";
        }
        else if ($flag){
            echo "There will no space in email address";
        }
        /*else if (ctype_digit($email[0])){
            echo "Name should be start with a letter";
        }*/
        else if (!validateString($email)) { 
            echo "Invalid email!"; 
        }
        else{
            echo "<h2>Your Input:</h2>";
                echo $email;
        }
    }else{
        //echo "Invalid request!";
        header('location: Email.html');
    }


    
?>