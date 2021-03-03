<?php include( 'header.php' ); ?>

<div class="row">
    <div class="twelve columns">
        <ul class="breadcrumbs">
            <li><a href="projects-rnc.php">RNC</a></li>
            <li class="current"><a href="#">Project 1</a></li>
        </ul>
    </div>
</div>


<!--  Content header -->
<div class="row">
	<div class="four columns">
		<h3>Project Information</h3>
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
	<div id="project-information" class="twelve columns">
     	<form class="custom"> 
		<div class="row">
			<!-- Left Side -->
			<div class="six columns">
				<div class="row">
					<div class="three columns">
          				<label class="inline">Name:</label>
					</div>
					<div class="nine columns">
          				<input type="text" placeholder="Project Name" />
					</div>
				</div>
				<div class="row">		
					<div class="three columns">
          				<label class="inline">City:</label>
					</div>
					<div class="nine columns">
          				<input type="text" placeholder="City" />
					</div>	
				</div>
				<div class="row">		
					<div class="three columns">
          				<label class="inline">State:</label>
					</div>
					<div class="three columns">
          				<input type="text" placeholder="State" />
					</div>
					<div class="two columns">
          				<label class="inline">Zip Code:</label>
					</div>
					<div class="four columns">
          				<input type="text" placeholder="Zip" />
					</div>	
				</div>
				<div class="row">		
					<div class="three columns">
          				<label class="inline">Climate:</label>
					</div>
					<div class="three columns">
          				<input type="text" placeholder="Climate" />
					</div>
					<div class="six columns"></div>	
				</div>
				<div class="row">		
					<div class="three columns">
          				<label class="inline">Jurisdiction:</label>
					</div>
					<div class="nine columns">
          				<input type="text" placeholder="Jurisdiction" />
					</div>
				</div>	
			</div>
			<!-- END Left Side -->
			
			<!-- Right Side -->
			<div class="six columns">
				<div class="row">
					<div class="three columns">
          				<label class="inline">Builder:</label>
					</div>
					<div class="nine columns">
          				<input type="text" placeholder="Builder" />
					</div>
				</div>
			
				<div class="row">		
					<div class="three columns">
          				<label class="inline">Project Type:</label>
					</div>
					<div class="nine columns">
          				<input type="text" placeholder="Project Type" />
					</div>	
				</div>
				<div class="row">		
					<div class="three columns">
          				<!--<label class="inline">Provider:</label>-->
					</div>
					<div class="nine columns">
          				<!--<input type="text" placeholder="Provider" />-->
					</div>	
				</div>
				<div class="row">		
					<div class="three columns">
          				<label class="inline">Electric Utility:</label>
					</div>
					<div class="nine columns">
          				<input type="text" placeholder="Elec. Utility" />
					</div>
				</div>
				<div class="row">		
					<div class="three columns">
          				<label class="inline">Gas Utility:</label>
					</div>
					<div class="nine columns">
          				<input type="text" placeholder="Gas Utility" />
					</div>
				</div>
                <div class="row">		
					<div class="three columns">
          				<label class="inline">Bill To:</label>
					</div>
					<div class="six columns">
          				<input type="text" placeholder="Bill To" />
					</div>
                     <div class="three columns">
                       <label for="checkbox1"><input type="checkbox" id="checkbox1" style="display: none;" /><span class="custom checkbox"></span> Bill at Final</label>
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
  			
            <!-- Phases Accordion -->
            <li>
                <div class="title">
      				<div class="row">
                        <div class="two columns">
                            <h5>Phases</h5>
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
    							<th># of Lots</th>
      							<th># Lots Started</th>
      							<th>Registery</th>
    						</tr>
  						</thead>
  						<tbody>
    						<tr>
      							<td><a href="projects-rnc-phase_details.php">Phase 1</a></td>
      							<td>37</td>
      							<td>3</td>
      							<td>CalCERTS</td>
    						</tr>
    						<tr>
      							<td><a href="projects-rnc-phase_details.php">Phase 2</a></td>
      							<td>12</td>
      							<td>0</td>
      							<td>CalCERTS</td>
    						</tr>
    						<tr>
      							<td><a href="projects-rnc-phase_details.php">Phase 3</a></td>
      							<td>18</td>
      							<td>0</td>
      							<td>CalCERTS</td>
    						</tr>
  						</tbody>
					</table>    			
				</div>
            </li>
			<!-- END Phases Accordion -->
            
  			<!-- Project Lots Accordion -->
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
                                <td>Pending Frame</td>
      							<td><a href="projects-rnc-phase_details.php">Phase 1</a></td>
                                <td><a href="#">Group 1</a></td>
                                <td>Tested Lot</td>
    						</tr>
    						<tr>
      							<td><a href="projects-rnc-lot_details.php">146</a></td>
      							<td>1458 Anywhere Street</td>
      							<td>Fresno</td>
      							<td>Pending Final</td>
                                <td><a href="projects-rnc-phase_details.php">Phase 1</a></td>
                                <td><a href="#">Group 1</a></td>
                                <td>Model Lot</td>
    						</tr>
    						<tr>
      							<td><a href="projects-rnc-lot_details.php">147</a></td>
      							<td>1545 Anywhere Street</td>
      							<td>Fresno</td>
      							<td>Pending Frame</td>
                                <td><a href="projects-rnc-phase_details.php">Phase 1</a></td>
                                <td><a href="#">Group 1</a></td>
                                <td>Sampled Lot</td>
    						</tr>
  						</tbody>
					</table>
    			</div>
  			</li>
  			<!-- END Project Lots Accordion -->
		</ul>
	</div>
</div>
<!-- END Accordion -->






<?php include( 'footer.php' ); ?>