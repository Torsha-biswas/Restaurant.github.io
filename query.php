<?php
include("connection3.php");
error_reporting(0);
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: blue;
}

.container {
  border-radius: 5px;
  background-color: yellow;
  padding: 20px;
}
</style>
</head>
<body>

<h3>Write your query here</h3>

<div class="container">
  <form action="">
    <label for="fname">Full Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">


    <label for="country">Phone no</label>
    <input type="text" id="phoneno" name="phone" placeholder=
"Ex:897XXX..">

    <label for="subject">Query</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
<?php
$fn=$_GET['firstname'];
$pn=$_GET['phone'];
$sub=$_GET['subject'];
$query="INSERT INTO query VALUES ('$fn', '$pn', '$sub')";
$data3=mysqli_query($conn3, $query);
if($data3)
{
	//echo "data inserted into db";
}
else
{
	echo "failed";
}
?>

