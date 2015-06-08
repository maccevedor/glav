Plantilla 

http://themifycloud.com/downloads/janux-free-responsive-admin-dashboard-template/

Cuando llame el servicio en el select hay que visualizar con el placa del vehiculo(preguntar)
Generar boton pdf en  la lista de factura(ok)
EL buscar se realizara por cliente en factura(ok)
El buscar se realiza por estado en Servicio(se dejo buscando por matricula)(ok)
quitar el servicio en prestamo para que aparezca el total de recaudo ue ha realizado ese dia (tiene que estar finalizado)(ok)

Se debe realizar consultas de pagos a los empleados semanales (obligatorio) y historico
Validar que se le entregue el dinero al empleado(ok) se creo un campo en el servicio


Opcional 


Botones con iconos en las tablas
Grafica de los servicios finalizados

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

Cambiar el Idioma(no me funciono)

php app/console translation:update  es GlavBundle --force 


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


Generar getter and setter 

php app/console doctrine:generate:entities GlavBundle/Entity/Prestamo


Generar el crud con la consola 

php app/console generate:doctrine:crud --entity=GlavBundle:Factura

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
cuando realiza la factura el estado vacambiar ha estado facturado
que el servicio siempre entre ha estado pendiente
autocompletar para los listados de clientes

Agregar register al role administrador
ventana de deslogado aplicar plantilla(ok)
Configurar el boton de home
Eliminar la columna hash de la lista
el tamaño de las tablas esta desproporcionado y no se puede mover la ventana para mirar todas las columnas
Agregar label al campo hora
Los campos de fecha no genera fecha actual

preguntar cuando se realizaria el despuesto d elo que se le presta al operario

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


