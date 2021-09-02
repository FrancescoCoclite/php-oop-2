<?php

require_once 'User.php';

class Prime extends User{

    protected $spedizione = 'standard';


    public function setSpedizione($_track){

        if($_track == 'utente premium'){

            return $this->spedizione = 'spedizione veloce';
        }



    }

    public function getSpedizione(){

        return $this->spedizione;

    }

}




