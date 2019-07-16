<?

class crud extends AppController{

    public function __construct($parent){
        $this->parent=$parent;
    }
    

    public function crud(){
        $myNav = array("home"=>"/home/home","register"=>"/register/register","login"=>"/login/login","api"=>"/api/api","crud"=>"/crud/crud","other"=>"/other/other");
        $data["navData"] = $myNav;

        $this->getView("header");
        $this->getView("navigation", $data);
        $this->getView("body");
        $this->getView("footer");
    }
}

?>