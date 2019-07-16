<?

class other extends AppController{

    public function __construct($parent){
        $this->parent=$parent;
    }
    

    public function other(){
        $myNav = array("home"=>"/home/home","register"=>"/register/register","login"=>"/login/login","api"=>"/api/api","crud"=>"/crud/crud","other"=>"/other/other");
        $data["navData"] = $myNav;

        $this->getView("header");
        $this->getView("navigation", $data);
        $this->getView("homeContent");
        $this->getView("footer");
    }
}

?>