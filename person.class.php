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

        $array[] = array('firstname' => $this->firstname, 'name' => $this->name);
        // encode array to json
        $json = json_encode(array('user' . $this->firstname => $array));
        //write json to file

        $myfile = fopen("data.json", "a+") or die("Unable to open file!");
        fwrite($myfile, $json);
        fclose($myfile);
        /*
        if (file_put_contents("data.json", $json))
            echo "JSON file created successfully...";
        else
            echo "Oops! Error creating json file...";
        */
        // data.json

        /*$test = file_get_contents("data.json");           //eigener Versuch Daten aus JSON Datei auszulesen 
    $arrayy = json_decode($test, true);
    var_dump($arrayy);*/
    }

    //Mein eigener Versuch siehe unten!

    /*public $firstname = array();  
    public $name = array();

    function __construct($firstname, $name) { 
        $this->firstname = $firstname;
        $this->name = $name;
}

    public function jsonsave(firstname, name) {
    
        $jsonfirstname = json_encode(firstname);
        $jsonname = json_encode(name);
    
        file_put_contents('arrays.json', $jsonfirstname);
        file_put_contents('arrays.json', $jsonname);
    
        $jsonfirstnameContents = file_get_contents('arrays.json');
        $jsonnameContents = file_get_contents('arrays.json');
    }

}*/

    /*$jsonfile = file_get_contents(data.json);
    $jsonarray = json_decode($jsonfile);

    echo $jsonarray['firstname'];*/

    /*$array = json_decode(file_get_contents("data.json"), true);
    print_r($array);*/
}
$test1 = new Person($firstname, $name);         //nimmt die Variabeln $firstname und $name aus der Klasse Person
$test1->insert_values();                            //greift auf die Sachen von der Function insert_values zu   
var_dump($test1);                                   //gibt die Sachen von insert_values aus 

require_once "timestamp.class.php";