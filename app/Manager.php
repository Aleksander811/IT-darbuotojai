<?php

namespace IT;

class Manager extends Employee{
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