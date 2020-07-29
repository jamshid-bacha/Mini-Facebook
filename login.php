<?php 
  $emaill = filter_input(INPUT_POST, 'email');
  $passs = filter_input(INPUT_POST, 'pas');
  $reg = filter_input(INPUT_POST, 'logy');

  
  if(isset($reg)){

            $host = "localhost";
            $dbusername = "root";
            $dbpassword = "";
            $dbname = "assignmentFour";// Create connection
            $conn = @new mysqli ($host, $dbusername, $dbpassword, $dbname);
            if (mysqli_connect_error()){
                die('Connect Error ('. mysqli_connect_errno() .')'. mysqli_connect_error());
            }
            
            else{
                $sql="SELECT * FROM project WHERE (Email='$emaill' AND Password='$passs');";
                //     $sql="SELECT * FROM project WHERE Email='".$email."' AND Password='".$passs."' limit 1";
                
                     $res=mysqli_query($conn,$sql);
                    
                     $row = mysqli_fetch_assoc($res);
                        
                        session_start();
                        $_SESSION['userEmail'] = $emaill;

                    if(mysqli_num_rows($res)==1){

                        
                        header('Location:welcome.php');
                        
                       // echo " You Have Successfully Logged in";
                      
                     }
                     else{
                        $My_error = "You Have Entered Incorrect Email or Password";
                    //   echo " You Have Entered Incorrect Password";
                    
                     }
        
                }
            
    }  
        
?>