<?php   

class Team
{
    //Protected $name;
    Protected $members = [];

    public function __construct($name, $members = [])
    {
        $this->members = $members;
        $this->name = $name;
    }

    // Class method - global function, caution when it changes thing in a system , this here is a basic factory.
    // Can use (...$prams) to pass in multiple parameters
    public static function start($name, $members = [])
    {
        return new static($name, $members);
    }

    public function name($name)
    {
        return $this->name;
    }
    
    public function add($name)
    {
        $this->members[] = $name;
    }

    public function members()
    {
        return $this->members;
    }

    public function cancel()
    {

    }

    public function manager()
    {

    }
}



class Member
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function lastViewed()
    {
        
    }

}

$acme = new Team('Acme');
$acme->add('John Deer');
$acme->add('Joe Lee');
var_dump($acme);


$test = new Team('Test', [
    'Joe Lee',
     'Sauce face'
]);
var_dump($test);


$test1 = Team::start('Test1', [
    'Joe Lee',
    'Sauce face'
]);
var_dump($test1);

$test2 = Team::start('Test2', [
    new Member('Joe Lee'),
    new Member('Sauce face')
]);
var_dump($test2->members());



