<?

class describe extends AppController{

    public function __construct($parent){
        $this->parent=$parent;
    }
    

    public function describe(){

        $myNav = array("home"=>"/home/home","describe"=>"/describe/describe");
        $data["navData"] = $myNav;


        $this->getView("header");
        $this->getView("navigation", $data);
        $this->getView("body");
        $this->getView("footer");

        // $this->parent->getView("navigation", $data);
        // $this->parent->getView("header");
        // $this->parent->getView("body");
        // $this->parent->getView("footer");
    }
}

?>