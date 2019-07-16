<!-- CONTROLLER / METHOD /  -->
<form action="/home/registerAction" method="POST" enctype="">
    <label for="email">Email Address:</label>
    <input type="text" name="email" id="email" placeholder="Enter email">
    <label for="pass">Password:</label>
    <input type="text" name="pass" id="pass" placeholder="Enter password">

    <fieldset>
        <label for="age">Age:</label>
        <select name="age" id="age">
            <option>less than 18</option>
            <option>19 - 29</option>
            <option>30 - 39</option>
            <option>40 - 49</option>
            <option>50 - 59</option>
            <option>60 - 69</option>
        </select>
        <label for="gender">Gender:</label>
            <input type="radio" name="gender" id="male" value="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female" value="female">
            <label for="female">Female</label>
    </fieldset>

    <label for="bio">Bio:</label>
    <textarea name="bio" id="bio" row="5" placeholder="Tell us about you!"></textarea>

    <label for="newsletter">Sign Up to Recieve Our Newsletter:</label>
    <input type="checkbox" name="newsletter" id="newsletter">

    <!-- <input type="submit"> -->
    <input type="submit" id="ajaxSubmit" value="Ajax Submit">
    <!-- <button type="submit">Submit</button> -->
</form>