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

namespace MeesterPaul\StripeWebhooks;

use craft\base\Plugin;
use craft\events\RegisterUrlRulesEvent;
use craft\web\UrlManager;
use MeesterPaul\StripeWebhooks\Models\Settings;
use yii\base\Event;

/**
 * Class StripeWebhooks.
 *
 * @author    Rias
 *
 * @since     1.0.0
 */
class StripeWebhooks extends Plugin
{
    // Static Properties
    // =========================================================================

    /**
     * @var StripeWebhooks
     */
    public static $plugin;

    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $schemaVersion = '1.0.0';

    // Public Methods
    // =========================================================================

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        self::$plugin = $this;

        Event::on(
            UrlManager::class,
            UrlManager::EVENT_REGISTER_SITE_URL_RULES,
            function (RegisterUrlRulesEvent $event) {
                $event->rules[$this->settings->endpoint] = 'stripe-webhooks/default';
            }
        );
    }

    // Protected Methods
    // =========================================================================

    /**
     * {@inheritdoc}
     */
    protected function createSettingsModel()
    {
        return new Settings();
    }
}
