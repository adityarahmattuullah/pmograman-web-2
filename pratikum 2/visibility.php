<!--visibility.php -->
<?php

class visibility{
    public $public;
    private $private;
    protected $protected;

    function tampilkanproperty(){
        echo "public : " .$this->public . '<br>';
        echo "protected : " . $this->protected . '<br>';
        echo "private : " . $this->private . '<br>';
    }
}