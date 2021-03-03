

<?php include( 'header.php' ); ?>

<div class="row">
    <div class="twelve columns">
        <ul class="breadcrumbs">
            <li><a href="projects-rnc.php">RNC</a></li>
            <li><a href="projects-rnc-project_details.php">Project 1</a></li>
            <li class="current"><a href="#">Phase 1</a></li>
        </ul>
    </div>
</div>

<!--  Content header -->
<div class="row">
	<div class="four columns">
		<h3>Phase Information</h3>
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
          				<input type="text" placeholder="Phase Name" />
					</div>
				</div>
				<div class="row">		
					<div class="three columns">
          				<label class="inline">Registry:</label>
					</div>
					<div class="nine columns">
          				<input type="text" placeholder="Registry" />
					</div>	
				</div>	
			</div>
			<!-- END Left Side -->
			
			<!-- Right Side -->
			<div class="six columns">
				<div class="row">
					<div class="three columns">
          				<label class="inline"># of Lots:</label>
					</div>
					<div class="three columns">
          				<input type="text" placeholder="# of Lots" />
					</div>
                    <div class="three columns">
          				<label class="inline"># Lots Started:</label>
					</div>
					<div class="three columns">
          				<input type="text" placeholder="# Lots Started" />
					</div>
				</div>
				<div class="row">		
					<div class="three columns">
          				<label class="inline">Est Start Date:</label>
					</div>
					<div class="three columns">
          				<input type="text" placeholder="Est Start Date" />
					</div>
                    <div class="three columns">
          				<label class="inline">Comp. Date:</label>
					</div>
					<div class="three columns">
          				<input type="text" placeholder="Est Completion Date" />
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
  			
            <!-- Phase Contacts Accordion -->
  			<li> <!--class="active"-->
    			<div class="title">
      				<div class="row">
                        <div class="two columns">
                            <h5>Contacts</h5>
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
      							<th>Trade</th>
    							<th>Name</th>
      							<th>Company</th>
      							<th>Phone</th>
      							<th>Email</th>
      							<th>Remove</th>
    						</tr>
  						</thead>
  						<tbody>
    						<tr>
      							<td>Architect</td>
      							<td><a href="#">Mike Architect</a></td>
      							<td><a href="#">Residence Design Inc</a></td>
      							<td>209-877-2222</td>
      							<td><a href="#">email@email.com</a></td>
      							<td><a href="#">×</a></td>
    						</tr>
    						<tr>
      							<td>Content</td>
      							<td>This is longer content</td>
      							<td>Content</td>
      							<td>Content</td>
    						</tr>
    						<tr>
      							<td>Content</td>
      							<td>This is longer content</td>
      							<td>Content</td>
      							<td>Content</td>
    						</tr>
  						</tbody>
					</table>    			
				</div>
  			</li>
			<!-- END Phase Contacts Accordion -->

            <!-- Plans Accordion -->
  			<li> <!--class="active"-->
    			<div class="title">
      				<div class="row">
                        <div class="two columns">
                            <h5>Plans</h5>
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
      							<th>Plan</th>
    							<th>Square Footage</th>
      							<th># Stories</th>
                                <th># HVAC Systems</th>
    						</tr>
  						</thead>
  						<tbody>
    						<tr>
      							<td><a href="projects-rnc-plan_details.php">Plan 1</a></td>
      							<td>1400</td>
      							<td>1</td>
                                <td>2</td>
    						</tr>
    						<tr>
      							<td><a href="projects-rnc-plan_details.php">Plan 1 w-Bed 5</a></td>
      							<td>1654</td>
      							<td>1</td>
                                <td>2</td>
    						</tr>
    						<tr>
      							<td><a href="projects-rnc-plan_details.php">Plan 2</a></td>
      							<td>2100</td>
      							<td>1</td>
                                <td>2</td>
    						</tr>
  						</tbody>
					</table>    			
				</div>
  			</li>
			<!-- END Plans Accordion -->
            
  			<!-- Phase Lots Accordion -->
  			<li>
    			<div class="title">
      				<div class="row">
                        <div class="two columns">
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
                                <th>Sample Group</th>
                                <th>Test Type</th>
    						</tr>
  						</thead>
  						<tbody>
    						<tr>
      							<td><a href="projects-rnc-lot_details.php">145</a></td>
      							<td>1234 Anywhere Street</td>
      							<td>Fresno</td>
      							<td><a href="projects-rnc-plan_details.php">Plan 1</a></td>
                                <td>Pending Frame</td>
      							<td><a href="projects-rnc-phase_details.php">Phase 1</a></td>
                                <td></td>
                                <td></td>
    						</tr>
    						<tr>
      							<td><a href="projects-rnc-lot_details.php">155</a></td>
      							<td>1458 Anywhere Street</td>
      							<td>Fresno</td>
      							<td><a href="projects-rnc-plan_details.php">Plan 1</a></td>
      							<td>Pending Final</td>
                                <td><a href="projects-rnc-phase_details.php">Phase 1</a></td>
                                <td><a href="#">Group 1</a></td>
                                <td>Model Lot</td>
    						</tr>
    						<tr>
      							<td><a href="projects-rnc-lot_details.php">156</a></td>
      							<td>1545 Anywhere Street</td>
      							<td>Fresno</td>
      							<td><a href="projects-rnc-plan_details.php">Plan 1</a></td>
      							<td>Pending Frame</td>
                                <td><a href="projects-rnc-phase_details.php">Phase 1</a></td>
                                <td></td>
                                <td></td>
    						</tr>
  						</tbody>
					</table>
    			</div>
  			</li>
  			<!-- END Phase Lots Accordion -->

  			<!-- Phase Groups Accordion -->
  			<li>
    			<div class="title">
      				<div class="row">
                        <div class="two columns">
                            <h5>Sample Groups</h5>
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
      							<th>Name/Number</th>
      							<th>Group Type</th>
    							<th># 0f Lots</th>
    						</tr>
  						</thead>
  						<tbody>
    						<tr>
      							<td><a href="projects-rnc-group_details.php">Group 1</a></td>
      							<td>Model</td>
      							<td>1</td>
    						</tr>
  						</tbody>
					</table>
    			</div>
  			</li>
  			<!-- END Phase Groups Accordion -->
		</ul>
	</div>
</div>
<!-- END Accordion -->


            

<?php include( 'footer.php' ); ?>