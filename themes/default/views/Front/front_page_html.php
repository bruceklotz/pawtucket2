<?php
/** ---------------------------------------------------------------------
 * themes/default/Front/front_page_html : Front page of site 
 * ----------------------------------------------------------------------
 * CollectiveAccess
 * Open-source collections management software
 * ----------------------------------------------------------------------
 *
 * Software by Whirl-i-Gig (http://www.whirl-i-gig.com)
 * Copyright 2013 Whirl-i-Gig
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
 * @package CollectiveAccess
 * @subpackage Core
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License version 3
 *
 * ----------------------------------------------------------------------
 */
	$va_access_values = $this->getVar("access_values");
	$qr_res = $this->getVar('featured_set_items_as_search_result');
	$o_config = $this->getVar("config");
	$vs_caption_template = $o_config->get("front_page_set_item_caption_template");
	if(!$vs_caption_template){
		$vs_caption_template = "<l>^ca_objects.preferred_labels.name</l>";
	}
	print "<div id='example'>";
	if($qr_res && $qr_res->numHits()){
		print "<carousel>";
		while($qr_res->nextHit()){
			print "<slide>".$qr_res->get('ca_object_representations.media.large').$qr_res->getWithTemplate($vs_caption_template)."</slide>";
		}
		print "</carousel>";
	}
	print "</div>";
?>


	<div id="app">
	    App goes here {{appname}}
	</div>

	<div class="row">
		<div class="col-sm-8">
			<H1>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate, orci quis vehicula eleifend, metus elit laoreet elit.</H1>
		</div><!--end col-sm-8-->
		<div class="col-sm-4">
			<h2>Browse Featured Galleries</h2>
<?php
			print caGetGallerySetsAsList($this->request, "nav nav-pills nav-stacked");
?> 
		</div> <!--end col-sm-4-->	
	</div><!-- end row -->
	
