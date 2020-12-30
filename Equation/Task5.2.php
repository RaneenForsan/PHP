<?php

  $aa = $_POST['a'];
  $bb = $_POST['b'];
  $cc = $_POST['c'];
  $x= ($cc-$bb)/$aa ;

if($aa == 0)
{
echo "هناك خطأ تأكد من المعادلة" ;
}

else {

$xx= $x ;
}
echo "X="." ".$xx."<br>"; 
?>


<?php

  $b = $_POST['bb'];
  $c = $_POST['cc'];
  $z= ($c-$b);



echo "x="." ".$z."<br>"; 

?>