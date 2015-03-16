<?php

namespace Craft;

class SlackVariable
{
    
    public function message($message = null)
    {
        if (empty($message)) {
            return false;
        }

        return craft()->slack->sendMessage($message);
    }

}