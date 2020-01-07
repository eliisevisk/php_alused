<?php
class Burger {
    protected $nimetus = '';
    protected $liha = '';
    protected $sai = '';
    protected $hind;
    protected $lisand1 = 'juust';
    protected $lisand1Hind = 0.5;
    protected $lisand2 = 'lisapihv';
    protected $lisand2Hind = 2;
    protected $lisand3 = 'salat';
    protected $lisand3Hind = 0.5;
    protected $lisand4 = 'kaste';
    protected $lisand4Hind = 1;
    protected $valitud = array();

    public function __construct($nimetus, $liha, $sai, $hind){
        $this -> nimetus = $nimetus;
        $this -> liha = $liha;
        $this -> sai = $sai;
        $this -> hind = $hind;
}

//lisandite valimine, arraysse sisestamine.
    public function valiLisand1($kogus){
        $lisandistKokku = $kogus * $this -> lisand1Hind;
        $this -> hind = $this -> hind + $lisandistKokku;
        $this -> valitud[] = $this -> lisand1;
    }
    public function valiLisand2($kogus){
        $lisandistKokku = $kogus * $this -> lisand2Hind;
        $this -> hind = $this -> hind + $lisandistKokku;
        $this -> valitud[] = $this -> lisand2;
    }
    public function valiLisand3($kogus){
        $lisandistKokku = $kogus * $this -> lisand3Hind;
        $this -> hind = $this -> hind + $lisandistKokku;
        $this -> valitud[] = $this -> lisand3;
    }
    public function valiLisand4($kogus){
        $lisandistKokku = $kogus * $this -> lisand4Hind;
        $this -> hind = $this -> hind + $lisandistKokku;
        $this -> valitud[] = $this -> lisand4;
    }


    public function koostaBurger($nimetus, $liha, $sai, $hind)
    {
        return '<div style="text-align:center; padding: 180px; padding-bottom: 0;";> 
            Teie valitud baasburgeri "'.$this-> $nimetus.'" koostis on: <br>'
            .$this -> $liha. '<br>'
            .$this -> $sai. '<br>'.
            'Kuhu lisandiks on teie valikul: <br><br> '.
            $this -> valitud[0].'<br>'.
            $this -> valitud[1].'<br>'.
            $this -> valitud[2].'<br>'.
            $this -> valitud[3].'<br>'.
            '<hr>'.
            'Koguhinnaks tuleb seega: '
            .$this -> $hind. '€'.
            '<hr><hr><br><br></div>';
    }
}

class TervislikBurger extends Burger{
    protected $tervislikLisand1 = 'avokaado';
    protected $tervislikLisand1Hind = 2;
    protected $tervislikLisand2 = 'hummus';
    protected $tervislikLisand2Hind = 2;


    public function valiTervislik1($kogus){
        $lisandistKokku = $kogus * $this -> tervislikLisand1Hind;
        $this -> hind = $this -> hind + $lisandistKokku;
        $this -> valitud[] = $this -> tervislikLisand1;
    }
    public function valiTervislik2($kogus){
        $lisandistKokku = $kogus * $this -> tervislikLisand2Hind;
        $this -> hind = $this -> hind + $lisandistKokku;
        $this -> valitud[] = $this -> tervislikLisand2;
    }

}

class LuxBurger extends Burger{
    protected $nimetus = '';
    protected $liha = '';
    protected $sai = '';
    protected $hind;
    protected $luxLisa1 = 'peekon';
    protected $luxLisa2 = 'praesibul';
    protected $luxLisa3 = 'poolmagus sinepi-mee kaste';
    protected $luxLisa4 = 'sibulamoos';
    protected $luxJook = ['Coca', 'Fanta', 'Sprite'];
    protected $luxKartul = ['bataadifriikartulid', 'Classic friikartulid'];

    public function koostaLuxBurger($nimetus, $liha, $sai, $hind)
    {
        return '<div style="text-align:center; padding: 180px; padding-bottom: 0;";> 
            Teie valitud baasburgeri "'.$this-> $nimetus.'" koostis on: <br>'
            .$this -> $liha. '<br>'
            .$this -> $sai. '<br>'.
            $this -> luxLisa1.'<br>'.
            $this -> luxLisa2.'<br>'.
            $this -> luxLisa3.'<br>'.
            $this -> luxLisa4.'<br>'.
            '<hr>'.
            'Lux Burgeriga on kaasas ka '. $this -> luxJook[1]. ' ning '. $this -> luxKartul[0].
            '<br> Koguhinnaks tuleb seega: '
            .$this -> $hind. '€'.
            '<hr><hr><br><br></div>';
    }
}



//insert new burgers

$lihtne = new Burger ('Lihtne', 'veiseliha', 'brioche kukkel', 3.5);
$tervislik = new TervislikBurger('Tervislik', 'kanaliha', 'must teraleib', 5);
$lux = new LuxBurger('Lux', 'lihamix', 'brioche kukkel', 7);

//display first order
echo $lihtne -> valiLisand1(2);
echo $lihtne -> valiLisand2(2);
echo $lihtne -> valiLisand3(1);
echo $lihtne -> valiLisand4(1);
echo $lihtne -> koostaBurger(nimetus, liha, sai, hind);

//display second order
echo $tervislik -> valiLisand1(1);
echo $tervislik -> valiLisand4(2);
echo $tervislik -> valiTervislik1(1);
echo $tervislik -> koostaBurger(nimetus, liha, sai, hind);

//display third order
echo $lux -> koostaLuxBurger(nimetus, liha, sai, hind);
