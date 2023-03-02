<?php include "server.php"; 


$sql = "SELECT * FROM english";

$result = mysqli_query($conn, $sql);

$subject = mysqli_fetch_all($result, MYSQLI_ASSOC);



?>

    


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    

    <div class="container">
        <h1 class="text-center text-green">Question Bank</h1>


        <table>
            
            <tr>
                <th class="vStretch">ID</th>
                <th class="wStretch">Question 1</th>
                <th>Option A</th>
                <th>Option B</th>
                <th>Option C</th>
                <th>Option D</th>
                <th>Option E</th>
                <th>Image </th>
                <th>Answer</th>
            </tr>
            <?php foreach ($subject as $english): ?>
            <tr>
                <td>1</td>
                <td>
                    <?php echo $english["question"]; ?>
                </td>
                <td><?php echo $english["optA"]; ?></td>
                <td><?php echo $english["optB"]; ?></td>
                <td><?php echo $english["optC"]; ?></td>
                <td><?php echo $english["optD"]; ?></td>
                <td><?php echo $english["optE"]; ?></td>
                <td>
                    <img src="./img/<?php echo $english["img"]  ?>"  width="80">
                </td>
                <td><?php echo $english["answer"]; ?></td>
            </tr>
            <?php endforeach ?>
          
        </table>
    </div>
</body>
</html>