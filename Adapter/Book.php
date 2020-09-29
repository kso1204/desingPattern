<?

namespace App\Repository;



class Book implements BookInterface{

    public function open()
    {
        var_dump('opening the paper bookasdsadasdsad');
    }

    public function turnPage()
    {
        var_dump('turning the page of the paper book.');
    }
}

?>