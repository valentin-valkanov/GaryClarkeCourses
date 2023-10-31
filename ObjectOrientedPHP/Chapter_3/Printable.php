<?php

trait Printable
{
    public function getClassName():string
    {
        return get_class($this);
    }
}