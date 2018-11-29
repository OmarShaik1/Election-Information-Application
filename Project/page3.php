<html>
	<head>
		<title>Voting Information</title>
	</head>
	<body>
		<div>
			<h1><center>Government Official Views</center></h1>
			<div>
				<h2><center>Select a view to query</center></h2>

				<form action="page3a.php" method="POST">
					<fieldset style="margin:50;">
					<p>Which Candidates Voted for Themselves</p>
					<input type="submit" value="Submit" />
					</fieldset>
				</form>
				<form action="page3b.php" method="POST">
					<fieldset style="margin:50;">
					<p>Who is in the Lead for Prime Minister</p>
					<input type="submit" value="Submit" />
					</fieldset>
				</form>
				<form action="page3c.php" method="POST">
					<fieldset style="margin:50;">
					<p>How Many People Participated in the ____ year Elections</p>
					<input type="text" name="year">
					<input type="submit" value="Submit" />
					</fieldset>
				</form>
				<form action="page3d.php" method="POST">
					<fieldset style="margin:50;">
					<p>Which Candidates are Running for this Position</p>
					<select name="positions">
						<option value="1">Prime Minister</option>
						<option value="2">Member of Parliament</option>
						<option value="3">Premier</option>
						<option value="4">Member of Provincial Parliament</option>
						<option value="5">Mayor</option>
						<option value="6">Councillor</option>
						<option value="7">School Boart Trustee</option>
						<option value="8">Regional Chair</option>
					</select>
					<input type="submit" value="Submit" />
					</fieldset>
				</form>
				<form action="page3e.php" method="POST">
					<fieldset style="margin:50;">
					<p>Which Electors who are also Candidates Cast a Vote</p>
					<input type="submit" value="Submit" />
					</fieldset>
				</form>
			</div>
		</div>
	</body>
</html>