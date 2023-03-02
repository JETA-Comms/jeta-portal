
<?php 
include "./cbeserver/cbeserver.php";
require_once("server.php");
$id = $_GET["id"]; //If I use POST superglobal function it will bring error because the numbers needs to be show so that it can be 
// tracked when doing number of questions attempted.


// $sql = "SELECT * FROM english WHERE id=$id";

// $result = mysqli_query($conn, $sql);

// $result = mysqli_query($conn, "SELECT * FROM english WHERE id=$id");

// if($row = mysqli_fetch_array($result)){
//     $question = $row['question'];
//     $optA = $row['optA'];
//     $optB = $row['optB'];
//     $optC = $row['optC'];
//     $optD = $row['optD'];
//     $optE = $row['optE'];
// }

// $sql = "SELECT * FROM english";

// $result = mysqli_query($conn, $sql);

// $subject = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The CBE Rules and Regs</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/cbe-questions.css" />
    <link rel="stylesheet" href="assets/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/fontawesome.min.css" />
</head>
<body>
    <div class="wrapper">
       <?php include "cbesidebar.php"; ?>

        
        <div class="main">
            <div class="timers">
                <div class="question-timer time">Timer: 03:34</div>
                <div class="question-timer attempts">Questions Attempted: 04/50</div>
            </div>

            <!-- Question and option section -->
            <div class="questions-main">
                <?php
                    $result = mysqli_query($conn, "SELECT * FROM general_knowledge WHERE id= '$id' ");

                    if($row = mysqli_fetch_array($result)){
                        $question = $row['question'];
                        $optA = $row['img'];
                        $optA = $row['optA'];
                        $optB = $row['optB'];
                        $optC = $row['optC'];
                        $optD = $row['optD'];
                        $optE = $row['optE'];

                    }
                
                ?>
                <div class="questions">
                    <h4 class="question"><?php echo $question; ?></h4>
                    <div class="answer" style="margin-bottom: 0.5rem;">
                        <label for="answerA1">A. &nbsp;
                            <input type="radio" name="ans" id="answerA1">
                            <?php echo $optA; ?>
                        </label>
                    </div>
                    <div class="answer" style="margin-bottom: 0.5rem;">
                        <label for="answerB1">B. &nbsp;
                            <input type="radio" name="ans" id="answerB1">
                            <?php echo $optB; ?>
                        </label>
                    </div>
                    <div class="answer" style="margin-bottom: 0.5rem;">
                        <label for="answerC1">C. &nbsp;
                            <input type="radio" name="ans" id="answerC1">
                            <?php echo $optC; ?>
                        </label>
                    </div>
                    <div class="answer" style="margin-bottom: 0.5rem;">
                        <label for="answerD1">D. &nbsp;
                            <input type="radio" name="ans" id="answerD1">
                            <?php echo $optD; ?>
                        </label>
                    </div>
                    <div class="answer" style="margin-bottom: 2rem;">
                        <label for="answerE1">E. &nbsp;
                            <input type="radio" name="ans" id="answerE1">
                            <?php echo $optE; ?>
                        </label>
                    </div>

                    <div class="questionBtns">

                        <?php
                        
                            $prevsql= "SELECT * FROM general_knowledge WHERE id<$id order by id DESC"; //I used figured one to text this and it gave me single answer,
                            // then I proceed to declare the variable of $id and also define the array key of id in the get.
                            $nextsql= "SELECT * FROM general_knowledge WHERE id>$id order by id ASC";

                            // previous button
                            $previous = mysqli_query($conn, $prevsql);
                            if($row = mysqli_fetch_array($previous)){
                                echo '<a style="text-decoration: none;" href="generalknowledge.php?id='.$row['id'].'">
                                <div class="submitBtn d-flex a-center j-center"><i class="fas fa-chevron-left"></i> &nbsp; Previous</div>
                                </a>';
                            } // The anchor tag was not closed and other areas were clickable which is not supposed to be because it added error to the interface and it took us three days to find out


                            // Next button
                            $next = mysqli_query($conn, $nextsql);
                            if($row = mysqli_fetch_array($next)){
                                echo '<a style="text-decoration: none;" href="generalknowledge.php?id='.$row['id'].'">
                                <div class="submitBtn d-flex a-center j-center"> Next &nbsp;<i class="fas fa-chevron-right"></i> </div>
                                </a>';
                            }
                        
                        ?>

                    </div>

                    <div class="d-flex a-center j-center submitExamBtn">
                        <button class="submitBtn submitExam"><a style="text-decoration: none; color: white;" href="logout.php?logout='1'">Submit</a></button>
                    </div>

                </div>
                <!-- Question Number Section -->
                <div class="questionNums">
                    <?php  

                        $sql = "SELECT * FROM general_knowledge ";

                        $result = mysqli_query($conn, $sql);

                        $subject = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    ?>
                        
                    <?php foreach ($subject as $english): ?>

                        <!-- <div class="questionNum">
                            <ol>
                                <a style="text-decoration: none;" href="exam.php?id=<?php //echo $english["id"]; ?>"><?php echo $english["id"]; ?>
                            </ol>
                            
                        </div> -->

                        
                           
                                <a style="text-decoration: none;" href="generalknowledge.php?id=<?php echo $english["id"]; ?>"><div class="questionNum"><?php echo $english["id"]; ?></div> </a>
                            
                            
                        
                        
                    <?php endforeach ?>
                </div>

            </div>

        </div>
    </div>
</body>
</html>