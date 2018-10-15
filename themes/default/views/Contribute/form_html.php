<?php
/* ----------------------------------------------------------------------
 * CollectiveAccess
 * Open-source collections management software
 * ----------------------------------------------------------------------
 *
 * Software by Whirl-i-Gig (http://www.whirl-i-gig.com)
 * Copyright 2014-2016 Whirl-i-Gig
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
 
	$t_subject = $this->getVar('t_subject');	
?>
<div class="row collection">
	<div class="col-sm-12" style="padding-left:30px;">
		<h1>Submit to the Collection</h1>	
		<div class="notificationMessage">{{{errors}}}</div>	
	</div>
</div>	
<div class="row collection">
	<div class="col-sm-12">	
		<div class="contributeForm">
			{{{form}}}
			<div class="container">
				<div class="row">
					<div class="contributeField col-sm-6">
						{{{ca_objects.preferred_labels:error}}}
						<label>Title</label>
						<div class="form-group">
							{{{ca_objects.preferred_labels.name%width=220px}}}
						</div>
					</div>
					<div class="contributeField col-sm-6">
						{{{ca_entities.preferred_labels:error}}}
						<label>Artist</label>
						<div class="form-group">
							{{{ca_entities.preferred_labels.displayname%width=220px&height=40px&relationshipType=artist&type=ind}}}
						</div>
					</div>
				</div>
				<div class="row">
					<div class="contributeField col-sm-12">
						<div class="contributeField">
							{{{ca_objects.date:error}}}
							<label>Date</label>
							<div class="form-group">
								{{{ca_objects.date.dates_value%width=220px}}} 
							</div>  
						</div>
					</div>
				</div>		
				<div class="row">
					<div class="contributeField col-sm-12">
						<div class="contributeField">
							{{{ca_objects.description:error}}}
							<label>Description</label>
							<div class="form-group">
								{{{ca_objects.description%width=220px&height=120px}}}
							</div>   
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">				
						<div class="contributeField media">
							{{{ca_object_representations.media:error}}}
							<div><label>Media(1)</label></div>
					
							<div class='mediaCaption'><label>Caption</label> <div class="form-group">{{{ca_object_representations.preferred_labels.name}}}</div></div>
							<div>{{{ca_object_representations.media}}} </div>
						</div>
						<div class="contributeField media">
							{{{ca_object_representations.media:error}}}
							<div><label>Media(2)</label></div>
					
							<div class='mediaCaption'><label>Caption</label> <div class="form-group">{{{ca_object_representations.preferred_labels.name}}}</div></div>
							<div>{{{ca_object_representations.media}}} </div>
						</div>
						<div class="contributeField media">
							{{{ca_object_representations.media:error}}}
							<div><label>Media(3)</label></div>
					
							<div class='mediaCaption'><label>Caption</label> <div class="form-group">{{{ca_object_representations.preferred_labels.name}}} </div></div>
							<div>{{{ca_object_representations.media}}} </div>
						</div>
					</div>
				</div>		

				<br style="clear: both;"/>
<?php					
				print "<div class='spamCheck'>".$this->render('Contribute/spam_check_html.php')."</div>";
				print "<div class='spamCheck'>".$this->render('Contribute/terms_and_conditions_check_html.php')."</div>";
?>
				<div class='submitContribute'>
					<div class="btn btn-default">{{{reset%label=Reset}}}</div>
					<div class="btn btn-default">{{{submit%label=Save}}}</div>
				</div>
				
				</div><!-- end container -->
			{{{/form}}}
			<div class='clearfix'></div>
		</div><!-- end form -->
	</div><!-- end col -->
</div><!-- end row -->