<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    

<nav class="bg-blue-600 p-4 shadow-md">
    <div class="container mx-auto flex justify-between items-center">

        <h1 class="text-white text-xl font-bold">Edusync-breif</h1>

        <div class="space-x-4">

            <a href="index.php" class="text-white hover:text-gray-200">Home</a>

            <?php if (!isset($_SESSION['user'])): ?>
                <a href="login.php" class="bg-white text-blue-600 px-3 py-1 rounded-lg hover:bg-gray-200">
                    Login
                </a>

                <a href="register.php" class="bg-green-500 text-white px-3 py-1 rounded-lg hover:bg-green-600">
                    Register
                </a>

            <?php else: ?>
                <a href="dashboard.php" class="text-white hover:text-gray-200">
                    Dashboard
                </a>

                <a href="logout.php" class="bg-red-500 px-3 py-1 rounded-lg hover:bg-red-600 text-white">
                    Logout
                </a>
            <?php endif; ?>

        </div>
    </div>
</nav>
</body>
</html>