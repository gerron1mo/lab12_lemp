# Dokumentacja uruchomienia stacku LEMP

## Użyte polecenia systemowe i Docker:

1. Uruchomienie całego środowiska w tle:
```bash
docker compose up -d
Wynik:
PS C:\Studying\6_sem\Chmura\lab12_lemp> docker compose up -d
[+] up 64/64
 ✔ Image mysql:8.3.0                 Pulled                                                                        14.4s
 ✔ Image php:8.3-fpm                 Pulled                                                                        13.7s
 ✔ Image nginx:1.25.4                Pulled                                                                        12.4s
 ✔ Image phpmyadmin/phpmyadmin:5.2.1 Pulled                                                                        17.7s
 ✔ Network lab12_lemp_frontend       Created                                                                       0.0s
 ✔ Network lab12_lemp_backend        Created                                                                       0.0s
 ✔ Volume lab12_lemp_mysql_data      Created                                                                       0.0s
 ✔ Container lemp_php                Started                                                                       0.6s
 ✔ Container lemp_mysql              Started                                                                       0.6s
 ✔ Container lemp_nginx              Started                                                                       0.5s
 ✔ Container lemp_pma                Started                                                                       0.5s
```
 2. Instalacja modułu MySQL dla PHP wewnątrz kontenera:
 ```bash
 PS C:\Studying\6_sem\Chmura\lab12_lemp> docker exec -it lemp_php sh -c "docker-php-ext-install mysqli && kill -USR2 1"
Configuring for:
PHP Api Version:         20230831
Zend Module Api No:      20230831
Zend Extension Api No:   420230831
checking for grep that handles long lines and -e... /usr/bin/grep
checking for egrep... /usr/bin/grep -E
checking for a sed that does not truncate output... /usr/bin/sed
checking for pkg-config... /usr/bin/pkg-config
(nie bede wklejal tego wszystkiego)
.................................
```
3. Weryfikacja uruchomionych usług:
```bash
PS C:\Studying\6_sem\Chmura\lab12_lemp> docker compose ps
NAME         IMAGE                         COMMAND                  SERVICE      CREATED         STATUS         PORTS
lemp_mysql   mysql:8.3.0                   "docker-entrypoint.s…"   mysql        3 minutes ago   Up 3 minutes   3306/tcp, 33060/tcp
lemp_nginx   nginx:1.25.4                  "/docker-entrypoint.…"   nginx        3 minutes ago   Up 3 minutes   0.0.0.0:4001->80/tcp, [::]:4001->80/tcp
lemp_php     php:8.3-fpm                   "docker-php-entrypoi…"   php          3 minutes ago   Up 3 minutes   9000/tcp
lemp_pma     phpmyadmin/phpmyadmin:5.2.1   "/docker-entrypoint.…"   phpmyadmin   3 minutes ago   Up 3 minutes   0.0.0.0:6001->80/tcp, [::]:6001->80/tcp
```
4. Test poprawnego działania serwera WWW i skryptu PHP:
```bash
http://localhost:4001
```
