<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<!-- *****************************************************
Template Version 1.05 - 04/09/09 

Read Me: Use of this template constitutes an agreement
to follow the SF State Web Template Guidelines at
http://www.sfsu.edu/~news/webtemplate and to meet
California Government Code 11135, implementing Section 508
legislation at http://www.sfsu.edu/~dprc/access/ 
before publishing pages to the Web. 
***************************************************** -->

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="viewport" content="width=900" />
<title><?php print $head_title; ?> - San Francisco State University</title>
<link rel="alternate" type="application/rss+xml" title="<?php print $head_title; ?> - San Francisco State University" href="/feed" />
<link rel="apple-touch-icon" href="/sites/default/files/images/creativestate/apple-touch-icon.png" />

<!-- css -->
<link rel="stylesheet" type="text/css" media="all" href="/sites/all/themes/zen/zen_sfsu_cca/includes/global.css" />
<link rel="stylesheet" type="text/css" media="print" href="/sites/all/themes/zen/zen_sfsu_cca/includes/print.css" />
<link rel="stylesheet" type="text/css" media="all" href="/sites/all/themes/zen/zen_sfsu_cca/includes/local.css" />

<!--[if lt IE 7]><link rel="stylesheet" type="text/css" href="/sites/all/themes/zen/zen_sfsu_cca/includes/ie.css"  /><![endif]-->
<?php print $head; ?>
<?php print $styles; ?>

</head>
<?php flush(); ?>

<body class="college">

<!-- o utility --> 
<div id="utilitystripe"><ul class="skiplinks"><li><a class="skip" href="#main">Skip to main content</a></li><li><a class="skip" href="#nav">Skip to local site navigation</a></li><li><a class="skip" href="#sidebar">Skip to sidebar</a></li></ul><div id="utilitybox"><ul><li id="sfsutype"><a href="http://www.sfsu.edu/">San Francisco State University</a></li><li><a href="http://www.sfsu.edu/">Home</a></li><li><a href="http://www.sfsu.edu/login.htm">Login</a></li><li><a href="http://www.sfsu.edu/calendar/">Calendar</a></li><li><a href="http://www.sfsu.edu/atoz/">A&ndash;Z Index</a></li><li><a href="http://www.sfsu.edu/search.htm">Search Tools</a></li>	<li><form action="http://google.sfsu.edu/search" method="get" title="Search SF State"><div><span class="readernote"><label for="search">Search SF State</label></span><input class="searchbox" type="text" id="search" name="q" size="12" maxlength="50" value="" /><input class="searchbutton" type="image" src="/sites/all/themes/zen/zen_sfsu_cca/images/searchbutton.png" alt="Search SF State" /></div></form></li></ul></div></div><!-- x utility -->

<!-- o site --><div id="sitestripe"><div id="sitebox"><h2><a href="/" class="site">College of Creative Arts</a> <a class="parent" href="http://www.sfsu.edu/">San Francisco State University</a></h2></div></div><!-- x site --> 

<!-- o site, image -->
<?php if ($imagestripe): ?>        
<?php print $imagestripe; ?>
<?php endif; ?>

<!-- x site, image -->

<!-- o site -->
<?php if ($content_top): ?>        
<?php print $content_top; ?>
<?php endif; ?>
<!-- o frontpage nav -->
<div id="navstripe">
<div id="navbox">
<?php if (!empty($primary_links)): ?>
<div id="primary" class="clear-block">
<?php print theme('links', $primary_links); ?>
</div>
<?php endif; ?>
</div></div>
<!-- x frontpage nav -->
<!-- x site -->

<!-- o content --><div id="contentstripe"><div id="contentbox">

<!-- o nav -->
<div id="nav" class="frontpage">
<?php #if ($sidebar_left): ?>        
<?php #print $sidebar_left; ?>
<?php #endif; ?>
</div>
<!-- x nav -->

<!-- o sidebar -->
<div id="sidebar" class="frontpage">
<?php if ($sidebar_right): ?>
<?php print $sidebar_right; ?>
<?php endif; ?>
</div>
<!-- x sidebar -->

<!-- o main -->
<div id="main">
<?php if ($breadcrumb or $title or $tabs or $help or $messages): ?>
<!--<div id="content-header">-->
<?php #print $breadcrumb; ?>
<?php if ($title): ?>
  <h1 class="title"><?php print $title; ?></h1>
<?php endif; ?>
<?php print $messages; ?>
<?php if ($tabs): ?>
  <div class="tabs"><?php print $tabs; ?></div>
<?php endif; ?>
<?php #print $help; ?>
<!--</div>--> <!-- /#content-header -->
<?php endif; ?>

<?php #print $content; ?>

<?php if ($content_bottom): ?>

<?php print $content_bottom; ?>
 
<!-- /content-bottom -->
<?php endif; ?>

<!-- javascript -->
<?php print $scripts; ?>
<script type="text/javascript" src="/sites/all/themes/zen/zen_sfsu_cca/includes/global.js"></script>


<?php if ($closure_region): ?>
<div id="closure-blocks"><?php print $closure_region; ?></div>
<?php endif; ?>

<?php print $closure; ?></div>
<!-- x main -->

<div class="clearfloat"></div>

</div></div><!-- x content -->

<!-- o footer --><div id="footerstripe"><div id="footerbox"><a href="http://www.sfsu.edu"><img src="/sites/all/themes/zen/zen_sfsu_cca/images/logo.png" alt="SF State Home" width="165" height="50" /></a><ul><li class="first"><a href="http://www.sfsu.edu/">SF State Home</a></li><li><a 
href="http://www.sfsu.edu/emailref.htm">Contact</a></li><li>1600 Holloway Avenue . San Francisco . CA 94132 . Tel (415) 338-1111</li></ul></div></div><!-- x footer -->

<div class="clearfloat"></div>

<div id="footer-message"><?php print $footer_message; ?></div>
</body>

</html>
