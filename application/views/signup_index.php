<!doctype html>
<html>
    <head>
        <title>GroupUs | Optimized Academic Grouping System - Registration</title>
        <link href="<?php echo base_url(); ?>/css/common.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>/css/signup.css" rel="stylesheet" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/js/jquery.js"><\/script>')</script>
        <script>
            (function() {
                $('input[name=usertype]').live('click',function() {
                    var t = $(this);
                    $('.info-wrapper').each(function(i,v) {
                        var x = $(v);
                        x.hide();
                        if(x.attr('data') == t.val()) {
                           x.show();
                        }
                    });
                });
                $('#register-form').live('submit',function() {
                    alert($(this).serialize());
                    return false;
                });
            })();

        </script>
    </head>
    <body>
        <div class="header">
            <div class="logopanel">
                <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>/img/logo.png" /></a><img src="<?php echo base_url(); ?>/img/title-logo.png" />
            </div>
        </div>
        <div class="content">
            <div class="content-wrapper">
            <?php if(validation_errors()): ?>
                <div id="register-error">
                    <?php echo validation_errors(); ?>
                </div>
            <?php endif;?>
                <div id="register-info">
                    <h1>Registration</h1>
                    <?php echo form_open('signup'); ?>
                    <fieldset>
                        <legend style="color:#6D6B79;font-weight:bold; font-size: 16px;">Information details:</legend>
                        <fieldset>
                            <legend>General Information:</legend>
                        <table>
                            <tr><td><label>Username: </label></td><td><input type="text" name="username" value="<?php echo set_value('username'); ?>" /></td></tr>
                            <tr><td><label>Full Name: </label></td><td><input type="text" name="name" value="<?php echo set_value('name'); ?>" /></td></tr>
                            <tr><td><label>Password: </label></td><td><input type="password" name="password" /></td></tr>
                            <tr><td><label>Re-Password: </label></td><td><input type="password" name="password2" /></td></tr>
                            <tr><td><label>Gender: </label></td><td><input type="radio" name="gender" value="1" <?php echo set_radio('gender', '1', TRUE); ?> /><label>Male</label><input type="radio" name="gender" value="2" <?php echo set_radio('gender', '2'); ?> /><label>Female</label></td></tr>
                            <tr><td><label>Type: </label></td><td><input type="radio" name="usertype" value="1" <?php echo set_radio('usertype', '1', TRUE); ?> /><label>Student</label><input type="radio" name="usertype" value="2" <?php echo set_radio('usertype', '2'); ?> /><label>Lecturer</label></td></tr>
                            <tr><td><label>University: </label></td><td>
                                    <select name="university">
                                        <option value="none" <?php echo (!isset($_POST['university'])) ? 'selected=selected' : (($_POST['university'] == 'none') ? 'selected=selected' : ''); ?>>-- Select University --</option>
                                        
                                        <?php foreach($universities as $u): ?>
                                            <option value="<?php echo $u->id; ?>" <?php echo (!isset($_POST['university'])) ? '' : (($_POST['university'] == $u->id) ? 'selected=selected' : ''); ?>><?php echo $u->name; ?> (<?php echo $u->abbrevation; ?>)</option>
                                        <?php endforeach; ?>
                                    </select></td></tr>
                        </table>
                        </fieldset>
                        <fieldset class="info-wrapper" data="1">
                            <legend>Student Information:</legend>
                            <table>
                                <tr><td><label>CGPA: </label></td><td><input style="width:100px" type="text" name="cgpa" value="<?php echo set_value('cgpa'); ?>" /></td></tr>
                                <tr><td><label>Distance from campus: </label></td><td>
                                        <select name="dfc">
                                            <option value="1" <?php echo set_select('dfc', '1', TRUE); ?>>In campus</option>
                                            <option value="2" <?php echo set_select('dfc', '2'); ?>>10KM from campus</option>
                                            <option value="3" <?php echo set_select('dfc', '3'); ?>>Within 10 to 20KM from campus</option>
                                            <option value="4" <?php echo set_select('dfc', '4'); ?>>More than 20KM from campus</option>
                                        </select></td></tr>
                            </table>
                        </fieldset>
                        <fieldset class="info-wrapper" style="display:none;" data="2">
                            <legend>Lecturer Information:</legend>
                        </fieldset>
                        <div class="submitpanel"><input class="submit" type="submit" value="Submit" /></div>
                    </fieldset>
                    <?php echo form_close(); ?>
                </div>
                
            </div>
        </div>
        <div class="footer">
            <span>copyright (c) groupus, 2012 all right reserved</span><br /><small>powered by <a href="http://facebook.com/miehilmie">Hilmi Hassan</a></small>
        </div>
    </body>
</html>