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

<h3>Our Corporate Contacts :</h3>
<p style="font-size:12px;">Email : corporate@anandaloke.com<br/>
Phone : +91 8116603563<br/>
Fax : 0353-2545454</p>

<div id="client_enquery_btn"><a href="corporate_enquery.php"><img src="images/corporate_enquery_btn.jpg" border="0"/></a></div>
</div>