		</script>
		
		<main>
			
			<h1>Add Record</h1>
			<p>Select the record type you want to create below.</p><br />
			
				<article>
					<form id="addRecord" action="addRecord/add" method="post" >
					<select name="recordType">
					
						<option value="initial">Initial Record</option>
						<option value="promotion">Promotion Record</option>
						<option value="probation">Probation Record</option>
						<option value="termination">Termination Record</option>
					
					</select>
				
				</article>
				
				<article>
				
					<h4>Initial Record</h4>
						
						<div class="input">
							<label for="textFirstName">First Name: </label>
							<input type="text" id="textFirstName" name="firstName" value="Dan">
						</div>
						
						<div class="input">
							<label for="textSurname">Surname: </label>
							<input type="text" id="textSurname" name="surname" value="Morrison">					
						</div>
						
						<div class="input">
							<label for="textDOB">Date of Birth: </label>
							<input type="text" id="textDOB" name="DOB" value="10-10-1993">
						</div>
						
						<div class="input">
							<label for="textGender">Gender: </label>
							<input type="text" id="textGender" name="gender" value="Male">	
						</div>
						
						<div class="input">
							<label for="textUserID">User ID: </label>
							<input type="text" id="textUserID" name="userID" value="00000002">	
						</div>
						
						<div class="input">
							<label for="textStartDate">Start Date: </label>
							<input type="text" id="textStartDate" name="startDate" value="2014-03-15">	
						</div>
						
						<div class="input">
							<label for="textInterviewer">Interviewer: </label>
							<input type="text" id="textInterviewer" name="interviewer" value="John">	
						</div>			

						<div class="input">
							<label for="textSection">Section: </label>
							<input type="text" id="textSection" name="initialSection" value="Sales">	
						</div>	
						
						<div class="input">
							<label for="textRole">Role: </label>
							<input type="text" id="textRole" name="initialRole" value="Staff Member">	
						</div>			
						
						<div class="input">
							<label for="textSalary">Salary: </label>
							<input type="text" id="textSalary" name="initialSalary" value="18500">	
						</div>						
						<br /><button type="submit" class="submit"><i class="icon-plus icon-white iLeft"></i>Add</button>
						
					</form>
				</article>
		</main>
			
	</body>

</html>
  