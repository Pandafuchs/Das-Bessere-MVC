<?php
/* Model Classes */
require_once 'model/example.php';

class UserController extends AbstractController { 
    public function execute() {    
    
        switch (Frontcontroller::$action) {
            case 'index' : {
                $this->template->setContent("view/user/home.php");
                $this->template->render();
                break;
            }
            case 'logout' : {
                session_destroy();
                header("Location: index.php");
                break;
            }
            default : {
                $this->template->setContent("view/user/home.php");
                $this->template->render();
                break;
            }
        }
    }
}

?>
