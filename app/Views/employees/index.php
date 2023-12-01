<!-- app/Views/employees/index.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee List</title>

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

        a {
            color: #17a2b8; /* Accent color for links */
        }

        table {
            width: 100%;
            margin-top: 20px; /* Add some space between heading and table */
            border-collapse: collapse; /* Collapse borders for better appearance */
        }

        th, td {
            border: 1px solid #ffffff; /* White borders for cells */
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #138496; /* Header background color */
            color: #ffffff; /* Header text color */
        }

        a.edit, a.delete {
            display: inline-block;
            margin-right: 5px; /* Add some space between edit and delete links */
            color: #17a2b8; /* Accent color for edit and delete links */
        }

        a.edit:hover, a.delete:hover {
            text-decoration: underline; /* Underline on hover for better user feedback */
        }
    </style>
</head>
<body>

    <div>
        <a href="<?= base_url('auth/logout'); ?>">Logout</a>
    </div>

    <h2>Employee List</h2>

    <a href="<?= base_url('employees/create'); ?>" class="btn btn-primary">Add Employee</a>

    <table class="table table-bordered table-dark">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Position</th>
                <th>Salary</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employees as $employee) : ?>
                <tr>
                    <td><?= $employee['id']; ?></td>
                    <td><?= $employee['name']; ?></td>
                    <td><?= $employee['position']; ?></td>
                    <td><?= $employee['salary']; ?></td>
                    <td>
                        <a href="<?= base_url('employees/edit/' . $employee['id']); ?>" class="edit">Edit</a>
                        <a href="<?= base_url('employees/delete/' . $employee['id']); ?>" class="delete" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Add Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
