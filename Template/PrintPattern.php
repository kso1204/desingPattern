<?php

namespace App\Repository;



class PrintPattern {
        
    public function index()
    {
        return (new VeggieSub)->make();
    }

}

?>