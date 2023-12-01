<!-- app/Views/employees/create.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>

    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style>
        /* Add custom styles for the dark theme */
        body {
            background-color: #343a40; /* Dark background color */
            color: #ffffff; /* Light text color */
            padding: 20px; /* Add some padding for better readability */
        }

        h2 {
            color: #17a2b8; /* Accent color for headings */
        }

        form {
            margin-top: 20px; /* Add some space between heading and form */
        }

        label {
            color: #17a2b8; /* Accent color for labels */
        }

        input, button {
            margin-bottom: 10px; /* Add some space between form elements */
        }

        button {
            background-color: #17a2b8; /* Button color */
            color: #ffffff; /* Button text color */
        }

        button:hover {
            background-color: #138496; /* Button color on hover */
        }
    </style>
</head>
<body>

    <h2>Add Employee</h2>

    <form action="<?= base_url('employees/store'); ?>" method="post">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="position">Position:</label>
            <input type="text" name="position" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="salary">Salary:</label>
            <input type="text" name="salary" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Employee</button>
    </form>

    <!-- Add Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
