<?php

$user = [
    "name" => "Antonio",
    "email" => "antonio@gmail.com",
    "password" => "12345678"
];


$user2 = [
    "name" => "Vincenzo",
    "email" => "vincenzo@gmail.com",
    "password" => "12345678"
];


$user3 = [
    "nome" => "Antonio",
    "email" => "antonio@gmail.com",
    "password" => "12345678"
];



//! Il nome di una classe deve:
// essere in inglese
// avere la prima lettera maiuscola e, se composto da più parole, deve essere in camel case
// il nome deve essere al singolare

//! Abbiamo dichiarato una classe di nome User e abbiamo solo descritto quali caratteristiche avranno gli utenti
class User{
    //dichiarazione degli attributi della classe
    public $name;
    public $email;
    public $age;
    private $password;
    //attributo statico
    static public $message = "Benvenuto sul mio sito!";
    static public $count = 0;

    //costruttore: serve per assegnare dei valori agli attributi
    private function __construct($_name,$_email,$_age,$_password){
        //il this serve per riferirci al futuro oggetto che andremo ad istanziare
        $this->name = $_name;
        $this->email = $_email;
        $this->age = $_age;
        $this->password = $_password;

        self::$count++;

        echo $this->password;
    }

    // metodi
    public function saluta(){
        echo "Ciao, mi chiamo $this->name";
    }
    //metodo statico
    static public function sayHallo(){
        echo "Ciao\n";
    }
}

//! istanziamento di un oggetto e l'invocazione del costruttore della classe
/* $user = new User("Luca","luca@gmail.com",25,"12345678"); */

/* $user2 = new User("Carlo","carlo@gmail.com",30,"87654321"); */



/* $user->saluta();
$user2->saluta(); */

//! attributo e metodo statico: non dipendono dall'istanza di un oggetto
/* User::sayHallo(); */
/* echo "\n" . User::$count; */


//! ereditarietà
class Student extends User{
    public $avg;

    public function __construct($_name, $_email, $_age, $_password, $_avg){
        parent::__construct($_name, $_email, $_age, $_password);
        
        $this->avg = $_avg;
    }
}

$student = new Student("Federica","federica@gmail.com",20,"12345678",105);
/* var_dump($student); */





class Teacher extends User {

    protected $subject;

    public function __construct($_name, $_email, $_age, $_password, $_subject){
        parent::__construct($_name, $_email, $_age, $_password);
        $this->subject = $_subject;

    }
}

$teacher = new Teacher("Marco","marco@gmail.com",41,"12345678", "Scienze");
$teacher->nonloso = "Boh";
/* var_dump($teacher); */
/* 
echo $teacher->password; */