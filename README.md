# Rijschool Tjeerd & Abel

Welkom bij het Rijschool Tjeerd & Abel project! In dit repository vindt u de broncode voor de website van de rijschool. Hieronder vindt u informatie over hoe u het project lokaal kunt instellen, alsmede details over het ontwerp, vereisten en installatiestappen.

## Ontwerp

Het ontwerp voor de Rijschool Tjeerd & Abel website kunt u vinden in het volgende Figma-bestand:

- [Homepage Ontwerp](https://www.figma.com/file/61asBSZ5ILAsr04OLWSiN4/homepage?type=design&node-id=0%3A1&mode=design&t=k0Dj3ZeH4ULLMLYX-1)

## Github Project

U kunt het projectbord en issues vinden op de Github projectpagina:

- [Github Project](https://github.com/orgs/horizoncollege/projects/104)

## Vereisten

Om het project lokaal te draaien, hebt u de volgende software nodig:

- [Docker Desktop](https://www.docker.com/products/docker-desktop)

Voor betere prestaties op Windows 10/11 Pro wordt aanbevolen (maar niet vereist) om te gebruiken:

- Hyper-V

## Installatiestappen

Volg deze stappen om het project lokaal in te stellen:

1. ### Kloon Repository

Kloon de repository met het volgende commando:

```
git clone https://github.com/horizoncollege/Rijschool-Tjeerd-Abel-Sem.git
```

2. ### Bouw Docker Containers

Voer het volgende commando uit in een terminal:

```
docker-compose up --build -d
```

## Bouw Pakketten

3. ### Composer Installeren

Voer het volgende commando uit om Composer-afhankelijkheden te installeren:

```
docker-compose run --rm composer install
```

4. ### Npm Installeren

Voer het volgende commando uit om NPM-afhankelijkheden te installeren:

```
docker-compose run --rm npm install
```

## Stel Omgeving In

5. ### Stel .env-bestand in

Maak een `.env`-bestand op basis van het voorbeeld:

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

6. ### Voeg Artisan-sleutel toe

Genereer een Artisan-sleutel met het volgende commando:

```
docker-compose run --rm php php artisan key:generate
```

7. ### Draai Docker Containers

Nadat u de installatie hebt voltooid, voert u het volgende commando uit in de terminal:

```
docker-compose up -d
```

## Scrum Team

- [Abel Riezebos](https://github.com/Abellio-R)
- [Tjeerd Wokkema](https://github.com/Tjeerd-171419)
- [Sem Vriesma](https://github.com/dockerchompz)

## Licentie

De Laravel-framework is open-source-software gelicentieerd onder de [MIT-licentie](https://opensource.org/licenses/MIT).
