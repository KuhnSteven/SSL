<?

class home extends AppController{

    public function __construct($parent){
        $this->parent=$parent;

        //var_dump($this->parent);
    }
    

    public function home(){

        //echo "hello";

        $myNav = array("home"=>"/home/home","describe"=>"/describe/describe");
        $data["navData"] = $myNav;

        $this->getView("header");
        $this->getView("navigation", $data);
        $this->getView("body");
        $this->getView("footer");
    }
}


?>