**Laravel Project Installation Guide for Shared Hosting**

### Admin Login Details

Email: ofofonobs@gmail.com
Password: 12345678

Link: https://yourdomain.com/admin/login

###


## Thanks For Buying 
## Recommended Hosting Company: https://ultahost.com/#ofofonobs
## Register Free Account

https://console.cron-job.org/

## Create new jobs
https://console.cron-job.org/jobs

## url ADD YOUR DOMAIN
https://domain.com/hooks

## Set preferred Execution schedule
Save, that's all
It's FREE


// if error is = chmod(); no such file or directory 
// run = php artisan storage:link

php artisan storage:link


---

### Step 1: Prepare the Hosting Environment
1. **Log in to your hosting control panel** (e.g., cPanel or Plesk).
2. Ensure your hosting supports PHP 7.4 or higher and meets Laravel's [server requirements](https://laravel.com/docs/current/installation#server-requirements).
3. Create a new MySQL database and user, then assign the user to the database with full privileges. Note down the credentials.
4. Install or confirm that **Composer** is available on your local machine for project setup.

---

### Step 2: Upload Laravel Files
1. On your local machine, open your Laravel project directory.
2. **Compress the entire project folder** into a `.zip` file.
3. In the hosting control panel:
   - Go to the **File Manager**.
   - Upload the `.zip` file to the root directory (often `/public_html` for shared hosting).
   - Extract the `.zip` file.
4. Move all contents from the `public` folder to the `/public_html` directory (or equivalent web root).
5. Update references in the Laravel project:
   - Open `index.php` in `/public_html`.
   - Modify paths:
     ```php
     require __DIR__.'/../vendor/autoload.php';
     require __DIR__.'/../bootstrap/app.php';
     ```
     to:
     ```php
     require __DIR__.'/../your-laravel-folder/vendor/autoload.php';
     require __DIR__.'/../your-laravel-folder/bootstrap/app.php';
     ```

---

### Step 3: Update Environment Variables
1. Open the `.env` file in the Laravel project.
2. Update the following:
   ```env
   APP_NAME="YourAppName"
   APP_ENV=production
   APP_KEY=base64:GeneratedKeyHere
   APP_DEBUG=false
   APP_URL=https://yourdomain.com

   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_database_user
   DB_PASSWORD=your_database_password
   ```
3. Save the `.env` file.

---

### Step 4: Configure Permissions
1. Set proper permissions on the `storage` and `bootstrap/cache` directories:
   - In the hosting File Manager or via SSH:
     ```bash
     chmod -R 775 storage bootstrap/cache
     ```
2. Ensure that these directories are writable by the web server.

---

### Step 5: Install Dependencies
1. If SSH access is available, connect to the server and navigate to your Laravel project directory.
2. Run Composer to install dependencies:
   ```bash
   composer install --optimize-autoloader --no-dev
   ```
3. If Composer is not available on your server, run the command locally, and then upload the `vendor` folder to your project directory.

---

### Step 6: Set Up Key and Cache
1. Generate an application key:
   ```bash
   php artisan key:generate
   ```
2. Cache configuration and routes:
   ```bash
   php artisan config:cache
   php artisan route:cache
   ```
3. If SSH is not available, generate the key locally and upload the updated `.env` file.

---

### Step 7: Configure the Domain
1. In the hosting control panel, navigate to **Domains** or **Addon Domains**.
2. Point the domain to the `/public_html` directory (or equivalent).
3. Ensure that the domain's document root points to the Laravel `public` folder.

---

### Step 8: Test the Application
1. Visit your domain in a web browser.
2. Ensure that the application loads correctly.
3. Troubleshoot any errors by checking the **Laravel log file** (`storage/logs/laravel.log`) or the hosting error logs.

---

### Additional Notes:
- **Scheduler and Queues**: Shared hosting often doesn’t support `cron` jobs or queues. Use a web-based cron service or consult your hosting provider for alternatives.
- **SSL Certificate**: Secure your domain with an SSL certificate through the hosting control panel.
- **Backup**: Regularly back up your database and project files.

---

With these steps, your Laravel application should be successfully installed on shared hosting. Enjoy building with Laravel!

