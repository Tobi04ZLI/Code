<?php

$i = 0;

if($i < 1) {

$start = readline("Geben Sie die Momentane Uhrzeit ein: ");
$project = readline("Geben Sie ihre Tätikeit ein: ");

class Stempel 
{
    public $start;
    public $project;

    public function __construct($start, $project)
    {
        $this->start = $start;
        $this->project = $project;
    }


    public function timeone()
    {

        $arraytwo[] = array('start' => $this->start, 'project'=> $this->project);
        // encode array to json
        $jsontwo = json_encode(array('time' . $this->time => $arraytwo));
        //write json to file

        $myfiletwo = fopen("data.json", "a+") or die("Unable to open file!");
        fwrite($myfiletwo, $jsontwo);
        fclose($myfiletwo);
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

$test2 = new Stempel($start, $project);     
$test2->timeone();      
var_dump($test2);
/*$test3->work();  
var_dump($test3);*/   


} else {

    $end = readline("Geben Sie die Momentane Uhrzeit ein: ");

    class Stempel2 {

    public $end;

    public function __construct($end)
    {
        $this->end = $end;
    }

    public function timetwo()
    {

        $arrayfour[] = array('end' => $this->end);
        // encode array to json
        $jsonfour = json_encode(array('time' . $this->end => $arrayfour));
        //write json to file

        $myfilefour = fopen("data.json", "a+") or die("Unable to open file!");
        fwrite($myfilefour, $jsonfour);
        fclose($myfilefour);
    }
}

$test4 = new Stempel2($end);     
$test4->timetwo();                            
var_dump($test4); 

}
