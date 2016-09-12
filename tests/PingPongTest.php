<?php
  require_once "src/PingPongGen.php";

  class PingPongTest extends PHPUnit_Framework_TestCase
  {
      function test_print_numbers()
      {
        $test_PingPongGen = new PingPongGen;
        $input = 5;

        $result = $test_PingPongGen->listNumbers($input);

        $this->assertEquals([1,2,3,4,5], $result);
      }


  }

 ?>
