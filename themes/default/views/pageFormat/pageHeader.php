<?php
/* ----------------------------------------------------------------------
 * CollectiveAccess
 * Open-source collections management software
 * ----------------------------------------------------------------------
 *
 * Software by Whirl-i-Gig (http://www.whirl-i-gig.com)
 * Copyright 2014-2018 Whirl-i-Gig
 *
 * For more information visit http://www.CollectiveAccess.org
 *
 * This program is free software; you may redistribute it and/or modify it under
 * the terms of the provided license as published by Whirl-i-Gig
 *
 * CollectiveAccess is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTIES whatsoever, including any implied warranty of 
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  
 *
 * This source code is free and modifiable under the terms of 
 * GNU General Public License. (http://www.gnu.org/copyleft/gpl.html). See
 * the "license.txt" file for details, or visit the CollectiveAccess web site at
 * http://www.CollectiveAccess.org
 *
 * ----------------------------------------------------------------------
 */
	# Collect the user links: they are output twice, once for toggle menu and once for nav
	$va_user_links = array();
	if($this->request->isLoggedIn()){
		$va_user_links[] = '<li role="presentation" class="dropdown-header navLink">'.trim($this->request->user->get("fname")." ".$this->request->user->get("lname")).', '.$this->request->user->get("email").'</li>';
		$va_user_links[] = '<li class="divider nav-divider"></li>';
		if(caDisplayLightbox($this->request)){
			$va_user_links[] = "<li class='navLink'>".caNavLink($this->request, $vs_lightbox_sectionHeading, '', '', 'Lightbox', 'Index', array())."</li>";
		}
		if(caDisplayClassroom($this->request)){
			$va_user_links[] = "<li class='navLink'>".caNavLink($this->request, $vs_classroom_sectionHeading, '', '', 'Classroom', 'Index', array())."</li>";
		}
		$va_user_links[] = "<li class='navLink'>".caNavLink($this->request, _t('User Profile'), '', '', 'LoginReg', 'profileForm', array())."</li>";
		$va_user_links[] = "<li class='navLink'>".caNavLink($this->request, _t('Logout'), '', '', 'LoginReg', 'Logout', array())."</li>";
	} else {	
		if (!$this->request->config->get(['dontAllowRegistrationAndLogin', 'dont_allow_registration_and_login']) || $this->request->config->get('pawtucket_requires_login')) { $va_user_links[] = "<li class='navLink'><a href='#' onclick='caMediaPanel.showPanel(\"".caNavUrl($this->request, '', 'LoginReg', 'LoginForm', array())."\"); return false;' >"._t("Login")."</a></li>"; }
		if (!$this->request->config->get(['dontAllowRegistrationAndLogin', 'dont_allow_registration_and_login']) && !$this->request->config->get('dontAllowRegistration')) { $va_user_links[] = "<li class='navLink'><a href='#' onclick='caMediaPanel.showPanel(\"".caNavUrl($this->request, '', 'LoginReg', 'RegisterForm', array())."\"); return false;' >"._t("Register")."</a></li>"; }
	}
	$vb_has_user_links = (sizeof($va_user_links) > 0);

?><!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0"/>
	<?php print MetaTagManager::getHTML(); ?>
	<title><?php print (MetaTagManager::getWindowTitle()) ? MetaTagManager::getWindowTitle() : $this->request->config->get("app_display_name"); ?></title>
	
    <link rel='stylesheet' href='<?php print $this->request->getAssetsUrlPath(); ?>/styles.css' type='text/css' media='all'/>
    <script src="<?php print $this->request->getAssetsUrlPath(); ?>/main.js"></script>
    <script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i" rel="stylesheet">
    <script>
        //window.Vue = window.Vue.default
    </script>
</head>
<body>
	<nav class="navbar navbar-default yamm" role="navigation">
		<div class="container menuBar">
			<?php print caNavLink($this->request, caGetThemeGraphic($this->request, 'camed.jpg'), "navbar-brand", "", "",""); ?>
			
			<!-- Brand and toggle get grouped for better mobile display -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-main-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>			
			<!-- bs-user-navbar-collapse is the user menu that shows up in the toggle menu - hidden at larger size -->

			<div class="collapse navbar-collapse" id="bs-main-navbar-collapse-1">
				<ul class="nav navbar-nav menuItems">
					<li class="dropdown navLink" style="position:relative;">
						<a href="#" class="dropdown-toggle icon" data-toggle="dropdown">About</a>
						<ul class="dropdown-menu">
							<li class="<?php print ($this->request->getController() == "About") ? 'active' : ''; ?> navLink"><?php print caNavLink($this->request, _t("About the Project"), "", "", "About", "Index"); ?></li>
							<li class="<?php print ($this->request->getController() == "Contact") ? 'active' : ''; ?> navLink"><?php print caNavLink($this->request, _t("Contact"), "", "", "Contact", "Form"); ?></li>
							<li class="<?php print ($this->request->getController() == "Contribute") ? 'active' : ''; ?> navLink"><?php print caNavLink($this->request, _t("Contribute"), "", "", "Contribute", "artworks"); ?></li>
						</ul>
					</li>					
					<li class="dropdown navLink" style="position:relative;">
						<a href="#" class="dropdown-toggle icon" data-toggle="dropdown">Collections</a>
						<ul class="dropdown-menu">
							<li class="<?php print ($this->request->getController() == "Browse") ? 'active' : ''; ?> navLink"><?php print caNavLink($this->request, _t("Browse All"), "", "", "Browse", "objects"); ?></li>
							<li class="<?php print (($this->request->getController() == "Search") && ($this->request->getAction() == "advanced")) ? 'active' : ''; ?> navLink"><?php print caNavLink($this->request, _t("Advanced Search"), "", "", "Search", "advanced/objects"); ?></li>
							<li class="<?php print ($this->request->getController() == "Collections") ? 'active' : ''; ?> navLink"><?php print caNavLink($this->request, _t("Finding Aids"), "", "", "Collections", "index"); ?></li>					
						</ul>
					</li>
					<li class="<?php print ($this->request->getController() == "Gallery") ? 'active' : ''; ?> navLink"><?php print caNavLink($this->request, _t("Gallery"), "", "", "Gallery", "Index"); ?></li>
					<li class="dropdown navLink" style="position:relative;">
						<a href="#" class="dropdown-toggle icon" data-toggle="dropdown"><span class="lnr lnr-neutral"></span></a>
						<ul class="dropdown-menu"><?php print join("\n", $va_user_links); ?></ul>
					</li>
<<<<<<< HEAD
					<li class="navLink">
						<form class="navbar-form navbar-right" role="search" action="<?php print caNavUrl($this->request, '', 'MultiSearch', 'Index'); ?>">
							<div class="formOutline">
								<div class="form-group">
									<input type="text" class="form-control" id="headerSearchInput" placeholder="Search" name="search">
									<button type="submit" class="btn-search" id="headerSearchButton"><span class="lnr lnr-magnifier"></span></button>
								</div>
							</div>
						</form>
					</li>				
=======
				</ul>
<?php
	}
?>
				<form class="navbar-form navbar-right" role="search" action="<?php print caNavUrl($this->request, '', 'MultiSearch', 'Index'); ?>">
					<div class="formOutline">
						<div class="form-group">
							<input type="text" class="form-control" id="headerSearchInput" placeholder="Search" name="search">
						</div>
						<button type="submit" class="btn-search" id="headerSearchButton"><span class="glyphicon glyphicon-search"></span></button>
					</div>
				</form>
				<script type="text/javascript">
					$(document).ready(function(){
						$('#headerSearchButton').prop('disabled',true);
						$('#headerSearchInput').on('keyup', function(){
							$('#headerSearchButton').prop('disabled', this.value == "" ? true : false);     
						})
					});
				</script>
				<ul class="nav navbar-nav navbar-right menuItems">
					<li <?php print ($this->request->getController() == "About") ? 'class="active"' : ''; ?>><?php print caNavLink($this->request, _t("About"), "", "", "About", "Index"); ?></li>
					<?php print $this->render("pageFormat/browseMenu.php"); ?>	
					<li <?php print (($this->request->getController() == "Search") && ($this->request->getAction() == "advanced")) ? 'class="active"' : ''; ?>><?php print caNavLink($this->request, _t("Advanced Search"), "", "", "Search", "advanced/objects"); ?></li>
					<li <?php print ($this->request->getController() == "Gallery") ? 'class="active"' : ''; ?>><?php print caNavLink($this->request, _t("Gallery"), "", "", "Gallery", "Index"); ?></li>
					<li <?php print ($this->request->getController() == "Collections") ? 'class="active"' : ''; ?>><?php print caNavLink($this->request, _t("Collections"), "", "", "Collections", "index"); ?></li>					
					<li <?php print ($this->request->getController() == "Contact") ? 'class="active"' : ''; ?>><?php print caNavLink($this->request, _t("Contact"), "", "", "Contact", "Form"); ?></li>
>>>>>>> origin/develop
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- end container -->
	</nav>
	<div <?php print caGetPageCSSClasses(); ?> > <!-- container opener -->
