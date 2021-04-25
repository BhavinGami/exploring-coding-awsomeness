<?php 

session_start();
$_SESSION['uname']=="";


session_unset();
$_SESSION['action1']="You have logged out successfully..!";
?>
<script language="javascript">
document.location="login.php";
</script>

