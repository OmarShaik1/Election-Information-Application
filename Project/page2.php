<html>
	<body>
		<div>
			<h1><center>Candidate Views</center></h1>
			<div>
				<h2><center>Submit a Request</center></h2>

				<form action="page2a.php" method="POST">
					<fieldset style="margin:50;">
					<p>How many votes were cast for my party?</p>
					<p>Select your Party</p>
					<select name="partyname">
						<option value="1">Conservative</option>
						<option value="2">Liberal</option>
						<option value="3">Green</option>
						<option value="4">New Democratic Party</option>
						<option value="5">Bloc Quebecois</option>
					</select>
					<input type="submit" value="Submit" />
					</fieldset>
				</form>
				<form action="page2b.php" method="POST">
					<fieldset style="margin:50;">
					<p>How many votes were cast for me?</p>
					<p>Enter your SSN</p>
					<input type="text" name="ssn" />
					<input type="submit" value="Submit" />
					</fieldset>
				</form>
			</div>
		</div>
	</body>
</html>
