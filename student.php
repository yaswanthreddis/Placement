<?php
require("include/connect.php");
$id = $_GET['id'];
$sql = "SELECT * FROM students WHERE id='$id' order by percentage desc";
$data = $conn->query($sql);
$row = $data->fetch_assoc();


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Left Image, Right Space</title>
  <style>
    body {
      display: flex;
      height: 100vh;
    }

    .container {
      display: flex;
    }
    
        @font-face {
          font-family: 'CustomFont';
          src: url('URWDIN-Black.ttf') format('truetype');
      }
    .left-side {
      margin-left: 30px;
    }

    .right-side {
     margin-left: 50px;
    }

    img {
      display: block;
    }
    table{
        width: 700px;
        height: 450px;
        font-family: 'CustomFont', sans-serif;
        font-weight: bold;
        font-size: 25px;
        text-align: center;
        border-spacing: 7px;
    }
    td,th{
        padding: 10px;
    }
    .w2{
        color:white;
    }

  </style>
</head>

<body>
  <div class="container" style="margin-top: 150px;margin-left:155px">
    <div class="left-side">
      <img src="data:image/jpeg;base64, <?php echo base64_encode($row['img'])?>" alt="Image" width="350px">
    </div>
    <div class="right-side">
      <table border="solid 1px black">
        <COL style="background-color:#00ffbf" />
        <COL style="background-color:#0066cc" />
        <tr>
            <td>Regd.No</td>
            <td class="w2"><?php echo $row['id'];?></td>
        </tr>
        <tr>
            <td>Name</td>
            <td class="w2"><?php echo $row['name'];?></td>
        </tr>
        <tr>
            <td>Father Name</td>
            <td class="w2"><?php echo $row['father'];?></td>
        </tr>
        <tr>
            <td>Certifications</td>
            <td class="w2"><?php echo $row['certifications'];?></td>
        </tr>
        <tr>
            <td>Coding Skills</td>
            <td class="w2"><?php echo $row['coding'];?></td>
        </tr>
        <tr>
            <td>Projects</td>
            <td class="w2"><?php echo $row['projects'];?></td>
        </tr>
        <tr>
            <td>Hackthons</td>
            <td class="w2"><?php echo $row['hackthons'];?></td>
        </tr>
      </table>
    </div>
  </div>
</body>

</html>
