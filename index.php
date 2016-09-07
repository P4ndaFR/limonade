<DOCTYPE html>
<html>
<head>
	<title>Limonade Test Page</title>
</head>
<body>
<?php
require_once 'lib/limonade.php';
dispatch('/', 'hello');
  function hello()
  {
      return 'Hello world!';
  }
run();
?>
</body>
