<!DOCTYPE html>
<html lang=hu dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="design.css">
    <title>HTML Tutorial</title>
  </head>
  <body>
  <div class="container">
    <!--<div class="row">
      <div class="col">
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
       </div>
       <div class="col">
          <h1>Bemutatkozas</h1>
          <?php
          $bence = new nevjegykartya();
          $bence->nev="Bence";
          $bence->foglalkozas="Tanulo";
          $bence->idezet="Kis penz, kis foci";
          $bence->kartyaSzine="e718d5";
          $bence->kirajzol_nevjegykartya();
          ?>
        </div>
      </div> -->
      <div class="row">
          <div class="col-sm-2">
          </div>
          <div class="col-sm-4">
            <?php
              $lancia = new autok();
              $lancia->modellnev ="Lancia 2000 Berlina";
              $lancia->imgSzosz="img/lancia.png";
              $lancia->hengerek_szama = 4;
              $lancia->hengerek_terfogata = 1991;
              $lancia->teljesitmenye = 115;
              $lancia->legnagyobb_sebessege = 175;
              $lancia->fogyaztasa = 10.7;
              $lancia->kiir();
            ?>
          </div>
          <div class="col-sm-4">
            <?php
              $alfa = new autok();
              $alfa->modellnev ="Alfa Romeo 2000 Spider Veloce";
              $alfa->imgSzosz ="img/alfa.png";
              $alfa->hengerek_szama = 4;
              $alfa->hengerek_terfogata = 1962;
              $alfa->teljesitmenye = 133;
              $alfa->legnagyobb_sebessege = 195;
              $alfa->fogyaztasa = 11.9;
              $alfa->kiir();
            ?>
          </div>
          <div class="col-sm-2">
          </div>
        </div>
  </div>
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
  class nevjegykartya
  {
    public $nev = "";
    public $imgSzosz = "";
    public $foglalkozas="";
    public $idezet="";
    public $kartyaSzine="";
    public function kirajzol_nevjegykartya()
    {
      echo "<div class=\"nevjegyKartya\" style=\"background-color: #$this->kartyaSzine\"><p>$this->nev $this->foglalkozas</p><p>$this->idezet</p></div>";
    }
  }


  class autok
  {
    public $modellnev = "";
    public $hengerek_szama = 0;
    public $hengerek_terfogata = 0;
    public $teljesitmenye = 0;
    public $legnagyobb_sebessege = 0;
    public $fogyaztasa = 0;

    public function kiir()
    {
      echo "<h4>$this->modellnev</h4><img src=\"$this->imgSzosz\"></img><p>Hengerek száma: $this->hengerek_szama</p><p>Hengerek térfogata: $this->hengerek_terfogata cm3</p><p>Teljesítménye: $this->teljesitmenye LE</p><p>Legnagyobb segessége: $this->legnagyobb_sebessege</p><p>Fogyasztása: $this->fogyaztasa l/100km</p>";
    }

  }




 ?>
