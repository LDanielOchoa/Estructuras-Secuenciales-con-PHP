# Calculadoras PHP


## 📋 Descripción

Este proyecto forma parte de la tarea del módulo de Soluciones Informáticas, cuyo objetivo es desarrollar una aplicación web utilizando HTML y PHP. Además, se han incorporado herramientas modernas como Docker para la contenedorización y Tailwind CSS para el diseño responsivo y estilizado de la interfaz.

1. **Calculadora de IMC**: Calcula el Índice de Masa Corporal basado en peso y altura.
2. **Conversor de Temperatura**: Convierte grados Celsius a Fahrenheit.
3. **Calculadora de Precio con IVA**: Calcula el precio total incluyendo el IVA (19%).
4. **Calculadora de Tiempo de Viaje**: Determina el tiempo de viaje basado en distancia y velocidad.
5. **Calculadora de Interés Simple**: Calcula el interés simple de un préstamo.


## 🖼️ Capturas de Pantalla

### Página Principal
![Página Principal](docs/images/home.png)

### Calculadora de IMC
![Calculadora de IMC](docs/images/imc.png)

### Captura de Resultados
![Resultados de IMC](docs/images/imc-resultados.png)

### Conversor de Temperatura
![Conversor de Temperatura](docs/images/temperatura.png)

### Captura de Resultados
![Resultados de Conversor de Temperatura](docs/images/temperatura-resultados.png)

### Calculadora de Precio
![Calculadora de Precio](docs/images/precio.png)

### Captura de Resultados
![Resultados de Calculadora de Precio](docs/images/precio-resultados.png)

### Calculadora de Tiempo
![Calculadora de Tiempo](docs/images/tiempo.png)

### Captura de Resultados
![Resultados de Calculadora de Tiempo](docs/images/tiempo-resultados.png)

### Calculadora de Interés
![Calculadora de Interés](docs/images/interes.png)

### Captura de Resultados
![Resultados de Calculadora de Interés](docs/images/interes-resultados.png)


## ⚙️ Instalación


# Instalación con Docker

1. Clone este repositorio:

```shellscript
git clone https://github.com/LDanielOchoa/Estructuras-Secuenciales-con-PHP
cd calculadoras-php
```


2. Construya y ejecute el contenedor Docker:

```shellscript
docker-compose up -d
```


3. Acceda a la aplicación a través de su navegador:

```plaintext
http://localhost:8080
```



## 📝 Detalles de Implementación

### Calculadora de IMC

La calculadora de IMC utiliza la fórmula:

```plaintext
IMC = peso / altura²
```

Donde:

- `peso` está en kilogramos
- `altura` está en metros


[Ver código fuente](calculadora-imc.php)

### Conversor de Temperatura

El conversor utiliza la fórmula:

```plaintext
F = (C × 9/5) + 32
```

Donde:

- `F` es la temperatura en grados Fahrenheit
- `C` es la temperatura en grados Celsius


[Ver código fuente](conversor-temperatura.php)

### Calculadora de Precio

La calculadora de precio utiliza la fórmula:

```plaintext
Total = Precio + (Precio × 0.19)
```

Donde:

- `Precio` es el precio base del producto
- `0.19` representa el 19% de IVA


[Ver código fuente](calculadora-precio.php)

### Calculadora de Tiempo de Viaje

La calculadora de tiempo utiliza la fórmula:

```plaintext
Tiempo = Distancia / Velocidad
```

Donde:

- `Distancia` está en kilómetros
- `Velocidad` está en kilómetros por hora
- `Tiempo` se obtiene en horas


[Ver código fuente](calculadora-tiempo.php)

### Calculadora de Interés Simple

La calculadora de interés utiliza la fórmula:

```plaintext
Interés = Capital × Tasa × Tiempo
```

Donde:

- `Capital` es el monto del préstamo
- `Tasa` es la tasa de interés anual en porcentaje
- `Tiempo` es el período en años


[Ver código fuente](calculadora-interes.php)

## 🐳 Configuración Docker

El proyecto incluye configuración para Docker.
### Dockerfile

```dockerfile
FROM php:8.2-apache

# Instalar dependencias y extensiones PHP necesarias
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-install zip

# Configurar Apache
RUN a2enmod rewrite
RUN service apache2 restart

# Establecer directorio de trabajo
WORKDIR /var/www/html

# Copiar archivos de la aplicación
COPY . /var/www/html/

# Establecer permisos
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

# Exponer puerto
EXPOSE 80

# Comando para iniciar Apache en primer plano
CMD ["apache2-foreground"]
```

[Ver Dockerfile completo](Dockerfile)

### docker-compose.yml

```yaml
version: '3'

services:
  calculadoras-php:
    build:
      context: .
      dockerfile: Dockerfile
    container_name: calculadoras-php
    ports:
      - "8080:80"
    volumes:
      - ./:/var/www/html
    restart: always
```

[Ver docker-compose.yml completo](docker-compose.yml)



## 👥 Autores

- **Daniel Ochoa Castrillón**  - [LDanielOchoa](https://github.com/LDanielOchoa)
