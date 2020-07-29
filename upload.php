
<?php

session_start();
$User_Email = $_SESSION['userEmail'];

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "assignmentFour";// Create connection
$conn = @new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
    die('Connect Error hi('. mysqli_connect_errno() .')'. mysqli_connect_error());
}

$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            $insert = $conn->query("INSERT into Pictures (Email, Images) VALUES ('$User_Email','$imgContent')"); 
             
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
} 
 
// Display status message 
echo $statusMsg;




?>
