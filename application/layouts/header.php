<?php
$this->headMeta()->appendHttpEquiv('Content-Type', 'text/html;charset=utf-8');
$this->headTitle()->setSeparator(' - ');
$this->headTitle('Zend Framework Tutorial');
echo $this->doctype(); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <?php echo $this->headMeta(); ?>
    <?php echo $this->headTitle(); ?>
    <?php echo $this->headLink()->prependStylesheet($this->baseUrl().'/css/site.css'); ?>
</head>
<body>
<header>
    <nav>
        <ol>
            <li><a href="<?php echo $this->serverUrl(); ?>">Home</a> </li>
<!--            <li><a href="--><?php //echo $this->url(array()); ?><!--">Home</a> </li>-->
            <li><a href="<?php echo $this->url(array('page' => 'services'), 'static-content'); ?>">Services</a> </li>
            <li><a href="<?php echo $this->url(array('page' => 'about-us'), 'static-content'); ?>">About us</a> </li>
            <li><a href="<?php echo $this->url(array(), 'contact'); ?>">Contact</a> </li>
        </ol>
    </nav>
</header>