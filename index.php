<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // global variation
   global $var1;   
   function fprint(){
          $var1="global variation.";  
  $var2="This is a";
  echo"$var2"."&nbsp"."$var1";
   }
   fprint();
      function fprint2(){
          //rewrite var1;
          $var1="new global variation.";  
          //rewrite var2
  $var2="It is a";
  echo"<p>$var2"."&nbsp"."$var1</p>";
   }
   fprint2();
        ?>
    </body>
</html>
