<?php
if(isset($_POST["lessons"])){
$var=$_POST["lessons"];
}
else
{
$var=array("ve","ree","errrrr","erw");
}

$check =3;
$var2 = "<html>
<head></head>
<body>
<h1>THis is the header</h1>
<form action='http://localhost/lessons/index.php' method= 'POST'>
<input type='text' name = 'name'></input><br>

<b>What lesson do you want to learn</b><br>
<select name = 'lessons[]' size = '4' multiple>
<option value='mysql'>MySql</option>
<option value='webdev'>WebDev</option>
<option value='emf'>EMF</option>
<option value='mysql2'>Nosql</option>
</select>
<input type = 'submit' value = 'Submit'><br><br>
</body>
</html>
";
$var3=6;

/*
array_push($var,"billy");
array_pop($var);
*/
foreach($var as $index)
{
   
echo $index;
echo "<br>";
}
print_r($var);


if($var3==7){
echo $var+$var3;
}
elseif($var3==6)
{
echo $var2;
}
else 
{
echo "Abedewale you will be a good web developer in 3 months";
}
while($check<8)
{
echo $check."<br>";
$check++;
}

?>