<!-- department_info.php -->

<div class="container">
    <h1>Department Information</h1>

    <?php if (isset($department)): ?>
        <p>Department Name: <?= $department['name']; ?></p>
        <p>Department Description: <?= $department['description']; ?></p>
        <!-- Add more department details as needed -->
    <?php else: ?>
        <p>Department not found.</p>
    <?php endif; ?>
</div>
