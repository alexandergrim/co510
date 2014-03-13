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
				<form action="findRecord" method="post" >

					<label for="textSearchId">Staff ID: </label>
					<input type="text" id="textSearchId" name="searchID" value="00000002">
			
					<button type="submit" class="submit"><i class="icon-search icon-white iLeft"></i>Find</button>
				</form>
			</article>
			
			<?php
			
				if(isset($foundData)){
					echo "
						<article>
				
							<table id=\"recordTables\" class=\"tablesorter\">
					
							<thead>
								<tr>
									<th>Record ID</th>
									<th>User ID</th>
									<th>Record Type</th>
									<th>Date Created</th>
									<th>Date Modified</th>
									<th>Actions</th>
								</tr>
							</thead>
						
							<tbody>
						";
				
					foreach($foundData->result() as $row)
					{
						echo "<tr><td>" . $row->recordID . "</td>"; 
						echo "<td>" . $row->userID . "</td>"; 
						echo "<td>" . $row->recordType . "</td>"; 
						echo "<td>" . $row->dateCreated . "</td>";
						echo "<td>" . $row->dateModified . "</td>";
						echo "<td><a href=\"viewRecord/view/" . $row->recordID . "\"><i class=\"icon-file iTable\"></i></a><a href=\"\"><i class=\"icon-pencil\"></i></a></td></tr>";

					}
				}
				
			?>
					</tbody>
				</table>
			
			</article>

		</main>
			
	</body>

</html>
  