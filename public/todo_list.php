<?php
	var_dump($_POST);
?>
<!DOCTYPE html>

<html>
<head>
	<title>TODO List
	</title>
</head>
<body>
	<h3>TODO List</h3>
	<ul>
		<li>Buy groceries</li>
		<li>Take the dog a bath</li>
		<li>Cook dinner</li>
	</ul>
	<h4>Creating New List</h4>
<form method="POST" action="/TODO_list.php">
	<p>
         <label for="todolist">Add list</label>
         <input id="todolist" name="To" type="text">
    </p>
    <input type="submit">
</form>
</body>
</html>