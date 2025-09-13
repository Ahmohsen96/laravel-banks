

# Laravel Banks

A simple Laravel package that provides a predefined list of **Egyptian** and **Saudi Arabian** banks.  
This can be useful for dropdowns, validations, or any system where you need bank names.

---

## 📦 Installation

1. Add the package repository in your Laravel project `composer.json`:

```json
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/YOUR_USERNAME/laravel-banks.git"
    }
]
````

2. Require the package via Composer:

```bash
composer require ahmedali/laravel-banks:^1.0
```

> If you don’t use tags yet, install it from the main branch:
>
> ```bash
> composer require ahmedali/laravel-banks:dev-main
> ```

---

## ⚙️ Configuration

Optionally, you can publish the config file:

```bash
php artisan vendor:publish --tag=config
```

This will create a `config/banks.php` file in your Laravel project, which you can customize.

---

## 🚀 Usage

Import the class and call the methods:

```php
use Banks\Banks;

// Get all banks (Egypt + Saudi)
$allBanks = Banks::all();

// Get only Egyptian banks
$egyptBanks = Banks::all('egypt');

// Get only Saudi banks
$saudiBanks = Banks::all('saudi');
```

---

## 🖥️ Example in Blade

```blade
<select name="bank_name">
    @foreach(\Banks\Banks::all('egypt') as $bank)
        <option value="{{ $bank }}">{{ $bank }}</option>
    @endforeach
</select>
```

---

## 📌 Available Banks

### 🇪🇬 Egypt

* National Bank of Egypt
* Banque Misr
* Commercial International Bank (CIB)
* QNB Alahli
* HSBC Egypt
* Faisal Islamic Bank of Egypt
* Arab African International Bank
* AlexBank
* Abu Dhabi Islamic Bank Egypt
* Union National Bank Egypt

### 🇸🇦 Saudi Arabia

* Saudi National Bank (SNB)
* Al Rajhi Bank
* Riyad Bank
* SABB (Saudi Awwal Bank)
* Banque Saudi Fransi
* Arab National Bank
* Alinma Bank
* Bank AlJazira
* Saudi Investment Bank
* Gulf International Bank Saudi Arabia

---

## 📝 License

This package is open-sourced software licensed under the [MIT license](LICENSE).


```
