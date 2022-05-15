<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tips Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body {
        background-color: rgb(224,224,224);
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    .topnav {
        margin: auto;
        overflow: hidden;
        width: fit-content;
        background-color: #333;
        margin-left: 42%;
    }

    .topnav a {
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    .topnav a:hover {
        background-color: #ddd;
        color: black;
    }

    .topnav a.active {
        background-color: #4c9bea;
        color: white;
    }

    .space {
        padding-top: 100px;
    }

    .login {
        padding-top: 10px;
        width: 500px;
        height: auto;
        margin: auto;
        background-color: gba(102, 178, 255, 0.894);
        border-radius: 2px;
        padding-bottom: 50px;
        border: 4px solid rgb(255, 242, 0);
    }

    h3 {
        text-align: center;
        padding-top: 5px;
        color: whitesmoke;
    }

    h4 {
        text-align: center;
        padding-top: 10px;
        color: whitesmoke;
    }

    form {
        width: 300px;
        margin-left: 100px;

    }

    form label {
        display: flex;
        margin-top: 20px;
        font-size: 18px;
        color: whitesmoke;

    }

    form input {
        width: 100%;
        padding: 7px;
        border: 2px solid black;
        border-radius: 3px;
        outline: none;
    }

    input[type="submit"] {
        width: 100px;
        height: 35px;
        margin-top: 20px;
        margin-left: 100px;
        border: none;
        background-color: aqua;
        color: aliceblue;
        font-size: 18px;

    }

    .one {
        text-align: justify;
        color: whitesmoke;
        font-size: 20px;
        padding-left: 30px;
        padding-right: 30px;
        margin: auto;
    }

    .two {
        text-align: center;
        color: black;
        font-size: 20px;
        margin-top: 5px;

    }

    .three {
        text-align: justify;
        color: whitesmoke;
        font-size: 20px;
        padding-left: 70px;
        padding-right: 20px;
        margin: auto;
    }

    .four {
        text-align: center;
        color: whitesmoke;
        font-size: 20px;
        margin-top: 10px;
    }

    .tips {
        padding-top: 10px;
        width: 500px;
        height: auto;
        margin: auto;
        background-color:  #4c9bea;
        border-radius: 20px;
        padding-bottom: 50px;
        border: 4px solid rgb(255,255,255);
    }

    .test {
        padding-left: 210px;
        font-size: 15px;
    }

    #logo {
        float: left;
        border-radius: 10px;
        height: 58px;
        width: 115px;
        border: 4px solid  #FF0000;
    }

    #img {
        float: left;
        width: 18%;
        padding: 5px;
        margin-top: 2.7%;
        border-radius: 10px;
        padding-left: 138px;
    }

    #img2 {
        float: right;
        width: 15%;
        padding: 5px;
        padding-right: 156px;
        margin-top: 2.7%;
        border-radius: 10px;
    }
</style>
<body>
    <img id="logo" src="http://localhost/wbs/img/Logo.png">
    <div class="topnav">
        <a href="http://localhost/wbs/index.php">Home</a>
        <a href="http://localhost/wbs/login.php">Login</a>
        <a href="http://localhost/wbs/Tips.php">Tips</a>
        <a class="active" href="http://localhost/wbs/Help.php">Help</a>
    </div>
    <div class="space">

    </div>
    <div class="row">
        <div class="column">
            <img id="img" src="http://localhost/wbs/img/2.jpg">
            <img id="img2" src="http://localhost/wbs/img/i1.jpg">
        </div>
        <div class="tips">
            <h3> Help</h3>
            <p class="one">If you need any help contact us via <br> following: </p>
            <p class="three">Phone: 98XXXXXXXX <br>
                Telephone: 42XXXXX <br>
                Email: bilingsystem@water.com</p>
            <p class="four">Our office is located at Naxal, <br> Kathmandu.</p>
        </div>
    </div>
    <p class="two">"Individually, we are one drop. Together,<br> we are an ocean."</p>

</body>

</html>