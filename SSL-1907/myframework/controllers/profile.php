<?

class auth extends AppController{

    public function __construct(){
        if($_SESSION["isloggedin"]="1"){

        }
        // not logged in
        else{
            header("location:/home/loginForm?msg=Bad Login");
        }
    }
    
    public function index(){
        $this->getView("header",array("pagename"=>"profile"));
        echo "This area is protected.";
    }

    // Lecture Day5 code
    public function formLogin(){
        if($_REQUEST["email"] != "" && $_REQUEST["pass"] != ""){
        // if my account
            if($_REQUEST["email"]=="steve@gmail.com" && $_REQUEST["pass"]=="password"){
                //echo "logged in";
                $_SESSION["isloggedin"] = "1";
                $_SESSION["email"] = $_POST["email"];

                header("location:/other/index");
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