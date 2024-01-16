<?php

class Company{
    //dichiarazione degli attributi della classe
    public $name;
    public $location;
    public $tot_employees;
   
    public function __construct($name, $location, $tot_employees) {
        $this->name = $name;
        $this->location = $location;
        $this->tot_employees = $tot_employees;
    }

    public function presentation() {
        if($this->tot_employees != 0) {

         echo "L'ufficio ". $this->name . " con sede in  ". $this->location ." ha ben ". $this->tot_employees ." dipendenti \n";

        } else {
           echo "L'ufficio ". $this->name . " con sede in ". $this->location ." non ha dipendenti \n";
        }
   }
   static public $avg_wage = 1500;

   public function set_wage($month) {

    $annual_wage = (self::$avg_wage * $month) * $this->tot_employees;
    
    return $annual_wage;

}

public function get_wage($month = 12) { 
    echo ("L'azienda " . $this->name . " ha speso " . $this->set_wage ($month) . " euro\n");     

}

static public $total_absolute;

public function set_total_campany_wage($month) {
    return self::$total_absolute += $this->get_wage($month);

}

public function get_total_absolute() {

}


$company = new Company("Aulab","Bari", 150);

$company2 = new Company("Meta","Dublino", 500);

$company3 = new Company("Alphabet","Montain View",1200);

$company4 = new Company("TikTok","Pechino", 1000);

$company5 = new Company("WPP","Londra", 500);

var_dump ($company3);

$company->presentation();
$company2->presentation();
$company3->presentation();
$company4->presentation();
$company5->presentation();
 
echo "\n";

$company->get_wage();
$company2->get_wage();
$company3->get_wage();
$company4->get_wage();
$company5->get_wage();

echo "\n";