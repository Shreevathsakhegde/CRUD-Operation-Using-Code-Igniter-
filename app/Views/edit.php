<!DOCTYPE html>
<html>
<head>
    <title>Edit Employer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"], textarea, select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        select {
            height: 40px;
        }

        button[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        .error-message {
            color: red;
            font-size: 14px;
        }

        .success-message {
            color: green;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Employer</h1>

       

        <?php if (session()->has('error')): ?>
            <div class="error-message">
                <?= session('error') ?>
            </div>
        <?php endif; ?>

        <form action="<?php echo site_url('/employers/update/'.$employer['id']);?>" method="post">
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" name="first_name" id="first_name" value="<?= $employer['first_name']; ?>" required>
            </div>

            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" name="last_name" id="last_name" value="<?= $employer['last_name']; ?>" required>
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <textarea name="address" id="address" required><?= $employer['address']; ?></textarea>
            </div>
            <!-- edit.php -->

<!-- edit.php -->

<a href="<?= site_url('/employers/department_info/'.$employer['id']); ?>">View Department</a>



            <div class="form-group">
                <label for="department">Department:</label>
                <select name="department" id="department">
                    <option value="CS" <?php if ($employer['department'] === 'CS') echo 'selected'; ?>>CS</option>
                    <option value="Maths" <?php if ($employer['department'] === 'Maths') echo 'selected'; ?>>Maths</option>
                    <option value="AI" <?php if ($employer['department'] === 'AI') echo 'selected'; ?>>AI</option>
                </select>
            </div>

            <div class="form-group">
                <label for="last_name">Gender:</label>
                <input type="text" name="gender" id="gender" value="<?= $employer['gender']; ?>" required>
            </div>

            <div class="form-group">
                <button type="submit">Update Employer</button>
            </div>
        </form>
    </div>
</body>
</html>
