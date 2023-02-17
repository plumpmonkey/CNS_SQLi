<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="css/style_home.css" type="text/css" rel="stylesheet">

  <!-- Browser Tab title -->
  <title>SQLi Lab</title>
</head>

<body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #1f808c;">
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#" ><img src="UWE_Logos.png" style="height: 60px; width: 194px;" alt="UWE"></a>
      <ul class='navbar-nav mr-auto mt-2 mt-lg-0' style='padding-left: 30px;'>
        <li class='nav-item '>
          <a class='nav-link' href='unsafe_login.php'>Edit Profile</a>
        </li>
        <li class='nav-item active'>
          <a class='nav-link' href='unsafe_edit_frontend.php'>Edit Profile</a>
        </li>
    
      </ul>
      <button onclick='logout()' type='button' id='logoffBtn' class='nav-link my-2 my-lg-0'>Logout</button>
    </div>
  </nav>

  <?php
  session_start();
  $uname = $_SESSION['name'];
  // Function to create a sql connection.
  function getDB() {
    $dbhost="172.24.0.5";
    $dbuser="uwe";
    $dbpass="uwe";
    $dbname="users";

    // Create a DB connection
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error . "\n");
    }
    return $conn;
  }

  // create a connection
  $conn = getDB();
  // Sql query to authenticate the user
  $sql = "SELECT id, name, eid, salary, birth, PhoneNumber, Email 
  FROM credentials
  WHERE name= '$uname'";
  if (!$result = $conn->query($sql)) {
    die('There was an error running the query [' . $conn->error . ']\n');
  }
  /* convert the select return result into array type */
  $return_arr = array();
  while($row = $result->fetch_assoc()){
    array_push($return_arr,$row);
  }

  /* convert the array type to json format and read out*/
  $json_str = json_encode($return_arr);
  $json_a = json_decode($json_str,true);
  $name = $json_a[0]['name'];
  $eid = $json_a[0]['eid'];
  $phoneNumber = $json_a[0]['PhoneNumber'];
  $pwd = $json_a[0]['Password'];
  $email = $json_a[0]['Email'];
  ?>

  <div class="container  col-lg-4 col-lg-offset-4 text-center" style="padding-top: 50px; text-align: center;">
    <?php
    session_start();
    $name=$_SESSION["name"];
    echo "<h2><b>$name's Profile Edit</b></h1><hr><br>";
    ?>
    <form action="unsafe_edit_backend.php" method="get">
      <div class="form-group row">
        <label for="Email" class="col-sm-4 col-form-label">Email</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="Email" name="Email" placeholder="Email" <?php echo "value=$email";?>>
        </div>
      </div>
      <div class="form-group row">
        <label for="PhoneNumber" class="col-sm-4 col-form-label">Phone Number</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="PhoneNumber" name="PhoneNumber" placeholder="PhoneNumber" <?php echo "value=$phoneNumber";?>>
        </div>
      </div>
      <div class="form-group row">
        <label for="Password" class="col-sm-4 col-form-label">Password</label>
        <div class="col-sm-8">
          <input type="password" class="form-control" id="Password" name="Password" placeholder="Password">
        </div>
      </div>
      <br>
      <div class="form-group row">
        <div class="col-sm-12">
          <button type="submit" class="button btn-info btn-lg btn-block">Save</button>
        </div>
      </div>
    </form>
    <br>
  </div>
  <script type="text/javascript">
  function logout(){
    location.href = "logoff.php";
  }
  </script>
</body>
</html>