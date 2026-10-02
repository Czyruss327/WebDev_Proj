# SimpleAuth

A simple Laravel login and registration website using Laravel Breeze authentication.

## Start the project

```powershell
composer install
Copy-Item .env.example .env
php artisan key:generate
npm install
npm run build
```

Set your `DB_*` values in `.env`, then run:

```powershell
php artisan migrate
php artisan serve
```

Open `http://127.0.0.1:8000`, then choose **Create an account** or **Sign in**.

For frontend development, run this in a second terminal:

```powershell
npm run dev
```

## Included

- Account registration
- Login and logout
- Password reset routes
- Authenticated dashboard and profile page
