<?php

namespace App\Http\Traits;


trait NotificationTrait{

    function _sendSuccessNotification($message){
        $this->dispatch('event-notification',message:$message,type:'success');
    }
    
    function _sendErrorNotification($message){
        $this->dispatch('event-notification',message:$message,type:'error');
    }

}