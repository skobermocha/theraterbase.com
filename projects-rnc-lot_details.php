<?php include( 'header.php' ); ?>

<div class="row">
    <div class="twelve columns">
        <ul class="breadcrumbs">
            <li><a href="projects-rnc.php">RNC</a></li>
            <li><a href="projects-rnc-project_details.php">Project 1</a></li>
            <li><a href="projects-rnc-phase_details.php">Phase 1</a></li>
            <li class="current"><a href="#">Lot 145</a></li>
        </ul>
    </div>
</div>

<!--  Content header -->
<div class="row">
	<div class="four columns">
		<h3>Lot Information</h3>
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
          				<label class="inline">Lot Number:</label>
					</div>
					<div class="nine columns">
          				<input type="text" placeholder="Lot Number" />
					</div>
				</div>
				<div class="row">		
					<div class="three columns">
          				<label class="inline">Address:</label>
					</div>
					<div class="nine columns">
          				<input type="text" placeholder="Address" />
					</div>	
				</div>
				<div class="row">		
					<div class="three columns">
          				<label class="inline">Permit #:</label>
					</div>
					<div class="three columns">
          				<input type="text" placeholder="Permit #" />
					</div>
					<div class="one columns">
          				<label class="inline">Plan:</label>
					</div>
					<div class="five columns">
          				<input type="text" placeholder="Plan" />
					</div>	
				</div>	
			</div>
			<!-- END Left Side -->
			
			<!-- Right Side -->
			<div class="six columns">
				<div class="row">
					<div class="three columns">
          				<label class="inline">Phase:</label>
					</div>
					<div class="nine columns">
          				<input type="text" placeholder="Phase" />
					</div>
				</div>
				<div class="row">
                    <div class="three columns">
          				<label class="inline">Sample Group:</label>
					</div>
					<div class="nine columns">
          				<input type="text" placeholder="Sample Group" />
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
  			
            <!-- Lot Visits Accordion -->
  			<li class="active">
    			<div class="title">
      				<div class="row">
                        <div class="two columns">
                            <h5>Visits</h5>
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
      							<th>Schedule Date</th>
    							<th>Time Preference</th>
      							<th>Rater</th>
      							<th>Visit Type</th>
      							<th>Status</th>
      							<th>Time Needed</th>
      							<th>Time Used</th>
    						</tr>
  						</thead>
  						<tbody>
    						<tr>
      							<td><a href="#">12/17/2012</a></td>
      							<td>AM</td>
      							<td><a href="#">Gabe Lopez</a></td>
      							<td>Scheduled</td>
      							<td>Frame</td>
      							<td>1 hr 30 min</td>
      							<td></td>
    						</tr>
    						<tr>
      							<td><a href="#">12/17/2012</a></td>
      							<td>PM</td>
      							<td><a href="#">Gabe Lopez</a></td>
      							<td>Tenative</td>
      							<td>Final</td>
      							<td>1 hr 30 min</td>
      							<td></td>
    						</tr>
    						<tr>
      							<td><a href="#">12/17/2012</a></td>
      							<td>First AM</td>
      							<td><a href="#">Gabe Lopez</a></td>
      							<td>Scheduled</td>
      							<td>Final</td>
      							<td>1 hr 30 min</td>
      							<td></td>
    						</tr>
  						</tbody>
					</table>    			
				</div>
  			</li>
			<!-- END Lot Visits Accordion -->

            <!-- HVACs Accordion -->
  			<li> <!--class="active"-->
    			<div class="title">
      				<div class="row">
                        <div class="two columns">
                            <h5>HVAC Systems</h5>
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
      							<th>Area Served</th>
      							<th>System Type</th>
    							<th>Heating Make/Model</th>
                                <th>Heating Capacity (kBtu)</th>
                                <th>Heating AFUE/HSPF</th>
                                <th>Condenser Make/Model</th>
                                <th>Coil Make/Model</th>
                                <th>Cooling Capacity (tons)</th>
                                <th>Cooling SEER/EER</th>
                                <th>Default</th>
    						</tr>
  						</thead>
  						<tbody>
    						<tr>
      							<td>Whole House</td>
      							<td>Split</td>
      							<td>Carrier 58stx070</td>
                                <td>70</td>
                                <td>80%</td>
                                <td>Carrier 24ABB036</td>
                                <td>Aspen CD2536</td>
                                <td>3</td>
                                <td>13/11</td>
                                <td>Yes</td>
    						</tr>
  						</tbody>
					</table>    			
				</div>
  			</li>
			<!-- END HVACs Accordion -->
            
  			<!-- DHW Accordion -->
  			<li>
    			<div class="title">
      				<div class="row">
                        <div class="two columns">
                            <h5>DHW Systems</h5>
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
      							<th>System Type</th>
    							<th>Make/Model</th>
      							<th>Energy Factor</th>
                                <th>Pipe Insulation</th>
                                <th>Distribution</th>
                                <th>Blanket Wrap</th>
    						</tr>
  						</thead>
  						<tbody>
    						<tr>
      							<td>Small Storage</td>
      							<td>Rheem</td>
      							<td>Rl39</td>
                                <td>.60</td>
      							<td>None</td>
                                <td>None</td>
    						</tr>
  						</tbody>
					</table>
    			</div>
  			</li>
  			<!-- END DHW Accordion -->
  			
  			<!-- Envelope Accordion -->
  			<li>
    			<div class="title">
      				<div class="row">
                        <div class="two columns">
                            <h5>Envelope</h5>
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
      							<th>Assembly Type</th>
    							<th>R-Value</th>
    						</tr>
  						</thead>
  						<tbody>
    						<tr>
      							<td>Attic</td>
      							<td>R-49</td>
    						</tr>
    						<tr>
      							<td>Wall</td>
      							<td>R-13</td>
    						</tr>
    						<tr>
      							<td>Floor</td>
      							<td>R-30</td>
    						</tr>
  						</tbody>
					</table>
    			</div>
  			</li>
  			<!-- END Envelope Accordion -->
  			
  			<!-- Windows Accordion -->
  			<li>
    			<div class="title">
      				<div class="row">
                        <div class="two columns">
                            <h5>Windows</h5>
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
      							<th>Window Type</th>
    							<th>U-Value</th>
    							<th>SHGC</th>
    						</tr>
  						</thead>
  						<tbody>
    						<tr>
      							<td>Operable</td>
      							<td>.35</td>
      							<td>.35</td>
    						</tr>
  						</tbody>
					</table>
    			</div>
  			</li>
  			<!-- END Envelope Accordion -->
		</ul>
	</div>
</div>
<!-- END Accordion -->


            

<?php include( 'footer.php' ); ?>