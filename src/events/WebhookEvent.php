<?php

namespace MeesterPaul\StripeWebhooks\events;

use MeesterPaul\StripeWebhooks\records\StripeWebhookCall;
use yii\base\Event;

class WebhookEvent extends Event
{
    /** @var StripeWebhookCall */
    public $model;
}
