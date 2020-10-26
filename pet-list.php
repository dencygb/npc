<html>
  <head>
      <title> Pet Database</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
      <link rel="stylesheet" href="css/style.css">
  
      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  
      <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top ">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./index.php"><img class="main-logo" src="images/logo.jpg"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right ">
            <li><a href="./gallery.php">GALLERY</a></li>
            <li><a href="./index.php#contact">CONTACT</a></li>
            <li><a href="./index.php#about">ABOUT</a></li>
            <li><a href="./pet-list.php">DATABASE</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
        <h1 class="display-4">NPC Pet Database</h1>
        <p class="lead">Founded in 90s, we have a huge database of pets in Manchester.</p>
        </div>
    </div>
    <div class="container padding-50">
        
        <form class="form" method="GET" action="pet-list.php">
            <div class="row">
                <div class="col-sm-4">
                    <input type="text" class="form-control services-form" name="name" placeholder="Name of the pet" value="<?=($_GET['name'] ? $_GET['name'] : '')?>" >
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control services-form" name="breed" placeholder="Breed of the pet"value="<?=($_GET['breed'] ? $_GET['breed'] : '')?>" >
                </div>
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-default btn-lg about_button">Search</button>
                </div>
            </div>
        </form>
        
</div>
  <div class="container padding-50">
<?php
// Report all errors
error_reporting(E_ALL);
$servername = "localhost";
$username = "root";
$password = "test1234";
$dbname = "npc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name_search = false;
$breed_search = false;
$query = "SELECT * FROM pet";
    if(isset($_GET['name']) && $_GET['name']!=''){
        $name_search = true;
        $query .= ' WHERE name="'.$_GET['name'].'"';
    }
        
    if(isset($_GET['breed']) && $_GET['breed']!='') {
        $breed_search = true;
        $query .= ' WHERE breed="'.$_GET['breed'].'"';
    }
        
    if($name_search && $breed_search){
        $query = "SELECT * FROM pet";
        $query .= ' WHERE breed="'.$_GET['breed'].'"';
        $query .= ' AND name="'.$_GET['name'].'"';
    }
//print_r($query); die;
    $result = $conn->query($query);
  
    if ($result->num_rows > 0) {
        // output data of each row
        echo "     
        <table class='table table-bordered'>
        <thead class='danger'>
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Breed</th>
            </tr>
        </thead>
        <tbody>";
        while($row = $result->fetch_assoc()) {

        echo "
                <tr>
                <td>".$row['id']."</td>
                <td>".$row['name']."</td>
                <td>".$row['age']."</td>
                <td>".$row['breed']."</td>
                </tr>

        ";

        }     
        echo
        " </tbody>
            </table>
        </div>";
    } else {
        echo "No results";
    }
    $conn->close();     
    ?>
  </div>
          <footer class="container-fluid text-center bg-4">
          <a href="#myPage" title="To Top">
            <span class="glyphicon glyphicon-chevron-up"></span>
          </a>
          <p>Copyright 2020 @ <a href="#" class="npc_link">Noahs Pet Cinic</a></p>
        </footer> 
</body>