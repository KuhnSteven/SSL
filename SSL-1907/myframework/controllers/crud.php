<?

class crud extends AppController{

    public function __construct($parent){
        $this->parent=$parent;
        $data = array();

        // Is user logged in
        if(@$_SESSION["isloggedin"]!="1"){
            header("location:/home/formLogin?msg=Authorized Users Only");
        }
    }
    

    public function crud(){
        $myNav = array("home"=>"/home/home","register"=>"/register/register","login"=>"/login/login","api"=>"/api/api","crud"=>"/crud/crud","other"=>"/other/other");
        $navData["navData"] = $myNav;

        $data = $this->parent->getModel("model")->getItems("select * from fruit_table");
        $this->getView("header");
        $this->getView("navigation", $navData);
        $this->parent->getView('looper', $data);
        
        // var_dump($this->parent);

        $this->getView("footer");
    }

    public function addAction(){

        $this->parent->getModel("model")->addItem($_POST);
        header("location:/crud/crud");
    }

    public function editAction(){

        $this->parent->getModel("model")->updateItem($_POST);
        // header("location:/crud/crud");
    }

    public function getItem(){
        $id = $_GET['id'];
        // echo $id;
        editForm($id);
        // editAction($id);
        
    }

    public function delItem(){
        $this->parent->getModel("model")->deleteItem($_GET['id']);
        header("location:/crud/crud");
    }

    public function addForm(){
        $this->parent->getView("addForm");
    }

    public function editForm(){
        $id = $_GET['id'];
        // echo $id;
        $name = $_GET['name'];
        // echo $name;
        $data = [$id, $name];

        // $data = $this->parent->getModel("model")->getItem("select * from fruit_table where id = " + $id);
        $this->parent->getView("editForm", $data);
    }
}

?>