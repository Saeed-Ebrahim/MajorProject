



<html>
    <head>
        <title>Sign up form</title>
        <script type="text/javascript" src="abt-js.js"></script>
        <link rel="stylesheet" href="styles.css">
        <script type="text/javascript" src="sign-up-js.js"></script>
    </head>
    <link rel="stylesheet" href="styles.css">
<body class="sign-up-body">
    <div class="sign-up-div">
        <p class="sign-up-div-p">SIGN UP HERE!!</p>
        <div class="container">

            <form onsubmit="return validate()" action="overviewtry.html">
            <label style="color: rgb(201, 206, 212);">Username</label>
            <input type="text" id="un" placeholder="Enter Username">
            <br>
            <label><b style="color: rgb(201, 206, 212);">Email</b></label>
            <input type="email" id="em" placeholder="Email ID">
            <label><b style="color: rgb(201, 206, 212);">Set Password</b></label>
            <input type="password" id="sp" placeholder="Enter Password">
            <br>
            <label><b style="color: rgb(201, 206, 212);">Confirm Password</b></label>
            <input type="password" id="cp" placeholder="Enter Password">
            <br>
            <br>
            <button class="clrbtn" onclick="signupclear()" type="button">clear</button>
            <button type="submit">Sign Up</button>
            </form>

        </div>
    </div>
</body>
</html>