<?php
  $star=10;
  $char;
  for ($a=$star;$a>0;$a--){
    if(
        ($a%2)==0)
        {
            $char="+";
        }
        else{
            $char="*";
        }
        for($b=$star;$b>=$a;$b--){
            echo $char;
        }
        echo "<br>";
    }
?>