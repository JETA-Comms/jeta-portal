<?php include "server.php"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JETA CBE</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>



    <div class="container">
        <h1 class="text-center text-green text-header">JETA CBE QUESTION</h1>
        <form method="POST" action="index.php" enctype="multipart/form-data">
            <!-- <div class="form-group">
                <label for="passage">Passage</label>
                <textarea name="passage" id="passage"></textarea>
            </div>
            <div class="divider"></div> -->
            <div class="form-group">
                <label for="question">Question</label>
                <textarea name="question" id="question" placeholder="Input Your Question"></textarea>
            </div>
            <div class="divider"></div>
            <div class="form-group">
                <label for="optA">Option A</label>
                <textarea name="optA" placeholder="input option A" id="optA"></textarea>
            </div>
            <div class="divider"></div>
            <div class="form-group">
                <label for="optB">Option B</label>
                <textarea name="optB" placeholder="input option B" id="optB"></textarea>
            </div>
            <div class="divider"></div>
            <div class="form-group">
                <label for="optC">Option C</label>
                <textarea name="optC" placeholder="input option C" id="optC"></textarea>
            </div>
            <div class="divider"></div>
            <div class="form-group">
                <label for="optD">Option D</label>
                <textarea name="optD" placeholder="input option D" id="optD"></textarea>
            </div>
            <div class="divider"></div>
            <div class="form-group">
                <label for="optE">Option E</label>
                <textarea name="optE" placeholder="input option E" id="optE"></textarea>
            </div>
            <div class="divider"></div>
            <div class="form-group">
                <label for="image">Upload Image</label>
                <input type="file" class="fileInput" name="image" id="image"/>
            </div>
            <div class="divider"></div>
            <div class="form-group">
                <label for="answer">Answer</label>
                <textarea name="answer" placeholder="input option E "id="answer"></textarea>
            </div>

            <div class="bottomArea">
            <p>Jeta Communications CBE Uploading</p>
            <input name="submit" type="submit" class="submitBtn"/>
        </div>

        </form>
        <!-- <div class="bottomArea">
            <p>Jeta Communications CBE Uploading</p>
            <input name="submit" type="submit" class="submitBtn"/>
        </div> -->
    </div>
</body>
</html>