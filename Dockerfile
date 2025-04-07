# Utiliser une image PHP 8.3 avec Apache
FROM php:8.3-apache
# Installer les extensions PHP nécessaires
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    libzip-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install pdo pdo_mysql mysqli zip

# Installer Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && php -r "unlink('composer-setup.php');"



# Copier le fichier de configuration Apache dans le conteneur
#COPY apache2.conf /etc/apache2/apache2.conf

# Copier les fichiers de configuration supplémentaires pour les virtual hosts
#COPY 000-default.conf /etc/apache2/sites-available/000-default.conf

# Activer les modules Apache nécessaires
RUN a2enmod rewrite

# Activer le virtual host
#RUN a2ensite 000-default.conf


# Copier le fichier php.ini personnalisé
COPY php.ini /usr/local/etc/php/

# Copier le fichier crontab et le script PHP à exécuter
#COPY my-crontab /etc/cron.d/my-crontab
#COPY sendmail.php /usr/local/bin/sendmail.php

# Donner les bons droits au fichier crontab et au script PHP
#RUN chmod 0644 /etc/cron.d/my-crontab 
  

# Appliquer la crontab
#RUN crontab /etc/cron.d/my-crontab

# Créer un fichier log pour cron
#RUN touch /var/log/cron.log

# Installer les dépendances Composer dans l'application
WORKDIR /var/www/html
RUN mkdir -p frontend/upload && chown -R www-data:www-data frontend/upload && chmod 755 frontend/upload

# Exposer le port 80
EXPOSE 80

# Démarrer Apache et Cron
