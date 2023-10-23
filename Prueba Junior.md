# PRUEBA TECNICA JUNIOR DEVELOPER (JS)

El objetivo de esta prueba técnica es crear una aplicación en vanilla js que consuma una api y liste los usuarios.
Para lograr esto, debe usar la API proporcionada por https://randdomuser.me/.

Los pasos a seguir:

- [] Consumir la api con 100 filas.
- [] Mostrar los datos en formato de tabla con columnas(FOTO , NOMBRE, APELLIDO, PAIS, ACCIONES(BOTON BORRAR)).
- [] Proporcione la opción de colorear las filas alternativamente.
- [] Posibilidad de eliminar algun usuario de la lista
- [] Implemente una función que permita al usuario restaurar la lista, lo que significa que se recuperarán todas las filas eliminadas sin consultar de nuevo la api.
- [] Gestione los posibles errores que puedan producirse.
- [] Implementar una función que permita al usuario filtrar los datos por país.


Ejemplo:https://drive.google.com/file/d/1c62sJ3O3um-lk6e-34HrJ0_fmw1KTPCS/view?usp=share_link

# PRUEBA TECNICA JUNIOR DEVELOPER (PHP)
- [] CREAR UNA CLASE EN PHP QUE TENGA COMO METODOS LOS ANTERIORES EJERCICIOS que sean privados o públicos
- [] DADO UN ARRAY DE USUARIOS FILTRO LOS MAYORES DE 18 AÑOS ()
- [] DADO UNA LISTA DE PRECIOS ORDENAR DE MENOR A MAYOR()
- [] DADO UN ARRAY DE USUARIOS ELIMINE LOS DE CARGO ADMINISTRADOR()
- 


# PRUEBA TECNICA JUNIOR DEVELOPER (SQL)
- [] CREAR UNA BASE DE DATOS CON UNA TABLA DE PRODUCTOS Y OTRA DE CATEGORIAS
    CREATE DATABASE mydb;
    CREATE TABLE productos ( id INT PRIMARY KEY, nombre VARCHAR(100),precio integer,categoria VARCHAR(100),estado bool,cantidad integer );
    CREATE TABLE categorias ( id INT PRIMARY KEY, nombre VARCHAR(100),estado bool);
- [] CREAR UNA TABLA DE PRODUCTOS CON LOS CAMPOS (ID, NOMBRE, PRECIO, CATEGORIA, ESTADO, CANTIDAD)
    CREATE TABLE productos ( id INT PRIMARY KEY, nombre VARCHAR(100),precio integer,categoria VARCHAR(100),estado bool,cantidad integer );
- [] CREAR UNA TABLA DE CATEGORIAS CON LOS CAMPOS (ID, NOMBRE, ESTADO)
    CREATE TABLE categorias ( id INT PRIMARY KEY, nombre VARCHAR(100),estado bool);
- [] SQL PARA ELIMINAR, ACTUALIZAR, SELECCIONAR, INSERTAR
    insertar categorias
    INSERT INTO categorias VALUES ( 1, 'Will',1 );
    seleccionar categorias
    SELECT * FROM categorias
    eliminar categorias
    DELETE FROM categorias WHERE id = 1;
    actualiar categorias
    UPDATE categorias SET nombre = 'prueba' WHERE id = 1;






