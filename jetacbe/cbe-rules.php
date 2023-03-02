<?php include "./cbeserver/cbeserver.php"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The CBE Rules and Regs</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/cbe-rules.css" />
</head>
<body>
    <div class="wrapper">
        <?php include "cbesidebar.php"; ?>
        
        <div class="main">
            <div class="rules-main">
                <div class="instructions">
                    <h1 class="text-green">Exam Instructions</h1>
                    <p class="text-grey-700 mb-1">Kindly read the instructions carefully and follow the rules.</p>
                    <ul>
                        <li class="text-grey-700">1. Click the "START" button to start</li>
                        <li class="text-grey-700">2. Answer all questions</li>
                        <li class="text-grey-700">3. Once you have answered a question, click on "NEXT" button</li>
                        <li class="text-grey-700">4. You will be given 50 minutes for the exam</li>
                        <li class="text-grey-700">5. Once you are done, click "SUBMIT"</li>
                        <li class="text-grey-700">1. Click the "START" button to start</li>
                        <li class="text-grey-700">2. Answer all questions</li>
                        <li class="text-grey-700">3. Once you have answered a question, click on "NEXT" button</li>
                        <li class="text-grey-700">4. You will be given 50 minutes for the exam</li>
                        <li class="text-grey-700">5. Once you are done, click "SUBMIT"</li>
                    </ul>
                </div>
                <div class="button d-flex a-center j-center start-sec">
                    <button class="submitBtn"><a style="text-decoration: none; color: white;" href="exam.php?id=''">START</a></button>
                </div>
            </div>

        </div>
    </div>
</body>
</html>