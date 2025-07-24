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

When your Laravel app uses Socialite to handle Google SSO, it needs to:

1. Redirect users to Google’s login page with your **client ID** so Google knows which app is asking.
2. When Google redirects back with a code, your app sends that code **plus the client secret** to Google to get user info securely.

---

### How to get them?

* Go to [Google Cloud Console > APIs & Services > Credentials]()
* Create an OAuth 2.0 Client ID
* Set the authorized redirect URI (e.g. `http://localhost/auth/callback/google`)
* Copy the generated client ID and client secret into your `.env`

---

### TL;DR

* `GOOGLE_CLIENT_ID` = your app’s public ID on Google
* `GOOGLE_CLIENT_SECRET` = your app’s private key to securely authenticate with Google

When your Laravel app uses Socialite to handle Google SSO, it needs to:

1. Redirect users to Google’s login page with your **client ID** so Google knows which app is asking.
2. When Google redirects back with a code, your app sends that code **plus the client secret** to Google to get user info securely.

---

### How to get them?

* Go to [Google Cloud Console > APIs & Services > Credentials]()
* Create an OAuth 2.0 Client ID
* Set the authorized redirect URI (e.g. `http://localhost/auth/callback/google`)
* Copy the generated client ID and client secret into your `.env`

---

### TL;DR

* `GOOGLE_CLIENT_ID` = your app’s public ID on Google
* `GOOGLE_CLIENT_SECRET` = your app’s private key to securely authenticate with Google

---

```
 "require": {
   
        "floyd0987/laravel-google-sso": "dev-main"
    },

 "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/floyd0987/laravel-google-sso"
        }
    ]
```
