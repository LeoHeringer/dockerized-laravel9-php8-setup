# Setting up Docker for Laravel 9 Projects with PHP 8
[Subscribe to the Academy and Be VIP!](https://academy.especializati.com.br)

### Step by Step
Clone Repository
```sh
git clone https://github.com/especializati/setup-docker-laravel.git laravel9
```

```sh
cd laravel9/
```

Switch to the laravel 8.x branch
```sh
git checkout laravel-9-com-php-8
```

Remove versioning
```sh
rm -rf .git/
```

Create the .env File
```sh
cd example-project/
cp .env.example .env
```

Update the environment variables in the .env file
```dosini
APP_NAME=EspecializaTi
APP_URL=http://localhost:8180

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=desired_db_name
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```

Start the project's containers
```sh
docker-compose up -d
```

Access the container
```sh
docker-compose exec app bash
```

Install project dependencies
```sh
composer install
```

Generate the Laravel project key
```sh
php artisan key:generate
```

Access the project
[http://localhost:8180](http://localhost:8180)
