<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inbox</title>
    <link href="welcomemain.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="asd" >
<div id="welcom">
    Welcome to my Facebook
    </div>
<ul>
<li><a  href="./welcome.php">Home</a></li>
<li><a  href="./SendMessage.php">Send Message</a></li>
  <li><a  href="./inbox.php">Inbox</a></li>
  
  <li><a  href="./Outbox.php">Outbox</a></li>
  <li><a  href="./firendsyoumayknow.php">Suggested Friends</a></li>
  <li><a  href="./logout.php">Logout</a></li>
  
</ul>
    <?php
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "assignmentFour";// Create connection
    $conn = @new mysqli ($host, $dbusername, $dbpassword, $dbname);
    if (mysqli_connect_error()){
        die('Connect Error ('. mysqli_connect_errno() .')'. mysqli_connect_error());
    }

    echo '<center><br><h1 id="welcom">Inbox</center></h1>';
   // $User_Email = $_SESSION['userEmail'];
    $User_Email = $_SESSION['userEmail'];

    $sql = "SELECT * FROM Messages where ToEmail = '$User_Email'";
    $result = mysqli_query($conn, $sql);
    while($result_Check = mysqli_fetch_array($result)){
        echo '
        <div id="Email">
            <h3>From: '. 
                $result_Check['FromEmail']
            .'</h3>
        </div> '; 

    echo '
        <div id="Message">
            <p>'.
                $result_Check['Message'].
            '</p>
        </div>';

        echo '
        <div id="Reply">
        <button id="buton">
            <a id="linka" href="./SendMessage.php">Reply</a>
            </button>
        </div>';
    }
    ?>

<div id="nav2" style="color: white;
      text-align: center;padding-top: 2px;font-weight: bold;">
        &#169; Copyright 2020  &nbsp;&nbsp;&nbsp;&nbsp; 16PWCSE1404@uetpeshawar.edu.pk

        
        </div>
    </div>
</body>

</html>