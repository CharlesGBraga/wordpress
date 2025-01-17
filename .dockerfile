# Use a imagem base do PHP com Apache
FROM php:8.0-apache

# Instale as extensões necessárias para o WordPress (mysqli, pdo, pdo_mysql)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copie os arquivos do seu projeto para o diretório do Apache
COPY . /var/www/html/

# Exponha a porta 80
EXPOSE 80

# Comando para rodar o Apache em primeiro plano
CMD ["apache2-foreground"]
