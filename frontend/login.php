
<html>
    <head>
        <title>F1 Race login</title>
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="core/style_util.css">
    </head>
    <body class="background_color">
        <div id="inner_body">
            <div id="navbar" class="general_border">
                <p class="general_font">F1 Race</p>
                <a href="<?=HOME_URL?>">Home</a>
            </div>
            <h1>Login</h1>
            <form action="POST" id="login_form">
                <div>
                    <label for="email">Email</label>
                    <input type="text" name="email">
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password">
                </div>
                <button type="submit" class="general_button">Login</button>
            </form>
        </div>
    </body>
</html>