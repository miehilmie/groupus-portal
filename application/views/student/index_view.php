<ul class="lecturer-announcement">
     <li class="header">Lecturer's Announcements</li>
     <li class="body">
         <?php if(isset($announcements) && !empty($announcements)): ?>
         <?php
         /**
          * $a as announcement item
          * attributes:
          * code - subject code
          * time - announcement time
          * poster - poster
          * body - announcement conent
          **/
         foreach($announcements as $a): ?>
         <ul class="announcement-item">
             <li class="item-1"><span class="cls"><?php echo $a->code ?></span><span class="time"><?php echo $a->time; ?></span><span class="poster"><?php echo $a->poster; ?></span></li>
             <li class="item-2"><?php echo $a->body; ?></li>
         </ul>
         <?php endforeach; ?>
         <?php else: ?>
         <div><span>You have no announcement yet</span></div>
         <?php endif; ?>
     </li>
 </ul>
 <ul class="student-update">
     <li class="header">My Updates</li>
     <li class="body">
         <ul class="update-item">
             <li class="item-1">This is a test announcement for lecturer column</li>
         </ul>
     </li>
 </ul>