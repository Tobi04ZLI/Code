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
        if(!file_exists("./Json-Files/$fullname.json")){
            if(!empty($this->firstname) && !empty($this->name)){
                $array = array(
                    'start' => $this->start,
                    'project' => $this->project
                    );
                    $json_encoded = json_encode($array);
                    file_put_contents("./Json-Files/$fullname.json", $json_encoded);
            }
        }else{
            $json_already = file_get_contents("./Json-Files/$fullname.json");
            $json = json_decode($json_already, true);
            if(!empty($this->firstname) && !empty($this->name)){
            $array = array(
                'start' => $this->start,
                'project' => $this->project
                );
                $json[] = $array;
                $json_encoded = json_encode($json);
                file_put_contents("./Json-Files/$fullname.json", $json_encoded);
        }
        }
    }
}


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
                $json[] = $array;
                $json_encoded = json_encode($json);
                file_put_contents("./Json-Files/$fullname.json", $json_encoded);
        }
    }
}