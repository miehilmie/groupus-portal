<!doctype html>
<html>
    <head>
        <link href="<?php echo base_url(); ?>/css/common.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>/css/student.css" rel="stylesheet" />
    </head>
    <body>
        <div class="header">
            <div class="logopanel">
                <img src="<?php echo base_url(); ?>/img/logo.png" /><img src="<?php echo base_url(); ?>/img/title-logo.png" />
            </div>
            <div class="navbar clearfix">
                <div class="left"><span>Welcome, <?php echo $name; ?>!</span></div>
                <div class="right"><a href="<?php echo site_url('setting') ?>">Account Setting</a><a href="<?php echo site_url('logout'); ?>">Logout</a></div>
            </div>
        </div>
        <div class="content">
            <div class="content-wrapper">
                <h1>Lecturer View</h1>
            </div>
        </div>
        <div class="footer">
            <span>copyright (c) groupus, 2012 all right reserved</span><br /><small>powered by <a href="http://facebook.com/miehilmie">Hilmi Hassan</a></small>
        </div>
    </body>
</html>