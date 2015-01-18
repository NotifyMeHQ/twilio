<?php

/*
 * This file is part of NotifyMe.
 *
 * (c) Joseph Cohen <joseph.cohen@dinkbit.com>
 * (c) Graham Campbell <graham@mineuk.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NotifyMeHQ\Twilio;

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
        return new TwilioGateway($config);
    }
}
