<?php

  class PingPongGen
  {
    function listNumbers($input)
    {
      $result = array();
      $x = 1;
      while($x <= $input){
        array_push($result,$x);
        $x++;
      }
      return $result;
    }

    function pingFunction ($listNumbers)
    {
      foreach($listNumbers as &$replacement) {
        if (($replacement % 3) == 0)
        {
           $replacement = "ping";
        }
      }
    return $listNumbers;
    }
  }
?>
