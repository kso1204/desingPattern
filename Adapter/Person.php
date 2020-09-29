<?

namespace App\Repository;


class Person {

    public function read(BookInterface $book)
    {
        $book->open();
        $book->turnPage();
    }
}



?>