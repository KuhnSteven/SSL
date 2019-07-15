    <?

    //start nav
    echo "<nav><ul>";
    foreach($data["navData"] as $key=>$menuLabel){
        // Build nav item per key
        echo "<li><a ";
        if($key == $this->parent->urlPathParts[0]){
            echo "style='font-weight:bold; color:darkblue'";
        }
        echo $this->parent->urlPathParts[0];
        echo " href='".$menuLabel."'> ".strtoupper($key)."</a></li>";
    }
    // close navigation
    echo "</ul></nav>";

    ?>