<!DOCTYPE html>
<html>
<body>

<?php
//header("Refresh: 3;");
echo "<h1>Hello World!</h1>";
echo "Hello world!<br>";
echo "This php website is served from ", gethostname(), "<br>";
echo "Contents of /opt <br>";
$data = scandir("/opt");
print_r($data);
?> 

</body>

</html> 
