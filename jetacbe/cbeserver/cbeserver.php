<?php

session_start();
    
    $username = "";
    $email = "";
    $phone = "";
    $surname = "";
    $firstname = "";
    $othername = "";
    $title = "";
    $password2 = "";
    $paymentcode = "";
    $time_stamp = "";
    $id = "";
    $appnum = "";
    $signature = "";
    $passport = "";
    $folder = "";
    $result = "";
    $host = "localhost";
    $dbuser = "root";
    $dbpass = '';
    $dbase = "jeta";
    $errors = array();


    // Connect to the database
    $db = mysqli_connect($host, $dbuser, $dbpass, $dbase);



if (isset($_POST['cbelogin'])) {
        
        $appnum = mysqli_real_escape_string($db, $_POST["appnum"]);

        //Ensure all the entries like the application number is correct
        if (empty($appnum)) {
            array_push($errors, "Application Number is required" );
        }
       

        // // if there are no errors, save user to database
        if (count($errors) == 0) {
        
            $query = "SELECT * FROM student_data WHERE appnum = '$appnum'";
            $result = mysqli_query($db, $query);
            
            if($row = mysqli_fetch_array($result)) {
                $id                 = $row['id'];
                $course             = $row['course'];
                $surname            = $row['surname'];
                $firstname          = $row['firstname'];
                $othername          = $row['othername'];
                $session            = $row['session'];
                $appnum             = $row['appnum'];
                $regnum             = $row['regnum'];
                $passport           = $row['passport'];
               
                
                $_SESSION['id']                 = $id;
                $_SESSION['course']             = $course;
                $_SESSION['surname']            = $surname;
                $_SESSION['firstname']          = $firstname;
                $_SESSION['othername']          = $othername;
                $_SESSION['session']            = $session;
                $_SESSION['appnum']             = $appnum;
                $_SESSION['regnum']             = $regnum;
                $_SESSION['passport']           = $passport;
                $_SESSION['success']            = "Student Updated Successfully";
                header('location: ./cbe-rules.php'); 
            
            }else{
                // array_push($errors, "Wrong username/password combination");
                array_push($errors, "Invalid Application Number");
            }
        }
    }    

?>