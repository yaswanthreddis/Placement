<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    .center-heading {
      display: flex;
      justify-content: center;
    }
    .center-card {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 80vh;
    }
    .custom-card {
      width: 90%;
      max-width: 500px;
      margin: 0 auto;
    }
    @media (max-width: 576px) {
      .center-card {
        min-height: 60vh;
      }
    }
  </style>
</head>
<?php
require("include/connect.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define variables and initialize with empty values
    $username = $password= "";
    $username_err = $password_err = "";

    // Validate email
    if (empty(trim($_POST["username"]))){
        $username_err = "Please enter your username.";
    } else {
        $username = $_POST["username"];
    }

    // Validate password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = $_POST["password"];
    }

    // Check for errors before preparing the SQL statement
    if (empty($username_err) && empty($password_err)) {
        // Prepare the SQL statement
        $stmt = $conn->prepare("SELECT * FROM admin WHERE username = ? AND password = ?");
        // Bind the parameters
        $stmt->bind_param("ss", $username, $password);
        // Execute the statement
        $stmt->execute();

        // Fetch the result
        $result = $stmt->get_result();
        
        // Check if the doctor exists
        if ($result->num_rows == 1) {
           
            
            session_start();
            
                header("location:home.php");
                exit(); 
        } else {
            echo"<script> alert('invalid Username or Password'); </script>";
        }
        // Close the statement
        $stmt->close();
    }
    else{

        echo"there was a error in validating the fields, try again....";
        exit();
    }
}
// Close the connection
$conn->close();
?>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12 center-heading">
        <h1 style="font-size: 50px;padding-top:30px;">Placement Cell</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 center-card">
        <div class="card custom-card">
          <div class="card-header">
            <h3>Login</h3>
          </div>
          <div class="card-body">
            <form method="post" action="">
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fas fa-user"></i>
                    </span>
                  </div>
                  <input type="text" id = "username" name="username" class="form-control" placeholder="Username">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fas fa-lock"></i>
                    </span>
                  </div>
                  <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                </div>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
