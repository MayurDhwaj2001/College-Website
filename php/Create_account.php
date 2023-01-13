<?php
      
    $SName= $_GET["Name"];
    $SId= $_GET["Id"];
    $SPassword= $_GET["Password"];

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="website";
    $conn=new mysqli($servername,$username,$password,$dbname);
    
    if($conn->connect_error)
    {
        die("connection failed :" . $conn->connect_error);
    }
    
    echo "Database connected sucessfully";

    if ($_SERVER["REQUEST_METHOD"] == "GET") 
    {
        if (empty($SName) || empty($SPassword) || empty($SId)) 
        {
            echo "Please fill the details";
            
            // header('Location: ../Login.php');  
        } 


        else
        {
            $sql="INSERT INTO student (SName , SId , SPassword) VALUES('". $SName ."','". $SId ."','". $SPassword ."')";

            if($conn->query($sql)===TRUE)
            {
                
                $conn->close();
                echo "New Record Created </br>";
                echo '<script>window.close();</script>';

                // header('Location: ../Login.html');  
            }

            else
            {   
                $conn->close();
                echo "ERROR".$sql."<br>".$conn->error;
            }
        }
    }

?>