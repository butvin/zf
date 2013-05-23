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
    <?php echo $this->headScript()->appendFile($this->baseUrl().'/css/bootstrap/js/bootstrap.js'); ?>
<!--    <script src="/css/bootstrap/js/bootstrap.js"></script>-->
    <script src="/js/jquery-1.9.1.js"></script>
<!--    <link href="/css/bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet">-->

    <?php echo $this->headLink()->prependStylesheet($this->baseUrl().'/css/bootstrap/css/bootstrap.css'); ?>
</head>
<body>
<header>
    <nav>
        <ul id="main-menu" class="inline">
            <li class="text-warning"><a href="<?php echo $this->serverUrl(); ?>">Home</a> </li>
<<<<<<< HEAD
            <li><a href="/item/index">Items</a> </li>
<!--            <li><a href="--><?php //echo $this->url(array('controller' => 'item', 'action' => 'index')); ?><!--">Items</a> </li>-->
=======
<!--            <li><a href="--><?php //echo $this->baseUrl($this->url(array('controller' => 'item', 'action' => 'index'))); ?><!--">Items</a> </li>-->
            <li><a href="<?php echo $this->url(array('controller' => 'item', 'action' => 'index')); ?>">Items</a> </li>
>>>>>>> 45cd0425d41f1a27d8163ee46b7bb4ad5bfb6604
            <li><a href="<?php echo $this->url(array('page' => 'services'), 'static-content'); ?>">Services</a> </li>
            <li><a href="<?php echo $this->url(array('page' => 'about-us'), 'static-content'); ?>">About us</a> </li>
            <li><a href="<?php echo $this->url(array(), 'contact'); ?>">Contact</a> </li>
        </ul>
    </nav>
</header>