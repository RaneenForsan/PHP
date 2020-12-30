

<!doctype html>

<html>
<head>
</head>
    
<body>
    
    <table border="1" cellpadding="5" width="600" bgcolor="#C111BC" style="color:white;font-size:30px;text-align:center;">
    <tr>
    <td>Even</td>
    <td>Odd</td>
    <td>*5</td>
    <td>*10</td>
    </tr>
    
<!--Start Table in way 1-->    
<?php
  echo "<tr>"; 
  echo "<td>";
   for($i=1;$i<=50;$i++){
       
       if($i%2==0){
        echo $i."<br>"."<br>";}

   }
  echo "</td>";
        

  echo "<td>";
   for($i=1;$i<=50;$i+=2){
        echo $i."<br>"."<br>";

   }
  echo "</td>";
        
        
        
        
  echo "<td style='vertical-align:top;'>";
   for($i=1;$i<=50;$i++){
       if($i%5==0){
        echo $i."<br>"."<br>";
}
   }
  echo "</td>";
        
        

        
        
  echo "<td style='vertical-align:top;'>";
   for($i=1;$i<=50;$i++){
              if($i%10==0){
        echo $i."<br>"."<br>";
}

   }
  echo "</td>";
   echo "</tr>"; 

       
       
       
    
    echo "<br>"."<br>"."<br>";
    
?>
        
<!--Start Table in way 2-->    
<table border="1" cellpadding="5" width="600" bgcolor="#C111BC" style="color:white;font-size:30px;text-align:center;">
<tr>
    <td>Even</td>
    <td>Odd</td>
    <td>*5</td>
    <td>*10</td>
    
</tr>
<?php
   for($i=1;$i<=50;$i++){
    
      
        echo "<tr>";
        echo "<td>";
        if($i%2==0){
            echo $i;
        }
        echo "</td>";

        echo "<td>";
        if($i%2!=0){
            echo $i;
        }
        echo "</td>";
       
       
        echo "<td>";
        if($i<=10){
            echo $i*5;
        }
        echo "</td>";
      
       echo "<td>";
        if($i<=10){
            echo $i*10;
        }
        echo "</td>";
       
        echo "</tr>";
       
       
   }

    echo "<br>"."<br>"."<br>";
    
?>
    
     </table>
   
    
    

    
    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
</table>
</body>
</html>
