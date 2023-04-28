<?php
//to add student data to Studentdb 
//table studentinfo

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentdb";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//get data from form
if(isset($_POST['submit'])){
  $full_name = $_POST['full_name'];
  $portfolio_link = $_POST['portfolio_link'];

  $sql_add_student = "INSERT INTO studentinfo (full_name,portfolio_link) VALUES ('$full_name','$portfolio_link')";
  mysqli_query($conn,$sql_add_student);
}  

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>add student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .form_box{
            padding: 25px;
            margin-top: 20%;
            border-radius: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
    </style>
  </head>
  <body>
    <nav class="navbar" style="background-color: rgb(13, 84, 166);">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="images/uni_logo.png" alt="Logo" width="70" height="90" class="d-inline-block align-text-top">
          </a>
        </div>
      </nav>
      <div class="container w-25">
        <div class="form_box">
            <h3>Add MCA Students Batch 22-24</h3>
            <form action="#" method="post">
              <div class="mb-3">
                  <label for="full_name" class="form-label">Full Name:</label>
                  <input type="text" class="form-control" id="fullName" name="full_name">
                </div>
                <div class="mb-3">
                  <label for="portfolio_link" class="form-label">Portfolio Link:</label>
                  <input type="text" class="form-control" id="portfolioLink" name="portfolio_link">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>