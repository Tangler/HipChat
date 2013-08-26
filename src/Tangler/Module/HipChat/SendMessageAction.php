<?php

namespace Tangler\Module\HipChat;

use Tangler\Core\Interfaces\ActionInterface;
use Tangler\Core\AbstractAction;
use HipChat;

class SendMessageAction extends AbstractAction implements ActionInterface
{
    public function Init()
    {
        $this->setKey('send_message');
        $this->setLabel('Send HipChat Message');
        $this->setDescription('This action sends a new message to a HipChat room');

        $this->parameter->defineParameter('apitoken', 'string', 'API Token');
        $this->parameter->defineParameter('roomid', 'string', 'Room ID');
        $this->parameter->defineParameter('message', 'string', 'Actual message');
        $this->parameter->defineParameter('fromname', 'string', 'From name');
    }

    public function Run($input)
    {
        $roomid = $this->resolveParameter('roomid', $input);
        $apitoken = $this->resolveParameter('apitoken', $input);
        $message = $this->resolveParameter('message', $input);
        $fromname = $this->resolveParameter('fromname', $input);
        echo "\n### SendMessageAction: [$roomid] " . $message . "\n$fromname\n";
        $hc = new HipChat\HipChat($apitoken);
        $hc->message_room($roomid, $fromname, $message);
    }
}
