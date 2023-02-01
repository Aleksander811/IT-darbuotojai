<?php

namespace IT;

class Tester extends Employee{
    private $experience;

   
    public function addExperience($experience)
    {
        $this->experience = $experience;
    }
    public function getAllInfo(){
        $data = parent::getAllInfo();
        $data[] = $this->experience;

        return $data;

    }
}