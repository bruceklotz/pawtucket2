
<div class="row">
	<div class="col-sm-8 " style='border-right:1px solid #ddd;'>
		<h1>Objects Advanced Search</h1>

<?php			
print "<p>Enter your search terms in the fields below.</p>";
?>

{{{form}}}

<div class='advancedContainer'>
	<div class='row'>
		<div class="advancedSearchField col-sm-12">
			<label class='formLabel' data-toggle="popover" data-trigger="hover" data-content="Search across all fields in the database.">Keyword</label>
			<div class="form-group">{{{_fulltext%width=200px&height=1}}}</div>
		</div>			
	</div>		
	<div class='row'>
		<div class="advancedSearchField col-sm-12">
			<label class='formLabel' data-toggle="popover" data-trigger="hover" data-content="Limit your search to Object Titles only.">Title</label>
			<div class="form-group">{{{ca_objects.preferred_labels.name%width=220px}}}</div>
		</div>
	</div>
	<div class='row'>
		<div class="advancedSearchField col-sm-6">
			<label class='formLabel' data-toggle="popover" data-trigger="hover" data-content="Search object identifiers.">Accession number</label>
			<div class="form-group">{{{ca_objects.idno%width=210px}}}</div>
		</div>
		<div class="advancedSearchField col-sm-6">
			<label class='formLabel' data-toggle="popover" data-trigger="hover" data-content="Limit your search to object types.">Type</label>
			<div class="">{{{ca_objects.type_id%height=30px}}}</div>
		</div>
	</div>
	<div class='row'>
		<div class="advancedSearchField col-sm-12">
			<label class='formLabel' data-toggle="popover" data-trigger="hover" data-content="Search records of a particular date or date range.">Date range <i>(e.g. 1970-1979)</i></label>
			<div class="form-group">{{{ca_objects.dates.dates_value%width=200px&height=40px&useDatePicker=0}}}</div>
		</div>
	</div>
	<div class='row'>
		<div class="advancedSearchField col-sm-12">
			<label class='formLabel' data-toggle="popover" data-trigger="hover" data-content="Search records within a particular collection.">Collection </label>
			<div class="form-group">{{{ca_collections.preferred_labels%restrictToTypes=collection%width=200px&height=40px}}}</div>
		</div>
	</div>
	<br style="clear: both;"/>
	<div class='advancedFormSubmit'>
		<span class='btn btn-default'>{{{reset%label=Reset}}}</span>
		<span class='btn btn-default' style="margin-left: 20px;">{{{submit%label=Search}}}</span>
	</div>
</div>	

{{{/form}}}

	</div>
	<div class="col-sm-4" >
		<h1>Helpful Links</h1>
		<p>Include some helpful info for your users here.</p>
	</div><!-- end col -->
</div><!-- end row -->

<script>
	// jQuery(document).ready(function() {
// 		$('.advancedSearchField .formLabel').popover(); 
// 	});
// 	
</script>