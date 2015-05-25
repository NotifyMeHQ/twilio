<?php

/*
 * This file is part of NotifyMe.
 *
 * (c) Cachet HQ <support@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NotifyMeHQ\Twilio;

use GuzzleHttp\Client;
use NotifyMeHQ\NotifyMe\Arr;
use NotifyMeHQ\NotifyMe\FactoryInterface;

class TwilioFactory implements FactoryInterface
{
    /**
     * Create a new twilio gateway instance.
     *
     * @param string[] $config
     *
     * @return \NotifyMeHQ\Twilio\TwilioGateway
     */
    public function make(array $config)
    {
        Arr::requires($config, ['from', 'client', 'token']);

        $client = new Client();

        return new TwilioGateway($client, $config);
    }
}
