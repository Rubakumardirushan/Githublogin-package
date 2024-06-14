first install composer require laravel/socialite
next step 
Create a GitHub OAuth App:

Go to GitHub and navigate to Settings > Developer settings > OAuth Apps.
Register a new OAuth application with your application's name, homepage URL, and callback URL.
Note the Client ID and Client Secret provided by GitHub. url :http://127.0.0.1:8000/callback
make sure end only add uri /callback

next set add config/service.php
add this 
'github' => [
    'client_id' => env('GITHUB_CLIENT_ID'),
    'client_secret' => env('GITHUB_CLIENT_SECRET'),
    'redirect' => env('GITHUB_REDIRECT_URI'),
],

 

next step
composer require dirushan/githublogin

next php artisan migrate

route .. /github
