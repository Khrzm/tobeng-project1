# using this awesome prebuild image:
FROM pentestingid/php8-nginx:basic

COPY --chown=nginx ./composer.json /var/www/html/
COPY --chown=nginx ./composer.lock /var/www/html/

# run composer install to install the dependencies
RUN composer install --no-dev --no-cache --no-scripts --no-autoloader

COPY --chown=nginx . /var/www/html/

RUN composer dump-autoload --optimize --no-cache

# continue stage build with the desired image and copy the source including the
# dependencies downloaded by composer
