<html>
<head><title>Office Depot</title>
<style>
f1 {text-align: center;}
</style>
</head>
<f1>
<body style="background-color:Tomato;" >
<h1 style="color:white; font-size:35px; text-align:center " >
Search Office Depot
</h1>
<form method="GET" action="unsecstock.php">
<input type="text" name="name" size=70>
<input type="submit" value="Submit">
<f1>
<section>
  <img  src="pencil2.jpg" class="mySlides" style="display: block; margin-left: auto;margin-right: auto; width: 50%;">
  <img  src="pen.jpg" class="mySlides" style="display: block; margin-left: auto;margin-right: auto; width: 50%;"    >
  <img  src="ruler.jpg" class="mySlides" style="display: block; margin-left: auto;margin-right: auto; width: 50%;"   >
</section>
</f1>
<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script>
</form>
</body>
<f1>
</html>


<?php 
include 'dbConn.php';

$name = $_GET["name"];


$query = "select * from stock where name =\"" .$name."\"" ;
//$query = "select * from stock where prodid =" . $name ;

//echo $query;

$rset = $conn->query($query);

while($row = $rset->fetch_assoc()){

$id = $row['prodid'];
$prodname = $row['name'];
$price =$row['price'];
$stock =$row['stock'];

print "Product ID: $id, Name: $prodname, Price: $$price, Number in Stock: $stock <br>";
}


$rset->close();
$conn->close();


?>

