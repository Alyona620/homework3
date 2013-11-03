<?php
//no direct access
defined('_JEXEC') or die ( 'Restricted access' );?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>GeekHub - отримай практичні знання в сфері IT</title>

    <jdoc:include type="head" />
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ;?>/css/style.css" />

</head>

<body <?php
if ( JURI::current() != JURI::base() ) { echo 'class="inner"'; }
if ( JURI::current() == JURI::base()."contacts.html" ) { echo 'onload="initialize()"'; }
?>


   <div id="wrap">
    <div id="header">
        <?php if ($this->params->get('logo')) : ?>
            <img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($this->params->get('logo')); ?>"  alt="MyLogo" />
        <?php endif;?>

        <div><a class="logo" href="<?php echo $this->baseurl ?>">GeekHub</a></div>
        <jdoc:include type="modules" name="atomic-topmenu" />

        <ul class="links">
            <li class="fb"><a href="http://www.facebook.com/pages/GeekHub/158983477520070">facebook</a></li>
            <li class="vk"><a href="http://vkontakte.ru/geekhub">Вконтакте</a></li>
            <li class="tw"><a href="http://twitter.com/#!/geek_hub">twitter</a></li>
            <li class="yb"><a href="http://www.youtube.com/user/GeekHubchannel">youtube</a></li>
            <li class="v"><a href="http://vimeo.com/user8452244">vimeo</a></li>
        </ul>

        <span class="line"></span>
        <div class="splash">
        <jdoc:include type="modules" name="home"/>
        </div>
    </div><!-- header -->

    <div id="content">
        <div class="<?php $currentMenu = JSite::getMenu()->getActive(); echo $currentMenu->alias; ?>">

            <jdoc:include type="component" />

            <jdoc:include type="modules" name="home-bottom" />
        </div>

    </div><!-- content -->
    <ul id="footer">
        <li>
            <ul class="nav">
                <li> <jdoc:include type="modules" name="atomic-topmenu" style="none" /> </li>
            </ul>
        </li>
       </ul>
    <li>© Copyright 2013</li>
</div>
</body>
</html>






