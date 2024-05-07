# Use a imagem oficial do PHP 8
FROM php:8.2-cli

# Instale as dependências necessárias
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip

# Instale o Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Verifique se o Composer está instalado corretamente
RUN which composer

# Copie os arquivos do seu projeto para o container
COPY . /app

# Defina o diretório de trabalho dentro do container
WORKDIR /app

# Instale as dependências do Composer e gere o autoload
RUN composer install


# Exponha a porta que sua aplicação pode usar (opcional)
EXPOSE 8000

# Comando para iniciar sua aplicação
CMD ["php", "-S", "0.0.0.0:8000"]
