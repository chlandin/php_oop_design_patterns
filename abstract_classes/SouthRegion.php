 <?php
//SouthRegion.php
    include_once('IAbstract.php');
    class SouthRegion extends IAbstract
    {
        //Must return decimal value
        protected function giveCost()
        {
            return 300.00;
        }
        //Must return string value
        protected function giveCity()
        {
            return "South Side";
        }
    }
?>
