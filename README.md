Importante:
    Este sistema es un ejercicio realizado en YII-Framework
    donde su finalidad es demostrar la utilización del patrón
    de diseño Modelo - Vista - Controlador (MVC), sirvió como
	explicación de un ejemplo práctico para la materia de Sistemas
	Distribuidos.

Copias y distribución:
----------------------

- Usted puede hacer las copias que quiera de este software.

Autores
------------------------
L.S.C Daniel Méndez Cruz
email: daniel.mendez@cimat.mx
I.S.C Marcos Gonzalez Lozano
e-mail: marcos.gonzalez@cimat.mx

================================================================================
Versión ========================================================================
================================================================================
Versión 1.0 Alfa
================================================================================
REPORTAR BUGS ==================================================================
================================================================================
Los bugs se envían a la dirección de correo electrónico de los autores
================================================================================
Instalación ====================================================================
================================================================================

1.- Lo primero que haremos es descargar WampServer en el siguiente enlace
	
http://sourceforge.net/projects/wampserver/files/WampServer%202/Wampserver%202.5/
wampserver2.5-Apache-2.4.9-Mysql-5.6.17-php5.5.12-32b.exe/download

2.- Ya descargado lo ejecutamos con doble clic nos debe salir el Wizard de 
	Instalación, clic en siguiente o Next.
	2.1  Aceptamos los términos y condiciones para seguir con la instalación.
	2.2  Seleccionamos el destino de instalación, por defecto lo dejamos así 
		o si lo prefiere puede seleccionar otra ubicación, clic en siguiente o Next
	2.3 Si deseas dejar un acceso directo Selecciona una de las casillas. 
		En mi caso dejo marcada la primera opción.
	2.4 Si todo está bien hasta aquí damos Install.
	2.5 El proceso de instalación ha terminado, si deseas ejecutar la aplicación 
		dejar marcado y dar finalizar.
	2.6 WampServer se ejecutara en segundo plano en la barra de tareas y se 
		tornara de un color verde.
	2.7 Abrimos en el navegador la dirección LocalHost o 127.0.0.0 el cual
		mostrará la configuración de WampServer.
3.- Ingresar a la dirección http://localhost/phpmyadmin/ para crear la base de 
	datos con la que se maneja el sistema.
	3.1 Crear una base de datos vacía con el nombre de "proyectomvc".
	3.2 Seleccionar la base de datos creada y seleccionar el botón de Importar
	3.3 Phpmyadmin solicita ingresar la ruta del archivo a importar, seleccionar
		el archivo que se encuentra en fuera de la carpeta del proyecto con el nombre
		de "proyectomvc.sql".
	
4.- Ubicar la carpeta de \wamp\www y en seguida copiar el proyecto completo 
	clonado desde GIT HUB

5.- Una vez clonado y copiado el proyecto dentro del servidor wamp ingresamos
	en el navegador la ruta siguiente:
	
	http://localhost/mvc_proyecto/
	ó
	127.0.0.0/mvc_proyecto

6.- Para la navegación en el sistema será necesario ingresar como administrador
	con las credenciales siguientes:
	User: admin
	Password: admin
================================================================================

================================================================================

