<?php
/**
 * Colour Test Case
 *
 * @author Dave Ashenden
 */

use CodeTest\Commands\WhatsMyColourCommand;

class WhatsMyColourCommandTest extends \PHPUnit_Framework_TestCase
{
  public function test_gets_my_colour()
  {
      $command = new WhatsMyColourCommand();
      $command_result = $command->run();

      $expected_result = "pink";

      $this->assertTrue($command_result == $expected_result);
  }
}
