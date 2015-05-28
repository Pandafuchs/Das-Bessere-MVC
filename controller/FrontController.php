<?php
require_once 'controller/AbstractController.php';
require_once 'class/template.php';
require_once 'controller/UserController.php';

class FrontController extends AbstractController {
    
    public function execute() 
    {
        FrontController::$action = isset($_GET['action']) ? $_GET['action'] : 'default';
        FrontController::$site = isset($_GET['site']) ? $_GET['site'] : 'home';
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
