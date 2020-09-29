<?php

namespace App\Repository;

interface BookInterface {
    public function open();
    public function turnPage();
}

interface eReaderInterface {
    public function turnOn();
    public function pressNextButton();
}


class PrintPattern {
        
    public function index()
    {
        return (new Person)->read(new KindleAdapter(new Kindle));
    }

}

?>