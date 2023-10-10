<?php
$basePath = "C:\\Users\\braz9\\Desktop\\projects\\laracasts\\object-oriented-principles-php\\";
require_once $basePath . "functions.php";

class Team {
    protected $name;
    protected $members = [];

    public function __construct($name, $members)
    {
        $this->name = $name;
        $this->members = $members;
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

$acme = new Team("victor", [
  'Messi', 'Kaka'
]);

dd($acme->members());
