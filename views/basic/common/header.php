<!DOCTYPE html>
<html>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<title><?php echo $data['title']; ?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<base href="<?php ECHO ROOT_URL.ROOT_PATH;?>">
<meta name="viewport" content="width=device-width,minimum-scale=1">

<meta property="fb:app_id"        content="1254489774627639" />
<meta property="og:url"           content="<?php echo $data['fb_ogURL'];?>"/>
<meta property="og:type"          content="article" />
<meta property="og:title"         content="<?php echo $data['fb_title'];?>"/>
<meta property="og:description"   content="<?php echo $data['fb_description'];?>"/>
<meta property="og:image"         content="<?php echo $data['fb_image'];?>"/>
<meta property="fb:admins"        content="737888577"/>

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@">
<meta name="twitter:creator" content="@">
<meta name="twitter:title" content="<?php echo $data['fb_title'];?>">
<meta name="twitter:description" content="<?php echo $data['fb_description'];?>">
<meta name="twitter:image" content="<?php echo $data['fb_image'];?>">

<link rel="stylesheet" type="text/css" href="<?PHP ECHO ROOT_URL.ROOT_PATH.'/views/'.THEME;?>/assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?PHP ECHO ROOT_URL.ROOT_PATH.'/views/'.THEME;?>/assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?PHP ECHO ROOT_URL.ROOT_PATH.'/views/'.THEME;?>/assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="<?PHP ECHO ROOT_URL.ROOT_PATH.'/views/'.THEME;?>/assets/css/font.css">
<link rel="stylesheet" type="text/css" href="<?PHP ECHO ROOT_URL.ROOT_PATH.'/views/'.THEME;?>/assets/css/li-scroller.css">
<link rel="stylesheet" type="text/css" href="<?PHP ECHO ROOT_URL.ROOT_PATH.'/views/'.THEME;?>/assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="<?PHP ECHO ROOT_URL.ROOT_PATH.'/views/'.THEME;?>/assets/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="<?PHP ECHO ROOT_URL.ROOT_PATH.'/views/'.THEME;?>/assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="<?PHP ECHO ROOT_URL.ROOT_PATH.'/views/'.THEME;?>/assets/css/style.css">

<script type="text/javascript" async src="https://platform.twitter.com/widgets.js"></script>

<link href='http://fonts.googleapis.com/css?family=Parisienne' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Ribeye+Marrow' rel='stylesheet' type='text/css'>

<style>
.imageTextOver { 
   position: absolute; 
   bottom: 0px;
   float: right;
   width: 100%; /* for IE 6 */
}

hover { 
   position: absolute; 
   bottom: 10px;
   right:0px;
}
hover span { 
   color: white; 
   font: 8px Helvetica, Sans-Serif; 
   letter-spacing: 0px;  
   background: rgb(0, 0, 0); /* fallback color */
   background: rgba(0, 0, 0, 0.7);
   padding: 2px; 
}
hover span.spacer {
   padding:0 5px;
}
a.link {
  color: white; 
   font: 8px Helvetica, Sans-Serif; 
   letter-spacing: 0px;  
   
}
</style>

</head>



