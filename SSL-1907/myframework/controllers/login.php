<?
class login extends AppController{

    public function __construct($parent){
        $this->parent=$parent;

        //var_dump($this->parent);
    }

    public function logout(){
        $_SESSION["isloggedin"] = "0";
        $_SESSION["email"] = "";
        session_destroy();
        header("location:/home/loginForm");
    }

    public function login(){
        $myNav = array("home"=>"/home/home","register"=>"/register/register","login"=>"/login/login","api"=>"/api/api","crud"=>"/crud/crud","other"=>"/other/other");
        $data["navData"] = $myNav;

        $this->getView("header");
        $this->getView("navigation", $data);
        $this->getView("loginForm");
        $this->getView("loginFooter");
    }
}

?>