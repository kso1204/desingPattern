<?php

namespace App\Repository;



class PrintPattern {
        
    public function index()
    {
        return (new Person)->read(new KindleAdapter(new Kindle));
    }

}

?>