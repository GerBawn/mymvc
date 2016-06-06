<?php
namespace System\Driver\Log;

class SeasLog
{
    public function __construct($config)
    {
        \SeasLog::setBasePath($config['logPath']);
        \SeasLog::setLogger($config['logFile']);
    }

    public function write($level, $message)
    {
        \SeasLog::log($level, $message);
    }
}