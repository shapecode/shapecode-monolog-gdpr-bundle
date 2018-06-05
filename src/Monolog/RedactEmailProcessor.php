<?php

namespace Shapecode\Bundle\MonologGDPRBundle\Monolog;

/**
 * Class RedactEmailProcessor
 *
 * @package Shapecode\Bundle\MonologGDPRBundle\Monolog
 * @author  Nikita Loges
 */
class RedactEmailProcessor extends AbstractProcessor
{

    /**
     * @param array $record
     *
     * @return array
     */
    public function processRecord(array $record)
    {
        // serialise to a JSON string so we can scan the entire tree
        $serialised = json_encode($record);

        $filtered = preg_replace_callback(
            "/([a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`\"\"{|}~-]+)*(@|\sat\s)(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?(\.|\"\"\sdot\s))+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?)/",
            function ($matches) {
                return $this->getHashedValue($matches[0]);
            },
            $serialised
        );

        if ($filtered) {
            return json_decode($filtered, true);
        }

        return $record;
    }
}
