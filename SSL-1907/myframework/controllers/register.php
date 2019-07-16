<?
class register extends AppController{

    public function __construct($parent){
        $this->parent=$parent;

        //var_dump($this->parent);
    }

    public function register(){
        $myNav = array("home"=>"/home/home","register"=>"/register/register","login"=>"/login/login","api"=>"/api/api","crud"=>"/crud/crud","other"=>"/other/other");
        $data["navData"] = $myNav;

        $this->getView("header");
        $this->getView("navigation", $data);
        $this->getView("registForm");
        $this->getView("formFooter");
    }
}

?>