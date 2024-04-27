## How to run the project:
1. Clone the repository or download the zip file.
2. Create a virtual environment for laravel.
3. Activate your local server like Xampp,Wamp

5. Create a `.env` file in the root directory of the project and add the database credential to it like:

    ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=laravel
   DB_USERNAME=root
   DB_PASSWORD=
    ```
    you can follow the example file `.env-example` to create the `.env` file.


6. Run the following command to start the server:
     ```
    php artisan serve
     ```
     
7. Run the following command to migrate  the database:
     ```
    php artisan migrate
     ```     
8. Run the following command to seed  the database admin default value:
     ```
    php artisan db:seed
     ```
9. Open the browser and go to the following link:

    ```
    http://localhost:8000/
    ```
10. To stop the server, press `Ctrl + C` in the terminal.

## How to use the project:
1. Open the browser and go to the following link:

    ```
    http://localhost:8000/
    ```
2. Click on the `login` button.
3. Enter the username and password and click on the `Login` button. for example:
    ```
    username: admin@gmail.com
    password: 12345678
    ```
4. After logging in, you will be redirected to the dashboard.
