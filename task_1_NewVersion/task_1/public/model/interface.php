<?php

interface Shop {
  public function sell(int $amount): void;
  public function buy(int $amount): void;
}