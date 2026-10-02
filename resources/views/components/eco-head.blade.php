{{-- Mahsoul × Ecoland design system : fonts, tokens, shared utilities --}}
<script src="https://cdn.tailwindcss.com"></script>
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    primary: {
                        50: '#f2f7ec',
                        100: '#e3efd3',
                        200: '#c7dfae',
                        300: '#a3c782',
                        400: '#7cab58',
                        500: '#578a39',
                        600: '#1f6306',
                        700: '#184f05',
                        800: '#0e2207',
                        900: '#0a1a05',
                    },
                    secondary: {
                        50: '#fef9e7',
                        100: '#fef4d1',
                        200: '#fde9a8',
                        300: '#fddc5c',
                        400: '#fbc91a',
                        500: '#e0a90a',
                        600: '#b98600',
                        700: '#8a6300',
                        800: '#6e4f00',
                        900: '#5c4200',
                    },
                    forest: '#0e2207',
                    leaf: '#1f6306',
                    sun: '#fbc91a',
                    cream: '#ddd7cd',
                    sand: '#fef4d1',
                    clay: '#757873',
                    coral: '#ff8f6b',
                    earth: '#795548',
                    sky: '#1976D2',
                },
                fontFamily: {
                    display: ['Figtree', 'sans-serif'],
                    sans: ['Inter', 'sans-serif'],
                    arabic: ['Alexandria', 'sans-serif'],
                }
            }
        }
    }
</script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;500;600;700;800;900&family=Inter:wght@400;500;600;700&family=Alexandria:wght@100..900&family=Outfit:wght@100..900&family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    h1, h2, h3, .font-display { font-family: 'Figtree', sans-serif; }
    body { font-family: 'Inter', sans-serif; }
    .eco-eyebrow {
        display: inline-flex; align-items: center; gap: .5rem;
        font-family: 'Figtree', sans-serif; font-weight: 700; font-size: .75rem;
        letter-spacing: .18em; text-transform: uppercase;
        color: #1f6306; background: #fef4d1;
        padding: .45rem 1rem; border-radius: 9999px;
    }
    .eco-eyebrow::before { content: '✦'; color: #b98600; }
    .eco-eyebrow.on-dark { background: rgba(251,201,26,.14); color: #fbc91a; }
    .btn-eco {
        display: inline-flex; align-items: center; justify-content: center; gap: .5rem;
        font-family: 'Figtree', sans-serif; font-weight: 700;
        background: #0e2207; color: #fff;
        padding: 1rem 2rem; border-radius: 9999px;
        transition: transform .25s ease, box-shadow .25s ease, background .25s ease;
    }
    .btn-eco:hover { background: #1f6306; transform: translateY(-2px); box-shadow: 0 12px 24px -10px rgba(14,34,7,.5); }
    .btn-sun {
        display: inline-flex; align-items: center; justify-content: center; gap: .5rem;
        font-family: 'Figtree', sans-serif; font-weight: 700;
        background: #fbc91a; color: #0e2207;
        padding: 1rem 2rem; border-radius: 9999px;
        transition: transform .25s ease, box-shadow .25s ease;
    }
    .btn-sun:hover { transform: translateY(-2px); box-shadow: 0 12px 24px -10px rgba(251,201,26,.7); }
    .btn-outline-eco {
        display: inline-flex; align-items: center; justify-content: center; gap: .5rem;
        font-family: 'Figtree', sans-serif; font-weight: 700;
        border: 2px solid #0e2207; color: #0e2207;
        padding: .9rem 1.9rem; border-radius: 9999px; transition: all .25s ease;
    }
    .btn-outline-eco:hover { background: #0e2207; color: #fff; }
    .card-eco { border-radius: 1.5rem; transition: transform .3s ease, box-shadow .3s ease; }
    .card-eco:hover { transform: translateY(-4px); box-shadow: 0 20px 40px -18px rgba(14,34,7,.35); }
    .marquee-eco { overflow: hidden; white-space: nowrap; }
    .marquee-eco span {
        display: inline-block; padding: 0 1.5rem;
        font-family: 'Figtree', sans-serif; font-weight: 800; font-size: clamp(1.25rem, 3vw, 2rem);
        animation: marquee-eco 22s linear infinite;
    }
    @keyframes marquee-eco { from { transform: translateX(0); } to { transform: translateX(-50%); } }
    .sidebar-active {
        background-color: rgba(31, 99, 6, 0.1) !important;
        border-left: 4px solid #1f6306 !important;
    }
</style>
