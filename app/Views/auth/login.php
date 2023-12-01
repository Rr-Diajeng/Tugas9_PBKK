<!-- app/Views/auth/login.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

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

        input,
        button {
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

    <h2>Login</h2>

    <?php if (session()->getFlashdata('message')) : ?>
        <p><?= session()->getFlashdata('message'); ?></p>
    <?php endif; ?>

    <form action="<?= base_url('auth/processLogin'); ?>" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required class="form-control">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" required class="form-control">
        <br>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>

    <!-- Add Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
