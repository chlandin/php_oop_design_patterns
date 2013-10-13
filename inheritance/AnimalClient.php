<?php 
include_once('Dogs.php');
include_once('Cats.php');
class AnimalClient
{
    function __construct()
    {
        $dogs = new Dogs();
        $cats = new Cats();
    }
}
$worker = new AnimalClient();
?>
