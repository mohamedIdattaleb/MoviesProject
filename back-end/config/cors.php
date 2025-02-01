<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    'paths' => ['api/*', 'sanctum/csrf-cookie'], // Routes concernées par CORS

    'allowed_methods' => ['*'], // Méthodes HTTP autorisées (GET, POST, etc.)

    'allowed_origins' => ['http://localhost:3000'], // Remplacez par l'URL de votre frontend

    'allowed_origins_patterns' => [], // Modèles d'origines autorisées (regex)

    'allowed_headers' => ['*'], // En-têtes autorisés

    'exposed_headers' => [], // En-têtes exposés dans la réponse

    'max_age' => 0, // Durée de mise en cache des pré-vérifications CORS (en secondes)

    'supports_credentials' => true, // Autoriser les cookies et les en-têtes d'authentification
];