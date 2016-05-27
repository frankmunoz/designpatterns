Agregación:
Código PHP:
<?php 
class Dao { 
    function getSomething() { 
  
    } 
} 
  
class Model { 
    var $dao; 
    function Model (& $dao) { 
        $this->dao=& $dao; 
    } 
  
    function doSomething () { 
        $this->dao->getSomething(); 
    } 
} 
  
$dao=new Dao; 
  
$model=new Model($dao); 
$model->doSomething();


Composición:
Código PHP:
<?php 
class LinkWidget { 
  
} 
  
class View { 
    var $linkWidget; 
    var $page; 
    function View () { 
        $this->linkWidget=new LinkWidget; 
    } 
  
    function renderPage () { 
        $this->page=$this->linkWidget->display() 
    } 
} 
?>
