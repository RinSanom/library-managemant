<?php
require_once "app/model/book_model.php";
class BookController {

    private $bookModel;

    public function __construct() {
        $this->bookModel = new Book();

    }   

    public function index() {
        $books = $this->bookModel->getAllBooks();
        $cout = $this->bookModel->countBooks();
        if ($books->rowCount() > 0) {
            $bookList = $books->fetchAll(PDO::FETCH_ASSOC);
            include_once "app/view/book/index.php";
        } else {
            echo "No books found.";
        }
    }
    
   
}