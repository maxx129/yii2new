<?php

namespace common\components;

/**
 * @author max
 */
interface UserNotificationInterface 
{
    public function getEmail();
    public function getSubject();
}
