<?php

abstract class House {

abstract public function getHouseName();
abstract public function getHouseSeat();
abstract public function getHouseMotto();

public function introduce() {
    print(
            "House " . $this->getHouseName() .
            " of " . $this->getHouseSeat() . " : \"" .
            $this->getHouseMotto() . "\"" . PHP_EOL);
            
    }

}
?>