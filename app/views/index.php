<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Cours</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="text-xl font-semibold text-gray-800">
                    Formation Academy
                </div>
                <div class="space-x-4">
                    <a href="#" class="text-gray-600 hover:text-blue-500">Accueil</a>
                    <a href="#" class="text-gray-600 hover:text-blue-500">Cours</a>
                    <a href="#" class="text-gray-600 hover:text-blue-500">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- En-tête -->
    <header class="bg-white shadow">
        <div class="max-w-6xl mx-auto py-6 px-4">
            <h1 class="text-3xl font-bold text-gray-900">Nos Cours</h1>
        </div>
    </header>

    <!-- Contenu principal -->
    <main class="max-w-6xl mx-auto py-6 px-4">
        <!-- Grille des cours -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Carte de cours 1 -->
            <?php foreach ($cours as $article): ?>
            <div class="bg-white rounded-lg shadow overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="bg-blue-500 rounded-full p-3">
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <h2 class="ml-3 text-xl font-semibold text-gray-800"><?php echo $article['title'] ?></h2>
                    </div>
                    <p class="mt-4 text-gray-600">Apprenez les bases du développement web avec HTML, CSS et JavaScript.</p>
                    <div class="mt-4">
                        <span class="text-sm font-medium text-blue-500">Durée: 8 semaines</span>
                        <span class="mx-2 text-gray-300">|</span>
                        <span class="text-sm text-gray-500">Débutant</span>
                    </div>
                    <button class="mt-4 w-full bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">
                        S'inscrire
                    </button>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </main>

    <!-- Pied de page -->
    <footer class="bg-white border-t mt-12">
        <div class="max-w-6xl mx-auto px-4 py-6">
            <div class="text-center text-gray-600">
                © 2024 Formation Academy. Tous droits réservés.
            </div>
        </div>
    </footer>
</body>
</html>