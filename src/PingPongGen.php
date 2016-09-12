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
        if (($replacement % 15) == 0)
        {
           $replacement = "ping-pong";
        }
        elseif (($replacement % 3) == 0)
        {
           $replacement = "ping";
        }
        elseif (($replacement % 5) == 0)
        {
          $replacement = "pong";
        }
      }
      return $listNumbers;
    }
  }
?>
