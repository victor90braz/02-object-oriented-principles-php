<?php
$basePath = "C:\\Users\\braz9\\Desktop\\projects\\laracasts\\object-oriented-principles-php\\";
require_once $basePath . "functions.php";

class Team {
    protected $name;
    protected $members = [];

    public function __construct($name, $members = []){
        $this->name = $name;
        $this->members = $members;
    }

    public static function start(...$params) {
      return new static(...$params);
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

$acme->add('gabigol');

$start = Team::start('Flamengo', [
  'dida', 'cafu', 'lucio']);

// dd($start);


class Member {

  protected $name;

  public function __construct($name) {
    $this->name = $name;
  }

  public function lastViewed() {

  }

}

$teamBarcelona = Team::start('Barcelona', [
  new Member('ronaldinho'),
  new Member('cr7')
]);

$teamRealMadrid = Team::start('Barcelona', [
  new Member('belinghan'),
  new Member('kepa')
]);

dd($teamRealMadrid->members());
