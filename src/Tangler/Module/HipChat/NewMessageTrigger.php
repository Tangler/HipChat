<?php

namespace Tangler\Module\HipChat;

use Tangler\Core\Interfaces\TriggerInterface;
use Tangler\Core\AbstractTrigger;

class NewFileTrigger extends AbstractTrigger implements TriggerInterface
{
    public function Init()
    {
        $this->setKey('new_message§');
        $this->setLabel('New HipChat Message trigger');
        $this->setDescription('This monitors a room for new messages');

        $this->parameter->defineParameter('roomid', 'string', 'Room ID to monitor');
        $this->parameter->defineParameter('apitoken', 'string', 'API Token');

        $this->output->defineParameter('fromname', 'string', 'Name of the user sending the message');
        $this->output->defineParameter('fromid', 'int', 'ID of the user sending the message');
        $this->output->defineParameter('datetime', 'stamp', 'Date/time the message was sent');
        $this->output->defineParameter('message', 'string', 'The actual message content');
    }


    public function Poll($channel)
    {
        $apikey = $this->parameter->getValue('apitoken');
        $roomid = $this->parameter->getValue('roomid');
        echo "POLLING FOR NEW HIPCHAT MESSAGES IN ROOM [" . $roomid . "]\n";
        //TODO: Implement this
        return false;
    }
}
