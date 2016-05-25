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
      echo " <pre>   
     __ _
    /  ('< Quack!!
    \__/
     L\_

      </pre>";
      }
  }

  class Squeak implements QuackBehavior{
      public function quack(){
      echo " <pre>   
     __ _
    /  ('< Squeak!!
    \__/
     L\_

      </pre>";
      }
  }

  class MuteQuack implements QuackBehavior{
      public function quack(){
      echo " <pre>   
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
  abstract class Duck {//implements \EncapsulatedFlyBehavior\FlyBehavior, \EncapsulatedQuackBehavior\QuackBehavior{

    private $flyBehavior;
    private $quackBehavior;

    function __construct() {
      echo "<hr>";
      $this->flyBehavior = new \EncapsulatedFlyBehavior\FlyNoWay();
      $this->quackBehavior = new \EncapsulatedQuackBehavior\MuteQuack();
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

  class RedHead extends Duck{

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

  class Rubber extends Duck{

    public function display(){
      echo " <pre>Rubber   
     __ _
    /  ('< Squeak!!
    \__/
     L\_

      </pre>";

    }
  }

  class Decoy extends Duck {

    public function display(){
      echo " <pre>Decoy     >*\
           ((\
         ___,,\___
         ------.--

      </pre>";

    }

  }
}

namespace simulator{
  class SimUDuckSimulator {
    public function start(){
      $mallard = new \Client\Mallard();
      $mallard->performFly();
      $mallard->setFlyBehavior(new \EncapsulatedFlyBehavior\FlyWithWings());
      $mallard->performFly();

      $donald = new \Client\Decoy();
      $donald->display();
      $donald->performQuack();
      $donald->setQuackBehavior(new \EncapsulatedQuackBehavior\MuteQuack());
      $donald->performQuack();
    }
  }

  $duckSimulator = new SimUDuckSimulator();
  $duckSimulator->start();
}

