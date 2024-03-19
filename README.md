## Rijschool Tjeerd & Abel

- Design: https://www.figma.com/file/61asBSZ5ILAsr04OLWSiN4/homepage?type=design&node-id=0%3A1&mode=design&t=k0Dj3ZeH4ULLMLYX-1


- Github project: https://github.com/orgs/horizoncollege/projects/104

## Requirements

- Docker desktop: https://www.docker.com/products/docker-desktop
### (Let op niet nodig maar wel beter!)
- Hyper-v (Windows 10/11 Pro) voor betere performance dan WSL2 of WSL1



## Installation steps

### 1. Clone repository:
Https:
```
git clone https://github.com/horizoncollege/Rijschool-Tjeerd-Abel-Sem.git
```

### 2. Build Docker containers:

Run deze commands in een terminal 

```
Docker-compose up --build -d
```

## Build packages

### 3. Composer install:

```
Docker-compose run --rm composer install
```

### 4. Npm install:

```
Docker-compose run --rm npm install
```

## Setup environment

### 5. Setup .env file (example):

```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=mt1

VITE_APP_NAME="${APP_NAME}"
VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_HOST="${PUSHER_HOST}"
VITE_PUSHER_PORT="${PUSHER_PORT}"
VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
VITE_HOST="localhost"
VITE_PORT="5173"

VITE_API_KEY="key"
```

### 6. Add artisan key

```
Docker-compose run --rm php php artisan key:generate
``` 

### 7. Run Docker containers:

Run deze command in de terminal wanneer je klaar ben met de setup

```
Docker-compose up -d
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
