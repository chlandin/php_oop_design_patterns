<?php
    //GraphicProduct.php
include_once('Product.php');
class GraphicProduct implements Product
    {
        private $mfgProduct;

        public function getProperties()
        {
            $this->mfgProduct.="<img style='padding: 10px 10px 10px 0px'; src='http://placehold.it/500x500/228B22' align='left' width='500' height='500' />";
            return $this->mfgProduct;
        }
} ?>
