<?

class auth extends AppController{

    public function __construct(){
    }
    

    public function upload(){
        var_dump($_FILES);
    }

    public function login(){

        $loginFiles = file('./assets/accounts.txt');

        foreach($loginFiles as $login){
            $logins = explode('|', $login);
            
            if($logins[0] == $_REQUEST["email"] && $logins[1] == $_REQUEST["pass"]){
                header("location:/other/other");
                $_SESSION["isloggedin"] = "1";
            }
            // else{
            //     header("location:/home/formLogin");
            // }
        }
    }

    // Old logic checks based off hard-coded accounts
    //     if($_POST["email"] != "" && $_POST["pass"] != ""){
    //     // if my account
    //         if($_POST["email"]=="steve@gmail.com" && $_POST["pass"]=="password"){
    //             $_SESSION["isloggedin"] = "1";
    //             $_SESSION["email"] = $_POST["email"];

    //             header("location:/other/other");
    //         }
    //         // login failed
    //         else{

    //             $_SESSION["isloggedin"] = "0";
    //             $_SESSION["email"] = "";

    //             header("location:/home/loginForm?msg=Bad Login");
    //         }
    //     }
    //     // blank email/pass
    //     else{

    //         $_SESSION["isloggedin"] = "0";
    //         $_SESSION["email"] = "";

    //         header("location:/home/loginForm?msg=Empty Login (Auth)");
    //     }
    // }

    public function logout(){
        session_destroy();
        header("Location:/home/home");
    }

    
}

?>