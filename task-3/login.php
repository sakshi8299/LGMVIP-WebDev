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
    <h1> student management system </h1>
    <p>welcome to the student management system of IIT ISM Dhanbaad</p>

    <form action="" method="post">
  
   <input type="submit" name="admin_login" class="button" value="ADMIN login">

   <input type="submit" name="student_login" class="button" value="STUDENT login">

</form>

 <?php
    if(isset($_POST['admin_login'])){
       header("Location:admin_login.php");
    }

    if(isset($_POST['student_login'])){
      header("Location:student_login.php");
   }
 ?>

  </header>
  <section id="section-a">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit minus impedit maxime, quae soluta quis cumque perferendis! Doloribus quaerat, placeat iste facere, aspernatur ex cum veritatis laudantium, officia, non porro exercitationem incidunt quis dolore? Officia ex accusamus expedita optio, voluptatem minus? In maiores omnis aperiam earum ab molestiae beatae laborum blanditiis incidunt, delectus dolor, id voluptates optio aspernatur aliquam saepe atque labore? Tempore reprehenderit ab ipsam perspiciatis ut, provident perferendis sapiente in numquam blanditiis, enim, illo error nulla incidunt quos quidem ratione repellat ipsa molestias veritatis? Mollitia, fugit dolore commodi porro repudiandae atque, eos, ipsum quam culpa fuga deleniti quae.</p>
  </section>
  <!-- <section id="section-b">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit minus impedit maxime, quae soluta quis cumque perferendis! Doloribus quaerat, placeat iste facere, aspernatur ex cum veritatis laudantium, officia, non porro exercitationem incidunt quis dolore? Officia ex accusamus expedita optio, voluptatem minus? In maiores omnis aperiam earum ab molestiae beatae laborum blanditiis incidunt, delectus dolor, id voluptates optio aspernatur aliquam saepe atque labore? Tempore reprehenderit ab ipsam perspiciatis ut, provident perferendis sapiente in numquam blanditiis, enim, illo error nulla incidunt quos quidem ratione repellat ipsa molestias veritatis? Mollitia, fugit dolore commodi porro repudiandae atque, eos, ipsum quam culpa fuga deleniti quae.</p>
  </section> -->
 
   
  
</div>


</body>
</html>