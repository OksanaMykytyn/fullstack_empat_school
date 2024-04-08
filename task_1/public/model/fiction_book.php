<?php

class FictionBook extends Book implements Shop
{
    private int $amount;

    public function __construct(string $title, string $author = "Невідомий автор", ?int $year = null, string $isbn, int $amount)
    {
        parent::__construct($title, $author, $year, $isbn);
        $this->setAmount($amount);
    }

    public function sell(int $amount): void {
        if ($amount > $this->amount) {
          throw new Exception("Недостатня кількість товару");
        }
    
        $this->amount -= $amount;
      }
    
      public function buy(int $amount): void {
        $this->amount += $amount;
      }

    private function setAmount(int $amount): void
    {
        if (strlen($amount) < 0) {
            throw new InvalidArgumentException("Кількість книг не може бути від'ємною");
        }
        $this->amount = $amount;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function __toString(): string
    {
        return parent::__toString()." Кількість примірників: $this->amount";
    }

    
}