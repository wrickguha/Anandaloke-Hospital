<div id="left_container">
<div style="width:205px;" class="leftmenu">
<ul>
<?php
        $full_name = $_SERVER['PHP_SELF'];
        $name_array = explode('/',$full_name);
        $count = count($name_array);
        $page_name = $name_array[$count-1];
    ?>
    
<li><a class="<?php echo ($page_name=='who_we_are.php')?'active':'';?>" href="who_we_are.php">Who We Are</a></li>
<li><a class="<?php echo ($page_name=='vision.php')?'active':'';?>" href="vision.php">Vision &amp; Mission</a></li>
<li><a class="<?php echo ($page_name=='management.php')?'active':'';?>" href="management.php">Management</a></li>
<li><a class="<?php echo ($page_name=='administration.php')?'active':'';?>" href="administration.php">Administration</a></li>

</ul>
</div>

<div id="smiletrain"><a href="responsibility.php"><img src="images/smiletrain.jpg" border="0"/></a></div>
</div>