<?php @session_start();
require_once('./class/conect.php');
require_once('./class/conect_m.php');
require_once('./class/class_func.php');
require_once('./class/titl.php');
header("Expires: ".gmdate("D, d M Y H:i:s", time()+86400*365)." GMT");
header("Cache-Control: max-age="+86400*365);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
<meta name="viewport" content=" width=device-width,user-scalable=no, initial-scale=1" />
<link rel="icon" href="<?=$domain_url?>css/img/favicon.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="<?=$domain_url?>css/img/favicon.ico" type="image/x-icon"/>
<link rel="apple-touch-icon" href="<?=$domain_url?>css/img/apple-touch-icon.png"/>
<link rel="apple-touch-icon" sizes="76x76" href="<?=$domain_url?>css/img/apple-touch-icon-76x76.png"/>
<link rel="apple-touch-icon" sizes="120x120" href="<?=$domain_url?>css/img/apple-touch-icon-120x120.png"/>
<link rel="apple-touch-icon" sizes="152x152" href="<?=$domain_url?>css/img/apple-touch-icon-152x152.png"/>
<title><?=$nazvanie?></title>
<meta name="keywords" content="<?=$keyw?>">
<meta name="description" content="<?=$descrip?>">
<meta name="google-site-verification" content="piwt6H44GdCAxAg6IxX1_9ztklbBKOw8jP_YNENdS2I" />
<meta name='yandex-verification' content='4538772472d592f1' />
<link rel="stylesheet" type="text/css" href="<?=$domain_url?>css/style.css" />
<link rel="stylesheet" type="text/css" href="<?=$domain_url?>css/media.css" />
<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript" ></script>
<script src="<?=$domain_url?>js/proc.js" type="text/javascript" ></script>
</head>
<body>
<div class="header"><a href="<?=$domain_url?>"><div class="logo"></div></a></div>
<div class="content">