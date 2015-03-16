<?php

namespace Craft;

class SlackPlugin extends BasePlugin {

    function getName()
    {
        return Craft::t('Slack');
    }

    function getVersion()
    {
        return '0.1';
    }

    function getDeveloper()
    {
        return 'Fred Carlsen';
    }

    function getDeveloperUrl()
    {
        return 'http://sjelfull.no';
    }

    public function getSettingsHtml()
    {
        return craft()->templates->render('slack/_settings', array(
            'settings' => $this->getSettings()
        ));
    }

    protected function defineSettings()
    {
        return array(
            'webhookUrl' => array(AttributeType::String, 'label' => 'Slack Webhook URL'),
            'channel' => array(AttributeType::String, 'label' => '#Channel'),
            'username' => array(AttributeType::String, 'label' => 'Username to send as'),
        );
    }

}
