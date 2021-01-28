# Test API Mercado Libre

La aplicación debe permitir loguear un usuario de MercadoLibre, con usuario y contraseña.
También debe mostrar una lista con los 10 artículos más caros de la categoría "Aires Acondicionados" (Categoría MLA1644) indicando en cada artículo la cantidad vendida de cada uno. En esta vista también es requerido mostrar debajo de la lista, la suma de los precios de los 10 artículos y la cantidad total vendida entre los 10 artículos de la lista.

## Antes de comenzar

Estas son las instrucciones para utilizar la aplicación.

### Instalando

Paso a paso siga las siguientes instrucciones

```
composer install
```

Luego

```
npm install
```

Para finalizar

```
npm run dev
```

## Configuración

Es necesario ingresar tener estas llaves en el archivo de entorno *.env*
Tenga en cuenta que la url configurada en Mercado Libre para respuestas, debe ser HTTPS, si trabaja en entorno local puede hacer uso de herramientas como *ngrock*

```
APP_ID= Id de la aplicación en ML
ML_URL= la url de respuesta configurada en el panel de ML debe ser https://nombre_del_host/checkauth/
CLIENT_SECRET_ML= clave secreta de la aplicacion
```

## Autor

* **Acosta Matias Gonzalo** - *Desarrollador Laravel*
