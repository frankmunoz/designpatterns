<?php

abstract class Duck{

  function __construct() {
  }

	public function quack(){
		echo "todos hacen Quack!!";
	}
	public function swim(){
		echo "todos Nadan!!";
	}

	abstract protected function display();

}


class Mallard extends Duck {

  function __construct() {
  }
	
  public function display(){
		echo "<pre> Mallard,~~.
      (  6 )-_,
 (\___ )=='-'
  \ .   ) )
   \ `-' /    hjw
~'`~'`~'`~'`~
		</pre>";
	}

}

class RedHead extends Duck {

  function __construct() {
	}

	public function display(){
		echo " <pre>RedHead,~~.
      (  6 )-_,
 (\___ )=='-'
  \ .   ) )
   \ `-' /    hjw
~'`~'`~'`~'`~
		</pre>";

	}
}

class SimUDuckSimulator {
    public static function main(){
        $mallard = new Mallard();
        $mallard->display();
        $mallard->quack();
        $mallard->swim();
        $redHead = new RedHead();
        $redHead->display();
        $redHead->quack();
        $redHead->swim();
    }

}

SimUDuckSimulator::main();