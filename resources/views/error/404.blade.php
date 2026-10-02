<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page non trouvée - Mahsoul</title>
    <link rel="shortcut icon" href="{{ asset('images/logo-white.jpg') }}" type="image/x-icon">
    @include('components.design-system')
</head>
<body class="bg-sand min-h-screen flex flex-col">
    <main class="flex-grow flex items-center">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center">
            <span class="eco-eyebrow mb-6">Erreur 404</span>
            <p class="font-display font-black text-forest leading-none" style="font-size: clamp(6rem, 20vw, 12rem);">404</p>
            <h1 class="font-display text-3xl md:text-4xl font-extrabold text-forest mt-2">Oups ! Page introuvable</h1>
            <p class="text-clay mt-4 max-w-xl mx-auto">La page que vous cherchez a peut-être été déplacée ou n'existe plus. Essayez une recherche ou retournez à l'accueil.</p>
            <form action="{{ route('products.index') }}" method="GET" class="mt-8 flex max-w-md mx-auto gap-2">
                <input type="text" name="q" placeholder="Rechercher un produit..." class="flex-1 px-5 py-3 rounded-full border border-forest/20 bg-white focus:outline-none focus:border-leaf text-sm">
                <button type="submit" class="btn-eco !py-3 !px-6 text-sm">OK</button>
            </form>
            <div class="mt-8 flex flex-col sm:flex-row justify-center gap-4">
                <a href="/" class="btn-eco"><i class="fas fa-home mr-2"></i>Retour à l'accueil</a>
                <a href="/contact" class="btn-outline-eco">Nous contacter</a>
            </div>
        </div>
    </main>
</body>
</html>