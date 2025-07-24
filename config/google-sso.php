<?php

return [
    'frontend_url' => env('GOOGLE_SSO_FRONTEND_URL', 'http://localhost:3000/auth/callback'),
    'issue_token' => env('GOOGLE_SSO_ISSUE_TOKEN', true),
];
