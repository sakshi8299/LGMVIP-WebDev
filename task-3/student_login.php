<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="login.css">

</head>
<body>
    
<div class="container">

<header id="showcase">
    <h1>STUDENT  Login Page </h1>
    <p>student can login here</p>

    <form action="" method="post">
  
   <input type="text" name="email" placeholder="Email" required><br style="height:10px">
   <input type="password" name="password" placeholder="password" required><br>
   <input type="submit" class="button" name="submit">

</form>

<?php
  session_start();
    if(isset($_POST['submit'])){
       $connection=mysqli_connect("localhost","root","sakshi");
       $db=mysqli_select_db($connection,"sms");
       $query="select * from students where email='$_POST[email]'";
       $query_run=mysqli_query($connection,$query);
       while($row=mysqli_fetch_assoc($query_run)){
         if($row['email']==$_POST['email']){
           if($row['password']==$_POST['password']){

            $_SESSION['email']=$row['email'];
            $_SESSION['name']=$row['name'];
            //  echo "LOGIN SUCCESFULL";
          
            header("Location:student_dashboard.php");

           }
           else{
             echo "wrong credentials";
           
           }

         }
       }
    }

  
 ?>

</header>
 
 
 
   
  
</div>


</body>
</html>