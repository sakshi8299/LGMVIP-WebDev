<?php

$connection=mysqli_connect("localhost","root","sakshi");
$db=mysqli_select_db($connection,"sms");

$query="insert into students values('',$_POST[roll_no],'$_POST[name]','$_POST[father_name]',$_POST[class],'$_POST[mobile]','$_POST[email]','$_POST[password]','$_POST[remark]')";
// $query="update students set name='$_POST[name]',father_name='$_post[father_name]',mobile='$_post[mobile]', class=$_POST[class],email='$_POST[email]',password='$_POST[password]',remark='$_POST[remark]' where roll_no=$_POST[roll_no]";
// $query = "update students set name='$_POST[name]',father_name='$_POST[father_name]',class=$_POST[class],mobile='$_POST[mobile]',email='$_POST[email]',password='$_POST[password]',remark='$_POST[remark]' where roll_no = $_POST[roll_no]";

// echo $query;
$query_run=mysqli_query($connection,$query);

?>

<script type="text/javascript">

    alert("added succesfully......")
    window.location.href="admin_dashboard.php";
    </script>