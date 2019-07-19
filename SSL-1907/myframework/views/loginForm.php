<?
function create_image($cap) {

    unlink("./assets/image1.png");
    global $image;

    $image = imagecreatetruecolor(200, 50) or die("Cannot Initialize new GD image stream");
    $background_color = imagecolorallocate($image, 255, 255, 255);
    $text_color = imagecolorallocate($image, 0, 255, 255);
    $line_color = imagecolorallocate($image, 64, 64, 64);
    $pixel_color = imagecolorallocate($image, 0, 0, 255);

    imagefilledrectangle($image, 0, 0, 200, 50, $background_color);

    for ($i = 0; $i < 3; $i++) {
    imageline($image, 0, rand() % 50, 200, rand() % 50, $line_color);
    }

    for ($i = 0; $i < 1000; $i++) {
    imagesetpixel($image, rand() % 200, rand() % 50, $pixel_color);
    }

    $text_color = imagecolorallocate($image, 0, 0, 0);
    ImageString($image, 22, 30, 22, $cap, $text_color);

    $_SESSION["captcha"]= "";

    imagepng($image, "./assets/image1.png");

}

create_image($data["cap"]);
echo "<img src='/assets/image1.png'>";

?>

<form id="loginForm" action="/home/formLogin" method="POST" enctype="">
    <label for="email">Email Address:</label>
    <input type="text" name="email" id="email" placeholder="Enter email">
    <label for="pass">Password:</label>
    <input type="text" name="pass" id="pass" placeholder="Enter password">
    
    <div>
        <label for="exampleInputEmail1">Enter Captcha </label>
        <input name="captcha" type="captcha" id="captcha" placeholder="">
    </div>
    <input type="submit" name=""> 
</form>