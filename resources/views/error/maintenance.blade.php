<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maintenance en cours - Mahsoul</title>
    <meta name="description" content="Maintenance en cours - Mahsoul Plateforme agricole">
    <link rel="shortcut icon" href="{{ asset('images/logo-white.jpg') }}" type="image/x-icon">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f3f9ee',
                            100: '#e5f2dc',
                            200: '#cce5bc',
                            300: '#aad394',
                            400: '#85bd6d',
                            500: '#5a9d45',
                            600: '#4a8339',
                            700: '#3d692f',
                            800: '#345429',
                            900: '#2c4624',
                        },
                        secondary: {
                            50: '#fdf8e9',
                            100: '#f9edc7',
                            200: '#f4dc91',
                            300: '#eec65a',
                            400: '#e9b033',
                            500: '#db9418',
                            600: '#c07513',
                            700: '#9c5815',
                            800: '#814518',
                            900: '#6c3a18',
                        },
                        earth: '#795548',
                        sky: '#1976D2',
                    },
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="font-sans bg-primary-50 flex flex-col min-h-screen">
  
    <main class="flex-grow">
        <section class="relative overflow-hidden py-20">
            <div class="absolute top-0 right-0 -mt-20 -mr-20 w-80 h-80 bg-primary-100 rounded-full opacity-50 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 -mb-20 -ml-20 w-80 h-80 bg-secondary-100 rounded-full opacity-50 blur-3xl"></div>
            
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-28">
                <div class="flex flex-col items-center text-center">
                    <div class="mb-10">
                        <i class="fas fa-tools text-9xl text-secondary-500"></i>
                    </div>
                    <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6">
                        Maintenance en cours
                    </h1>
                    <p class="text-lg text-gray-600 mb-8 max-w-2xl">
                        Notre plateforme est actuellement en maintenance pour améliorer votre expérience. Nous serons de retour très bientôt !
                    </p>
                    
                    <div class="bg-white p-6 rounded-lg shadow-md mb-8 max-w-2xl w-full">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-primary-100 p-3 rounded-full">
                                <i class="fas fa-clock text-primary-600 text-2xl"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Temps estimé d'indisponibilité</h3>
                                <p class="text-gray-600">Nous prévoyons de revenir vers <span class="font-semibold">{{ date('H:i', strtotime('+5 hours')) }}</span> (heure locale).</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="/" class="inline-block px-8 py-4 text-center font-medium rounded-full text-white bg-gradient-to-r from-primary-500 to-primary-700 hover:shadow-lg transform hover:-translate-y-1 transition duration-300">
                            <i class="fas fa-redo mr-2"></i> Réessayer
                        </a>
                        <a href="mailto:support@mahsoul.com" class="inline-block px-8 py-4 text-center font-medium rounded-full text-primary-700 bg-primary-50 hover:bg-primary-100 border border-primary-200 transform hover:-translate-y-1 transition duration-300">
                            <i class="fas fa-envelope mr-2"></i> Contactez le support
                        </a>
                    </div>
                    
                </div>
            </div>
        </section>
    </main>
    
    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
    </script>
</body>
</html>