<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

body {
	font-family:"Open Sans", Helvetica, Arial, sans-serif;
	font-weight:300;
	font-size: 12px;
	line-height:30px;
	color:#777;
	background:#0CF;
}
</style>
<body>
<?php

$link = mysqli_connect("localhost", "root", "", "emails");
 if(isset($_POST['submit'])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $query = "INSERT INTO userdata (username , useremail) VALUES ('$name','$email')";
    
    if (mysqli_query($link, $query, $resultmode = MYSQLI_STORE_RESULT)) {
        echo "<h1> welcome ".$name."</h1>";
        
    } else {
        echo "error" . "<br>";
    }
 }
?>
    
</body>
</html>