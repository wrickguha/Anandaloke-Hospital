<?php
$selinfo=$con->query("SELECT * FROM `site_information` LIMIT 1");
$siteinfo=$selinfo->fetch_assoc();

$sitename=$siteinfo['website_name'];
if(empty($sitename))
{
	$sitename="Hospital";
}
$siteurl=$siteinfo['website'];
if(empty($sitename))
{
	$siteurl="Hospital Website";
}
$address=$siteinfo['address'];
if(empty($address))
{
	$address="Hakimpara, Siliguri, West Bengal - 734001";
}
$phone=$siteinfo['phone1'];
if(empty($phone))
{
	$phone="+91 00000 00000";
}
$phone2=$siteinfo['phone2'];
if(empty($phone2))
{
	$phone2="+91 00000 00000";
}
$phone3=$siteinfo['phone3'];
$fax=$siteinfo['fax'];
$email=$siteinfo['email1'];
if(empty($email))
{
	$email="info@hospital.com";
}
$email2=$siteinfo['email2'];
if(empty($email2))
{
	$email2="support@hospital.com";
}
$email3=$siteinfo['email3'];
$tollfree=$siteinfo['tollfree'];
$whatsapp=$siteinfo['whatsapp'];
$fbid=$siteinfo['facebook'];
if(empty($fbid))
{
	$fbid="https://www.facebook.com/facebook/";
}
$gpid=$siteinfo['googleplus'];
if(empty($gpid))
{
	$gpid="javascript:void(0)";
}
$ytid=$siteinfo['youtube'];
if(empty($ytid))
{
	$ytid="javascript:void(0)";
}
$twid=$siteinfo['twitter'];
if(empty($twid))
{
	$twid="javascript:void(0)";
}

$blogurl=$siteinfo['blogurl'];
if(empty($blogurl))
{
	$blogurl="javascript:void(0)";
}

?>