<?php

namespace IT;

class Programmer extends Employee
{
    private $language;
    private $level;


    public function addLanguage($language)
    {
        $this->language = $language;
    }

    public function addLevel($level)
    {
        $this->level = $level;
    }

    public function getAllInfo()
    {
        $data[] = $this->language;
        $data[] = $this->level;

        return [
            $this->ssn,
            $this->firstname,
            $this->secondname,
            $this->language,
            $this->level,


        ];
    }
}
