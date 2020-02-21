# conferenciasprueba

Detalles del desarrollo:
- Realizado con symfony 5
- MySQL
- Para subir los archivo .csv (que tambien se pueden trabajar con excel) se utilizo la libreria:
https://csv.thephpleague.com/
- Los archivos de prueba se los encuentra en esta ruta: https://github.com/juanitourquiza/conferenciasprueba/tree/master/public/uploads

Para que funcione se debe seguir los siguientes pasos:
En una terminal:
- git clone https://github.com/juanitourquiza/conferenciasprueba.git
- cd conferenciasprueba
- composer install
- crear una base de datos en MySQL
- En el archivo .env colocar la cadena de conexión
- php bin/console doctrine:schema:update --force
- symfony server:start
