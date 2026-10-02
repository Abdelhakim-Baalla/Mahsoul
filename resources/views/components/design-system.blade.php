{{-- Mahsoul Design System — tokens exacts du template Framer Ecoland --}}
<script src="https://cdn.tailwindcss.com"></script>
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    // Palette exacte du template Framer Ecoland
                    forest: {
                        50:  '#f2f7ec',
                        100: '#e3efd3',
                        200: '#c7dfae',
                        300: '#a3c782',
                        400: '#7cab58',
                        500: '#578a39',
                        600: '#1f6306',  // PRIMARY
                        700: '#184f05',
                        800: '#0e2207',  // DARKEST
                        900: '#0a1a05',
                    },
                    sun: {
                        50:  '#fef9e7',
                        100: '#fef4d1',
                        200: '#fde9a8',
                        300: '#fddc5c',
                        400: '#fbc91a',  // ACCENT
                        500: '#e0a90a',
                        600: '#b98600',
                        700: '#8a6300',
                        800: '#6e4f00',
                        900: '#5c4200',
                    },
                    cream: {
                        50:  '#fef9e7',
                        100: '#fef4d1',
                        200: '#fde9a8',
                        300: '#fddc5c',
                        400: '#fbc91a',
                        500: '#f9edc7',
                        100: '#fde9a8',
                    },
                    earth: {
                        100: '#f5f0e8',
                        200: '#e8dfcc',
                        300: '#ddd7cd',
                        400: '#c5bcab',
                        500: '#acae9a',
                        600: '#8d8f7e',
                        700: '#757873',
                    },
                    // Alias sémantiques
                    primary:   { DEFAULT: '#1f6306', light: '#578a39', dark: '#0e2207' },
                    accent:    { DEFAULT: '#fbc91a', light: '#fef4d1', dark: '#e0a90a' },
                    surface:   '#fef9e7',
                    background:'#fef9e7',
                    text:      '#0e2207',
                    'text-muted': '#757873',
                    border:    '#ddd7cd',
                },
                fontFamily: {
                    display: ['Figtree', 'sans-serif'],
                    sans:    ['Inter', 'sans-serif'],
                    arabic:  ['Alexandria', 'sans-serif'],
                },
                borderRadius: {
                    'eco': '1.5rem',      // 24px - cartes
                    'eco-lg': '2.5rem',   // 40px - hero cards
                    'pill': '9999px',     // boutons
                },
                boxShadow: {
                    'eco': '0 4px 14px 0 rgba(14,34,7,0.08)',
                    'eco-lg': '0 20px 40px -18px rgba(14,34,7,0.25)',
                    'eco-xl': '0 32px 64px -24px rgba(14,34,7,0.35)',
                },
                transitionDuration: {
                    'eco': '250ms',
                },
            }
        }
    }
</script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;500;600;700;800;900&family=Inter:wght@400;500;600;700&family=Alexandria:wght@100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    /* Font assignments */
    h1, h2, h3, h4, h5, h6, .font-display { font-family: 'Figtree', sans-serif; }
    body { font-family: 'Inter', sans-serif; }
    .font-arabic { font-family: 'Alexandria', sans-serif; }

    /* Utilitaires Ecoland */
    .eco-eyebrow {
        display: inline-flex; align-items: center; gap: .5rem;
        font-family: 'Figtree', sans-serif; font-weight: 700; font-size: .7rem;
        letter-spacing: .18em; text-transform: uppercase;
        color: #1f6306; background: #fef4d1;
        padding: .45rem 1rem; border-radius: 9999px;
    }
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

    .card-eco {
        border-radius: 1.5rem;
        background: #fff;
        border: 1px solid #e8dfcc;
        transition: transform .3s ease, box-shadow .3s ease;
    }
    .card-eco:hover { transform: translateY(-4px); box-shadow: 0 20px 40px -18px rgba(14,34,7,.25); }

    .input-eco {
        border-radius: .75rem !important;
        border: 1px solid #ddd7cd;
        background: #fff;
        transition: border-color .2s, box-shadow .2s;
    }
    .input-eco:focus { border-color: #1f6306 !important; box-shadow: 0 0 0 3px rgba(31,99,6,.15) !important; }

    .thead-eco { background: #fef4d1 !important; }
    .thead-eco th { color: #0e2207 !important; font-weight: 600; }

    .eco-eyebrow {
        display: inline-flex; align-items: center; gap: .5rem;
        font-family: 'Figtree', sans-serif; font-weight: 700; font-size: .7rem;
        letter-spacing: .18em; text-transform: uppercase;
        color: #1f6306; background: #fef4d1;
        padding: .45rem 1rem; border-radius: 9999px;
    }
    .eco-eyebrow.on-dark { background: rgba(251,201,26,.14); color: #fbc91a; }

    /* Badge vérifié */
    .badge-verified { display: inline-flex; align-items: center; gap: .25rem; font-size: .65rem; font-weight: 700; padding: .2rem .5rem; border-radius: 9999px; background: #dbeafe; color: #1e40af; }
    .badge-verified::before { content: ''; width: .5rem; height: .5rem; background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20' fill='%232563EB'%3E%3Cpath fill-rule='evenodd' d='M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z' clip-rule='evenodd'/%3E%3C/svg%3E") center/contain no-repeat; width: .75rem; height: .75rem; display: inline-block; margin-right: .15rem; }

    /* Sidebar active */
    .sidebar-active {
        background-color: rgba(31, 99, 6, 0.1) !important;
        border-left: 4px solid #1f6306 !important;
    }

    /* Marquee */
    .marquee-eco { overflow: hidden; white-space: nowrap; }
    .marquee-eco span {
        display: inline-block; padding: 0 1.5rem;
        font-family: 'Figtree', sans-serif; font-weight: 800; font-size: clamp(1rem, 2.5vw, 1.5rem);
        animation: marquee-eco 25s linear infinite;
    }
    @keyframes marquee-eco { from { transform: translateX(0); } to { transform: translateX(-50%); } }
</style>