# generadorPdf-php
App web para generar constancias en PDF con PHP, WKHTMLTOPDF y Postgres (Pruebas generadas en Windows y usando Xampp)


# Documentación


En esta aplicación se generan constancias en PDF con la ayuda del lenguaje de programación web PHP y con ayuda de un conjunto de bibliotecas. Las principales bibliotecas y herramientas auxiliares usadas en esta aplicación fueron las siguientes:

- wkhtmltopdf para generar los estilos del PDF basados en HTML y CSS
- Qrlib para generar los códigos QR de las constancias
- Composer para contar con un gestor de paquetes para programar en PHP con las dependencias adecuadas
- XAMPP como ambiente de servidor local para el desarrollo y pruebas del sistema


#### XAMPP y composer


Se utilizó [XAMPP](https://www.apachefriends.org/download.html) en Windows 10 para contar con un entorno completo de desarrollo. De XAMPP se utilizó el servidor local Apache, y el soporte del lenguaje de programación PHP.

También se hizo uso del gestor de paquetes de PHP llamado composer. Este gestor fue de gran utilidad para instalar, implementar y usar las dependencias necesarias. La liga de composer es la siguiente: [composer](https://getcomposer.org/)


#### wkHTMLtoPDF


Otra biblioteca o dependencia utilizada fue [wkhtmltopdf](https://wkhtmltopdf.org/). Esta se usó para poder generar las constancias en formato PDF estilizadas por medio de HTML y CSS. Esto nos permitió estilizar fácilmente las vistas del PDF gracias a flex y grid que se tienen en CSS.

Es necesario destacar que para poder usar esta herramienta en PHP, se tiene que utilizar un sistema operativo Windows 10. Tenemos que dirigirnos a la página oficial de la dependencia  [wkhtmltopdf](https://wkhtmltopdf.org/) y se tiene que descargar el instalador para windows. Posteriormente, cuando se esté escribiendo el código dentro del lenguaje PHP, se tiene que mandar a llamar la bibloteca por medio de una sentencia $pdf. 

```sh
$pdf->binary = 'C:\Program Files\wkhtmltopdf\bin\wkhtmltopdf';
```


#### QrLib


Para poder generar los códigos QR dentro del ecosistema de PHP, se tuvo que hacer uso de la biblioteca de código abierto [qrlib](https://phpqrcode.sourceforge.net/). Para usar esta dependencia, nos tuvimos que dirigir a la página oficial de [qrlib](https://phpqrcode.sourceforge.net/) para descargar un archivo comprimido con todos los archivos necesarios. Después se extrajo el archivo en la carpeta contenedora de las bibliotecas del proyecto 'vendor'. Una vez hecho esto, en los archivos de PHP se pudo usar qrlib por medio de un requiere para desplegar códigos QR en el navegador e ingresarlos dentro de las constancias.

```sh
require_once("../vendor/phpqrcode/qrlib.php");
```


## Estructura del proyecto


Básicamente se tiene una carpeta contenedora del proyecto en donde se almacenan las dependencias en la carpeta 'vendors', la lógica de los códigos QR en la carpeta 'qr', las imágenes de la constancia en la carpeta 'src', y los archivos PHP que contienen la lógica general están dentro de la carpeta contenedora general.

| Contenido de la carpeta contenedora | Descripción |
| ------ | ------ |
| src | Carpeta de archivos de imagen |
| qr | Carpeta donde está la lógica de los QR |
| vendor | Carpeta en donde están las dependencias |
| index.php | Archivo PHP con lógica de formulario para ingresar datos en la constancia |
| estilo.php | Archivo PHP que contiene los estilos y la estética en CSS de la constancia |
| plantilla.php | Archivo PHP que contiene la estructura frontal de la constancia definida con etiquetas HTML y con variables PHP|
| plantillaReverso.php | Archivo PHP que contiene la estructura trasera o reverso de la constancia, y también se define con etiquetas HTML, así como variables PHP |
| post_constancy.php | Archivo PHP que conecta las diferentes dependencias (qrlib y wkhtmltopdf), recibe los valores del formulario, genera la plantilla, y crea el archivo PDF de la constancia con todos los elementos requeridos |



# Tareas pendientes:
- [✔] Probar con nombres mayores a 50 caractéres para la constancia.
- [✔] Darle un formato más parecido a la constancia proporcionada por el DID.
- [✔] Hacer la parte trasera de la constancia.
    - Número de folio.
    - Código QR.
- [✔] Insertar contenido en la base de datos.
- [✔] Conectar la base de datos con php.
- [✔] Página de alumno para que pueda consultar sus constancias.
- [✔] Página de administrador para que pueda crear, editar o eliminar constancias.
- [ ] Pag. administrador para que pueda ver el histórico de constancias.
- [ ] Pag admin. para que pueda firmar las constancias.
- [ ] Firmas opciones (1-3).
- [ ] Agregar opción para el fondo de la plantilla del reverso.
- [ ] Guardar el formato de la constancia para solo insertar nombre de alumno.
