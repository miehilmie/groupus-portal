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