		<script src="<?php echo base_url();?>js/jquery.tablesorter.js"></script>
		<script type="text/javascript">
				
			$(document).ready(function() { 
				$("#recordTables").tablesorter({ 
					// disables the action column from being sorted
					headers: { 
						4: { 
							sorter: false 
						}
					} 
				}); 
			});
		</script>
		
		<main>
			
			<h1>Find Record</h1>
			<p>Type in the staff member's ID to find their records.</p><br />
			
			<article>
			
					<label for="textSearchId">Staff ID: </label>
					<input type="text" id="textSearchId">
			
					<button class="submit"><i class="icon-search icon-white iLeft"></i>Find</button>
			
			</article>
			
			<article>
			
				<table id="recordTables" class="tablesorter">
				
					<thead>
						<tr>
							<th>id</th>
							<th>Name</th>
							<th>Gender</th>
							<th>Age</th>
							<th>Actions</th>
						</tr>
					</thead>
					
					<tbody>
						<tr>
							<td>101</td>
							<td>John Snow</td>
							<td>Male</td>
							<td>28</td>
							<td><a href=""><i class="icon-file iTable"></i></a><a href=""><i class="icon-pencil"></i></a></td>
						</tr>
								
						<tr>
							<td>102</td>
							<td>Ned Stark</td>
							<td>Male</td>
							<td>27</td>
							<td><a href=""><i class="icon-file iTable"></i></a><a href=""><i class="icon-pencil"></i></a></td>
						</tr>			
						<tr>
							<td>103</td>
							<td>Marge Simpson</td>
							<td>Female</td>
							<td>36</td>
							<td><a href=""><i class="icon-file iTable"></i></a><a href=""><i class="icon-pencil"></i></a></td>
						</tr>
					</tbody>
				</table>
			
			</article>

		</main>
			
	</body>

</html>
  