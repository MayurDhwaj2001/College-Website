<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/login.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    <title>Admin</title>
</head>
<body>
  <!-- Navbar start -->
  <nav class="navbar navbar-expand-lg bg-light">

        <div class="container-fluid">
          <a  href="#"><img class="logo" src="Resources/logo.png"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                  <a class="nav-link active" aria-current="page" href="Index.php">Home</a>
                  <a class="nav-link active" class="btn btn-primary" aria-current="page" href="Login.html">Login</a>
                  <!-- <a class="nav-link active" aria-current="page" href="#">About</a> -->
                </div>
        </div>
  </nav>
  <!-- Navbar end -->

    <h5 id="notice" class="message"><i class="fa-regular fa-circle-check"></i> Notice Posted</h5>                   <!-- Notice popup -->

  <div class="mediaa">
    <!-- Notice start -->
    
    <div class="noticea">
      
      <h3>Post a Notice  </h3>
      <div class="boxn">

        <form action="php/Notice.php" method="get" target="_blank">
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Notice</label>
              <textarea type="text" class="form-control" name="Noticee" rows="6" id="exampleInputPassword1"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" onclick="postedmessage(); ">Post</button>
            <button type="reset" class="btn btn-primary">Clear</button>
          </form>
        </div>
    </div>
    <!-- Notice End -->
    
    <div class="student">
      <!-- Student Details start -->
      <h3>Fetch Details</h3>
      
      <div class="querry">
        <form action=" " method="get">

          <div class="mb-3">
            <input type="text" class="form-control" name="NAME" placeholder="Name" autocomplete="off"></textarea>
          </div>

          <div class="mb-3">
            <input type="text" class="form-control" name="ID" placeholder="Id" autocomplete="off"></textarea>
          </div>

          <button type="submit" class="btn btn-primary" >Search</button>
          <button type="reset" class="btn btn-primary" >clear</button>
        </form>
      </div>

      <div class="alter">
        <h3>Alter Details</h3>
        <form action="">
          <div class="input-group mb-3">
            <select class="form-select" id="inputGroupSelect01" name="Selected">
              <option selected>Set</option>
              <option value="Name">Name</option>
              <option value="Password">Password</option>
            </select>
          </div>

          <div class="mb-3">
            <input type="text" class="form-control" name="ChangedData" placeholder="Changes to" autocomplete="off"></textarea>
          </div>

          <div class="mb-3">
            <input type="text" class="form-control" name="IdToChange" placeholder="Where Id Equals" autocomplete="off"></textarea>
          </div>

          <button type="submit" class="btn btn-primary" >Set</button>
        </form>
      </div>  

      <div class="alter">
        <h3>Delete Details</h3>
        <form action="">

          <div class="mb-3">
            <input type="text" class="form-control" name="DeleteData" placeholder="Delete Id" autocomplete="off"></textarea>
          </div>

          <button type="submit" class="btn btn-primary" >Delete</button>
        </form>
      </div>  


  </div>   
        
        <?php 
        if(isset($_GET["ChangedData"]))
        {
            $TOCHANGE = $_GET['ChangedData'];
        }
        else
        {
            $TOCHANGE = "";
        }
        if(isset($_GET["IdToChange"]))
        {
            $VALUE = $_GET['IdToChange'];
        }
        else
        {
                $VALUE = "";
        }

        if(isset($_GET['Selected']))
        {
          $SELECTED = $_GET['Selected'];
        }
        else
        {
                $SELECTED = "";
        }

        

          $servername="localhost";
          $username="root";
          $password="";
          $dbname="website";
          $conn=new mysqli($servername,$username,$password,$dbname);

          $sqla= "SELECT * FROM student WHERE SId= '$VALUE' ";
          $resulta = mysqli_query($conn,$sqla);
          $checka = mysqli_fetch_array($resulta);

          if(isset($checka))
          {
            if($SELECTED=="Name" && $TOCHANGE!="" && $VALUE!="")
            {

              // echo "Value Changes to is empty<br/>";
                $sql="UPDATE student 
                    SET 
                    SName = '$TOCHANGE'
                    WHERE
                    SId = '$VALUE';";
                $result=$conn->query($sql);
                
            }
            
            else if($SELECTED=="Password" && $TOCHANGE!="" && $VALUE!="")
            {

              // echo "Value to be changed is  empty<br/>";
              $sql="UPDATE student 
                    SET 
                    SPassword = '$TOCHANGE'
                    WHERE
                    SId = '$VALUE';";
              $result=$conn->query($sql);
            }
          }
          else
          {
            // $conn->close();
            echo "";
          }

          if($VALUE=="" && $TOCHANGE=="" && $SELECTED=="Set")
          {

            echo "";
          }
          else
          {
            echo "";
          }


           if($VALUE=="" && $TOCHANGE=="" && $SELECTED=="")
            {
              echo "";
            }
            
            
            $conn->close();

        ?>
      
      <br/>

      <?php 					// Delete Deteil
        if(isset($_GET["DeleteData"]))
        {
            $TODelete = $_GET['DeleteData'];
        }
        else
        {
            $TODelete = "";
        }

          $servername="localhost";
          $username="root";
          $password="";
          $dbname="website";
          $conn=new mysqli($servername,$username,$password,$dbname);

          $sqla= "SELECT * FROM student WHERE SId= '$TODelete' ";
          $resulta = mysqli_query($conn,$sqla);
          $checka = mysqli_fetch_array($resulta);

          if(isset($checka))
          {
            if($TODelete!="")
            {

              // echo "Value Changes to is empty<br/>";
                $sql="DELETE FROM student WHERE SId='$TODelete';";
                $resulta=$conn->query($sql);   
            }
          }

          else if($TODelete!="")
          {
            echo "Id not found ";
          }

          else
          {
            "";
          }
          $conn->close();
        ?>

    
    <!-- Student Details end -->


    <!--PHP Begin-->
    <div class="output">                                                   <!--PHP for Output-->               
      <h3>Details</h3>
      <div class="php">

        <?php
          if(isset($_GET["NAME"]))
          {
              $SName = $_GET['NAME'];
          }
          else
          {
              $SName = " ";
          }
          if(isset($_GET["ID"]))
          {
              $SId = $_GET['ID'];
          }
          else
          {
                  $SId = " ";
          }
        
          $servername="localhost";
          $username="root";
          $password="";
          $dbname="website";
          $conn=new mysqli($servername,$username,$password,$dbname);
        
        
          // $sql="SELECT * FROM student";
          // $result=$conn->query($sql);


          if(empty($SId) && empty($SName) )
          {
              $sql="SELECT * FROM student";
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

          else if( empty($SId))
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

          $conn->close();
        ?>

      </div>
    </div>
    <!--PHP End-->
</div>

</body>
  <script src="https://kit.fontawesome.com/24e659ea3c.js" crossorigin="anonymous"></script> <!-- Awsome Font-->
  <script src="js/javascript.js"></script>  <!--  JS -->

</html>