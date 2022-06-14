<?php
/**
 * Stripe Webhooks plugin for Craft CMS 3.x.
 *
 * Handle Stripe webhooks in a CraftCMS application
 *
 * @link      https://github.com/MeesterPaul/craft-stripe-webhooks
 *
 * @copyright Copyright (c) 2018 Rias
 */

namespace MeesterPaul\StripeWebhooks\AssetBundles\StripeWebhooks;

use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

/**
 * @author    Rias
 *
 * @since     1.0.0
 */
class StripeWebhooksAsset extends AssetBundle
{
    // Public Methods
    // =========================================================================

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        $this->sourcePath = '@MeesterPaul/StripeWebhooks/AssetBundles/StripeWebhooks/dist';

        $this->depends = [
            CpAsset::class,
        ];

        $this->js = [
            'js/StripeWebhooks.js',
        ];

        $this->css = [
            'css/StripeWebhooks.css',
        ];

        parent::init();
    }
}
