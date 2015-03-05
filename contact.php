<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>phpサンプル</title>
</head>


<body>

<p><?php echo 'Hello , World!' ?></p>
<?php echo htmlspecialchars($_POST['message']); ?>
</body>
</html>