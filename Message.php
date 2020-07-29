<?php 
 $email = filter_input(INPUT_POST, 'email');
  $Message = filter_input(INPUT_POST, 'message');
  
  $mas = filter_input(INPUT_POST, 'Mass');
  session_start();
  $fromEmail = $_SESSION['userEmail'];
  if(isset($mas)){

            $host = "localhost";
            $dbusername = "root";
            $dbpassword = "";
            $dbname = "assignmentFour";// Create connection
            $conn = @new mysqli ($host, $dbusername, $dbpassword, $dbname);
            if (mysqli_connect_error()){
                die('Connect Error hi('. mysqli_connect_errno() .')'. mysqli_connect_error());
            }
            
            else{    
                $sql="SELECT * FROM project WHERE (Email='$email');";
                $res=mysqli_query($conn,$sql);
                $row = mysqli_fetch_assoc($res);
                if(mysqli_num_rows($res)>0){
                
                $sql = "INSERT INTO Messages (ToEmail,FromEmail, Message)
			    values ('$email','$fromEmail','$Message')";
			    if ($conn->query($sql)){
                    header('Location:SendMessage.php');
				    
			    }
			    else{
				    echo "Error: ". $sql ."". $conn->error;
			    }
		        $conn->close();
            }else{
                $Email_doesnt_exist = "Sorry this emial does not exist in the database";
            }
           
    } 
}
        
?>