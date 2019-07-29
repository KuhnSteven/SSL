<h1>Location Based on API Input:</h1>
<p>
    <!-- normalizedInput contains info about the indicated location -->
    <?
        echo $data['normalizedInput']['line1'], "<br /> \n";
        echo $data['normalizedInput']['city'], ", ";
        echo $data['normalizedInput']['state'], "<br /> \n";
        echo $data['normalizedInput']['zip'], "<br /> \n";
    ?>
</p>
<br>

<!-- officials is an array of objects (officials), there's lots more info but I took out only basic info and an image -->
<h1>Your Local Civic Servants:</h1>
<div>
    <img src=<? echo $data['officials'][0]['photoUrl'] ?> alt="State Rep" width=25%/>
    <p>
        <?
            echo $data['officials'][0]['name'], "<br /> \n";
            echo $data['officials'][0]['party'], "<br /> \n";
            echo $data['officials'][0]['phones'][0], "<br /> \n";
        ?>
    </p>
</div>

<div>
    <img src=<? echo $data['officials'][1]['photoUrl'] ?> alt="State Rep" width=25%/>
    <p>
        <?
            echo $data['officials'][1]['name'], "<br /> \n";
            echo $data['officials'][1]['party'], "<br /> \n";
            echo $data['officials'][1]['phones'][0], "<br /> \n";
        ?>
    </p>
</div>

<!-- As long as the array length of officials is taken in, it's possible to iterate  -->