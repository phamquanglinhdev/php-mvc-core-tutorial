<?php

class c_notification
{
    public static function getAll()
    {
        require "models/m_notification.php";
        $notifications = m_notification::getAll();
        if ($notifications != null) {
            include "views/v-showNotification.php";
        }
    }
}
