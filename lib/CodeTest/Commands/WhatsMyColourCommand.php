<?php

namespace CodeTest\Commands;

use CodeTest\Commands\CommandInterface;

/**
 * Whats My Colour Command
 *
 * @author Dave Ashenden
 */
class WhatsMyColourCommand implements CommandInterface {

  public function run ($params = []) {
    return "pink";
  }

}
