<!doctype html> 
<!--[if IEMobile 7 ]><html class="no-js iem7" lang="en"><![endif]--> 
<!--[if lt IE 7 ]><html class="no-js ie ie6" lang="en"><![endif]--> 
<!--[if IE 7 ]><html class="no-js ie ie7" lang="en"><![endif]--> 
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"><![endif]--> 
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"><![endif]--> 
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js not-ie" lang="en"><!--<![endif]--> 
<head> 
	<meta charset="utf-8"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
 
	<title><?php if (isset($title)) echo $title . ' - '; ?>Linking You Toolkit</title> 
	<meta name="description" content="Recommendations and guidelines for creating a coherent, accessible and understandable URI structure in higher education."> 
	<meta name="author" content="University of Lincoln"> 
	<meta name="viewport" content="width=984">
	
	<link rel="shortcut icon" href="https://cwd.online.lincoln.ac.uk/3.0/images/favicon.ico"> 
	<link rel="apple-touch-icon" href="https://cwd.online.lincoln.ac.uk/3.0/images/icon.png"> 
 
	<link rel="stylesheet" href="https://cwd.online.lincoln.ac.uk/3.0/css/cwd.1.0.css"> 
	<link rel="stylesheet" href="https://cwd.online.lincoln.ac.uk/3.0/css/ui.css"> 
	<script src="https://cwd.online.lincoln.ac.uk/3.0/js/modernizr.js"></script> 
	
	<style> 
	#cwd_header { background: url('http://lncn.eu/img/toolkit.jpg') center; }
	.todo { font-weight: bold; color: red; }
	.uri, .cleanuri {
		font-family: Courier, monospace;
	}
	.uri:before {
		content: ".ac.uk";
	}
	</style> 
	
</head> 
 
<body> 
 
	<header id="cwd_header" role="banner"> 
	
		<section class="cwd_container"> 
	
			<hgroup class="grid_12 visuallyhidden" id="cwd_hgroup"> 
						
				<a href="/3.0"> 
					<h1>Linking You Toolkit</h1>
				</a> 
							
			</hgroup> 
 
		</section> 
			
	</header> 
	
	<nav class="cwd_container" role="navigation"> 
		<ul id="cwd_navigation" class="grid_12">  
			<li<?php if ($page == 'about') echo ' class="current"'; ?>><a href="http://lncn.eu/toolkit">About The Toolkit</a></li>
			<li<?php if ($page == 'spacetime') echo ' class="current"'; ?>><a href="http://lncn.eu/toolkit/spacetime">Space-time</a></li>
			<li<?php if ($page == '101') echo ' class="current"'; ?>><a href="http://lncn.eu/toolkit/101">URI 101</a></li>
			<li<?php if ($page == 'domains') echo ' class="current"'; ?>><a href="http://lncn.eu/toolkit/domains">Domains</a></li>
			<li<?php if ($page == 'institution') echo ' class="current"'; ?>><a href="http://lncn.eu/toolkit/institution">Institutional URIs</a></li>
	        <li<?php if ($page == 'model') echo ' class="current"'; ?>><a href="http://lncn.eu/toolkit/model">Data Model</a></li>
	        <li<?php if ($page == 'recommendations') echo ' class="current"'; ?>><a href="http://lncn.eu/toolkit/recommendations">Recommendations</a></li>
	        <li<?php if ($page == 'glossary') echo ' class="current"'; ?>><a href="http://lncn.eu/toolkit/glossary">Glossary</a></li>
	        <li><a href="http://linkingyou.blogs.lincoln.ac.uk/">Blog</a></li>
    	</ul>  
	</nav> 
	
	<section class="cwd_container" id="cwd_content" role="main"> 