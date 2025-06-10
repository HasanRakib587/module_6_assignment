<?php

class Book
{
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies){
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    public function getTitle(): string{
        return $this->title;
    }

    public function getAvailableCopies(): int{
        return $this->availableCopies;
    }

    public function borrowBook(): void{
        $this->availableCopies--;
    }
    public function returnBook(): void{
        $this->availableCopies++;
    }
}

class Member
{
    private $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function getName(): string{
        return $this->name;
    }

    public function borrowBook(Book $book): void{
        $book->borrowBook();
    }

    public function returnBook(Book $book): void{
        $book->returnBook();
    }

}

// Usage

$bookOne = new Book("The Great Gatsby",5);
$bookTwo = new Book("To Kill a Mockingbird",3);

$memberOne = new Member("John Doe");
$memberTwo = new Member("Jane Smith");

$memberOne->borrowBook($bookOne);
$memberTwo->borrowBook($bookTwo);

echo "Available Copies of " . "'" .$bookOne->getTitle() . "'" . ": " . $bookOne->getAvailableCopies() . "\n";
echo "Available Copies of " . "'" .$bookTwo->getTitle() . "'" . ": " . $bookTwo->getAvailableCopies() . "\n";