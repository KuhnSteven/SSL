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
        $random = substr( md5(rand()), 0, 7);

        $this->getView("header", array("pagename"=>"contact"));
        $this->getView("navigation", $data);
        $this->getView("loginForm",array("cap"=>$random));
        $this->getView("loginFooter");
    }
}

?>