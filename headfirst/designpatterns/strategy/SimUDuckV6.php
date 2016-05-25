<?php
namespace EncapsulatedFlyBehavior{

  interface FlyBehavior {
      public function fly();
  }

  class FlyWithWings implements FlyBehavior{
      public function fly(){
        echo "<pre>
           .-.  .---.  .-.
          /   `'`. .'`'   \
         / .''___ U ___``. \
        /.'     /---\     `.\
        volando </pre>";

      }
  }

  class FlyNoWay implements FlyBehavior{
      public function fly(){
        echo "<pre>If I could fly!!  U_U </pre>";
      }
  }

}

namespace EncapsulatedQuackBehavior{
  interface QuackBehavior {
      public function quack();
  }

  class Quack implements QuackBehavior{
      public function quack(){
      echo " <pre>Rubber   
     __ _
    /  ('< Quack!!
    \__/
     L\_

      </pre>";
      }
  }

  class Squeak implements QuackBehavior{
      public function quack(){
      echo " <pre>Rubber   
     __ _
    /  ('< Squeak!!
    \__/
     L\_

      </pre>";
      }
  }

  class MuteQuack implements QuackBehavior{
      public function quack(){
      echo " <pre>Rubber   
         ?
     __ _
    /  ('< 
    \__/
     L\_

      </pre>";
      }
  }
}


namespace Client{
  abstract class Duck implements \EncapsulatedFlyBehavior\FlyBehavior, \EncapsulatedQuackBehavior\QuackBehavior{

    private $flyBehavior;
    private $quackBehavior;

    function __construct() {
    }

  	public function swim(){
  		echo "todos los patos Nadan!!";
  	}

  	public abstract function display();

    public function performFly(){
      $this->flyBehavior->fly();
    }

    public function performQuack(){
      $this->quackBehavior->quack();
    }

    public function setQuackBehavior(\EncapsulatedQuackBehavior\QuackBehavior $quackBehavior){
      $this->quackBehavior = $quackBehavior;
    }

    public function setFlyBehavior(\EncapsulatedFlyBehavior\FlyBehavior $flyBehavior){
      $this->flyBehavior = $flyBehavior;
    }
  }


  class Mallard extends Duck{


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

  class RedHead extends Duck{

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

  class Rubber extends Duck{

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
      echo " <pre>Decoy     >*\
           ((\
         ___,,\___
         ------.--

      </pre>";

    }
    public function quack(){
      echo "Pato decorativo no hace quack!!";
    }

    public function fly(){
      echo "Pato decorativo no puede volar!!";
    }

  }
}

namespace simulator{
  class SimUDuckSimulator {
    public function start(){
      $mallard = new \Client\Mallard();
      $this->doDuckThings($mallard);
      $redHead = new \Client\RedHead();
      $this->doDuckThings($redHead);
      $rubber = new \Client\Rubber();
      $this->doDuckThings($rubber);
      $decoy = new \Client\Decoy();
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
}

