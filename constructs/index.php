<?php
$basePath = "C:\\Users\\braz9\\Desktop\\projects\\laracasts\\object-oriented-principles-php\\";
require_once $basePath . "functions.php";

class Team {
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function name()
    {
        return $this->name;
    }
}

$member = new Team("victor");
$memberName = $member->name();

dd($memberName);
