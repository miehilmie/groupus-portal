<!doctype html>
<html>
    <head>
        <title>GroupUs! | Optimized Academic Grouping System - Student</title>
        <link href="<?php echo base_url(); ?>/css/common.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>/css/student.css" rel="stylesheet" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/js/jquery.js"><\/script>')</script>
        <script src="<?php echo base_url(); ?>js/student.js"></script>
        <script>

        </script>
    </head>
    <body>
        <div class="header">
            <div class="logopanel">
                <img src="<?php echo base_url(); ?>/img/logo.png" /><img src="<?php echo base_url(); ?>/img/title-logo.png" />
            </div>
            <div class="navbar clearfix">
                <div class="left"><a href="/"><img style="margin-top:4px; margin-right:10px" src="<?php echo base_url(); ?>/img/home.png" /></a><span>Welcome, <?php echo $name; ?>!</span></div>
                <div class="right"><a>Account Setting</a><a href="<?php echo site_url('logout'); ?>">Logout</a></div>
            </div>
        </div>
        <div class="content">
            <div class="content-wrapper">
                <div class="left-content">
                    <ul class="section">
                        <li class="title clearfix"><div class="title-data">My Menu!</div><div class="title-roof"></div></li>
                        <li id="subject" class="sub-menu-1">
                            <ul>
                                <li class="jewel-notify">1</li>
                                <li class="bubble-toggle toggler" data-href="/student/subject/" data-target="subjectFlyout">
                                    <a>Subjects</a>
                                </li>
                                <li class="bubble-wrapper" id="subjectFlyout">
                                    <ul class="bubble">                    
                                        <div style="width:12px; height: 25px;">
                                            <div class="caret-outer" ></div>
                                            <div class="caret-inner" ></div>
                                        </div>
                                        <li>
                                            <a href="/student/subject/1">
                                                TCP1231
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li id="subject" class="sub-menu-1">
                            <ul>
                                <li class="jewel-notify">1</li>
                                <li class="bubble-toggle toggler" data-href="/student/subject/" data-target="messageFlyout">
                                    <a>Message</a>
                                </li>
                                <li class="bubble-wrapper" id="messageFlyout">
                                    <ul class="bubble">                    
                                        <div style="width:12px; height: 25px;">
                                            <div class="caret-outer" ></div>
                                            <div class="caret-inner" ></div>
                                        </div>
                                        <li>
                                            <a href="/student/subject/1">
                                                TCP1231
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/student/subject/1">
                                                TCP1231
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="section">
                        <li class="title clearfix"><div class="title-data">My Group!</div><div class="title-roof"></div></li>
                        <li class="sub-menu-1"><a>Group 1</a></li>
                        <li class="sub-menu-1"><a>Group 2</a></li>
                        <li class="sub-menu-1"><a>Group 3</a></li>
                    </ul>
                </div>
                <div class="right-content">
                    <ul class="student-update">
                        <li class="header">Account Settings</li>
                        <li class="body">
                            <ul class="update-item">
                                <li class="item-1">
                                    <fieldset>
                                        <legend>Edit your account settings</legend>
                                        <table>
                                            <tr><td>Name: </td><td><input type="text" name="name" value="<?php echo $name ?>"</td></tr>
                                            <tr><td>Gender: </td><td><input type="radio" name="gender" value="1" <?php echo ($gender == 1) ? 'checked' : '' ?> /><span>Male: </span><input type="radio" name="gender" value="2" <?php echo ($gender == 2) ? 'checked' : '' ?> /><span>Female: </span></td></tr>
                                        </table>
                                    </fieldset>

                                    
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer">
            <span>copyright (c) groupus, 2012 all right reserved</span><br /><small>powered by <a href="http://facebook.com/miehilmie">Hilmi Hassan</a></small>
        </div>
    </body>
</html>