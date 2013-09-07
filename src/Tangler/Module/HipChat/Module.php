<?php

namespace Tangler\Module\HipChat;

use Tangler\Core\AbstractModule;
use Tangler\Core\Interfaces\ModuleInterface;

class Module extends AbstractModule implements ModuleInterface
{
    public function Init()
    {
        $this->setKey('hipchat');
        $this->setLabel('HipChat module');
        $this->setDescription('This is the HipChat Tangler module');
        $this->setImageUrl('http://osx.wdfiles.com/local--files/icon:hipchaticon/HipChatIcon.png');

        $this->setTriggers(array(
            new \Tangler\Module\HipChat\NewMessageTrigger()
        ));

        $this->setActions(array(
            new \Tangler\Module\HipChat\SendMessageAction()
        ));
    }
}
