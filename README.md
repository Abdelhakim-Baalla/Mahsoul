# ![Mahsoul Logo](/public/images/logo-white.jpg) Projet Mahsoul - Plateforme Agricole Intelligente

---

## 📌 Avertissement  
*Ce projet est en cours de développement actif - les fonctionnalités peuvent évoluer.*

---

## 🌱 Introduction  

### 🎯 Objectif  
Mahsoul est une plateforme digitale innovante qui connecte les acteurs du secteur agricole (agriculteurs, éleveurs, coopératives) avec des experts et fournisseurs. Notre solution intègre :  
- 🩺 Consultations expertes en ligne  
- 🛒 Marketplace de produits agricoles  
- 📚 Centre de formation digitale  
- ⚙️ Outils de gestion agricole  

### 🌍 Contexte  
Répondre aux défis du secteur agricole marocain par la digitalisation des services clés.

---

## 📸 Captures d'écran

### 🏠 Page d'Accueil
![Page d'Accueil](/public/images/accueil.png)

### 🛒 Marketplace
#### Liste des Produits
![Liste des Produits](/public/images/marketplace-products.png)

#### Détails d'un Produit
![Détails du Produit](/public/images/marketplace-product-details.png)

### 📚 Formation
#### Liste des Articles
![Liste des Articles](/public/images/formation-articles.png)

#### Détails d'un Article
![Détails d'un Article](/public/images/formation-article-details.png)

### 🧾 Autres Pages
#### À Propos
![À Propos](/public/images/about.png)

#### Connexion & Inscription
![Connexion](/public/images/login.png)
![Inscription](/public/images/register.png)

#### Profil Utilisateur
![Profil](/public/images/profile.png)

---

## 🛠️ Fonctionnalités Clés  

| Module | Fonctionnalités |
|--------|----------------|
| **👨‍⚕️ Consultations** | Rendez-vous en ligne, Historique, Documents partagés |
| **🛍️ Marketplace** | Catalogue intelligent, Panier, Paiement sécurisé |
| **🎓 Formation** | Articles techniques, Système de commentaires |
| **📊 Dashboard** | Suivi des commandes/consultations |

---

## 💻 Stack Technique  

### 🔧 Backend  
![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?logo=php)  
![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20?logo=laravel)  
![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?logo=mysql)  

### 🎨 Frontend  
![TailwindCSS](https://img.shields.io/badge/Tailwind_CSS-3.3.x-06B6D4?logo=tailwind-css)  
![HTML5](https://img.shields.io/badge/HTML5-E34F26?logo=html5&logoColor=white)  
![CSS3](https://img.shields.io/badge/CSS3-1572B6?logo=css3&logoColor=white)  
![Blade](https://img.shields.io/badge/Laravel_Blade-FF2D20?logo=laravel)  

### 🛡️ Sécurité  
![Stripe](https://img.shields.io/badge/Stripe_Payments-008CDD?logo=stripe&logoColor=white)  

---

## 🚀 Installation et déploiement

```bash
# Cloner le répertoire
git clone https://github.com/Abdelhakim-Baalla/Mahsoul.git
cd Mahsoul

# Installation des dépendances
composer install
npm install

# Configuration
cp .env.example .env
php artisan key:generate

# Base de données
php artisan migrate --seed

# Compilation des assets
npm run dev

# Lancer le serveur de développement
php artisan serve
```

---

## 📚 Ressources  

| Documentation | Lien |
|--------------|------|
| 📊 Jira | [Suivi de projet](https://abdelhakimbaalla50.atlassian.net/jira/software/projects/MA7/boards/7?atlOrigin=eyJpIjoiMjlmZGVmNWY1OWUwNDEyMDhmNzQwMjJjMzE2ZjRjZTMiLCJwIjoiaiJ9) |
| 🎨 Figma | [Maquettes](https://www.figma.com/file/MZ2VPfC0qY0VDvvWyS9343) |
| 📝 Cahier des charges | [Google Docs](https://docs.google.com/document/d/17_ZoQLefHz0ZBXp0kERqQGm4PRlk2iWXElDs6w16hm4) |
| 📊 UML | [Diagrammes](https://mega.nz/folder/1oBQkJJJ#Q7naKqIxvjqoHI--JtQYIg) |

---

---

## 🤝 Contribution  
Les contributions sont les bienvenues ! Veuillez suivre notre [guide de contribution](CONTRIBUTING.md).

---

## 👥 Équipe

- **Abdelhakim Baalla** - Chef de Projet & Développeur Full-Stack

---

## 📄 Licence  
Ce projet est sous licence MIT - voir le fichier [LICENSE](LICENSE).

---

## 📞 Contact

Pour toute question ou suggestion, veuillez nous contacter à [contact@mahsoul.ma](mailto:contact@mahsoul.ma)