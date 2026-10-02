<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accès refusé - Mahsoul</title>
    <link rel="shortcut icon" href="{{ asset('images/logo-white.jpg') }}" type="image/x-icon">
    @include('components.eco-head')
</head>
<body class="bg-sand min-h-screen flex flex-col">
    <main class="flex-grow flex items-center">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center">
            <span class="eco-eyebrow mb-6">Erreur 403</span>
            <p class="font-display font-black text-forest leading-none" style="font-size: clamp(6rem, 20vw, 12rem);">403</p>
            <h1 class="font-display text-3xl md:text-4xl font-extrabold text-forest mt-2">Oups ! Accès refusé</h1>
            <p class="text-clay mt-4 max-w-xl mx-auto">Cette section est réservée à un autre profil (administrateur, expert ou client). Connectez-vous avec le bon compte.</p>
            <div class="mt-8 flex flex-col sm:flex-row justify-center gap-4">
                <a href="/" class="btn-eco"><i class="fas fa-home mr-2"></i>Retour à l'accueil</a>
                <a href="/login" class="btn-outline-eco">Se connecter</a>
            </div>
        </div>
    </main>
</body>
</html>
