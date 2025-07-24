# Laravel Google SSO

A Laravel package to add Google Single Sign-On using Socialite + Sanctum.

## Installation

```bash
composer require yourvendor/laravel-google-sso
php artisan vendor:publish --tag=google-sso-config
```

## .env Configuration

```
GOOGLE_CLIENT_ID=...
GOOGLE_CLIENT_SECRET=...
GOOGLE_REDIRECT_URI=http://localhost:8000/auth/callback/google
FRONTEND_URL=http://localhost:3000/auth/callback
GOOGLE_SSO_ISSUE_TOKEN=true
```

## Routes

- `/auth/redirect/google`
- `/auth/callback/google`

## License

MIT
