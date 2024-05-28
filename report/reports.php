<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Users</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <style>

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: blue;
  }
  
  li {
    float: left;
  }
  
  li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
  
  /* Change the link color to #111 (black) on hover */
  li a:hover {
    background-color: #133;
  }
       table, th, td {    
border: 1px solid black;  
margin-left: auto;  
margin-right: auto; 
margin-top: 30px; 
border-collapse: collapse;    
width: 500px;  
text-align: center;  
font-size: 20px;  
}  



body{
    text-align: center;
}


    </style>
</head>
<body>

    <ul>
        <li><a href="#home">Employee Management System</a></li>
        <li><a href="http://localhost/schoolmanagement/home/index.php">Home</a></li>
        <li><a href="http://localhost/schoolmanagement/students/index.php">Students</a></li>
        <li><a href="http://localhost/schoolmanagement/courses/index.php">Courses</a></li>
        <li><a href="http://localhost/schoolmanagement/enrollments/index.php">Enrollment</a></li>
        <li><a href="http://localhost/schoolmanagement/fees/index.php">Fees</a></li>
        <li><a href="http://localhost/employeemanagement/employees/report/reports.php">Reports</a></li>
        <li style="float:right"><a class="active" href="http://localhost/schoolmanagement/">Login</a></li>
    </ul>
    <h1>Search Enrollments</h1>
    <form method="post" action="">
        <input type="text" name="search" placeholder="Search...">
        <button type="submit" name="submit">Search</button>
    </form>

    

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "schooldb"; // Change to your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_POST['submit'])) {
        $search = $conn->real_escape_string($_POST['search']);
        
        $sql = "SELECT * FROM enrollment WHERE name LIKE '%$search%' OR course LIKE '%$search%'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table border='1'>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Course</th>
                        <th>EnrollDate</th>
                    </tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id"] . "</td>
                        <td>" . $row["name"] . "</td>
                        <td>" . $row["course"] . "</td>
                        <td>" . $row["enrolldate"] . "</td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
    }

    

    $conn->close();
    ?>


</body>
</html>
