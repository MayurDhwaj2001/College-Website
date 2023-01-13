<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Querry</title>
</head>
<body>

    <?php                                                   //php
    $SName= $_GET["NAME"];
    $SId= $_GET["ID"];

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="website";
    $conn=new mysqli($servername,$username,$password,$dbname);


    // $sql="SELECT * FROM student";
    // $result=$conn->query($sql);
    
    
    if(empty($SId))
    {
        $sql="SELECT * FROM student WHERE SName='$SName'";
        $result=$conn->query($sql);
      
        if($result->num_rows>0)
        {
          echo "<table border=1px>
          <tr border=1px>
              <td>Name</td>
              <td>Id</td>
              <td>Password</td>
            </tr>
            ";
          
          while ($row=$result->fetch_assoc())
          {
            echo  "<tr>". "<td>".$row["SName"]."</td>".
            "<td>".$row["SId"]."</td>".
            "<td>".$row["SPassword"]."</td>"."</tr>";
        }
        echo "</table>";
    }
    else
    {
          echo "0 result";
        }
    }
    
    else if(empty($SName))
    {
        $sql="SELECT * FROM student WHERE SId='$SId'";
        $result=$conn->query($sql);
        
        if($result->num_rows>0)
        {
            echo "<table border=1px>
            <tr border=1px>
              <td>Name</td>
              <td>Id</td>
              <td>Password</td>
              </tr>
              ";
              
              while ($row=$result->fetch_assoc())
              {
                  echo  "<tr>". "<td>".$row["SName"]."</td>".
                  "<td>".$row["SId"]."</td>".
                  "<td>".$row["SPassword"]."</td>"."</tr>";
                }
          echo "</table>";
        }
        else
        {
            echo "0 result";
        }
    }


    
    else if(empty($SName))
    {
        $sql="SELECT * FROM student WHERE SId='$SId'";
        $result=$conn->query($sql);
        
        if($result->num_rows>0)
        {
            echo "<table border=1px>
            <tr border=1px>
              <td>Name</td>
              <td>Id</td>
              <td>Password</td>
              </tr>
              ";
              
              while ($row=$result->fetch_assoc())
              {
                  echo  "<tr>". "<td>".$row["SName"]."</td>".
                  "<td>".$row["SId"]."</td>".
                  "<td>".$row["SPassword"]."</td>"."</tr>";
                }
          echo "</table>";
        }
        else
        {
            echo "0 result";
        }
    }
    
    $conn->close();
?>
    
</body>
</html>