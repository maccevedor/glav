Realizar copia de los archivos

Inicializar el servidor 
php app/console server:run localhost:3000  


//Realiza la copia de los archivos del sevidor
git clone https://github.com/anderipe/glav.git 


// Realiza la descarga de la base de datos de git
git fetch

// desca los archivos q cambiaron
git pull


// estado de git
git status

Crear base datos

php app/console doctrine:database:create


Crear base de datos con las entitys
 
 php app/console doctrine:schema:update --force 
 
 
 // Muestra que cambios se vna hacer en la base datos
 php app/console doctrine:schema:update --dump-sql
 
 Si saba se de datos ya existe 
  y la queremos importar 
  
php app/console doctrine:mapping:convert xml ./src/Acme/DemoBundle/Resources/config/doctrine/metadata/orm --from-database --force
php app/console doctrine:mapping:import AcmeDemoBundle annotation
php app/console doctrine:generate:entities AcmeDemoBundle

Para eliminar la cache utilizamos :

php app/console cache:clear

php app/console cache:clear --env=prod


Gennera getter and setter 

php app/console doctrine:generate:entities AppBundle/Entity/Product


Generar el crud con la consola 

php app/console generate:doctrine:crud --entity=AcmeBlogBundle:Post

sobre escribr crud

php app/console generate:doctrine:crud --overwrite --entity=GlavBundle:TipoRubro 

-----Tareas---------

Que no se vea el hash

Los campos de estado deben desaparecer

Dejar fijo del Iva


Mejorar los label

Estados del servicio

Iniciado , finalizado , anulado , en espera

1.16


Agregar register al role administrador
ventana de deslogado aplicar plantilla
Configurar el boton de home
Eliminar la columna hash de la lista
el tamaño de las tablas esta desproporcionado y no se puede mover la ventana para mirar todas las columnas
Agregar label al campo hora
Los campos de fecha no genera fecha actual

# Symfony (2.6.4)


## Using the Pack

To use the Pack, we created 2 menu options, which you can find on the right of the menu. These menus can be configured in the `.codio` file.


1. **Configure Project** : Select this when you first access the project to configures the Symfony Site Timezones for your Project.
1. **Symfony Config**: This previews your app. Note the Preview menu allows you to select 'Inside Codio' or 'New Browser Tab'. 

## Configure Symfony
To configure your Symfony Site Timezones

1. Go to the Run menu.
1. Select `Configure Project`.

If you prefer to run the configuration script yourself, open the terminal (Tools>Terminal) and enter

    bash symfonyconfig.sh
    
## Accessing the application

To access your Symfony application

1. Go to the Preview menu.
1. Select `Symfony Config`.


We set this up using https so it can be previewed inside a Codio Tab.

## How the Pack was prepared
This Starter Pack was built on the `LAMP+Composer` Codio Certified Stack.

## Useful Links

- [Symfony Site](http://symfony.com)
- [Symfony Docs](http://symfony.com/doc/current/index.html)


