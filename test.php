<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<script type="text/javascript" src="session.js"></script>
</head>
<body>
<script type="text/javascript">
	Session.set("counter", 123);
	var counter = Session.get("counter")
	
</script>
<?php
 $_SESSION['counter']="TEST";
echo $_SESSION['counter'];
?>
</body>
</html>