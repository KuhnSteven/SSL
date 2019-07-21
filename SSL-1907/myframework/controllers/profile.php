<?

class profile extends AppController{

    public function __construct($parent){
        $this->parent=$parent;
        $data = array();

        // Is user logged in
        if(@$_SESSION["isloggedin"]!="1"){
            header("location:/home/formLogin?msg=Authorized Users Only");
        }
    }
    
    public function index(){
        $myNav = array("home"=>"/home/home","register"=>"/register/register","login"=>"/login/login","api"=>"/api/api","crud"=>"/crud/crud","other"=>"/other/other");
        $data["navData"] = $myNav;

        $this->getView("header",array("pagename"=>"profile"));
        echo "This area is protected.";
        $this->getView("navigation", $data);

        $loginFiles = file('./assets/accounts.txt');
        foreach($loginFiles as $login){
            $logins = explode('|', $login);
            $this->getView("profile");
        }


        $this->getView("footer");
    }

    public function landing(){
        echo "RESTRICTED ACCESS ONLY.";
    }

    // Lecture Day5 code
    public function formLogin(){
        if($_REQUEST["email"] != "" && $_REQUEST["pass"] != ""){
        // if my account
            if($_REQUEST["email"]=="steve@gmail.com" && $_REQUEST["pass"]=="password"){
                //echo "logged in";
                $_SESSION["isloggedin"] = "1";
                $_SESSION["email"] = $_POST["email"];

                header("location:/other/other");
            }
            // login failed
            else{

                $_SESSION["isloggedin"] = "0";
                $_SESSION["email"] = "";

                header("location:/home/loginForm?msg=Bad Login");
            }
        }
        // blank email/pass
        else{

            $_SESSION["isloggedin"] = "0";
            $_SESSION["email"] = "";

            header("location:/home/loginForm?msg=Empty Login (Profile)");
        }
    }

    public function logout(){
        session_destroy();
        header("Location:/home/home");
    }

    
}

?>