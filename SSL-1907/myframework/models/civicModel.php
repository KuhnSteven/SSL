<?php

class civicModel{

    public function __construct($parent){
        $this->parent = $parent;
    }

    public function queryCivic() {
        // load php handler
        require_once "google-api-php-client-2.2.3/vendor/autoload.php";

        // create google client instance, attach app name & dev key
        $client = new Google_Client();
        $client->setApplicationName("SSLProject");
        $client->setDeveloperKey("AIzaSyDlarMCITqVRr7FIdLvkg0Io880wE_vOPc");

        // Indicate which service is being used, feed it client info
        $service = new Google_Service_CivicInfo($client);

        // search query is contained within opt array, 'levels' input left out for lack of understanding...
        // Address provided is Fullsail Uni. - 3300 University Blvd Winter Park, FL 32792
        $optParams = array('address' => '3300 University Blvd Winter Park, FL 32792', 'includeOffices' => true, 'roles' => 'legislatorUpperBody');
        $results = $service->representatives->representativeInfoByAddress($optParams);

        // return JSON results to original method caller
        return $results;
    }
}

?>