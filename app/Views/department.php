<!-- app/Views/department.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department Data</title>
</head>
<body>

    <h1>Department Data</h1>
    <form action="<?php echo site_url('/department');?>" method="post">
    <label for="fullname">Full Name:</label>
        <input type="text" id="fullname" name="fullname" required><br>
        <label for="shortname">Short Name:</label>
        <input type="text" id="shortname" name="shortname" required><br>

        

        <button type="submit">Add Department</button>
    </form>

    <h2>Departments:</h2>
    <table>
        <thead>
            <tr>
                <th>Short Name</th>
                <th>Full Name</th>
            </tr>
        </thead>
       
    </table>
</body>
</html>
