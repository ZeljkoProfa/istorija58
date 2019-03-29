<?php

namespace AppBundle\Logger;

class MyLogger
{
    private $path;

    public function logger($message)
    {
        $this->path = __DIR__.'/log/'. date('Y-m-d');

        file_put_contents($this->path, $message, FILE_APPEND);
    }
}