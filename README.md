# php_alused
### php alused VS19 I

<hr>

Ülesannetes käsitletud teemadeks olid failitöötlus, ajafunktisoonide kasutamine, sõnade blacklisti loomine,
andmebaasiga ühenduse loomine, koodi korduvkasutamine ning OOP alused.

<hr>

#### Ajafunktsioonide näide.

```


$hours = date('H');
if($hours >= 8 and $hours < 13){
    echo 'Tere hommikust!';
} else if($hours >= 13 and $hours < 17) {
    echo 'Tere päevast!';
} else if($hours >= 17 or $hours > 0) {
    echo 'Tere õhtust!';
}

``` 

#### AB ühenduse loomise näide.

```

define('HOSTNAME', 'localhost');
define('USERNAME', 'viskelii_eliise');
define('USERPASS', '1U0D_mE20e8S');
define('DBNAME', 'viskelii_db');



function connection($host, $user, $pass, $dbname){
    $link = mysqli_connect($host, $user, $pass, $dbname);
    if ($link === false){
        // veateade probleemi korral
        echo ' Probleem andmebaasi ühendusega <br>';
        exit;
    };

```

####OOP näited


```
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

-------------------------

class Car {

    //the private access modifier denies access to the method from outside the class’s scope
    private $model;

    //the public access modifier allows the access to the method from outside the class
    public function setModel($model)
    {
        $this -> model = $model;
    }

    public function getModel()
    {
        return "The car model is  " . $this -> model;
    }
}

$mercedes = new Car();
//Sets the car’s model
$mercedes -> setModel("Mercedes benz");
//Gets the car’s model
echo $mercedes -> getModel();

--------------------------------


class SportsCar extends Car {
    private $style = 'with your dog';
    public function backseatDriver(){
        return '<br><br>Drive this <i>'.$this -> getModel(). '</i> '.$this -> style;
    }
}


```