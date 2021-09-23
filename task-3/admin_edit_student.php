<?php

$connection=mysqli_connect("localhost","root","sakshi");
$db=mysqli_select_db($connection,"sms");
// $query="update students set name='$_POST[name]',father_name='$_post[father_name]',mobile='$_post[mobile]', class=$_POST[class],email='$_POST[email]',password='$_POST[password]',remark='$_POST[remark]' where roll_no=$_POST[roll_no]";
$query = "update students set name='$_POST[name]',father_name='$_POST[father_name]',class=$_POST[class],mobile='$_POST[mobile]',email='$_POST[email]',password='$_POST[password]',remark='$_POST[remark]' where roll_no = $_POST[roll_no]";

$query_run=mysqli_query($connection,$query);

?>

<script type="text/javascript">

    alert("updated succesfully......")
    window.location.href="admin_dashboard.php";
    </script>