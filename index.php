<!DOCTYPE html>
<html lang=hu dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HTML Tutorial</title>
  </head>
  <body>
    <h1>Háromszoros</h1>
    <?php
      $haromszoroz = new vegrehajt();
      $tagek = new tagek();
      $haromszoroz->ertek = 3;
      $haromszoroz->mennyiszer = 7;
      $haromszoroz->cmd_haromszoroz();
      $tagek->p_eleje();
      $haromszoroz->kiirat();
      $tagek->p_vege();
     ?>
  </body>
</html>
<?php

  class vegrehajt
  {
    public $ertek = 0;
    public $mennyiszer = 0;
    public function cmd_haromszoroz()
    {
        $this->ertek = $this->ertek * $this->mennyiszer;
    }
    public function kiirat()
    {
        echo $this->ertek;
    }
  }
  class tagek
  {

    public function p_eleje() {
      echo "<h2>";
    }
    public function p_vege() {
      echo "</h2>";
    }


  }


 ?>
