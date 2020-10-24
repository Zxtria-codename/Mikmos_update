<!DOCTYPE html>
<html lang="<?php _e($_LANG);?>">
<head>
<meta charset="utf-8">
<meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php _e(__WEBDESC);?>">
<meta name="author" content="<?php _e(__CMS);?>">
<link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
<title><?php _e(__WEBTITLLE);?></title>
<link href="assets/css/lib/bootstrap/bootstrap.min.css?v=20190325" rel="stylesheet">
<link href="assets/css/lib/chosen/chosen.css?v=20190325" rel="stylesheet">
<link href="assets/css/helper.css?v=20190325" rel="stylesheet">
<?php if(empty($_SESSION['css'])){ ?>
<?php if(empty($_THEMES)){ ?>
<link href="assets/css/mikmos_style.css?v=20190325" rel="stylesheet">
<?php }else{ ?>
<link href="assets/css/styles/<?php _e($_THEMES);?>/mikmos_style.css?v=20190325" rel="stylesheet">
<?php } ?>
<?php }else{ ?>
<link href="assets/css/styles/<?php _e($_SESSION['css']);?>/mikmos_style.css?v=20190325" rel="stylesheet">
<?php } ?>
<script src="assets/js/lib/jquery/jquery.min.js?v=20190325"></script>
<script src="assets/js/lib/bootstrap/js/bootstrap.min.js?v=20190325"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128579565-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-128579565-1');
</script>
</head>
<body class="fix-header fix-sidebar">
<?php
echo cek_update();
?>
<div class="preloader">
<svg class="circular" viewBox="25 25 50 50"><circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>
<div id="main-wrapper" class="containerx">
<div class="header">
<nav class="navbar top-navbar navbar-expand-md navbar-light">
<div class="navbar-header">
<a class="navbar-brand" href="?load=home">
<?php if(empty($_SESSION['css'])){ ?>
<?php if(empty($_THEMES)){ ?>
<b><img src="assets/images/logo.png"/></b>
<span><img src="assets/images/logo-text.png"/></span>
<?php }else{ ?>
<b><img src="assets/css/styles/<?php _e($_THEMES);?>/logo.png"/></b>
<span><img src="assets/css/styles/<?php _e($_THEMES);?>/logo-text.png"/></span>
<?php } ?>
<?php }else{ ?>
<b><img src="assets/css/styles/<?php _e($_SESSION['css']);?>/logo.png"/></b>
<span><img src="assets/css/styles/<?php _e($_SESSION['css']);?>/logo-text.png"/></span>
<?php } ?>
</a>
</div>
<div class="navbar-collapse">
<ul class="navbar-nav mr-auto mt-md-0">
<li class="nav-item"> <a title="Hide/Show" class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="fa fa-list"></i></a> </li>
<li class="nav-item m-l-10"> <a title="Hide/Show" class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="fa fa-list"></i></a> </li>
<li class="nav-item dropdown">
<a title="<?php _e(__ROUTER);?>" class="nav-link dropdown-toggle text-muted text-muted  " href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-server"></i>
<div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
</a>
<div class="dropdown-menu dropdown-menu-left mailbox animated zoomIn">
<ul>
<li>
<div class="drop-title"><?php _e(__ROUTER);?></div>
</li>
<li>
<div class="message-center1">
<?php
$rep=opendir('./inc/ip_mk/');
while ($file = readdir($rep)) {
if($file != '..' && $file !='.' && $file !=''){
if ($file !='index.php' && $file !='index.html' && $file !='.htaccess'){
if(!is_dir($file)){
	

?>
<?php if($_SESSION['router']==substr($file, 0, -4)){ ?> 
<a title="Status Aktif" class="alert alert-success clearfix" href="./settings.php?index=change&get=<?php _e(substr($file, 0, -4));?>">
<div class="btn btn-info btn-circle m-r-10"><i class="fa fa-check"></i></div>
<div class="mail-contnet">
<h5><?php _e(substr($file, 0, -4));?></h5> 
</div>
</a>
<?php } ?>
<?php if($_SESSION['router']!==substr($file, 0, -4)){ ?> 

<a title="Aktifkan" class="alert alert-warning clearfix" href="./settings.php?index=change&get=<?php _e(substr($file, 0, -4));?>">
<div class="btn btn-danger btn-circle m-r-10"><i class="fa fa-minus"></i></div>
<div class="mail-contnet">
<h5><?php _e(substr($file, 0, -4));?> </h5> 
</div>
</a>
<?php } ?>
<?php }}}} ?>

</div>
</li>
<li>
<a class="nav-link text-center" href="./settings.php?index=mikrotik_ae"> <strong><?php _e(__ADD);?> <?php _e(__ROUTER);?></strong> <i class="fa fa-angle-right"></i> </a>
</li>
</ul>
</div>
</li>

<li class="nav-item dropdown">
<a title="Ganti Warna Theme" class="nav-link dropdown-toggle text-muted  " href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-th-large"></i></a>
<div class="dropdown-menu animated zoomIn" style="text-transform: uppercase;">
<?php
$rep=opendir('./assets/css/styles/');
while ($file = readdir($rep)) {
if($file != '..' && $file !='.' && $file !=''){
if ($file !='index.php' && $file !='index.html' && $file !='.htaccess'){
if(!is_dir($file)){
?>
<?php if($_SESSION['css']==$file){ ?> 
<a class="dropdown-item" href="./settings.php?index=themecss_login&css=<?php _e($file);?>"><?php _e($file);?> <i class="fa fa-check"></i> </a>
<?php } ?>
<?php if($_SESSION['css']!==$file){ ?> 

<a class="dropdown-item" href="./settings.php?index=themecss_login&css=<?php _e($file);?>"><?php _e($file);?></a>
<?php } ?>
<?php }}}} ?>
</div>
</li>

<li class="nav-item dropdown">
<a title="<?php echo __LANGS;?>" class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-list"></i></a>
<div class="dropdown-menu animated zoomIn">
<a class="dropdown-item" href="#id" onclick="doGTranslate('id|id');return false;" title="Indonesian">ID</a>
<a class="dropdown-item" href="#su" onclick="doGTranslate('id|su');return false;" title="Indonesian - Sunda">ID-SU</a>
<a class="dropdown-item" href="#jw" onclick="doGTranslate('id|jw');return false;" title="Indonesian - Jawa">ID-JV</a>
<a class="dropdown-item" href="#en" onclick="doGTranslate('id|en');return false;" title="English">EN</a>
<a class="dropdown-item" href="#ar" onclick="doGTranslate('id|ar');return false;" title="Arabic">AR</a>
</div>
<div id="google_translate_element2"></div>
<script type="text/javascript">
function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'id',autoDisplay: false}, 'google_translate_element2');}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
<script type="text/javascript">
/* <![CDATA[ */
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
/* ]]> */
</script>
</li>
</ul>
<ul class="navbar-nav my-lg-0">
<li class="nav-item search-box box"><?php _e(update_system());?></li>
<li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted  " href="javascript:void(0)"><div class="form-control" id="pesan"></div></a>
</li>
<li class="nav-item dropdown">
<?php if(empty($_SESSION['css'])){ ?>
<?php }else{ ?>
<?php } ?>



<?php if(empty($_SESSION['css'])){ ?>
<?php if(empty($_THEMES)){ ?>
<a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/user.png" alt="<?php _e($_SESSION['username']);?>" title="<?php _e($_SESSION['username']);?>" class="profile-pic" /></a>
<?php }else{ ?>
<a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/css/styles/<?php _e($_THEMES);?>/user.png" alt="<?php _e($_SESSION['username']);?>" title="<?php _e($_SESSION['username']);?>" class="profile-pic" /></a>
<?php } ?>
<?php }else{ ?>
<a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/css/styles/<?php _e($_SESSION['css']);?>/user.png" alt="<?php _e($_SESSION['username']);?>" title="<?php _e($_SESSION['username']);?>" class="profile-pic" /></a>
<?php } ?>


<div class="dropdown-menu dropdown-menu-right animated zoomIn">
<ul class="dropdown-user">
<li><a href="./?index=logout"><i class="fa fa-power-off"></i> <?php _e(__LOGOUT);?></a></li>
</ul>
</div>
</li>
</ul>
</div>
</nav>
</div>