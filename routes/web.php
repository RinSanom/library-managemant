<?php

require_once "app/controller/BookController.php";
$url = $_SERVER['REQUEST_URI'];
$bookController = new BookController();
if ($url == "/") {
    $bookController->index();
} elseif ($url == "/addbook"){
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // $bookController->addBook();
    } else {
        include_once "app/view/book/add_book.php";
    }
} 

else {
    echo "404 Not Found";
}
