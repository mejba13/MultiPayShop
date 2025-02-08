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

## License
This project is open-source and available under the MIT License.

---

🚀 Happy Coding!
