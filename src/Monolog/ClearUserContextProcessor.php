<?php

namespace Shapecode\Bundle\MonologGDPRBundle\Monolog;

/**
 * Class ClearUserContextProcessor
 *
 * @package Shapecode\Bundle\MonologGDPRBundle\Monolog
 * @author  Nikita Loges
 */
class ClearUserContextProcessor
{

    /**
     * @param array $record
     *
     * @return array
     */
    public function processRecord(array $record)
    {
        if (isset($record['user'])) {
            unset($record['user']);
        }

        return $record;
    }
}
