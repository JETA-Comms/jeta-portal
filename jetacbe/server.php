<?php

    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $database   = "jeta";
    $question = "";
    $optA = "";
    $optB = "";
    $optC = "";
    $optD = "";
    $optE = "";
    $next = "";
    $previous = "";


    // connect to the database of the CBE
    $conn = mysqli_connect($servername, $username, $password, $database);


    // Submit the Question to the database once the SUBMIT button is clicked
    if(isset($_POST["submit"])){
        $question = mysqli_real_escape_string($conn, $_POST["question"]);
        $optA     = mysqli_real_escape_string($conn, $_POST["optA"]);
        $optB     = mysqli_real_escape_string($conn, $_POST["optB"]);
        $optC     = mysqli_real_escape_string($conn, $_POST["optC"]);
        $optD     = mysqli_real_escape_string($conn, $_POST["optD"]);
        $optE     = mysqli_real_escape_string($conn, $_POST["optE"]);
        // $id       = mysqli_real_escape_string($conn, $_POST["id"]);
        $img      = mysqli_real_escape_string($conn, $_FILES["image"] ["name"]);
        $tempname = mysqli_real_escape_string($conn, $_FILES["image"] ["tmp_name"]);
        $folder   = "./img/" . $img;
        $ans      = mysqli_real_escape_string($conn, $_POST["answer"]);


        if(move_uploaded_file($_FILES["image"]["tmp_name"], $folder)) {
            echo "The image" . basename($_FILES["image"]["name"]) . "has been uploaded successfully";
        }else{
            echo "error to upload the image";
        }



        $query = "INSERT INTO english1 (question, optA, optB, optC, optD, optE, img, answer)
                  VALUES ('$question', '$optA', '$optB', '$optC', '$optD', '$optE', '$img', '$ans')";

        mysqli_query($conn, $query); //It did not work before because we put "" ("$conn, $query"). It was saying that it is a string and it is variable
           


        // if (mysqli_query("$conn, $query")) {
        //     print_r($folder);
        // }


    }



?>


