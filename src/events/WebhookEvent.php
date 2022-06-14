<?php

namespace MeesterPaul\StripeWebhooks\Events;

use MeesterPaul\StripeWebhooks\Records\StripeWebhookCall;
use yii\base\Event;

class WebhookEvent extends Event
{
    /** @var StripeWebhookCall */
    public $model;
}
