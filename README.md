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

## Code Conventions


### **Single responsibility principle**

- A class should have only one responsibility.


### **Prefer to use Eloquent over using Query Builder and raw SQL queries. Prefer collections over arrays**

- Eloquent allows you to write readable and maintainable code. Also, Eloquent has great built-in tools like soft deletes, events, scopes etc. You may want to check out [Eloquent to SQL reference](https://github.com/alexeymezenin/eloquent-sql-reference)

### Do not execute queries in Blade templates and use eager loading (N + 1 problem)**


### **Use standard Laravel tools accepted by community**

- Prefer to use built-in Laravel functionality and community packages instead of using 3rd party packages and tools. Any developer who will work with your app in the future will need to learn new tools. Also, chances to get help from the Laravel community are significantly lower when you're using a 3rd party package or tool. Do not make your client pay for that.


### **Follow Laravel naming conventions**

- Follow [PSR standards](https://www.php-fig.org/psr/psr-12/).

-Also, follow naming conventions accepted by Laravel community:

What | How | Good | Bad
------------ | ------------- | ------------- | -------------
Controller | singular | ArticleController | ~~ArticlesController~~
Route | plural | articles/1 | ~~article/1~~
Route name | snake_case with dot notation | users.show_active | ~~users.show-active, show-active-users~~
Model | singular | User | ~~Users~~
hasOne or belongsTo relationship | singular | articleComment | ~~articleComments, article_comment~~
All other relationships | plural | articleComments | ~~articleComment, article_comments~~
Table | plural | article_comments | ~~article_comment, articleComments~~
Pivot table | singular model names in alphabetical order | article_user | ~~user_article, articles_users~~
Table column | snake_case without model name | meta_title | ~~MetaTitle; article_meta_title~~
Model property | snake_case | $model->created_at | ~~$model->createdAt~~
Foreign key | singular model name with _id suffix | article_id | ~~ArticleId, id_article, articles_id~~
Primary key | - | id | ~~custom_id~~
Migration | - | 2017_01_01_000000_create_articles_table | ~~2017_01_01_000000_articles~~
Method | camelCase | getAll | ~~get_all~~
Method in resource controller | [table](https://laravel.com/docs/master/controllers#resource-controllers) | store | ~~saveArticle~~
Method in test class | camelCase | testGuestCannotSeeArticle | ~~test_guest_cannot_see_article~~
Variable | camelCase | $articlesWithAuthor | ~~$articles_with_author~~
Collection | descriptive, plural | $activeUsers = User::active()->get() | ~~$active, $data~~
Object | descriptive, singular | $activeUser = User::active()->first() | ~~$users, $obj~~
Config and language files index | snake_case | articles_enabled | ~~ArticlesEnabled; articles-enabled~~
View | kebab-case | show-filtered.blade.php | ~~showFiltered.blade.php, show_filtered.blade.php~~
Config | snake_case | google_calendar.php | ~~googleCalendar.php, google-calendar.php~~
Trait | adjective | Notifiable | ~~NotificationTrait~~
Trait [(PSR)](https://www.php-fig.org/bylaws/psr-naming-conventions/) | adjective | NotifiableTrait | ~~Notification~~
FormRequest | singular | UpdateUserRequest | ~~UpdateUserFormRequest~~, ~~UserFormRequest~~, ~~UserRequest~~
Seeder | singular | UserSeeder | ~~UsersSeeder~~


### **Other good practices**

- Avoid using patterns and tools that are alien to Laravel and similar frameworks (i.e. RoR, Django). If you like Symfony (or Spring) approach for building apps, it's a good idea to use these frameworks instead.

- Never put any logic in routes files.

- Minimize usage of vanilla PHP in Blade templates.

- Do not override standard framework features to avoid problems related to updating the framework version and many other issues.

- Use modern PHP syntax where possible, but don't forget about readability.

