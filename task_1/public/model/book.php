<?php

abstract class Book
{
    public string $title;
    public string $author;
    public ?int $year;
    public string $isbn;
    use review;

    public function __construct(string $title, string $author = "Невідомий автор", ?int $year = null, string $isbn)
    {
        $this->setTitle($title);
        $this->setAuthor($author);
        $this->setYear($year);
        $this->setIsbn($isbn);
    }

    private function setTitle(string $title): void
    {
        if (strlen($title) > 3 && strlen($title) < 50) {
            throw new InvalidArgumentException("Назва книги повинна складатися від 3 до 50 символів");
        }
        $this->title = $title;
    }

    private function setAuthor(string $author): void
    {
        if (strlen($author) > 3 && strlen($author) < 50) {
            throw new InvalidArgumentException("Назва автора повинна складатися від 3 до 50 символів");
        }
        $this->author = $author;
    }

    private function setYear(int $year): void
    {
        if ($year < 0) {
            throw new InvalidArgumentException("Рік видання не може бути від'ємним");
        }
        if ($year < 1800) {
            throw new InvalidArgumentException("Рік видання повинен бути більше 1800");
        }
        if ($year > date("Y")) {
            throw new InvalidArgumentException("Рік видання перевищує поточний рік");
        }
        $this->year = $year;
    }

    private function setIsbn(string $isbn): void
    {
        if (strlen($isbn) != 13 && ctype_digit($isbn)) {
            throw new InvalidArgumentException("ISBN має складатися з 13 цифр");
        }
        $this->isbn = $isbn;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function getIsbn(): string
    {
        return $this->isbn;
    }

    public static function validateIsbn(string $isbn): bool
    {
        return ctype_digit($isbn) && strlen($isbn) === 13;
    }


    public function __toString(): string
    {
        return "$this->author->getInitials(). $this->author->getSurname(). $this->title, $this->year.";
    }

    private function getInitials(): string
    {
        $initials = "";
        $words = explode(" ", $this->author);
        foreach ($words as $word) {
            $initials .= mb_substr($word, 0, 1) . ".";
        }
        return trim($initials, ".");
    }

    private function getSurname(): string
    {
        $words = explode(" ", $this->author);
        return end($words);
    }
}
