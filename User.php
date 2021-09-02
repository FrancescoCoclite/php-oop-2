<?php
class User{

    protected $name;
    protected $surname;
    protected $status = 'utente base';

    function __construct($_name,$_surname){
        $this->name = $_name;
        $this->surname = $_surname;
    }

    public function getFullName(){
        
        return $this->name . ' ' . $this->surname;

    }
    public function setStatus($livello){

        if($livello == 'prime' && $livello != ''){
            $this->status = 'utente premium';
        }
    }
    public function getStatus(){

        return $this->status;
    }

}

