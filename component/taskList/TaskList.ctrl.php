<?php
/* Generated by neoan3-cli */

namespace Neoan3\Components;

use Neoan3\Core\Unicore;
use Neoan3\Model\TaskModel;

class TaskList extends Unicore
{
    private $tasks;
    function init()
    {
        $this->uni('demo')
            ->callback($this,'getTasks')
             ->hook('main', 'taskList',['tasks'=>$this->tasks])
             ->output();
    }
    function getTasks($uni){
        $this->tasks = TaskModel::find(['is_done'=>false]);

        $uni->js .= 'let tasks = '. json_encode($this->tasks) . ';';
    }

}
