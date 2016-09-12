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
    // function makeTitleCase($input_title)
    //    {
    //        return ucfirst($input_title);
    //    }
      }


?>
