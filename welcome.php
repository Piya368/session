<?php

$Username="admin";
$pwd="admin";


session_start();

if(isset($_SESSION['Username'])){

	echo "<h1> Welcome ".$_SESSION['Username']."</h1>"  ;

	echo "<a href='product.php'> Product </a><br>";

	echo "<br><a href='logout.php'><input type=button value=logout name=logout></a>";
}
else{
	if ($_POST['Username']==$Username && $_POST['pwd']==$pwd) {
		
		$_SESSION['Username']=$Username;

		echo "<script>location.href='welcome.php'</script>";
	}
	else{
		echo "<script>alert('Username or password incorrect!')</script>";

		echo "<script>location.href='index.php'</script>";
	}
}


