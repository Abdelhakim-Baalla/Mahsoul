<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>{{ $title }}</title>
    <style>
        /* Réinitialisation */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        /* Polices */
        @font-face {
            font-family: 'Outfit';
            src: url('{{ storage_path('fonts/Outfit-Regular.ttf') }}') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
        @font-face {
            font-family: 'Outfit';
            src: url('{{ storage_path('fonts/Outfit-Bold.ttf') }}') format('truetype');
            font-weight: bold;
            font-style: normal;
        }
        
        /* Variables de couleurs exactes du site */
        :root {
            --primary-50: #f3f9ee;
            --primary-100: #e5f2dc;
            --primary-200: #cce5bc;
            --primary-300: #aad394;
            --primary-400: #85bd6d;
            --primary-500: #5a9d45;
            --primary-600: #4a8339;
            --primary-700: #3d692f;
            --primary-800: #345429;
            --primary-900: #2c4624;
            
            --secondary-50: #fdf8e9;
            --secondary-100: #f9edc7;
            --secondary-200: #f4dc91;
            --secondary-300: #eec65a;
            --secondary-400: #e9b033;
            --secondary-500: #db9418;
            --secondary-600: #c07513;
            --secondary-700: #9c5815;
            --secondary-800: #814518;
            --secondary-900: #6c3a18;
            
            --earth: #795548;
            --sky: #1976D2;
            
            --gray-50: #f9fafb;
            --gray-100: #f3f4f6;
            --gray-200: #e5e7eb;
            --gray-300: #d1d5db;
            --gray-400: #9ca3af;
            --gray-500: #6b7280;
            --gray-600: #4b5563;
            --gray-700: #374151;
            --gray-800: #1f2937;
            --gray-900: #111827;
            
            --white: #ffffff;
            --black: #000000;
        }
        
        /* Styles de base */
        body {
            font-family: 'Outfit', 'DejaVu Sans', sans-serif;
            line-height: 1.6;
            color: var(--gray-800);
            background-color: var(--gray-50);
            font-size: 12pt;
        }
        
        .page {
            position: relative;
            padding: 0;
            height: 29.7cm;
            width: 21cm;
        }
        
        /* Éléments créatifs compatibles avec DomPDF */
        .creative-header {
            position: relative;
            height: 180px;
            background-color: var(--primary-500);
            overflow: hidden;
        }
        
        .creative-header::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 60px;
            background-color: var(--white);
            clip-path: polygon(0 100%, 100% 100%, 100% 0, 0 100%);
        }
        
        .creative-header::after {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 150px;
            height: 150px;
            background-color: var(--primary-600);
            border-radius: 0 0 0 100%;
        }
        
        .header-content {
            position: relative;
            z-index: 10;
            padding: 30px;
            color: var(--white);
        }
        
        .logo-container {
            display: inline-block;
            background-color: var(--white);
            padding: 10px;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-right: 15px;
            vertical-align: middle;
        }
        
        .logo {
            height: 50px;
            width: auto;
        }
        
        .header-title {
            display: inline-block;
            font-size: 28px;
            font-weight: bold;
            vertical-align: middle;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }
        
        .document-info {
            position: absolute;
            top: 30px;
            right: 30px;
            text-align: right;
            background-color: rgba(255, 255, 255, 0.2);
            padding: 10px 15px;
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        
        .main-content {
            padding: 0 30px;
            position: relative;
        }
        
        .page-title {
            margin: 30px 0 15px;
            font-size: 26px;
            color: var(--primary-700);
            border-bottom: 2px solid var(--primary-300);
            padding-bottom: 10px;
            position: relative;
        }
        
        .page-title::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100px;
            height: 2px;
            background-color: var(--primary-500);
        }
        
        .subtitle {
            font-size: 16px;
            color: var(--gray-600);
            margin-bottom: 30px;
            padding-left: 5px;
            border-left: 3px solid var(--secondary-400);
        }
        
        /* Cartes créatives */
        .creative-card {
            background-color: var(--white);
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
            overflow: hidden;
            position: relative;
            border: 1px solid var(--gray-200);
        }
        
        .creative-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background-color: var(--primary-500);
        }
        
        .card-header {
            padding: 20px 25px;
            border-bottom: 1px solid var(--gray-200);
            position: relative;
        }
        
        .card-header::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 25px;
            width: 50px;
            height: 1px;
            background-color: var(--primary-500);
        }
        
        .card-title {
            font-size: 20px;
            font-weight: bold;
            color: var(--gray-800);
            margin: 0;
            display: inline-block;
        }
        
        .card-icon {
            display: inline-block;
            width: 30px;
            height: 30px;
            background-color: var(--primary-100);
            border-radius: 50%;
            text-align: center;
            line-height: 30px;
            color: var(--primary-600);
            margin-right: 10px;
            font-weight: bold;
            vertical-align: middle;
        }
        
        .status-badge {
            float: right;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .badge-approved {
            background-color: var(--primary-100);
            color: var(--primary-700);
            border: 1px solid var(--primary-300);
        }
        
        .badge-pending {
            background-color: var(--secondary-100);
            color: var(--secondary-700);
            border: 1px solid var(--secondary-300);
        }
        
        .badge-canceling {
            background-color: #fee2e2;
            color: #991b1b;
            border: 1px solid #fecaca;
        }
        
        .badge-canceled {
            background-color: #fee2e2;
            color: #991b1b;
            border: 1px solid #fecaca;
        }
        
        .badge-refused {
            background-color: var(--gray-100);
            color: var(--gray-700);
            border: 1px solid var(--gray-300);
        }
        
        .card-body {
            padding: 25px;
        }
        
        .info-grid {
            width: 100%;
            border-collapse: separate;
            border-spacing: 15px;
        }
        
        .info-box {
            width: 33.33%;
            padding: 20px;
            border-radius: 10px;
            position: relative;
            overflow: hidden;
        }
        
        .info-box-primary {
            background-color: var(--primary-50);
            border: 1px solid var(--primary-200);
        }
        
        .info-box-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background-color: var(--primary-500);
        }
        
        .info-box-secondary {
            background-color: var(--secondary-50);
            border: 1px solid var(--secondary-200);
        }
        
        .info-box-secondary::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background-color: var(--secondary-500);
        }
        
        .info-box-highlight {
            background-color: var(--primary-500);
            color: var(--white);
            border: none;
        }
        
        .info-box-highlight::after {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            width: 50px;
            height: 50px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50% 0 0 0;
        }
        
        .info-label {
            font-size: 12px;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 8px;
            letter-spacing: 0.5px;
        }
        
        .info-primary {
            color: var(--primary-700);
        }
        
        .info-secondary {
            color: var(--secondary-700);
        }
        
        .info-value {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        .info-large {
            font-size: 24px;
        }
        
        .description-box {
            background-color: var(--gray-50);
            border: 1px solid var(--gray-200);
            border-radius: 10px;
            padding: 20px;
            margin-top: 25px;
            position: relative;
        }
        
        .description-box::before {
            content: '';
            position: absolute;
            top: -1px;
            left: 20px;
            width: 30px;
            height: 1px;
            background-color: var(--primary-500);
        }
        
        .card-footer {
            padding: 15px 25px;
            background-color: var(--primary-500);
            color: var(--white);
            font-size: 12px;
        }
        
        .footer-left {
            float: left;
        }
        
        .footer-right {
            float: right;
        }
        
        /* Profil créatif */
        .profile-card {
            background-color: var(--white);
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
            overflow: hidden;
            position: relative;
            border: 1px solid var(--gray-200);
            page-break-inside: avoid;
        }
        
        .profile-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background-color: var(--primary-500);
        }
        
        .profile-secondary::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background-color: var(--secondary-500);
        }
        
        .profile-header {
            padding: 25px;
            position: relative;
        }
        
        .profile-image-container {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            overflow: hidden;
            border: 5px solid var(--white);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            float: left;
            margin-right: 25px;
            position: relative;
        }
        
        .profile-primary .profile-image-container {
            box-shadow: 0 5px 15px rgba(90, 157, 69, 0.2);
        }
        
        .profile-secondary .profile-image-container {
            box-shadow: 0 5px 15px rgba(219, 148, 24, 0.2);
        }
        
        .profile-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .profile-info {
            margin-left: 145px;
        }
        
        .profile-name {
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 5px;
            color: var(--gray-800);
        }
        
        .profile-badge {
            display: inline-block;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 15px;
        }
        
        .profile-primary .profile-badge {
            background-color: var(--primary-100);
            color: var(--primary-700);
            border: 1px solid var(--primary-300);
        }
        
        .profile-secondary .profile-badge {
            background-color: var(--secondary-100);
            color: var(--secondary-700);
            border: 1px solid var(--secondary-300);
        }
        
        .contact-info {
            margin-bottom: 10px;
        }
        
        .contact-badge {
            display: inline-block;
            background-color: var(--gray-100);
            padding: 5px 12px;
            border-radius: 5px;
            margin-right: 10px;
            font-size: 12px;
            border: 1px solid var(--gray-200);
        }
        
        .profile-primary .contact-badge {
            border-left: 3px solid var(--primary-500);
        }
        
        .profile-secondary .contact-badge {
            border-left: 3px solid var(--secondary-500);
        }
        
        .profile-details {
            padding: 0 25px 25px;
            clear: both;
        }
        
        .detail-box {
            background-color: var(--gray-50);
            border: 1px solid var(--gray-200);
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 15px;
            position: relative;
        }
        
        .profile-primary .detail-box {
            border-left: 3px solid var(--primary-500);
        }
        
        .profile-secondary .detail-box {
            border-left: 3px solid var(--secondary-500);
        }
        
        .detail-label {
            font-size: 12px;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 5px;
            letter-spacing: 0.5px;
            color: var(--gray-600);
        }
        
        .detail-value {
            font-size: 14px;
            color: var(--gray-800);
        }
        
        .profile-footer {
            height: 5px;
        }
        
        .profile-primary .profile-footer {
            background-color: var(--primary-500);
        }
        
        .profile-secondary .profile-footer {
            background-color: var(--secondary-500);
        }
        
        /* Pied de page */
        .page-footer {
            position: absolute;
            bottom: 30px;
            left: 0;
            right: 0;
            text-align: center;
            font-size: 12px;
            color: var(--gray-500);
        }
        
        .page-break {
            page-break-after: always;
        }
        
        /* Utilitaires */
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }
    </style>
    <link rel="shortcut icon" href="{{ public_path('images/logo-white.png') }}" type="image/x-icon">
</head>
<body>
    <!-- Première page -->
    <div class="page">
        <!-- En-tête créatif -->
        <div class="creative-header">
            <div class="header-content">
                <div class="logo-container">
                    <img src="{{ public_path('images/logo-white.png') }}" alt="Mahsoul Logo" class="logo">
                </div>
                <span class="header-title">Mahsoul</span>
                
                <div class="document-info">
                    <div>Document #{{$rendezVous->id}}</div>
                    <div>{{now()->format('d/m/Y')}}</div>
                </div>
            </div>
        </div>
        
        <div class="main-content">
            <h1 class="page-title">Résumé du Rendez-vous</h1>
            <p class="subtitle">
                Sujet: {{$rendezVous->sujet}} | Date: {{$rendezVous->date_reserver}}
            </p>
            
            <!-- Carte d'information principale -->
            <div class="creative-card">
                <div class="card-header clearfix">
                    <span class="card-icon">📋</span>
                    <h2 class="card-title">Détails du rendez-vous</h2>
                    
                    @if($rendezVous->statut === 'approved')
                        <span class="status-badge badge-approved">Accepté</span>
                    @elseif($rendezVous->statut === 'pending')
                        <span class="status-badge badge-pending">En attente</span>
                    @elseif($rendezVous->statut === 'review-canceling')
                        <span class="status-badge badge-canceling">Annulation en cours</span>
                    @elseif($rendezVous->statut === 'approved-canceling')
                        <span class="status-badge badge-canceled">Annulé</span>
                    @elseif($rendezVous->statut === 'cancel-canceling')
                        <span class="status-badge badge-refused">Annulation refusée</span>
                    @elseif($rendezVous->statut === 'cancel')
                        <span class="status-badge badge-refused">Refusé</span>
                    @endif
                </div>
                
                <div class="card-body">
                    <table class="info-grid">
                        <tr>
                            <td class="info-box info-box-primary">
                                <div class="info-label info-primary">Référence</div>
                                <div class="info-value">#{{$rendezVous->id}}</div>
                                
                                <div style="margin-top: 20px;">
                                    <div class="info-label info-primary">Sujet</div>
                                    <div class="info-value">{{$rendezVous->sujet}}</div>
                                </div>
                            </td>
                            
                            <td class="info-box info-box-secondary">
                                <div class="info-label info-secondary">Contact</div>
                                <div class="info-value">{{$rendezVous->telephone}}</div>
                                
                                <div style="margin-top: 20px;">
                                    <div class="info-label info-secondary">Adresse</div>
                                    <div>{{$rendezVous->adresse}}</div>
                                </div>
                            </td>
                            
                            <td class="info-box info-box-highlight">
                                <div class="info-label">Total</div>
                                <div class="info-value info-large">{{$rendezVous->total}} MAD</div>
                                
                                <div style="margin-top: 20px; display: flex; align-items: center;">
                                    <div style="background-color: rgba(255,255,255,0.2); width: 30px; height: 30px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 10px; text-align: center;">
                                        ✓
                                    </div>
                                    <div>
                                        <p style="margin: 0; font-weight: bold;">100% Fiable</p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                    
                    <div class="description-box">
                        <div class="info-label info-primary" style="display: flex; align-items: center;">
                            <span style="margin-right: 5px;">📝</span> Description
                        </div>
                        <div style="margin-top: 10px;">{{$rendezVous->description}}</div>
                    </div>
                </div>
                
                <div class="card-footer clearfix">
                    <div class="footer-left">Document généré le {{now()->format('d/m/Y à H:i')}}</div>
                    <div class="footer-right">Page 1 sur 2</div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="page-break"></div>
    
    <!-- Deuxième page -->
    <div class="page">
        <!-- En-tête créatif -->
        <div class="creative-header">
            <div class="header-content">
                <div class="logo-container">
                    <img src="{{ public_path('images/logo-white.png') }}" alt="Mahsoul Logo" class="logo">
                </div>
                <span class="header-title">Mahsoul</span>
                
                <div class="document-info">
                    <div>Document #{{$rendezVous->id}}</div>
                    <div>{{now()->format('d/m/Y')}}</div>
                </div>
            </div>
        </div>
        
        <div class="main-content">
            <h1 class="page-title">Informations des participants</h1>
            <p class="subtitle">
                Détails des personnes impliquées dans ce rendez-vous
            </p>
            
            <!-- Vendeur/Expert -->
            <div class="profile-card profile-primary">
                <div class="profile-header clearfix">
                    <div class="profile-image-container">
                        <img src="{{$rendezVous->expert->photo}}" class="profile-image" alt="Photo du vendeur">
                    </div>

                    <div class="profile-info">
                        <h2 class="profile-name">{{$rendezVous->expert->prenom}} {{$rendezVous->expert->nom}}</h2>
                        <span class="profile-badge">{{$rendezVous->expert->type}}</span>
                        
                        <div class="contact-info">
                            <span class="contact-badge">
                                ✉ {{$rendezVous->expert->email}}
                            </span>
                            <span class="contact-badge">
                                📞 {{$rendezVous->expert->telephone}}
                            </span>
                        </div>
                    </div>
                </div>
                
                <div class="profile-details">
                    <div class="detail-box">
                        <div class="detail-label">Adresse</div>
                        <div class="detail-value">{{$rendezVous->expert->adresse}}</div>
                    </div>
                    
                    <div class="detail-box">
                        <div class="detail-label">À propos</div>
                        <div class="detail-value">{{$rendezVous->expert->about}}</div>
                    </div>
                </div>
                
                <div class="profile-footer"></div>
            </div>
            
            <!-- Client -->
            <div class="profile-card profile-secondary">
                <div class="profile-header clearfix">
                    <div class="profile-image-container">
                        <img src="{{$rendezVous->client->photo}}" class="profile-image" alt="Photo du client">
                    </div>
                    
                    <div class="profile-info">
                        <h2 class="profile-name">{{$rendezVous->client->prenom}} {{$rendezVous->client->nom}}</h2>
                        <span class="profile-badge">Client</span>
                        
                        <div class="contact-info">
                            <span class="contact-badge">
                                ✉ {{$rendezVous->client->email}}
                            </span>
                            <span class="contact-badge">
                                📞 {{$rendezVous->client->telephone}}
                            </span>
                        </div>
                    </div>
                </div>
                
                <div class="profile-details">
                    <div class="detail-box">
                        <div class="detail-label">Adresse</div>
                        <div class="detail-value">{{$rendezVous->client->adresse}}</div>
                    </div>
                    
                    <div class="detail-box">
                        <div class="detail-label">À propos</div>
                        <div class="detail-value">{{$rendezVous->client->about}}</div>
                    </div>
                </div>
                
                <div class="profile-footer"></div>
            </div>
        </div>
        
        <div class="page-footer">
            Document généré le {{now()->format('d/m/Y à H:i')}} | Page 2 sur 2
        </div>
    </div>
</body>
</html>