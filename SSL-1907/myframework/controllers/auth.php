<?

class auth extends AppController{

    public function __construct(){
    }
    
    public function login(){
        if($_POST["email"] != "" && $_POST["pass"] != ""){
        // if my account
            if($_POST["email"]=="steve@gmail.com" && $_POST["pass"]=="password"){
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

            header("location:/home/loginForm?msg=Empty Login (Auth)");
        }
    }

    public function logout(){
        session_destroy();
        header("Location:/home/home");
    }

    
}

?>