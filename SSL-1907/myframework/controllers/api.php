<?

class api extends AppController{

    public function __construct($parent){
        $this->parent=$parent;
    }
    

    public function api(){
        $myNav = array("home"=>"/home/home","api"=>"/api/api","crud"=>"/crud/crud","other"=>"/other/other");
        $data["navData"] = $myNav;

        $this->getView("header");
        $this->getView("navigation", $data);
        $this->getView("body");
        $this->getView("footer");
    }
}

?>