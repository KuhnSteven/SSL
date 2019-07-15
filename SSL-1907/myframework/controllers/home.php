<?

class home extends AppController{

    public function __construct($parent){
        $this->parent=$parent;

        //var_dump($this->parent);
    }
    

    public function home(){

        //echo "hello";

        // $myNav = array("home"=>"/home/home","describe"=>"/describe/describe"); Day 2 nav, day 3 below
        $myNav = array("home"=>"/home/home","api"=>"/api/api","crud"=>"/crud/crud","other"=>"/other/other");
        $data["navData"] = $myNav;

        $this->getView("header");
        $this->getView("navigation", $data);
        $this->getView("homeContent");
        $this->getView("footer");
    }
}


?>