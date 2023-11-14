<?php

namespace App;

interface NotifierInterface
{
    public function send($to);
}