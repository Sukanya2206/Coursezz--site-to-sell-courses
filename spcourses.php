<?php
include_once('dbcon.php');
session_start();
$cp = $_SESSION['login'];
$fid = $_SESSION['id'];
if (isset($_POST['enroll'])) {
   
   $course = $_POST['enroll'];
   //echo "<script>alert('Successfully $course enrolled');</script>";
   $query = mysqli_query($conn, "insert into courses(uid,username,courses) values('$fid','$cp','$course')");
   
   if ($query) { 
      echo "<script>alert('Successfully enrolled to: $course');</script>";
      //header('location:login.php');
   }
}

?>
<!DOCTYPE html>

<head>
   <link rel="stylesheet" href="style1.css">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,300;1,400&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
   <!-------------------facilities------------------->

   <section class="facilities">
      <div class="center-text">
      <a href="table.php"><h3 style="float: right">My Courses</h3></a>
         <h1>Courses We Offer </h1> 
         <p>Learn the latest skills like Introduction to Statistics, Financial Markets, Introduction to Psychology, and more. Gain relevant, job-ready skills from top universities & companies. Start learning today.</p>
         <form name="cp" method="post">
            <div class="row">
               <div class="facilities-col">
                  <img src="img/im.jpeg">
                  <h3>Introduction to Statistics</h3>
                  <button class="btn-primary" type="submit" name="enroll" value="Introduction to Statistics">Enroll</button>

               </div>

               <div class="facilities-col">
                  <img src="img/i2.jpeg">
                  <h3>Financial Markets</h3>
                  <button type="submit" name="enroll" value="Financial Market">Enroll</button>
               </div>

               <div class="facilities-col">

                  <img src="img/i3.jpeg">
                  <h3>Introduction to Psychology</h3>
                  <button type="submit" name="enroll" value="Introduction to Psychology">Enroll</button>
               </div>
            </div>


            <div class="row">
               <div class="facilities-col">
                  <img src="img/4.jpeg">
                  <h3>Devops</h3>
                  <button type="submit" name="enroll" value="Devops">Enroll</button>
               </div>

               <div class="facilities-col">
                  <img src="img/5.jpeg">
                  <h3>Financial Markets</h3>
                  <button type="submit" name="enroll" value="Financial Market">Enroll</button>
               </div>

               <div class="facilities-col">
                  <img src="img/6.jpeg">
                  <h3>C++</h3>
                  <button type="submit" name="enroll" value="C++">Enroll</button>
               </div>
            </div>


            <div class="row">
               <div class="facilities-col">
                  <img src="img/7.jpeg">
                  <h3>Softskill</h3>
                  <button type="submit" name="enroll" value="Softskill">Enroll</button>
               </div>

               <div class="facilities-col">
                  <img src="img/8.jpeg">
                  <h3>AIML</h3>
                  <button type="submit" name="enroll" value="AIML">Enroll</button>
               </div>

               <div class="facilities-col">
                  <img src="img/25.jpeg">
                  <h3>Physics</h3>
                  <button type="submit" name="enroll" value="Physics">Enroll</button>
               </div>
            </div>


            <div class="row">
               <div class="facilities-col">
                  <img src="img/5.jpeg">
                  <h3>Cloud</h3>
                  <button type="submit" name="enroll" value="Cloud">Enroll</button>
               </div>

               <div class="facilities-col">
                  <img src="img/9.jpeg">
                  <h3>PHP</h3>
                  <button type="submit" name="enroll" value="PHP">Enroll</button>
               </div>

               <div class="facilities-col">
                  <img src="img/11.png">
                  <h3>Marketing</h3>
                  <button type="submit" name="enroll" value="Marketing">Enroll</button>
               </div>
            </div>


            <div class="row">
               <div class="facilities-col">
                  <img src="img/13.jpeg">
                  <h3>MsOffice</h3>
                  <button type="submit" name="enroll" value="MsOffice">Enroll</button>
               </div>

               <div class="facilities-col">
                  <img src="img/14.jpeg">
                  <h3>Spoken English</h3>
                  <button type="submit" name="enroll" value="Spoken English">Enroll</button>
               </div>

               <div class="facilities-col">
                  <img src="img/15.jpeg">
                  <h3>Angular</h3>
                  <button type="submit" name="enroll" value="Angular">Enroll</button>
               </div>
            </div>


            <div class="row">
               <div class="facilities-col">
                  <img src="img/16.png">
                  <h3>Javascript</h3>
                  <button type="submit" name="enroll" value="Javascript">Enroll</button>
               </div>

               <div class="facilities-col">
                  <img src="img/17.jpeg">
                  <h3>Robotics</h3>
                  <button type="submit" name="enroll" value="Robotics">Enroll</button>
               </div>

               <div class="facilities-col">
                  <img src="img/18.jpeg">
                  <h3>HTML5</h3>
                  <button type="submit" name="enroll" value="HTML5">Enroll</button>
               </div>
            </div>


            <div class="row">
               <div class="facilities-col">
                  <img src="img/19.png">
                  <h3>Introduction to Python</h3>
                  <button type="submit" name="enroll" value="Introduction to Python">Enroll</button>
               </div>

               <div class="facilities-col">
                  <img src="img/20.jpeg">
                  <h3>Mathematics</h3>
                  <button type="submit" name="enroll" value="Mathematics">Enroll</button>
               </div>

               <div class="facilities-col">
                  <img src="img/21.png">
                  <h3>Introduction to PHP</h3>
                  <button type="submit" name="enroll" value="Introduction to PHP">Enroll</button>
               </div>
            </div>


            <div class="row">
               <div class="facilities-col">
                  <img src="img/22.jpeg">
                  <h3>Introduction to java</h3>
                  <button type="submit" name="enroll" value="Introduction to Java">Enroll</button>
               </div>

               <div class="facilities-col">
                  <img src="img/23.jpeg">
                  <h3>Java</h3>
                  <button type="submit" name="enroll" value="Java">Enroll</button>
               </div>

               <div class="facilities-col">
                  <img src="img/24.jpeg">
                  <h3>MySql</h3>
                  <button type="submit" name="enroll" value="MySql">Enroll</button>
               </div>
            </div>

            <div class="row">
               <div class="facilities-col">
                  <img src="img/25.jpeg">
                  <h3>SQL Basic</h3>
                  <button type="submit" name="enroll" value="SQL Basic">Enroll</button>
               </div>

               <div class="facilities-col">
                  <img src="img/16.png">
                  <h3>Photoshoppy</h3>
                  <button type="submit" name="enroll" value="Photography">Enroll</button>
               </div>

               <div class="facilities-col">
                  <img src="img/13.jpeg">
                  <h3>Cad</h3>
                  <button type="submit" name="enroll" value="Cad">Enroll</button>
               </div>
            </div>

            <div class="row">
               <div class="facilities-col">
                  <img src="img/19.png">
                  <h3>Drawing</h3>
                  <button type="submit" name="enroll" value="Drawing">Enroll</button>
               </div>

               <div class="facilities-col">
                  <img src="img/10.jpeg">
                  <h3>Statistics</h3>
                  <button type="submit" name="enroll" value="Statistics">Enroll</button>
               </div>

               <div class="facilities-col">
                  <img src="img/14.jpeg">
                  <h3>Graphics Design</h3>
                  <button type="submit" name="enroll" value="Graphics Design">Enroll</button>
               </div>
            </div>
            <div class="row">
               <div class="facilities-col">
                  <img src="img/12.png">
                  <h3>Ui/Ux</h3>
                  <button type="submit" name="enroll" value="Ui/Ux">Enroll</button>
               </div>

               <div class="facilities-col">
                  <img src="img/im.jpeg">
                  <h3>Data Science</h3>
                  <button type="submit" name="enroll" value="Data Science">Enroll</button>
               </div>

               <div class="facilities-col">
                  <img src="img/i2.jpeg">
                  <h3>Cyber Security</h3>
                  <button type="submit" name="enroll" value="Cyber Security">Enroll</button>
               </div>


            </div>
         </form>
   </section>

</body>

</html>