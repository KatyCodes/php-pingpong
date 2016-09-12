<?php

  class PingPongGen
  {
    private $input;

    function getInput()
    {
      return $this->input;
    }

    function setInput()
    {
      $this->input = $input;
    }

    function save()
        {
          array_push($_SESSION['numbersArray'], $this);
        }

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
      return implode(", ", $listNumbers);
    }
  }
?>
