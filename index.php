<html>
    <title>Forms</title>
    <head>
        <style>
body{
    background: #FFE9CC;
}
table, th, td{
    border-style:solid;
    border-width:1px;

    align-items: center;
    text-align: center;
    
}
td{
    font-weight: 200;
    font-size: 20px;
}
table{
    border-radius: 5%;
    margin-left: 350px;
    height: 20px;
    width: 200px;
    margin-top: -30px;
}


td {
    width:10px;
}
button{
    border: none;
    
}
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="container"><br><br>
    <?php 

    session_start();
    
    include "config.php"; 
    if($conn){ ?>
      <h1><?php  echo "database connected";  ?></h1><br><br>
    <?php }
    else{ ?>
       <h1><?php echo "database is not connected"; ?><h1>
   <?php }
    $sql = "SELECT * FROM profile1";
    $result = mysqli_query($conn,$sql) or die("query unsuccessful");      
    
    
        if(mysqli_num_rows($result)> 0){
                
    
    ?>
    <button style="background-color:skyblue; color:white; font-size:20px;padding:15px; font-weight:500; border-radius:10%; border:none;"><a href="add.php">Add User</a></button>    
    <table cellpadding= "10px">
        <thread>
            <th>ID</th>  
            <th>NAME</th>
            <th>COURSE</th>
            <th>ACTION</th>
            
        </thread>
   
    <tbody>
        <?php 
            while($row = mysqli_fetch_assoc( $result)){
        ?>
        <tr> 
            <td><?php echo $row['sid']?></td>
            <td><?php echo $row['sname']?></td>
            <td><?php echo $row['scourse']?></td>
            <td><button class="submit"><a href='edit.php?id=<?php echo $row['sid']?>'>edit</a></button>
            <button class="submit"><a href='deleteInLine.php?id=<?php echo $row['sid']?>'>delete</a></button>
        </td>
            
            </tr> 
           <?php } ?>
            </tbody>
            </table>

       <?php } else {
           echo "<h2>no records found</h2>";
       }
       mysqli_close($conn); 
       
       ?>
</div>
        
</body>
</html> 