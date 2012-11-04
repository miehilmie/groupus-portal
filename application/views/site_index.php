<!doctype html>
<html>
    <head>
        <link href="<?php echo base_url(); ?>/css/common.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>/css/login.css" rel="stylesheet" />
    </head>
    <body>
        <div class="header">
            <div class="logopanel">
                <img src="<?php echo base_url(); ?>/img/logo.png" /><img src="<?php echo base_url(); ?>/img/title-logo.png" />
            </div>
            <div class="loginpanel clearfix">
                <form id="loginform" action="<?php echo site_url('home/do_login'); ?>" method="post">
                    <ul id="logindata" class="clearfix">
                        <li><span>Username:&nbsp;</span><input class="input" type="text" name="username" /></li>
                        <li><span>Password:&nbsp;</span><input class="input" type="password" name="password" /></li>
			<li><input class="submit" type="submit" name="login" value="Log In" /></li>
                    </ul>
                    <div id="remember" class="clearfix"><input type="checkbox" name="remember" id="persist_box" /><label for="persist_box" style="cursor: pointer; color:lightgrey;">Remember me?</label><a style="color:lightgrey; float:left; margin-left:125px; font-size: 11px;" href="<?php echo base_url(); ?>signup/">Not a member? Join us now!</a></div>
                </form>
            </div>
        </div>
        <div class="content">
            <ul class="content-grid clearfix">
                <li class="systemann-container">
                    <ul class="systemann">
                        <li class="title">Us! News!</li>
                        <li class="msg">Welcome to GroupUs!<br/>We are wishing you Selamat Hari Raya Aidilfitri</li>
                        <li class="postedtime">Posted on : <small>30-October-2012</small></li>
                    </ul>

                    <ul class="systemann">
                        <li class="title">We are now on twitter!</li>
                        <li class="msg">Find us on twitter! <a href="http://twitter.com/groupus">@groupus</a></li>
                        <li class="postedtime">Posted on : <small>1-September-2012</small></li>
                    </ul>
                <li class="peopleimg"></li>
            </ul>
        </div>
        <div class="footer">
            <span>copyright (c) groupus, 2012 all right reserved</span><br /><small>powered by <a href="http://facebook.com/miehilmie">Hilmi Hassan</a></small>
        </div>
    </body>
</html>