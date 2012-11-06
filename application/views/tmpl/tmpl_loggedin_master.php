<!doctype html>
<html>
    <head>
        <title>GroupUs! | Optimized Academic Grouping System - Student</title>
        <link href="<?php echo base_url(); ?>/css/common.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>/css/student.css" rel="stylesheet" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/js/jquery.js"><\/script>')</script>
        <script src="<?php echo base_url(); ?>js/student.js"></script>
        
    </head>
    <body>
        <div class="header">
            <div class="logopanel">
                <img src="<?php echo base_url(); ?>/img/logo.png" /><img src="<?php echo base_url(); ?>/img/title-logo.png" />
            </div>
            <div class="navbar clearfix">
                <div class="left"><a href="/"><img style="margin-top:4px; margin-right:10px" src="<?php echo base_url(); ?>/img/home.png" /></a><span>Welcome, <?php echo $name; ?>!</span></div>
                <div class="right"><a href="<?php echo site_url('setting'); ?>">Account Setting</a><a href="<?php echo site_url('logout'); ?>">Logout</a></div>
            </div>
        </div>
        <div class="content">
            <div class="content-wrapper">
                <div class="left-content">
                    <?php echo $left_content; ?>
                </div>
                <div class="right-content">
                    <?php echo $right_content; ?>
                </div>
            </div>
        </div>
        <div class="footer">
            <span>copyright (c) groupus, 2012 all right reserved</span><br /><small>powered by <a href="http://facebook.com/miehilmie">Hilmi Hassan</a></small>
        </div>
    </body>
</html>