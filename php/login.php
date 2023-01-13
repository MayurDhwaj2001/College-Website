<?php

    // $SName= $_GET["Name"];
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
    


    if ($_SERVER['REQUEST_METHOD']=='GET')
    {
        $sqls= "SELECT * FROM student WHERE SId = '$SId' AND SPassword = '$SPassword' ";
        $sqla= "SELECT * FROM adminn WHERE SId= '$SId' AND SPassword = '$SPassword' ";

        $results = mysqli_query($conn,$sqls);
        $resulta = mysqli_query($conn,$sqla);

        $checks = mysqli_fetch_array($results);
        $checka = mysqli_fetch_array($resulta);

        if(isset($checks))
        {
            $conn->close();
            header('Location:../Student.html');
        }

        else if(isset($checka))
        {
            $conn->close();
            header('Location:../Admin.php');
        }

        else
        {
            $conn->close();
            echo '<br/>Invalid Id Password';
            echo '<script>window.close();</script>';
        }
    }
    
?>