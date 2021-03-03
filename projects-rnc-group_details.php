

<?php include( 'header.php' ); ?>

<div class="row">
    <div class="twelve columns">
        <ul class="breadcrumbs">
            <li><a href="projects-rnc.php">RNC</a></li>
            <li><a href="projects-rnc-project_details.php">Project 1</a></li>
            <li><a href="projects-rnc-phase_details.php#">Phase 1</a></li>
            <li class="current"><a href="#">Group 1</a></li>
        </ul>
    </div>
</div>

<!--  Content header -->
<div class="row">
	<div class="four columns">
		<h3>Group Information</h3>
	</div>
	<div class="eight columns">
		<h4><a class="tiny radius button secondary" href="#">Edit</a></h4>
	</div>
</div>
<!--  END Content header -->

<!-- Main Content -->
<div class="row">
	
	<!-- Sidebar Content 
	<div id="sidebar" class="two columns">
		<ul class="twelve side-nav">
  			<li class="page_item"><a href="#">Link 1</a></li>
  			<li class="page_item"><a href="#">Link 2</a></li>
  			<li class="divider"></li>
  			<li class="page_item"><a href="#">Link 3</a></li>
  			<li class="page_item"><a href="#">Link 4</a></li>
		</ul>
	</div>
	<!-- END Sidebar Content -->
	
	
	<!-- Project Information Wrapper-->
	<div id="phase-information" class="twelve columns">
     	<form> 
		<div class="row">
			<!-- Left Side -->
			<div class="six columns">
				<div class="row">
					<div class="three columns">
          				<label class="inline">Name:</label>
					</div>
					<div class="nine columns">
          				<input type="text" placeholder="Group Name" />
					</div>
				</div>
			</div>
			<!-- END Left Side -->
			
			<!-- Right Side -->
			<div class="six columns">
				<div class="row">
  					<div class="twelve columns">
  					<ul class="inline-list">
      					<li><label for="radio4"><input name="radio2" type="radio" id="radio4"> Model</label></li>
      					<li><label for="radio5"><input name="radio2" type="radio" id="radio5"> Open Group</label></li>
      					<li><label for="radio6"><input name="radio2" type="radio" id="radio6"> Closed Group</label></li>
    				</ul>
    				</div>
				</div>
			</div>
			<!-- END Right Side -->
		
		</div>
		
		</form>
	</div>
	<!-- END Project information Wrapper -->
	
</div>
<!-- END Content Wrapper Wrapper --> 


<!-- Accordion -->
<div class="row">
	<div class="twelve columns">
		<ul class="accordion">

  			<!-- Phase Lots Accordion -->
  			<li class="active">
    			<div class="title">
      				<div class="row">
                        <div class="two columns active">
                            <h5>Lots</h5>
                        </div>
                        <div class="ten columns">
                            <a style="margin-left:15px;" class="tiny radius button secondary" href="#">Add</a>
                        </div>
                    </div>
    			</div>
    			<div class="content">
                    <table class="twelve">
  						<thead>
   							<tr class="highlight">
      							<th>Lot #</th>
    							<th>Street Address</th>
      							<th>City</th>
      							<th>Plan</th>
      							<th>Status</th>
                                <th>Phase</th>
                                <th>Test Type</th>
    						</tr>
  						</thead>
  						<tbody>
    						<tr>
      							<td><a href="projects-rnc-lot_details.php">155</a></td>
      							<td>1458 Anywhere Street</td>
      							<td>Fresno</td>
      							<td><a href="projects-rnc-plan_details.php">Plan 1</a></td>
      							<td>Pending Final</td>
                                <td><a href="projects-rnc-phase_details.php">Phase 1</a></td>
                                <td>Model Lot</td>
    						</tr>
  						</tbody>
					</table>
    			</div>
  			</li>
  			<!-- END Phase Lots Accordion -->
		</ul>
	</div>
</div>
<!-- END Accordion -->


            

<?php include( 'footer.php' ); ?>