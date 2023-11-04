<?php
require_once 'Book.php';

try {
    echo Book::generateHexId();
} catch (Exception $e) {
}