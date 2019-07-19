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

    ?>
    <span style="color:red"><? @$_REQUEST["msg"]?$_REQUEST[msg]:'';?></span>
    <?if(@$_SESSION["isloggedin"] == "1"){?>
        <form>
            <a href="/profile/index">Profile</a>
            <a href="/auth/logout">Logout</a>
        </form>
    <?}else{?>
        <form action="/home/formLogin" method="POST" enctype="">
            <label for="email">Email Address:</label>
            <input type="text" name="email" id="email" placeholder="Enter email">

            <label for="pass">Password:</label>
            <input type="text" name="pass" id="pass" placeholder="Enter password">
            
            <input type="submit" name=""> 
        </form>
    <?}
    // close navigation
    echo "</ul></nav>";
    ?>