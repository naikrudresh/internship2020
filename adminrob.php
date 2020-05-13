<?php
        include('clients.php');
        
        // echo $_SESSION['username'];
        if(isset($_SESSION['username']) && isset($_SESSION['pass'])){
        
        $con = mysqli_connect("localhost","root","","sample");
        $query="SELECT `username`, `fname`, `lname`,`mail`, `phone`, `ser` FROM `clint` INNER JOIN `services` USING (username) where ser='Automonous Robots'";
        $query_run = mysqli_query($con,$query);
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital@1&family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">All Orders</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="admin.php">Orders<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="admin3d.php">3D Print</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="admincad.php">CAD/CAM</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="adminconsl.php">Consultancy</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0"action="clients.php" method="post" >
       
      <!-- <button class="btn btn-success my-2 my-sm-0" type="submit" name='logout'>LOGOUT</button> -->
      <button type="submit" name="LOGOUT" class="btn btn-info btn-sm" >LOGOUT</button>
      
    </form>
    </div>
  </nav>

<div class="conatiner">

        <div class="jumbotron" id="header">
            <h1>Orders For Consultancy</h1>
        </div>
        <div class="container">
        <table class="table table-bordered table-dark">
  <thead>
    <tr>
      
      <th scope="col">Username</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email Id</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Service</th>
    </tr>
  </thead>
  <tbody>
    <?php
        
        if(mysqli_num_rows($query_run)>0)
        {
            while($row=mysqli_fetch_assoc($query_run))
            {
    ?>
    <tr>
    <!-- //   <th scope="row"></th> -->
      <td><?php echo $row['username'];?></td>
      <td><?php echo $row['fname'];?></td>
      <td><?php echo $row['lname'];?></td>
      <td><?php echo $row['mail'];?></td>
      <td><?php echo $row['phone'];?></td>
      <td><?php echo $row['ser'];?></td>
    </tr>
    <?php 
            }
        }
        else {
            echo "No Record Found";
        }
    ?>



    
</table>
        </div>
        
    
    </div>


</body>
</html>
<?php
      }
    else{
      header('location:index.php');
    }    
?>