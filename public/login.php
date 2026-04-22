<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="bg-white p-8 rounded-2xl shadow-lg w-96">
        
        <h2 class="text-2xl font-bold text-center mb-6">Connexion</h2>
        <?php
if (isset($_GET['error'])) {
    echo "<p style='color:red;'>Email ou mot de passe incorrect </p>";
}
?>


        <form action="../scripts/authprocess.php" method="POST">

            <!-- Email -->
            <div class="mb-4">
                <label class="block mb-1 text-gray-700">Email</label>
                <input 
                    type="email" 
                    name="email" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                    placeholder="Entrer votre email"
                    required
                >
            </div>

            <div class="mb-6">
                <label class="block mb-1 text-gray-700">Mot de passe</label>
                <input 
                    type="password" 
                    name="password" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                    placeholder="Entrer votre mot de passe"
                    required
                >
            </div>

            <button 
                type="submit" 
                name="login"
                class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition duration-300"
            >
                Se connecter
            </button>

        </form>

    </div>

</body>
</html>
