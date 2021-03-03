<?php include( 'header.php' ); ?>

			<!--BEGIN #sub-header -->
			<div id="sub-header">
				<!-- <h2>Projects</h2> -->
							
			</div>

			<!--END #sub-header -->			
			
			<!--BEGIN #primary .hfeed-->
			<div id="primary" class="hfeed">
			

				<!--BEGIN .hentry-->
				<div id="" class="">


				<!--BEGIN TABLE AREA FOR DISPLAY-->
					<div class="entry-content article">
										
					<!-- BEGIN table title -->
						<div class="table-title">
						<span>Retrofit Projects</span>

						<div id="search-form">
							<form name="search_form" method="post" action="">							
								<input type="text" name="textfield" />
								<button type="submit">Search</button>
					    	</form>
				    	</div>
				    	</div>
				    <!-- END table title>
				    
					<!-- BEGIN TABLE -->
					<table class="">
						<thead>
						<tr>
							<th>Project Name</th>
							<th>Location</th>
							<th>Builder</th>
							<th>Date</th>
						</tr>
						</thead>
						<tbody>
						<tr onclick="DoNav('http://www.yahoo.com/');">
							<td>Project 1</td>
							<td>Clovis, CA</td>
							<td>Wathen Castanos</td>
							<td>12/31/2010</td>
						</tr>
						<tr onclick="DoNav('http://www.yahoo.com/');">
							<td>Project 2</td>
							<td>Fresno, CA</td>
							<td>DeYoung Properties</td>
							<td>12/31/2010</td>
						</tr>					
						<tr onclick="DoNav('http://www.yahoo.com/');">
							<td>Project 3</td>
							<td>Bakersfield, CA</td>
							<td>Lennar Homes</td>
							<td>12/31/2010</td>
						</tr>
						</tbody>
					</table>
					
					<!--END .entry-content .article-->
					</div>

					<!--BEGIN .entry-meta .entry-footer-->
                    <div class="entry-meta entry-footer">
                    	
					<!--END .entry-meta .entry-footer-->
                    </div>
				<!--END TABLE AREA FOR DISPLAY-->
				
				<!--END .hentry-->
				</div>

				<!--BEGIN #post-0-->
				<div id="post-0" class="">

				<!--END #post-0-->
				</div>

			<!--END #primary .hfeed-->
			</div>

<?php include( 'sidebar.php' );?>
<?php include( 'footer.php' ); ?>