<?php
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

$sql_get_students = "SELECT * FROM studentinfo";
$student_data = mysqli_query($conn, $sql_get_students);
$total = mysqli_num_rows($student_data);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>student data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
      table{
  border-collapse:collapse ;
  width: 100%;
  border: 2px solid black;
  margin-top: 10px;
}
th, td{
  text-align: left;
  padding: 8px;
  border: 1px solid black;
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
    <div class="container">
            <h1 class="text-center m-1">MCA Batch 2022-2024</h1>
          <table>
              <tr>
              <th>Student Name</th>
              <th>PortFolio Links</th>
              </tr>
              <?php
              if($total != 0){
                while($result_student = mysqli_fetch_assoc($student_data))
                {
                  echo "
                  <tr>
                        <td>".$result_student['full_name']."</td>
                        <td><a href='".$result_student['portfolio_link']."' target='_blank'>".$result_student['portfolio_link']."</a></td>

                  </tr>      
                  ";
                }
              }
              else {
                echo "NO RECORDS";
              }
              ?>
          </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>