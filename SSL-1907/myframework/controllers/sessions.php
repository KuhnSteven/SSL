<?

class home extends AppController{

    public function __construct($parent){
        $this->parent=$parent;

        // Is user logged in
        if(@$_SESSION["isloggedin"]!="1"){
            header("location:home/sessions/contact");
        }else{
            header("/dash/landing");
        }
    }
    
    public function contact(){
        $myNav = array("home"=>"/home/home", "login"=>"/login/loginForm", "register"=>"/register/regForm", "contact"=>"/contact/contactUs", "sessions"=>"/sessions/contact");
        $data["navObj"] = $myNav;

        $this->getView("header");
        $this->getView("navigation", $data);
        $random = substr( md5(rand()), 0, 7);
        $this->getView("contact",array("cap"=>$random));
        $this->getView("footer");
    }

    public function contactRecv(){
	    $this->getView("header");
	
	    if($_POST["captcha"]==$_SESSION["captcha"]){
	
	        if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
	        echo "Invalid Email";
	        echo "<br><a href='/sessions/contact'>Click here to go back</a>";
	        }else{
	        echo "Email valid";
	        }
	
	    }else{
	        echo "Bad captcha";
	        echo "<br><a href='/sessions/contact'>Click here to go back</a>";
	
        }
    }
    
}


?>