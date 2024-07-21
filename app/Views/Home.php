
<!DOCTYPE html>
     <html lang="en">
     <head>
     <title>Home Page</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     </head>
     <body>
     <div class="container">
     <h2>Employer Information</h2>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>email</th>
            <th>Address</th>
            <th>category</th>
        </tr>
    </thead>
    <tbody>
        <?php  ?>
            <tr>
                <td><?= $fullname['name']; ?></td>
                <td><?= $fullname['email']; ?></td>
                <td><?= $fullname['address']; ?></td>
                <td><?= $fullname['category']; ?></td>
            </tr>
        <?php  ?>
    </tbody>
</table>
     <h1>Insert Data</h1>
     <form action="<?php echo site_url('User/insert');?>" method="post">
     <div class="form-group">
         <label for="name">Name:</label>
         <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required>
     </div>
     <div class="form-group">
         <label for="email">Email:</label>
         <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
     </div>
     <div class="form-group">
         <label for="add">address:</label>
         <input type="address" class="form-control" id="add" placeholder="Enter address " name="address" required>
     </div>
     <div class="form-group">
    <label for="cat">Category</label>
    <select class="form-control" id="cat" name="category" required>
    <option value="select">select </option>
        <option value="CS">CS</option>
        <option value="Maths">Maths</option>
        <option value="AI">AI</option>
        <!-- Add more options as needed -->
    </select>
</div>

     <button type="submit" class="btn btn-primary">Submit</button>
     </form>
     </div>
     </body>
     </html>