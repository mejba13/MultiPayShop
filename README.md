# MultiPayShop - Laravel Localization & PayPal Integration

## Introduction
MultiPayShop is a Laravel-based project designed to help developers practice deep localization, multi-language & multi-currency handling, and PayPal payment integration in a simple eCommerce setup.

## Features
✅ Multi-language support (switch dynamically)  
✅ Multi-currency handling (convert prices dynamically)  
✅ Translation management (store texts in multiple languages)  
✅ Simple product page with PayPal checkout  
✅ Middleware to detect user locale  
✅ User-friendly language switcher  

## Installation

### Step 1: Clone the Repository
```bash
git clone https://github.com/yourusername/MultiPayShop.git
cd MultiPayShop
```

### Step 2: Install Dependencies
```bash
composer install
```

### Step 3: Set Up Environment File
```bash
cp .env.example .env
php artisan key:generate
```

### Step 4: Configure Database
Update the `.env` file with your database credentials:
```env
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```
Run migrations:
```bash
php artisan migrate
```

### Step 5: Configure Localization
Edit `config/app.php` and set the default locale:
```php
'locale' => 'en',
'fallback_locale' => 'en',
```
Create translation files:
```bash
mkdir -p resources/lang/en resources/lang/fr
```
Add translations:
```php
// resources/lang/en/messages.php
return [
    'welcome' => 'Welcome to MultiPayShop',
    'buy_now' => 'Buy Now',
];

// resources/lang/fr/messages.php
return [
    'welcome' => 'Bienvenue chez MultiPayShop',
    'buy_now' => 'Acheter maintenant',
];
```

### Step 6: Implement Multi-Currency Handling
- Store currency in the session
- Fetch exchange rates via API (e.g., Fixer.io)
- Convert product prices dynamically

### Step 7: Integrate PayPal Payment
Install PayPal SDK:
```bash
composer require srmklive/paypal
```
Configure PayPal settings in `config/paypal.php` and set up PayPal checkout in the product page.

### Step 8: Run the Application
```bash
php artisan serve
```
Access the project at `http://127.0.0.1:8000`

## Deployment
```bash
git init
git add .
git commit -m "initial commit - Laravel Localization & PayPal Integration"
git branch -M main
git remote add origin https://github.com/yourusername/MultiPayShop.git
git push -u origin main
```

## 🔗 Let's Connect  

- **Instagram**: [engr_mejba_ahmed](https://www.instagram.com/engr_mejba_ahmed/)  
- **TikTok**: [engr_mejba_ahmed](https://www.tiktok.com/@engr_mejba_ahmed)  
- **YouTube**: [Engr Mejba Ahmed](https://www.youtube.com/channel/UCfLIuNxRfXT7HmvvB9Ld0SA)  
- **Twitter**: [@mejba_92](https://x.com/mejba_92)  
- **LinkedIn**: [Engr Mejba Ahmed](https://www.linkedin.com/in/engr-mejba-ahmed-795ab3165/)  
- **Facebook**: [Engr Mejba Ahmed](https://www.facebook.com/engrmejbaahmed/)  
- **Reddit**: [engrmejbaahmed](https://www.reddit.com/user/engrmejbaahmed/)  
- **Pinterest**: [engrmejbaahmed](https://www.pinterest.com/engrmejbaahmed/)  
- **GitLab**: [engr-mejba-ahmed](https://gitlab.com/engr-mejba-ahmed)  
- **LeetCode**: [engrmejbaahmed](https://leetcode.com/u/engrmejbaahmed/)  
- **HackerOne**: [Engr Mejba Ahmed](https://hackerone.com/engrmejbaahmed?type=user)  
- **HackerRank**: [Dashboard](https://www.hackerrank.com/dashboard)  
- **Bugcrowd**: [EngrMejbaAhmed](https://bugcrowd.com/EngrMejbaAhmed)  
- **Medium**: [Engr Mejba Ahmed](https://medium.com/@engr-mejba-ahmed)  
- **TryHackMe**: [EngrMejbaAhmed](https://tryhackme.com/r/p/EngrMejbaAhmed)  
- **Codewars**: [mejba13](https://www.codewars.com/users/mejba13)  
- **GitHub**: [mejba13](https://github.com/mejba13)  
- **PentesterLab**: [lucid_hacker_721](https://pentesterlab.com/profile/lucid_hacker_721)  
- **DEV.to**: [Engr Mejba Ahmed](https://dev.to/engrmejbaahmed)  
- **Quora**: [Engr Mejba Ahmed](https://www.quora.com/profile/Engr-Mejba-Ahmed)  


## License
This project is open-source and available under the MIT License.

---

🚀 Happy Coding!
