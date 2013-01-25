<?php
namespace EXAMPLE;

class ExampleTask extends \King23\CommandLine\Task 
{
    /**
     * documentation for the single tasks
     * @var array
     */
    protected $tasks = array(
        "info" => "General Informative Task",
        "example" => "example",
    );

    /**
     * Name of the module
     */
    protected $name = "Example";

    /**
     * public method resembling the actual task action "example"
     * @param array $options 
     */
    public function example(array $options)
    {
        $this->cli->message("example task call");
        var_dump($options);
    }
}
