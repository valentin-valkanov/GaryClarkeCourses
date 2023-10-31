<?php
require_once 'Connection.php';

$connection = new Connection();

echo Connection::getCount();