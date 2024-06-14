

1. **Install Laravel Socialite**:
   First, install Laravel Socialite via Composer:
   ```
   composer require laravel/socialite
   ```

2. **Create a GitHub OAuth App**:
   - Go to GitHub and navigate to `Settings` > `Developer settings` > `OAuth Apps`.
   - Register a new OAuth application with your application's details:
     - **Application Name**: Your application's name.
     - **Homepage URL**: URL of your application.
     - **Authorization callback URL**: `http://127.0.0.1:8000/callback`
     - Note down the **Client ID** and **Client Secret** provided by GitHub.

3. **Configure Laravel Application**:
   - Update your `.env` file with the GitHub credentials:
     ```
     GITHUB_CLIENT_ID=your_github_client_id
     GITHUB_CLIENT_SECRET=your_github_client_secret
     GITHUB_REDIRECT_URI=http://127.0.0.1:8000/callback
     ```
   - Add the GitHub configuration to `config/services.php`:
     ```php
     'github' => [
         'client_id' => env('GITHUB_CLIENT_ID'),
         'client_secret' => env('GITHUB_CLIENT_SECRET'),
         'redirect' => env('GITHUB_REDIRECT_URI'),
     ],
     ```

4. **Install dirushan/githublogin**:
   Install the GitHub Login package via Composer:
   ```
   composer require dirushan/githublogin
   ```

5. **Run Database Migrations**:
   ```
   php artisan migrate
   ```
   Ensure this step is done to create necessary tables for user data storage.

6. **Define Route**:
   Define a route to handle GitHub login:
   ```php
   Route::get('/github', 'GitHubLoginController@redirectToGitHub')->name('github.login');
   ```

7. **Set Minimum Stability**:
   If needed, set `"minimum-stability": "dev"` in your `composer.json` to ensure compatibility with dev packages.

After completing these steps, you should be able to initiate GitHub OAuth login by accessing `/github` route in your Laravel application. This setup allows users to authenticate via GitHub and interact with their data through your application. Adjustments may be necessary based on Laravel version and specific package requirements.
