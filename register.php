

<?php
$sid = filter_input(INPUT_POST, 'PersonId');
 $fname = filter_input(INPUT_POST, 'FullName');
 $email = filter_input(INPUT_POST, 'EmailAddress');
    $passs = filter_input(INPUT_POST, 'Password');
	$reg = filter_input(INPUT_POST, 'register');
	$status = $statusMsg = ''; 
if(isset($reg)){
if(!empty($sid)){
if(!empty($fname)){
	if (!empty($passs)){



		
		$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "assignmentFour";// Create connection
		$conn = @new mysqli ($host, $dbusername, $dbpassword, $dbname);
		
		$status = 'error'; 
		if(!empty($_FILES["image"]["name"])) { 
			// Get file info 
			$fileName = basename($_FILES["image"]["name"]); 
			$fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
			$allowTypes = array('jpg','png','jpeg','gif'); 
			if(in_array($fileType, $allowTypes)){ 
				$image = $_FILES['image']['tmp_name']; 
				$imgContent = addslashes(file_get_contents($image)); 
			 
			
				$insert = $conn->query("INSERT into Pictures (Email, Images) VALUES ('$email','$imgContent')"); 
				 
				if($insert){ 
					$status = 'success'; 
					$statusMsg = "File uploaded successfully."; 
				}else{ 
					$statusMsg = "File upload failed, please try again."; 
				}  
			}else{ 
				$statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
			} 
		}else{ 
			$statusMsg = 'Please select an image file to upload.'; 
		} 
	 
	 

//	echo $statusMsg;
	
	
			

		if (mysqli_connect_error()){
			die('Connect Error ('. mysqli_connect_errno() .')'. mysqli_connect_error());
        }
        
		else{

            $sql="SELECT * FROM project WHERE (PersonID='$sid' or Email='$email');";
            $res=mysqli_query($conn,$sql);
            if (mysqli_num_rows($res) > 0) {
                $row = mysqli_fetch_assoc($res);
                if ($sid==$row['PersonID'])
                {
                    $name_error = "Sorry... PersonID already taken";
                  //  echo "PersonID already exists";
                }
                elseif($email==$row['Email'])
                {
                    $email_error = "Sorry... email already taken";
                    //echo "Email already exists";
                }
            }else { 
                $sql = "INSERT INTO project (PersonID, FullName, Email,Password)
			    values ('$sid','$fname','$email','$passs')";
			    if ($conn->query($sql)){
				   // echo "New record is inserted sucessfully";
				   $Success = "You Register Succesfully Now you can Log In";
				   //header('Location:index.php');
			    }
			    else{
				    echo "Error: ". $sql ."". $conn->error;
			    }
		        $conn->close();
            }	
		}
	}else{
        //$email_error = "Password should not be empty";
	    echo "Password should not be empty";
	die();
}
}else{
    //$email_error = "Username should not be empty";
	echo "Username should not be empty";
	die();
}
}
else{
   // $email_error = "Id should not be empty";
	echo "Id should not be empty";
	die();
}
}

?>

           