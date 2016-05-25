<?php
interface Flyable {
    public function fly();
}

interface Quackable {
    public function quack();
}


abstract class Duck{

  function __construct() {
  }

	public function swim(){
		echo "todos Nadan!!";
	}

	abstract protected function display();

}


class Mallard extends Duck implements Flyable, Quackable{

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

  public function fly(){
    echo "<pre>
       .-.  .---.  .-.
      /   `'`. .'`'   \
     / .''___ U ___``. \
    /.'     /---\     `.\
    Mallard volando </pre>";
  }

  public function quack(){
    echo "Mallard Quack";
  }

}

class RedHead extends Duck implements Flyable, Quackable{

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

  public function fly(){
    echo "<pre>
       .-.  .---.  .-.
      /   `'`. .'`'   \
     / .''___ U ___``. \
    /.'     /---\     `.\
    RedHead volando </pre>";
  }

  public function quack(){
    echo "RedHead Quack";
  }

}

class Rubber extends Duck implements Quackable{

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
        try{
          $duck->display();
          $duck->fly();
          $duck->quack();
          $duck->swim();
        }catch(Exception $e){
          echo "Error" . $e->getMessage();
        }
      }
}

$duckSimulator = new SimUDuckSimulator();
$duckSimulator->start();
