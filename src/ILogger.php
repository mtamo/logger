<?php
namespace Mtamo\Logger;

Interface ILogger
{
    public function logEntry(string $line): void;

}