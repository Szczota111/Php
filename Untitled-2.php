<?php
class dwieliczby{
   protected $a;
   protected $b;

   function __construct($p1,$p2) 
   {
    $this->a=$p1;
    $this->b=$p2;
   }
   public function setA($a)
   {
      $this->a=$a;
   }
   public function getA()
   {
      return $this->a;
   }
   public function suma()
   {
      return $this->a+$this->b;
   }
   protected function pokaz_a()
   {
      return $this->a;
   }
    public function __destruct()
    {
      echo "Obiekt został zniszczont<br>";
    }
}
class trzyliczby extends dwieliczby{
   private $c;
   
   function __construct($p1,$p2,$p3)
   {
      parent::__construct($p1,$p2);
      $this->c=$p3;
   }

   public function suma()
      {
         return $this->a+$this->b+$this->c;
      }

      public function drukuj_a()
      {
        return $this->pokaz_a();
      }
}
      $c=new trzyliczby(3,4,7);

      echo $c->suma()."<br>";
      echo $c->getA()."<br>";

      unset($c);

?>