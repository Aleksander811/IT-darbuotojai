<?php

namespace IT;

class Render{

    static public function display(array $data){
        echo "<ul>";
        foreach($data as $item){
            if (is_null($item)){

            }
            else
            echo "<li>$item</li>";
        }
        echo "</ul>";
    }
}