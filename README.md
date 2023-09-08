## Setup Di Local Development

- Clone project :
```bash
git clone https://github.com/gusvinandaellya/rajaongkir-api.git
```
- jalankan perintah :
```bash
composer install
```
- buat file  <b>.env</b>  duplicat file  <b>.env.example</b>  jangan lupa rename jadi  <b>.env</b>
- buka file  <b>.env</b>  Rubah di bagian (Connection ke database kita):

```
DB_DATABASE=nama-database
DB_USERNAME=username-db
DB_PASSWORD=password-db
RAJAONGKIR_KEY='API-KEY'
DATA_SOURCE=database
```

- jalankan perintah (Generate Key):
```bash
php artisan key:generate
```

- jalankan perintah (migrate):
```bash
php artisan migrate
php artisan fetch:data
php artisan db:seed --class=UserSeeder
```
- Done

## Menjalankan Aplikasi

```bash
php artisan serve
```

## Account Admin Default

```
email : admin@rajaongkir.com
password : 1234
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
