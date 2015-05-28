<?php
require_once 'controller/abstractcontroller.php';
require_once 'class/template.php';
require_once 'controller/UserController/UserController.php';

class FrontController extends AbstractController {
    
    public function execute() {
        if (isset($_SESSION["ID"])) 
        {
            // if  User is logged in, call the Usercontroller. You can also add other Controller (Admincontroller for backend).
            $controller = new UserController($this->template);           
            $controller->execute();                
        }
        else
        {
            // Here you should handle register/login or use another Controller! You could also use the Usercontroller if you don't need authentification.
            $this->template->setContent('view/user/login.php');
            $this->template->render();
        }
    }
}

?>
