<?php

/**
 * Stempel
 */
class Stempel 
{
    
    /**
     * start
     *
     * @var mixed
     */
    public $start;
    public $project;
    
    /**
     * __construct
     *
     * @param  mixed $firstname
     * @param  mixed $name
     * @param  mixed $start
     * @param  mixed $project
     * @return void
     */
    public function __construct($firstname, $name, $start, $project)
    {
        $this->firstname = $firstname;
        $this->name = $name;
        $time = $this->timeone($start, $project);
    }

    
    /**
     * timeone
     *
     * @param  mixed $start
     * @param  mixed $project
     * @return void
     */
    public function timeone($start, $project)
    {
        $start = date("H:i:s");
        $project = readline("Geben Sie ihre Tätikeit ein: ");

        $this->start = $start;
        $this->project = $project;
        
        $fullname = $this->firstname . $this->name;

        $json_already = file_get_contents("./Json-Files/$fullname.json");
        $json = json_decode($json_already, true);
        if(!empty($this->firstname) && !empty($this->name)){
            $array = array(
                'start' => $this->start,
                'project' => $this->project
                );
                //var_dump ($array);
                $json[] = $array;
                $json_encoded = json_encode($json);
                file_put_contents("./Json-Files/$fullname.json", $json_encoded);
        }

        /*$arraytwo[] = array('start' => $this->start, 'project'=> $this->project);
        // encode array to json
        $jsontwo = json_encode(array('timestart' . $this->timestart => $arraytwo));
        //write json to file

        $myfiletwo = fopen("./Json-Files/$fullname.json", "a+") or die("Unable to open file!");
        fwrite($myfiletwo, $jsontwo);
        fclose($myfiletwo);
        $lul++;*/
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

/*$test2 = new Stempel($firstname, $name);     
$test2->timeone($start, $project);      
var_dump($test2);*/
/*$test3->work();  
var_dump($test3);*/ 


    $end = date("H:i:s");
    
    /**
     * Stempel2
     */
    class Stempel2 {
    
    /**
     * end
     *
     * @var mixed
     */
    public $end;
    
    /**
     * __construct
     *
     * @param  mixed $firstname
     * @param  mixed $name
     * @param  mixed $end
     * @return void
     */
    public function __construct($firstname, $name, $end)
    {
        $this->firstname = $firstname;
        $this->name = $name;
        $time = $this->timetwo($end);
    }
    
    /**
     * timetwo
     *
     * @param  mixed $end
     * @return void
     */
    public function timetwo($end)
    {
        $this->end = $end;

        $fullname = $this->firstname . $this->name;
        
        $json_already = file_get_contents("./Json-Files/$fullname.json");
        $json = json_decode($json_already, true);
        if(!empty($this->firstname) && !empty($this->name)){
            $array = array(
                'ends' => $this->end
                );
                //var_dump ($array);
                $json[] = $array;
                $json_encoded = json_encode($json);
                file_put_contents("./Json-Files/$fullname.json", $json_encoded);
        }

        /*$arraythree[] = array('end' => $this->end);
        // encode array to json
        $jsonthree = json_encode(array('timeend' . $this->timeend => $arraythree));
        //write json to file

        $myfilethree = fopen("./Json-Files/$fullname.json", "a+") or die("Unable to open file!");
        fwrite($myfilethree, $jsonthree);
        fclose($myfilethree);*/
    }
}

/*$test3 = new Stempel2($firstname, $name);     
$test3->timetwo($end);                            
var_dump($test3);*/ 