<?php

$i = 0;

if($i < 1) {

$start = date("H:i:s");
$project = readline("Geben Sie ihre Tätikeit ein: ");

class Stempel 
{
    public $start;
    public $project;

    public function __construct($firstname, $name)
    {
        $this->firstname = $firstname;
        $this->name = $name;
    }


    public function timeone($start, $project)
    {
        $this->start = $start;
        $this->project = $project;
        
        $fullname = $this->firstname . $this->name;
        $arraytwo[] = array('start' => $this->start, 'project'=> $this->project);
        // encode array to json
        $jsontwo = json_encode(array('time' . $this->time => $arraytwo));
        //write json to file

        $myfiletwo = fopen("$fullname.json", "a+") or die("Unable to open file!");
        fwrite($myfiletwo, $jsontwo);
        fclose($myfiletwo);
        $lul++;
    }

    /*public function work()
    {

        $arraythree[] = array('project' => $this->project);
        // encode array to json
        $jsonthree = json_encode(array('work' . $this->project => $arraythree));
        //write json to file

        $myfilethree = fopen("data.json", "a+") or die("Unable to open file!");
        fwrite($myfilethree, $jsonthree);
        fclose($myfilethree);
    }*/
}

$test2 = new Stempel($firstname, $name);     
$test2->timeone($start, $project);      
var_dump($test2);
/*$test3->work();  
var_dump($test3);*/ 



} else {

    $end = date("H:i:s");

    class Stempel2 {

    public $end;

    public function __construct($firstname, $name)
    {
        $this->firstname = $firstname;
        $this->name = $name;
    }

    public function timetwo($end)
    {
        $this->end = $end;

        $fullname = $this->firstname . $this->name;
        $arraythree[] = array('end' => $this->end);
        // encode array to json
        $jsonthree = json_encode(array('time' . $this->end => $arraythree));
        //write json to file

        $myfilethree = fopen("$fullname.json", "a+") or die("Unable to open file!");
        fwrite($myfilethree, $jsonthree);
        fclose($myfilethree);
    }
}

$test3 = new Stempel2($firstname, $name);     
$test3->timetwo($end);                            
var_dump($test3); 

}
