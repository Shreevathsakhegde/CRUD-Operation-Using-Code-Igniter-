
<!DOCTYPE html>
<html>
<head>
    <title>Employer Information</title>
 

    <style>
        /* Style for the container */
        .container {
            background-color: #f2f2f2;
            padding: 20px;
        }

        /* Style for the headings */
        h1, h2 {
            color: #333;
        }

        /* Style for the table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th {
            background-color: #007BFF; /* Background color for table headings */
            color: #fff; /* Text color for table headings */
            padding: 8px;
            text-align: left;
        }

        table, td {
            border: 1px solid #ddd;
        }

        td {
            padding: 8px;
            text-align: left;
        }

        /* Style for form labels */
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        /* Style for input fields and textarea */
        input[type="text"], textarea, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Style for the submit button */
        button[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Hover effect for the submit button */
        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Style for the "Edit" button */
        /* Style for table cell borders */
table, td {
    border: 1px solid black; /* Original border color */
}

/* Brighter border color for table cells */
td {
    border-color: black; /* Brighter border color */
}

a.edit-button {
    background-color: #28a745; /* Green background color */
    color: #fff; /* Text color */
    padding: 5px 10px; /* Adjust padding as needed */
    border-radius: 3px;
    text-decoration: none; /* Remove underlines */
}

/* Style for the "Delete" button */
a.delete-button {
    background-color: #dc3545; /* Red background color */
    color: #fff; /* Text color */
    padding: 5px 10px; /* Adjust padding as needed */
    border-radius: 3px;
    text-decoration: none; /* Remove underlines */
}

/* Hover effect for both buttons */
a.edit-button:hover, a.delete-button:hover {
    opacity: 0.8; /* Reduce opacity on hover */
}
/* Style for the Age input */
#age {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    /* Add more styling properties as needed */
}


    </style>
      

</head>
<body>
    <div class="container">
        <h1>Employer Information</h1>
        <hr>

        <!-- Display Employer Information -->
        <section>
            <h2>Current Employers</h2>
            <table>
    <!-- Table styling is applied via CSS -->
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Department</th>
            
            <th>Gender</th>
            <th>Actions</th>
            
        </tr>
    </thead>
    <tbody>
        <?php foreach ($employers as $employer): ?>
            <tr>
                <td><?= $employer['first_name']; ?></td>
                <td><?= $employer['last_name']; ?></td>
                <td><?= $employer['address']; ?></td>
                <td><?= $employer['department']; ?></td>
                <td><?= $employer['gender']; ?></td>
                <td>
                
    <a class="edit-button" href="<?= site_url('/employers/edit/' . $employer['id']); ?>">Edit</a>
    |
    <a class="delete-button" href="<?= site_url("/employers/delete/{$employer['id']}"); ?>">Delete</a>
</td>

                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
        </section>

        <!-- Form to Add New Employer -->
      <!-- Form to Add New Employer -->
<section>
    <h2>Add New Employer</h2>
    <form action="<?php echo site_url('/employers');?>" method="post">
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" pattern="[A-Za-z\s]+" id="first_name" title="Please enter text only." required>

        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" pattern="[A-Za-z\s]+" id="last_name" title="Please enter text only." required>

        <label for="address">Address:</label>
        <textarea name="address" id="address" required></textarea>

        <label for="department">Department:</label>
        <select name="department" id="department" required>
            <option value="CS">CS</option>
            <option value="Maths">Maths</option>
            <option value="AI">AI</option>
        </select>
<!-- Gender Label -->
<label>Gender:</label>

<!-- Male Option -->
<label for="male">Male</label>
<input type="radio" name="gender" id="male" value="male" required>

<!-- Female Option -->
<label for="female">Female</label>
<input type="radio" name="gender" id="female" value="female" required>

<!-- Age Input (Initially Hidden) -->
<!-- Age Input (Initially Hidden) -->
<div id="ageField" style="display: none;">
    <label for="age">What is your age?</label>
    <input type="number" name="age" id="age" min="0">
</div>


<!-- Favorite Movie Input (Initially Hidden) -->
<div id="movieField" style="display: none;">
    <label for="favorite_movie">What is your favorite movie?</label>
    <input type="text" name="favorite_movie" id="favorite_movie">
</div>
<br>


        <button type="submit">Add Employer</button>
    </form>
</section>

    </div>
</body>
</html>
<script>
    document.querySelectorAll('input[name="gender"]').forEach(function(radio) {
        radio.addEventListener('change', function() {
            var selectedGender = document.querySelector('input[name="gender"]:checked').value;
            var ageField = document.getElementById('ageField');
            var movieField = document.getElementById('movieField');

            if (selectedGender === 'male') {
                ageField.style.display = 'block';
                movieField.style.display = 'none';
            } else if (selectedGender === 'female') {
                ageField.style.display = 'none';
                movieField.style.display = 'block';
            } else {
                ageField.style.display = 'none';
                movieField.style.display = 'none';
            }
        });
    });
</script>