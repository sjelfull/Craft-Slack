<?php
namespace Craft;
require_once (CRAFT_PLUGINS_PATH . 'slack/vendor/autoload.php');

class SlackService extends BaseApplicationComponent {

    protected $client;
    protected $settings;

    public function init()
    {
        $this->settings = craft()->plugins->getPlugin('slack')->getSettings();

        // Instantiate with defaults, so all messages created
        // will be sent from 'Cyril' and to the #accounting channel
        // by default. Any names like @regan or #channel will also be linked.
        $clientSettings = [
            'username' => 'Craft Slack',
            'channel' => '#random',
            'link_names' => true
        ];

        $this->client = new \Maknz\Slack\Client($this->settings['webhookUrl'], $clientSettings);
    }
    
    public function sendMessage($message)
    {
        $this->client->send($message);
    }
}