<!DOCTYPE html>
<html>
<head>
    <title>Employer Information Form</title>
</head>
<body>

<h2>Employer Information Form</h2>

<?= form_open();?>


<label for="first_name">First Name:</label>
<input type="text" name="first_name"><br>

<label for="last_name">Last Name:</label>
<input type="text" name="last_name"><br>

<label for="address">Address:</label>
<input type="text" name="address"><br>

<label for="department">Department:</label>
<select name="department">
    <option value="chemical">Chemical</option>
    <option value="cs">Computer Science</option>
    <option value="physics">Physics</option>
</select><br>

<input type="submit" name="submit" value="Submit">

</form>
<?= form_close();?>
</body>


</body>
</html>