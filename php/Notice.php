<?php

    $Notice= $_GET["Noticee"];
    $Date=date("y/m/d");

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="website";
    $conn=new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error)
    {
        die("connection failed :" . $conn->connect_error);
    }
    
    echo "Database Connected Sucessfully <br/>";
    
    $sql="INSERT INTO notice (Notice ,Date ) VALUES('". $Notice ."','". $Date ."')";
    
    if ($_SERVER["REQUEST_METHOD"] == "GET") 
    {
        if (empty($Notice)) 
        {
            echo 'Notice is empty';
            
            $conn->close();
            
            
            // header('Location: ../Login.php');  
        }
        
        else
        {
            
            if($conn->query($sql)===TRUE)
            {
                echo 'Notice Sent';
                // die("Connected :" . $conn->connect_error);
                // header("Location: ../Admin.html");
                // die();
                $conn->close();
                echo '<script>window.close();</script>';
                // exit;
                // header('Location: ../');  
            }
            
            else
            {   
                echo "ERROR".$sql."<br>".$conn->error;
                $conn->close();
            }
        }
    }

?> 