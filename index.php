<html>
 <head>
 <title>This is php</title>
 </head>
 <body>
 <h2>This is PHP</h2>
 <h3>
 <?php
 $a = 3;
 $b = 5;
 echo $a + $b; ?>
 </h3>
 <h2>Sum of N numbers (sum of 1 to 10)</h2>
 <h3>
 <?php
 $sum = 0;
 $c=1;
 while($c<=10)
 {
 $sum=$sum + $c;
 $c++;
 }
 echo $sum;
 ?>
 </h3>
<h2>Render page for 20 times</h2>
 <?php
 $c = 1;
 while ($c <= 20) {
 echo "<p>".$c."This is p tag</p>";
 $c++;
 }
 ?>
 <h2>Display Odd nums in 1-10 range</h2>
 <h3>
 <?php
 $c = 1;
 while ($c <= 10) {
 if ($c%2!=0) {
 echo $c." ";
 }
 $c++;
 }
 ?>
 </h3>
 <h2>Send HTML data to PHP</h2>
 <form action="form_action.php" method="post">
 <input type="text" placeholder="Enter name" name="name">
 <input type="submit" value="Send">
 </form>
 </body>
</html>
