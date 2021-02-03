<?php

$firstname = readline("Bitte geben Sie ihren Vornamen ein: ");
$name = readline("Bitte geben Sie ihren Nachnamen ein: ");

/**
 * Person
 */
class Person
{
    public $firstname;        
    public $name;            

    /**
     * __construct
     *
     * @param  mixed $firstname
     * @param  mixed $name
     * @return void
     */
    public function __construct    ($firstname, $name)
    {
        $this->firstname = $firstname;
        $this->name = $name;
    }
    
    /**
     * insert_values
     *
     * @return void
     */
    public function insert_values()
    {

        $json_already = file_get_contents("./Json-Files/name.json");
        $json = json_decode($json_already, true);
        if(!empty($this->firstname) && !empty($this->name)){
            $array = array(
                'firstname' => $this->firstname,
                'name' => $this->name
                );
                $json[] = $array;
                $json_encoded = json_encode($json);
                file_put_contents("./Json-Files/name.json", $json_encoded);
        }
    }
}
$test1 = new Person($firstname, $name);         //nimmt die Variabeln $firstname und $name aus der Klasse Person
$test1->insert_values();                            //greift auf die Sachen von der Function insert_values zu   

require_once "timestamp.class.php";

$check = 1;
if($check == 0){
$timetime = new Stempel($firstname, $name, $start, $project);
} else {
$timetimetime = new Stempel2($firstname, $name, $end);
}