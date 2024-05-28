<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
    body{
    background-color: lightgray;
    }


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


  .myDiv img {
    
  height: 400px;
  width: 100%;
  margin-top: 30px;
    
}

.card{
  display: inline-block;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  transition: 0.3s;
  margin-top: 40px;
  height: 20px;
  width: 50%;
  margin-right: 10px;
  }



.footer {
  position: relative;
  bottom: 0;
  width: 100%;
  white-space: nowrap;
  line-height: 60px;
  background-color: red;
  text-align: center;
  margin-top: 50px;

}




 </style>

</head>

<body>


    <ul>
        <li><a href="#home">School Management System</a></li>
        <li><a href="http://localhost/schoolmanagement/home/index.php">Home</a></li>
        <li><a href="http://localhost/schoolmanagement/students/index.php">Students</a></li>
        <li><a href="http://localhost/schoolmanagement/courses/index.php">Courses</a></li>
        <li><a href="http://localhost/schoolmanagement/enrollments/index.php">Enrollment</a></li>
        <li><a href="http://localhost/schoolmanagement/fees/index.php">Fees</a></li>
        <li><a href="http://localhost/schoolmanagement/report/reports.php">Reports</a></li>
        <li style="float:right"><a class="active" href="http://localhost/schoolmanagement/">Login</a></li>
    </ul>

    <h2>Welcome to xavier school, dear student please enroll now</h2>

    <div class="myDiv">
    <img src="/schoolmanagement/home/images/school.jpg" alt="Jane">
    </div>


<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="/schoolmanagement/home/images/user.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Maths</h5>
    <p class="card-text">Introduction to mathematics</p>
    <a class="btn btn-primary" href="http://localhost/schoolmanagement/enrollments/index.php" role="button">Enroll Now</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="/schoolmanagement/home/images/user.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Social Studies</h5>
    <p class="card-text">Introduction to social studies</p>
    <a class="btn btn-primary" href="http://localhost/schoolmanagement/enrollments/index.php" role="button">Enroll Now</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="/schoolmanagement/home/images/user.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Science</h5>
    <p class="card-text">Social Science.</p>
    <a class="btn btn-primary" href="http://localhost/schoolmanagement/enrollments/index.php" role="button">Enroll Now</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="/schoolmanagement/home/images/user.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Arts</h5>
    <p class="card-text">Introducing arts.</p>
    <a class="btn btn-primary" href="http://localhost/schoolmanagement/enrollments/index.php" role="button">Enroll Now</a>
  </div>
</div>





<footer class="border-top footer text-white text-center">
<div class="container">
       Copyright &copy;schoolmanagement
        
</div>

</footer>





</body>

</html>