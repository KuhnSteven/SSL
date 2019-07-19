<?

class contact extends AppController{
    public function __construct($parent){
        $this->parent = $parent;
    }

    public function contactDis(){
        $myNav = array("home"=>"/home/home", "login"=>"/login/loginForm", "register"=>"/register/regForm", "contact"=>"/contact/contactUs", "sessions"=>"/sessions/contact");
        $data["navObj"] = $myNav;

        $this->getView("header");
    }
}


?>