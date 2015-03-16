<?php

namespace Craft;

class SlackVariable
{
    
    public function message($message = null)
    {
        if (empty($message)) {
            return false;
        }

        craft()->slack->sendMessage($message);
        
        return true;
    }

}
