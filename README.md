# abacus-laravel-assessment-task
Building a TimeZone-aware Record Management System


This is a simple Laravel 8  abacus Laravel assessment task Building a TimeZone-aware Record Management System based on Mysql Database Operation in Laravel 8 framework.

## Clone a repository :

Open the GitHub Desktop goto file option and clone a repository to the URL option. Copy the below link choose the local path and click on the clone
```bash
https://github.com/kibriya-bhatti/abacus-laravel-assessment-task.git
```

## Open Source Code in Code Editor
Open the source code in code editor like( vs code, sublime ) open the terminal and run the command
```bash
composer install
```

## Copy .env.example
Copy .env.example paste it into the same directory and rename it .env . After opening .env and editing it. After editing and closing it. Open xampp and create the database first such as (abacus_assessment_db) as per the while
```bash
APP_NAME="Abacus Assessment"

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=abacus_assessment_db
DB_USERNAME=root
DB_PASSWORD=
```

## Open Terminal
Open the terminal and run the following commands
```bash
1) php artisan key:generate
#After successfully running the command

2) php artisan migrate:fresh --seed
#After successfully running the command

3) php artisan optimize
#After successfully running the command

4) php artisan serve
#After successfully running the command

5) Open Chrome or any browser and go to link
http://127.0.0.1:8000/

5) login dump users
email: user@user.com
password: password

Go to the Tasks Tab and create some new tasks.
```

## IP Test On Local Server
We test TimeZone-aware Records through fellow steps at the local server. If on a live server, you can't do it. Its work dynamically
```bash
1) https://lite.ip2location.com/ip-address-ranges-by-country?lang=en_US
#choose any country now, and you will see a lot of IP copies.

2) Open file app\Http\Controllers\Auth\AuthenticatedSessionController.php file 
#Go to line number 33 and comment it like that

### // $ip = $request->getClientIp();
$ip = 149.133.34.16;

After that save the file and logout and login again. You will see that time converted to the current selected country IP

```
## Important Note
When you change your IP log in again. If you test on the live server (##IP Test On Local Server steps not follow)

## Any Question
If you have any questions or need clarification regarding the source code, contact to me.

Regards,
Ghulam Kibriya
PHP Laravel Web Application Developer
Mobile No. +92 303 733 28 54
