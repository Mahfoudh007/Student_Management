<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <!-- CSS -->

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Style  -->
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container mt-5 add-s-container">
        <a href="./main.php" class="btn btn-secondary">Back to Main</a>

        <h2>Add Student</h2>
        <form action="../includes/insert_student.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="group_number">Group Name:</label>
                <input type="text" class="form-control" id="group_number" name="group_number" required>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile Number:</label>
                <input type="text" class="form-control" id="mobile" name="mobile" required>
            </div>
            <div class="form-group">
                <label for="parent_mobile">Parents Mobile:</label>
                <input type="text" class="form-control" id="parent_mobile" name="parent_mobile" required>
            </div>
            <div class="form-group">
                <label for="image" class="form-label">Image:</label>
                <input type="file" class="form-control" id="image" name="image" >
            </div>
            <button type="submit" class="btn btn-primary">Add Student</button>
        </form>
    </div>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>