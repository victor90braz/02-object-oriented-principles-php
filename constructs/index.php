<?php
$basePath = "C:\\Users\\braz9\\Desktop\\projects\\laracasts\\object-oriented-principles-php\\";
require_once $basePath . "functions.php";

class Team {
    protected $name;
    protected $members = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function name()
    {
        return $this->name;
    }

    public function add($name) {

     $this->members[] = $name;

    }

    public function members() {
      return $this->members;
    }
}

$acme = new Team("victor");
$acme->name();
$acme->add('ronaldo');
$acme->add('messi');
$acme->members();

dd($acme->members());
