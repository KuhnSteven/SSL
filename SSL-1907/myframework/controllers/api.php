<?

class api extends AppController{

    public function __construct($parent){
        $this->parent=$parent;
    }
    

    public function api(){
        $myNav = array("home"=>"/home/home","register"=>"/register/register","login"=>"/login/login","api"=>"/api/api","crud"=>"/crud/crud","other"=>"/other/other");
        $navdata["navData"] = $myNav;

        $this->getView("header");
        $this->getView("navigation", $navdata);
        
        // civicModel's query method is called, data returned is set and sent to the view.
        $data = $this->parent->getModel("civicModel")->queryCivic();
        $this->parent->getView('displayCivic', $data);

        $this->getView("footer");
    }

    public function index(){
        // Put in model
        require_once "google-api-php-client-2.2.3/vendor/autoload.php";

        $client = new Google_Client();
        $client->setApplicationName("SSLProject");
        $client->setDeveloperKey("AIzaSyDlarMCITqVRr7FIdLvkg0Io880wE_vOPc");

        $service = new Google_Service_Books($client);

        $optParams = array('filter' => 'free-ebooks');
        $results = $service->volumes->listVolumes('Henry David Thoreau', $optParams);

        // Put in view, pass results into getView ()
        foreach ($results as $item) {
            echo $item['volumeInfo']['title'], "<br /> \n";
        }
    }
}

?>