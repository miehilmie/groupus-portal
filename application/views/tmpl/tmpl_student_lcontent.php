<ul class="section">
<li class="title clearfix"><div class="title-data">My Menu!</div><div class="title-roof"></div></li>
<?php if($subjects): ?>
<li id="subject" class="sub-menu">
    <ul>
        <li class="jewel-notify">1</li>
        <li class="item-1 bubble-toggle lefttoggler" data-href="/student/subject/" data-target="subjectFlyout">
            <a>Subjects</a>
        </li>
        <li class="bubble-wrapper" id="subjectFlyout">
            <ul class="bubble">                    
                <li class="bubble-caret">
                    <div class="caret-outer" ></div>
                    <div class="caret-inner" ></div>
                </li>
                <li class="bubble-item">
                    <ul>
                        <?php foreach($subjects as $s): ?>
                            <li><a href="/student/subject/<?php echo $s->id; ?>"><?php echo $s->subject_code;  ?></a></li>
                        <?php endforeach; ?>
                    </ul>

                </li>
            </ul>
        </li>
    </ul>
</li>
<?php endif; ?>
<li id="subject" class="sub-menu">
    <ul>
        <li class="jewel-notify">1</li>
        <li class="item-1 bubble-toggle lefttoggler" data-href="/student/subject/" data-target="messageFlyout">
            <a>Message</a>
        </li>
        <li class="bubble-wrapper" id="messageFlyout">
            <ul class="bubble">                    
                <li class="bubble-caret">
                    <div class="caret-outer" ></div>
                    <div class="caret-inner" ></div>
                </li>
                <li class="bubble-item">
                    <ul>
                        <li><a href="/student/subject/1">TCP1231</a></li>
                        <li><a href="/student/subject/1">TCP1231</a></li>
                        <li><a href="/student/subject/1">TCP1231</a></li>
                    </ul>

                </li>
            </ul>
        </li>
    </ul>
</li>
</ul>
<ul class="section">
    <li class="title clearfix"><div class="title-data">My Group!</div><div class="title-roof"></div></li>
    <li class="sub-menu"><ul><li class="item-1"><a>Group 1</a></li></ul></li>
    <li class="sub-menu"><ul><li class="item-1"><a>Group 1</a></li></ul></li>
    <li class="sub-menu"><ul><li class="item-1"><a>Group 1</a></li></ul></li>
</ul>
<ul class="searches">
    <li></li>
</ul>