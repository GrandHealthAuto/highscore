<?php
namespace Highscore;

use King23\Core\Registry;

class MaintenanceTask extends \King23\CommandLine\Task
{
    /**
     * documentation for the single tasks
     * @var array
     */
    protected $tasks = array(
        "info" => "General Informative Task",
        "setup_indexes" => "setup the indexes for the application",
    );

    /**
     * Name of the module
     */
    protected $name = "Maintenance";

    /**
     * public method resembling the actual task action "example"
     * @param array $options
     */
    public function setup_indexes(array $options)
    {
        $this->cli->message("setting indexes");
        $reg = Registry::getInstance();

        $col = $reg->mongo['db']->Player;
        $col->ensureIndex(array("name" => 1), array("name" => "i_name"));
        $this->cli->positive("index set");
    }
}
