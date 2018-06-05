<?php

namespace Shapecode\Bundle\MonologGDPRBundle\Monolog;

/**
 * Class AbstractProcessor
 *
 * @package Shapecode\Bundle\MonologGDPRBundle\Monolog
 * @author  Nikita Loges
 */
abstract class AbstractProcessor
{
    /**
     * @var null|string
     */
    private $salt;

    /**
     * @param string $salt
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    }

    abstract public function processRecord(array $record);

    /**
     * @param string $value
     *
     * @return string
     */
    protected function getHashedValue($value)
    {
        return sha1($value . $this->salt);
    }
}
