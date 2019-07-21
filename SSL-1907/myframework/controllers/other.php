<?

class other extends AppController{

    public function __construct($parent){
        $this->parent=$parent;
        $data = array();

        // Is user logged in
        if(@$_SESSION["isloggedin"]!="1"){
            header("location:/home/formLogin?msg=Authorized Users Only");
        }
    }
    
    public function landing(){
        // echo  "good landing";
        // var_dump($_SESSION);
    }

    public function other(){
        $myNav = array("home"=>"/home/home","register"=>"/register/register","login"=>"/login/login","api"=>"/api/api","crud"=>"/crud/crud","other"=>"/other/other");
        $data["navData"] = $myNav;

        $this->getView("header");
        $this->getView("navigation", $data);
        $this->getView("userContent");
        $this->getView("footer");
    }
}

?>