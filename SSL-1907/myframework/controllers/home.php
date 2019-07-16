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
        if($_REQUEST["username"] && $_REQUEST["password"]){
        // 
            if($_REQUEST["username"]=="steve@gmail.com" && $_REQUEST["pass"]=="password"){
                //echo "logged in";
            }
        }
    }
    
}


?>