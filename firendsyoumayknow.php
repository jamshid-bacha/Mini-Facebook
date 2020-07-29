<?php



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
    die('Connect Error hi('. mysqli_connect_errno() .')'. mysqli_connect_error());
}

$result = $conn->query("SELECT * FROM Pictures"); 
if($result->num_rows > 0){ 
    
    ?> 
    
    <div> 
        <?php while($row = $result->fetch_assoc()){ ?> 
        
            <img style="border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 180px;
  height: 180px;
  object-fit: cover;" src="data:Images/jpg;charset=utf8;base64,<?php echo base64_encode($row['Images']); ?>" /> 
        <?php 
        
    echo $row['Email'];} ?> 
    </div> 
<?php 

}else{ ?> 
    <p class="status error">Image not found...</p> 
<?php } ?>





<div id="nav2" style="color: white;
      text-align: center;padding-top: 2px;font-weight: bold;">
        &#169; Copyright 2020  &nbsp;&nbsp;&nbsp;&nbsp; 16PWCSE1404@uetpeshawar.edu.pk

        
        </div>
    </div>
</body>

</html>



