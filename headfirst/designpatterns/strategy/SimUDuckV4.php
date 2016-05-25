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

  public function fly(){
    echo "<pre>
       .-.  .---.  .-.
      /   `'`. .'`'   \
     / .''___ U ___``. \
    /.'     /---\     `.\
    </pre>";

  }

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

class Rubber extends Duck {

  function __construct() {
  }

  public function display(){
    echo " <pre>Rubber   
   __ _
  /  ('< Squeak!!
  \__/
   L\_

    </pre>";

  }

  public function quack(){
    echo "Rubber hace Squeak!!";
  }

  public function fly(){
    echo "Rubber no puede volar!!";
  }
}

class Decoy extends Duck {

  function __construct() {
  }

  public function display(){
    echo " <pre>Decoy   >*\
         ((\
       ___,,\___
       ------.--

    </pre>";

  }

  public function quack(){
  }

  public function fly(){
  }
}

class SimUDuckSimulator {
    public function start(){
        $mallard = new Mallard();
        $this->doDuckThings($mallard);
        $redHead = new RedHead();
        $this->doDuckThings($redHead);
        $rubber = new Rubber();
        $this->doDuckThings($rubber);
        $decoy = new Decoy();
        $this->doDuckThings($decoy);
    }

    public function doDuckThings($duck){
        echo "<hr>";
        $duck->display();
        $duck->fly();
        $duck->quack();
        $duck->swim();
    }
}

$duckSimulator = new SimUDuckSimulator();
$duckSimulator->start();
