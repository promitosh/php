<!DOCTYPE html>
<meta charset="utf-8">
<head>
<title> php n html </title>


 <link rel="stylesheet" href="style.css">

</head>
<body>
<h1>
php file in html 
</h1>
<h2>What is a Scripting Language?</>
<p style="font-size:22px;padding:10px 50px 10px 1px;">


A script is a set of programming instructions that is interpreted at runtime.
A scripting language is a language that interprets scripts at runtime. Scripts are usually embedded into other software environments.

The code is usually executed without compiling
Server side scripts are interpreted on the server while client side scripts are interpreted by the client application.

PHP is a server side script that is interpreted on the server while JavaScript is an example of a client side script that is interpreted by the client browser. Both PHP and JavaScript can be embedded into HTML pages.
</p>
<p> html file save in php extension</p>
<?php

echo "<h1>How to write comment</h1>";echo "<br/>";
/*how to write comment in php */ 
//the server is usually configured to run PHP only for files with the .php extension.
/* constant declare  by using define function */
define ("HELO","Helllo Bangladesh");
echo constant("HELO"); echo "<br/>";
define("x",4000);
echo x;echo "<br/>";
/* operator plus, subtraction,multiplication,dividision, modulus and expression */
$a=20+80*2;
/* piece of code is termedexpression */
echo $a;
/*increment and decrement */
$x=5;
$x++;

cho$x;
echo "<br/>";$y=5;
$y--;
echo $y; echo "<br/>";
/*modulus */
$z=100%9;
echo $z;echo "<br/>";
echo "<p>plus Equal operator</p>";echo "<br/>";
$a=3;
$a+=6; /* $a= $a plus 6*/
echo $a;echo "<br/>";
echo "minus equal";
$c=3;
$c-=6; /* $c= $c minus 6*/
echo "<br/>";
echo $c;
$d=3;
$d/=3; /* $d= $d divide by 3*/
echo "<br/>";
echo $d;
$d=3;
$d*=30; /* $d= $d divide by 6*/
echo "<br/>";
echo $d;
$d=31;
$d.=33; /* concatanation equal*/
echo "<br/>";
echo $d;
$d=73;
$d%=9; /* modulus*/
echo "<br/>";
echo $d;
echo "<br/>";
echo "comparison op";
echo "<br/>";
$y=73;
$y==9; /* */
echo $y;

?>

</body>
</html>