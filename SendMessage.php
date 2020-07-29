<?php include('Message.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="welcomemain.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="asd">
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
<br>
<br>
<div id="sendMessage">


    <form name="message" id="form3" method="post" action="SendMessage.php">
        Email of the User:   
        <input type="text" name="email" placeholder="Emial" value="">

        <br><br>

        <div <?php if (isset($Email_doesnt_exist)): ?>  <?php endif ?>>
            <?php if (isset($Email_doesnt_exist)): ?>
	  	<span><?php echo $Email_doesnt_exist; ?></span>
        <?php endif ?>
      
        </div>
        <br><br>
        Message 
        <br><br>
        <textarea name="message"  rows="4" cols="50">
            Type your message here
        </textarea>
        <br>   
            <button id="buton" type="submit" value="Submit" name="Mass" >Send Message</button>
        </form>
        
        

    </div>
        <br><br>
        <div id="nav2" style="color: white;
      text-align: center;padding-top: 2px;font-weight: bold;">
        &#169; Copyright 2020  &nbsp;&nbsp;&nbsp;&nbsp; 16PWCSE1404@uetpeshawar.edu.pk

        
        </div>
        

        

</div>
</body>
</html>