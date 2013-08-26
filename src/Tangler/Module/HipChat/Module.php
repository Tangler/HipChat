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

        $this->setTriggers(array(
            new \Tangler\Module\File\NewMessageTrigger()
        ));

        $this->setActions(array(
            new \Tangler\Module\File\SendMessageAction()
        ));
    }
}
