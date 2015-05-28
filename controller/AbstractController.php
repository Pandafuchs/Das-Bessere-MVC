<?php
abstract class AbstractController {
    
    protected $template; 
    public function __construct($template) {
        $this->template = $template;
    }
    
    public abstract function execute();
}
?>
