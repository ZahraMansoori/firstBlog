<link rel="stylesheet" href="files/blog.css">

<div style="align-content: center;
            width: 60%;
            margin: 20px auto;
            background-color: #b7b7b7;
            border-radius: 10px;
            padding: 20px;
text-align: center;">

    <div class="signUpForm pure-u-1-2"
<!--         style="border: 2px solid;-->
<!--padding: 10px;-->
<!--background-color: #999999;-->
<!--align-content: center;-->
<!--text-align: center;-->
<!--height: 100%;-->
<!--width: fit-content;-->
<!--font-size: 18px;-->
<!--margin: 5px;"-->



    <form action="Process.php" method="post">

        <label for="nameField">Enter Your Fuckin Name : </label> <br>
        <input type="text" name="txtField" placeholder="Enter Your Name" id="nameField"><br><br>

        <label for="passField">Enter Your Fuckin Password : </label> <br>
        <input type="password" name="passField" id="passField" placeholder="Enter Your Password"><br><br>

        <label for="radioField">What is your fuckin gender : </label> <br>
        <input type="radio" name="gender" id="radioField"/>Male
        <input type="radio" name="gender" id="radioField"/>Female
        <input type="radio" name="gender" id="radioField"/>Other <br><br>

        <label for="radioField">What is your fuckin birthday : </label> <br>
        <select name="year" id="year">
            <option value="">1900</option>
            <option value="1">2000</option>
        </select><select name="month" id="month">
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select><select name="day" id="day">
            <option value="1">1-9</option>
            <option value="2">10-19</option>
            <option value="3">20-31</option>
        </select> <br><br>

        <label for="favMode">What is your fuckin Favorite Mode : </label> <br>
        <input type="checkbox" name="favMode[]" id="favMode"/>Dark
        <input type="checkbox" name="favMode[]" id="favMode"/>Light <br><br>

        <label for="upload">Upload your fockin avatar : </label> <br>
        <input type="file" name="upload" id="upload"/> <br><br>

        <label for="msg">Tell Us about your fuckin opinion : </label> <br>
        <textarea name="msg" id="msg" cols="30" rows="10" style="border: 5px solid black;"></textarea><br><br>

        <input type="submit" value="SUBMIT">
    </form>
</div>


</div>