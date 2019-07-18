<?

class home extends AppController{

    public function __construct($parent){
        $this->parent=$parent;

        //var_dump($this->parent);
    }
    
    public function index(){
        $myNav = array("home"=>"/home/home","register"=>"/register/register","login"=>"/login/login","api"=>"/api/api","crud"=>"/crud/crud","other"=>"/other/other");
        $data["navData"] = $myNav;

        $this->getView("header");
        $this->getView("navigation", $data);
        $this->getView("homeContent");
        $this->getView("footer");
    }



    public function home(){
        $myNav = array("home"=>"/home/home","register"=>"/register/register","login"=>"/login/login","api"=>"/api/api","crud"=>"/crud/crud","other"=>"/other/other");
        $data["navData"] = $myNav;

        $this->getView("header");
        $this->getView("navigation", $data);
        $this->getView("homeContent");
        $this->getView("footer");
    }

    public function register(){
        $myNav = array("home"=>"/home/home","register"=>"/register/register","login"=>"/login/login","api"=>"/api/api","crud"=>"/crud/crud","other"=>"/other/other");
        $data["navData"] = $myNav;

        $this->getView("header");
        $this->getView("navigation", $data);
        $this->getView("registForm");
        $this->getView("formFooter");
    }

    public function login(){
        $myNav = array("home"=>"/home/home","register"=>"/register/register","login"=>"/login/login","api"=>"/api/api","crud"=>"/crud/crud","other"=>"/other/other");
        $data["navData"] = $myNav;

        $this->getView("header");
        $this->getView("navigation", $data);
        $this->getView("loginForm");
        $this->getView("formFooter");
    }

    public function registerAction(){
        // var_dump($_POST);
        // echo $_REQUEST["email"];
        $msg = "";

        foreach ($_POST as $value) {
            echo $value;
        }

        if($_REQUEST["email"]!="" && $_REQUEST["pass"]!=""&& $_REQUEST["bio"]!=""&& $_REQUEST["gender"]!=""&& $_REQUEST["age"]!=""){
	 
            // Email Validation
            if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
                // Invalid Email
                $msg = $msg."Invalid Email";
            }

            // Password Validation
            if (!preg_match("/^[a-zA-Z]*$/",$_POST["pass"])) {
                // Invalid Password
                $msg = $msg."Invalid Password";
            }

            // Gender Validation
            if(empty($_POST['gender'])){
                $msg = $msg."Please indicate a gender";
            }
        }
        else{
            $msg=$msg."Please fill out all form fields";
        }
        header("location:/register/register?msg=".$msg);
    }

    public function ajaxParse(){
        // var_dump($_REQUEST)
        if(@$_REQUEST["email"]=="steve@gmail.com"){
            echo "welcome Steve!";
        }else{
            echo "error: invalid login.";
        }
    }

    public function loginAction(){
        // Check for blank text
        if($_POST["email"] != "" && $_POST["pass"] != ""){
        // 
            if($_POST["email"]=="steve@gmail.com" && $_POST["pass"]=="password"){
                //echo "logged in";
            }
        } else {
            // empty input
        }
    }

    // Lecture Day5 code
    public function formLogin(){
        if($_POST["email"] != "" && $_POST["pass"] != ""){
        // if my account
            if($_POST["email"]=="steve@gmail.com" && $_POST["pass"]=="password"){
                //echo "logged in";
                $_SESSION["isloggedin"] = "1";
                $_SESSION["email"] = $_POST["email"];

                header("location:/welcome/landing");
            }
            // login failed
            else{

                $_SESSION["isloggedin"] = "0";
                $_SESSION["email"] = "";

                header("location:/welcome/loginForm?msg=Bad Login");
            }
        }
        // blank email/pass
        else{

            $_SESSION["isloggedin"] = "0";
            $_SESSION["email"] = "";

            header("location:/welcome/loginForm?msg=Empty Login");
        }
    }

    public function loginForm(){

        if(@$_GET["msg"]){
            
        }
    }
    
}


?>