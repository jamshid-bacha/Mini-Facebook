<?php include('register.php') ?>
<?php include('login.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="main.css" rel="stylesheet" type="text/css">
</head>
<body >
    <div id="fullDiv">
    <div id="div1">
        CONNECTION<br>
        Get connected
    </div>
    <div id="div2">
&nbsp
    </div>
    <div id="div11">
        User Login<br><br>
        <form name="loged" id="form1" method="post" action="index.php" onsubmit="return Loginvalidation()">
           
        <div <?php if (isset($My_error)): ?>  <?php endif ?>>
        <br>
        Your Email Address 
        <input type="text" name="email" placeholder="Email" value="">
        <br>
        <?php if (isset($My_error)): ?>
	  	<span><?php echo $My_error; ?></span>
        <?php endif ?>
        <br>
        <br>
        </div>

            <div >
                Your Password &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input type="password" placeholder="Password" name="pas" value="">
            <br>
           
        <br>
        </div>
            <button type="submit" value="Submit" name="logy" >Log In</button>
          
        </form>
        <br>
        
        </div>
        <br>
<div id="div12">
    User Registeration<br><br>
    <form name="myform" id="form1"  enctype="multipart/form-data" method="post" action="index.php" onsubmit="return validation()">
    <br>
        <div <?php if (isset($name_error)): ?>  <?php endif ?>>
        Your ID &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp
        
        <input type="text" name="PersonId" placeholder="Person ID" value="<?php echo $sid; ?>"><br>
        <br>
        <?php if (isset($name_error)): ?>
	  	<span><?php echo $name_error; ?></span>
        <?php endif ?>
        <br>
        
        </div>
        
        
        Your Full Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="text" name="FullName" placeholder="Full Name"><br><br>
        
        
        <div <?php if (isset($email_error)): ?>  <?php endif ?>>
        
        Your Email Address 
        <input type="text" name="EmailAddress" placeholder="Email" value="<?php echo $email; ?>">
        <br>
        <?php if (isset($email_error)): ?>
	  	<span><?php echo $email_error; ?></span>
        <?php endif ?>
        <br>
        <br>
        </div>


        Your Password 
        <input type="password" placeholder="Password" name="Password" id="4">
        
        Re type Password 
        <input type="password" placeholder="Re-Type" name="Password2" id="4">
        
        <br><br>

       
    <label>Select Image File:</label>
    <input type="file" name="image">

        
        <button type="submit" value="Submit" name="register" id="5">Register</button>
        <div <?php if (isset($Success)): ?>  <?php endif ?>>
            <?php if (isset($Success)): ?>
	  	<span><?php echo $Success; ?></span>
        <?php endif ?>
        
        </div>


    </form>
        </div>
<script type="text/javascript">
    function Loginvalidation(){
        var returnValue = true;
        var Eemail = loged.email.value;
        var orignalEmail =/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        
        
        var password = loged.pas.value;

        if(!orignalEmail.test(Eemail)){
            returnValue = false;
            alert("Please enter a valid email address ");
            loged.email.focus();
        }
        if(password==""){
            returnValue = false;
            alert("Please Enter a Password ");
            loged.Password.focus();
        }
        return returnValue;

    }
    function validation(){
        
        var returnValue = true;
        var PerID = myform.PersonId.value;
        
        var NNName = myform.FullName.value;
        
        var email = myform.EmailAddress.value;

        var Pass1 = myform.Password.value;
        var sizeofPassword = myform.Password.value.length
        
        var Pass2 = myform.Password2.value;

        var orignalEmail =/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        
        
        if(PerID==""){
            returnValue = false;
            alert("Please Enter a your ID");
            myform.PersonId.focus();
        }
        if(NNName==""){
            returnValue = false;
            alert("Please Enter a Name ");
            myform.FullName.focus();
        }
        if(!orignalEmail.test(email)){
            returnValue = false;
            alert("Please enter a valid email address ");
            myform.EmailAddress.focus();
        }
        
        if(Pass1==""){
            returnValue = false;
            alert("Please Enter a Password ");
            myform.Password.focus();
        }
        if(sizeofPassword < 8){
            returnValue = false;
            alert("Password size must be greater then 8 ");
            myform.Password.focus();
        }
        if(Pass1 != Pass2){
            returnValue = false;
            alert("Please Re Enter Password Not Match");
            myform.Password.focus();
        }
        return returnValue;
    }

    </script>

<div id="nav2" style="color: white;
      text-align: center;padding-top: 2px;font-weight: bold;">
        &#169; Copyright 2020  &nbsp;&nbsp;&nbsp;&nbsp; 16PWCSE1404@uetpeshawar.edu.pk

        
        </div>
</body>
</html>