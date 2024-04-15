<?php

class Ebook extends Book implements Shop {
  private string $format;

  public function __construct(string $title, string $author, int $year, string $isbn, string $format) {
    parent::__construct($title, $author, $year, $isbn);
    $this->setFormat($format);
  }

  public function sell(int $amount = 1): void {
    echo "Продано книг: $amount";
  }

  public function buy(int $amount = 1): void {
    echo "Куплено книг: $amount";
  }

  private function setFormat(string $format): void {
    if (!in_array(strtoupper($format), ["EPUB", "FB2", "PDF"])) {
      throw new InvalidArgumentException("Невірний формат електронної книги");
    }
    $this->format = strtoupper($format);
  }

  public function getFormat(): string {
    return $this->format;
  }

  public function __toString(): string {
    return parent::__toString() . "Формат: ({$this->format})";
  }
}