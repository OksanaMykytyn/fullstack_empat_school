<?php

trait review {
    public function sendReview(Book $book, string $review, string $user): string {
        return "$user залишив(ла) відгук про книгу $book: $review";
    }
}

