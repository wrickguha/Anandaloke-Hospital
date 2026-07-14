<!--Group Start-->
<div style="width:219px; margin-top:10px; float:left;  border-top:none;" class="arrowlistmenu">

<div class="headerbar"><div class="header_top"><h7>Anandaloke Group</h7></div></div>
<ul>

<?php
        $full_name = $_SERVER['PHP_SELF'];
        $name_array = explode('/',$full_name);
        $count = count($name_array);
        $page_name = $name_array[$count-1];
    ?>
    
<li><a class="<?php echo ($page_name=='hospital.php')?'active':'';?>" href="hospital.php">Anandaloke Hospital</a></li>
<li><a class="<?php echo ($page_name=='iWebLite.php')?'active':'';?>" href="asc/iWebLite.php">iWebLite</a></li>
<li><a class="<?php echo ($page_name=='sonoscan_centre.php')?'active':'';?>" href="sonoscan_centre.php">Sonoscan Centre</a></li>
<li><a class="<?php echo ($page_name=='ct_scan.php')?'active':'';?>" href="ct_scan.php">Spiral CT Scan</a></li>
<li><a class="<?php echo ($page_name=='nursing.php')?'active':'';?>" href="nursing.php">School of Nursing</a></li>
<li><a class="<?php echo ($page_name=='paramedical.php')?'active':'';?>" href="paramedical.php">Paramedical Institute</a></li>
<li><a class="<?php echo ($page_name=='gallery.php')?'active':'';?>" href="eye_care.php">Eye Care Centre</a></li>
</ul>
</div>
<!--Group End-->