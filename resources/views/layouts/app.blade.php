<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahsoul - Consultation Agricole et Produits</title>
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
                    },
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Outfit', sans-serif;
        }
        
        .blob-shape {
            border-radius: 60% 40% 50% 50% / 60% 30% 70% 40%;
            animation: blob-animation 8s ease-in-out infinite;
        }
        
        @keyframes blob-animation {
            0% { border-radius: 60% 40% 50% 50% / 60% 30% 70% 40%; }
            50% { border-radius: 40% 60% 70% 30% / 50% 60% 40% 50%; }
            100% { border-radius: 60% 40% 50% 50% / 60% 30% 70% 40%; }
        }
        
        .diagonal-box {
            position: relative;
            overflow: hidden;
        }
        
        .diagonal-box::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #f3f9ee;
            transform: skewY(-5deg);
            transform-origin: top left;
            z-index: -1;
        }
        
        .feature-card {
            transition: all 0.3s ease;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
        }
        
        .testimonial-card {
            transition: all 0.3s ease;
        }
        
        .testimonial-card:hover {
            transform: scale(1.02);
        }
    </style>
</head>
<body class="bg-white">
    <div class="flex min-h-screen flex-col">
        @include('partials.header')
        
        <main class="flex-1">
            @yield('content')
        </main>
        
        @include('partials.footer')
    </div>
    
    @stack('scripts')
</body>
</html>