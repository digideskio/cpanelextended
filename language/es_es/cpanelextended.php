<?php
/**
 * en_us language for the cPanel Extended module
 */

// Basics
$lang['Cpe.name'] = "cPanel Extendido";
$lang['Cpe.module_row'] = "Servidor";
$lang['Cpe.module_row_plural'] = "Servidores";
$lang['Cpe.module_group'] = "Grupo de Servidores";
$lang['Cpe.emailforwarder.delete'] = "Eliminar reenviador de correo electrónico";
$lang['Cpe.ttl'] = "TTL";
$lang['Cpe.ttl.name'] = "Nombre";
$lang['Cpe.ttl.record'] = "Registro";
$lang['Cpe.ttl.type'] = "Tipo";
$lang['Cpe.ttl.class'] = "Clase";
$lang['Cpe.ttl.address'] = "Dirección";
$lang['Cpe.titles.shorcuts'] = 'Atajos de Búsqueda Rápida';
$lang['Cpe.titles.preview'] = 'Vista Previa';
$lang['Cpe.softaculous'] = "Softaculous";
$lang['Cpe.softaculous.app'] = "App";
$lang['Cpe.softaculous.database_user'] = "Base de datos del usuario";
$lang['Cpe.softaculous.database_pass'] = "Base de datos Contraseña";
$lang['Cpe.softaculous.admin_user'] = "Usuario Admin";
$lang['Cpe.softaculous.admin_pass'] = "Contraseña Admin";
$lang['Cpe.softaculous.admin_email'] = "Correo Admin";
$lang['Cpe.softaculous.language'] = "Lenguaje";
$lang['Cpe.softaculous.site_name'] = "Nombre del Sitio";
$lang['Cpe.softaculous.site_desc'] = "Descripción del Sitio";
$lang['Cpe.softaculous.install'] = "Instalar";
$lang['Cpe.softaculous.installing'] = "Instalando";
$lang['Cpe.softaculous.features'] = "Características";
$lang['Cpe.softaculous.installed_succeful'] = "Instalación Completada";
$lang['Cpe.webdisk'] = "WebDisk";
$lang['Cpe.webdisk.add'] = "Añadir WebDisk";
$lang['Cpe.description.webdisk'] = "Crear una cuenta de WebDisk para gestionar, navegar, cargar y descargar los archivos en su servidor web. Los WebDisks están en relación con el directorio inicial de la cuenta.";
$lang['Cpe.webdisk.perms'] = "Permisos";
$lang['Cpe.loginto.description'] = "Cambia instantaneamente desde nuestro panel de control a cPanel para administrar tu cuenta de hosting.";
$lang['Cpe.softaculous.description'] = "Instala aplicaciones web de manera automatica y en tan solo un clic.";

// Sections
$lang['Cpe.label.files'] = "Archivos";
$lang['Cpe.label.filemanager'] = "Administrador de Archivos";
$lang['Cpe.label.advanced'] = "Avanzado";
$lang['Cpe.dashboard'] = "Tablero de Comandos";
$lang['Cpe.details'] = "Detalles";
$lang['Cpe.stats'] = "Estadísticas";
$lang['Cpe.changepass'] = "Cambiar Contraseña";
$lang['Cpe.ftp'] = "Cuentas FTP";
$lang['Cpe.databases'] = "Bases de Datos";
$lang['Cpe.remotedatabase'] = "MySQL Remoto";
$lang['Cpe.emails'] = "Correos";
$lang['Cpe.webmail'] = "Webmail";
$lang['Cpe.emailforwarder'] = "Redirecciones de Correo";
$lang['Cpe.subdomains'] = "Subdominios";
$lang['Cpe.parkeddomains'] = "Dominios Aparcados";
$lang['Cpe.addondomains'] = "Dominios Adicionales";
$lang['Cpe.cron'] = "Cron";
$lang['Cpe.ssh'] = "Accesso SSH";
$lang['Cpe.ssl'] = "Certificado SSL";
$lang['Cpe.loginto'] = "Cambiar a";
$lang['Cpe.dns_zone'] = "Editor de Zona DNS";

// Section titles
$lang['Cpe.titles.stats'] = "Estadísticas de la cuenta";
$lang['Cpe.titles.ftp'] = "Gestión de Centas FTP";
$lang['Cpe.titles.databases'] = "Gestión de Bases de Datos MySQL";
$lang['Cpe.titles.emails'] = "Gestión de Cuentas de Correo";
$lang['Cpe.titles.subdomains'] = "Subdominios";
$lang['Cpe.titles.parkeddomains'] = "Dominios aparcados";
$lang['Cpe.titles.addondomains'] = "Dominios Adicionales";
$lang['Cpe.titles.cron'] = "Gestión Cron Jobs";
$lang['Cpe.titles.ssl'] = "Gestión SSL";
$lang['Cpe.titles.loginto'] = "Cambiar a";

// Section descriptions
$lang['Cpe.description.ssh'] = "SSH, or Secure Shell, is a protocol used to securely log onto remote systems. It is the most common way to access remote Linux and Unix-like servers, such as VPS instances.";
$lang['Cpe.description.ftp'] = "Las cuentas FTP le permiten acceder a los archivos de su sitio web a través de un protocolo llamado FTP. Necesitará un programa de FTP de terceros para acceder a sus archivos. Puede acceder a través de FTP ingresando.";
$lang['Cpe.description.databases'] = "Una Bases de datos MySQL le permiten almacenar gran cantidad de información en un formato fácil de acceder. Las bases de datos en sí no son fáciles de leer por los humanos. Las Bases de datos MySQL son requeridos por muchas aplicaciones web, incluyendo algunos tablones de anuncios, sistemas de gestión de contenidos, y otros. Para utilizar una base de datos, tendrá que crearla. Solo los usuarios de MySQL (diferentes de correo electrónico u otros usuarios) que tienen privilegios para acceder a una base de datos pueden leer o escribir en la base de datos.";
$lang['Cpe.description.emails'] = "En esta zona se puede gestionar las cuentas de correo electrónico asociadas a sus dominios.";
$lang['Cpe.description.emailforwarders'] = "Enviar una copia de cualquier correo electrónico entrante de una dirección a otra. Por ejemplo, reenviamos joe@example.com a joseph@example.com para que usted sólo tenga una bandeja de entrada para comprobar. ";
$lang['Cpe.description.emailforwarders.table'] = "La tabla de Redirecciones de Cuentas Correo enumera todas las direcciones de correo electrónico que utilizan un promotor para redirigir a otra dirección de correo electrónico o servicio.";
$lang['Cpe.description.subdomains'] = "Los subdominios son URLs para diferentes secciones de su sitio web. Ellos usan su nombre de dominio principal y un prefijo. Por ejemplo, si su dominio es hosting.com, un subdominio de su dominio podría ser support.hosting.com.
Los subdominios son en relación con el directorio home de tu cuenta.";
$lang['Cpe.description.addondomains'] = "Un dominio añadido permite a los visitantes para llegar a un subdominio de su sitio introduciendo la URL del dominio adicional en un navegador. Esto significa que usted puede alojar dominios adicionales de su cuenta, si lo permite su proveedor de hosting. Dominios Adicionales están referidos al directorio principal de su cuenta.";
$lang['Cpe.description.parkeddomains'] = "Dominios aparcados (punteros de dominio) le permiten apuntar o aparcar los nombres de dominio adicionales a su cuenta de alojamiento existente. Esto permitirá a los usuarios alcanzar también su sitio web al entrar en el dominio aparcado o puntiagudo en sus navegadores.";
$lang['Cpe.description.cron'] = "Cron jobs le permiten automatizar ciertos comandos o scripts en su sitio. Puede configurar un comando o secuencia de comandos para ejecutar en un momento determinado todos los días, semanas, etc. Por ejemplo, podría configurar un Cron jobs para eliminar los archivos temporales cada semana para liberar espacio en disco. <br><br><strong style=\"color: red;\">Advertencia</strong> Usted necesita tener un buen conocimiento de los comandos de Linux antes de poder utilizar .cron empleos. eficazmente. Revise su guión con el administrador del alojamiento antes de agregar un Cron jobs.";
$lang['Cpe.description.sslkeys'] = "Los Certificados SSL tienen un par de claves: una pública y una clave privada. Estas claves funcionan juntas para establecer una conexión cifrada. Puede generar la clave segura, o puede importar la clave privada.";
$lang['Cpe.description.sslcsr'] = "'Solicitud de firma de certificado' es un mensaje enviado desde un solicitante a una autoridad de certificación con el fin de solicitar un certificado de identidad digital. Antes de poder ordenar sus certificados SSL, primero debe generar una CSR (Certificate Signing Request) en el servidor.";
$lang['Cpe.description.sslcrt'] = "Para que SSL funcione se requiere un certificado SSL firmado y válido. El certificado incluirá temas, tales como la identidad del propietario del certificado / sitio web. Puede generar la clave de certificado, o puede importarlos.";
$lang['Cpe.description.dns_zone'] = "Crear y editar registros de zona para controlar cómo DNS funciona. Por ejemplo, si quieres un subdominio para que apunte a otro dominio, agregar un nuevo registro CNAME.";


// Section subtitles
$lang['Cpe.subtitles.nameservers.pointip'] = "Puedes apuntar tu dominio a este IP: ";
$lang['Cpe.subtitles.details.site'] = "Detalles del Sitio";
$lang['Cpe.subtitles.details.mail'] = "Detalles del E-mail";
$lang['Cpe.subtitles.details.ftp'] = "Detalles del FTP";
$lang['Cpe.subtitles.details.cpanel'] = "Detalles del cPanel";
$lang['Cpe.subtitles.ftp.create'] = "Añadir Cuentas FTP";
$lang['Cpe.subtitles.ftp.list'] = "Lista de Cuentas FTP";
$lang['Cpe.subtitles.email.create'] = "Añadir Cuentas de Correo";
$lang['Cpe.subtitles.email.list'] = "Lista de Cuentas de Correo";
$lang['Cpe.subtitles.db.create'] = "Crear Bases de Datos";
$lang['Cpe.subtitles.db.dblist'] = "Lista de las Bases de datos Actuales";
$lang['Cpe.subtitles.db.usercreate'] = "Añadir Nuevo Usuario MySQL";
$lang['Cpe.subtitles.db.userlist'] = "Listas de Usuarios Actuales";
$lang['Cpe.subtitles.db.addusertodb'] = "Añadir Usuario a la Base de Datos";
$lang['Cpe.subtitles.db.remote'] = "MySQL Remoto";
$lang['Cpe.subtitles.db.addhost'] = "Añade un Host para poderlo usar con MySQL Remoto";
$lang['Cpe.subtitles.db.currenthosts'] = "Hosts Añadidos";
$lang['Cpe.subtitles.ssh.authkey'] = "Autorizar Clave";
$lang['Cpe.subtitles.ssh.importkey'] = "Importar Clave";
$lang['Cpe.subtitles.ssh.listkey'] = "Claves Autorizadas";
$lang['Cpe.subtitles.subdomain.create'] = "Crear Subdominio";
$lang['Cpe.subtitles.subdomain.list'] = "Lista de Subdominios";
$lang['Cpe.subtitles.parkeddomain.create'] = "Crear un nuevo Dominio Aparcado";
$lang['Cpe.subtitles.parkeddomain.list'] = "Lista de Dominios Aparcados";
$lang['Cpe.subtitles.addondomain.create'] = "Crear un nuevo Dominio Addon";
$lang['Cpe.subtitles.addondomain.list'] = "Lista de Dominios Addon";
$lang['Cpe.subtitles.cron.create'] = "Crear un nuevo Cron Job";
$lang['Cpe.subtitles.cron.list'] = "Lista de Cron Jobs";
$lang['Cpe.subtitles.ssl.keys'] = "Claves Privadas";
$lang['Cpe.subtitles.ssl.upload_private_keys'] = "Actualizar Claves Privadas";
$lang['Cpe.subtitles.ssl.generate_private_keys'] = "Generar Claves Privadas";
$lang['Cpe.subtitles.ssl.csr_keys'] = "CSR Keys";
$lang['Cpe.subtitles.ssl.crt'] = "Certificados SSL";
$lang['Cpe.subtitles.ssl.upload_cert'] = "Actualizar Certificados";
$lang['Cpe.subtitles.ssl.generate_cert'] = "Generar Certificados";
$lang['Cpe.subtitles.ssl.csr'] = "Generar Solicitudes de Firma de Certificados SSL";

// Button labels
$lang['Cpe.button.save'] = "Guardar Cambios";
$lang['Cpe.button.createaccount'] = "Crear Cuenta";
$lang['Cpe.button.changepassword'] = "Cambiar Contraseña";
$lang['Cpe.button.edit'] = "Editar";
$lang['Cpe.button.delete'] = "Eliminar";
$lang['Cpe.button.changequota'] = "Cambio de Cueotas";
$lang['Cpe.button.generatepassword'] = "Generar Contraseña";
$lang['Cpe.button.addusertodb'] = "Añadir Usuario a la Base de Datos";
$lang['Cpe.button.createuser'] = "Crear Usuario";
$lang['Cpe.button.createdb'] = "Crear Bases de Datos";
$lang['Cpe.button.createacct'] = "Crear Cuenta";
$lang['Cpe.button.createsubdomain'] = "Crear Subdominio";
$lang['Cpe.button.createparkeddomain'] = "Crear Dominio Aparcado";
$lang['Cpe.button.createaddondomain'] = "Crear Addon Domain";
$lang['Cpe.button.createcronjob'] = "Crear Cron Job";
$lang['Cpe.button.redirectto'] = "Redireccionar a";
$lang['Cpe.button.view'] = "Vista Previa";
$lang['Cpe.button.uploadkey'] = "Actualizar Claves Privadas";
$lang['Cpe.button.generatekey'] = "Generar Claves Privadas";
$lang['Cpe.button.generatecsr'] = "Generar Solicitudes de Firma de Certificados SSL";
$lang['Cpe.button.generatecrt'] = "Generar Certificados";
$lang['Cpe.button.uploadcrt'] = "Actualizar Certificados";
$lang['Cpe.button.generate'] = "Generar";
$lang['Cpe.button.upload'] = "Actualizar";
$lang['Cpe.button.install'] = "Instalar";
$lang['Cpe.button.deleteacct'] = "Eliminar Cuenta";
$lang['Cpe.button.destroyacct'] = "Eliminar Cuenta con sus Archivos";
$lang['Cpe.button.deletedbuser'] = "Eliminar la Base de Datos del Usuario";
$lang['Cpe.button.deletedb'] = "Eliminar Base de Datos";
$lang['Cpe.button.deleteemail'] = "Eliminar Cuenta de Correo";
$lang['Cpe.button.deletecron'] = "Eliminar Cron Job";
$lang['Cpe.button.redirect'] = "Redireccionar Subdominio";
$lang['Cpe.button.deleteredirect'] = "Eliminar Redirección";
$lang['Cpe.button.deletesubdomain'] = "Eliminar Subdominio";
$lang['Cpe.button.deleteparked'] = "Eliminar Dominio Aparcado";

// Labels
$lang['Cpe.label.nameservers'] = "Servidores de Nombres";
$lang['Cpe.label.ipaddress'] = "Dirección IP";
$lang['Cpe.label.server'] = "Servidor";
$lang['Cpe.label.webmailaddress'] = "Webmail Address";
$lang['Cpe.label.mailhost'] = "Hostname POP3/IMAP";
$lang['Cpe.label.pop3port'] = "POP3 Port";
$lang['Cpe.label.imapport'] = "IMAP Port";
$lang['Cpe.label.smtpport'] = "IMAP Port";
$lang['Cpe.label.imapportssl'] = "IMAP Port (SSL)";
$lang['Cpe.label.pop3portssl'] = "POP3 Port (SSL)";
$lang['Cpe.label.smtpportssl'] = "SMTP Port (SSL)";
$lang['Cpe.label.yourusername'] = "Direción de E-mail del Usuario";
$lang['Cpe.label.yourpassword'] = "Contraseña de E-mail del Usuario";
$lang['Cpe.label.ftphost'] = "Host FTP";
$lang['Cpe.label.ftpip'] = "Dirección IP FTP";
$lang['Cpe.label.ftpport'] = "Puerto FTP";
$lang['Cpe.label.cpaneladdress'] = "Dirección de cPanel";
$lang['Cpe.label.addhost'] = "Añadir Host";
$lang['Cpe.label.keyname'] = "Nombre de Clave";
$lang['Cpe.label.privatekey'] = "Clave Privada";
$lang['Cpe.label.keypassphrase'] = "Frase";
$lang['Cpe.label.publickey'] = "Clave Publica";
$lang['Cpe.label.keyfiles'] = "Nombre del Archivo de la clave SSH.";
$lang['Cpe.label.authorized'] = "Autorizado";
$lang['Cpe.label.deauthorized'] = "No Autorizado";
$lang['Cpe.label.username'] = "Usuario";
$lang['Cpe.label.password'] = "Contraseña";
$lang['Cpe.label.passwordconfirm'] = "Confirmar Contraseña";
$lang['Cpe.label.directory'] = "Directorio";
$lang['Cpe.label.quota'] = "Cuota";
$lang['Cpe.label.privileges'] = "Privilegios";
$lang['Cpe.label.dbname'] = "Nombre de Bases de Datos";
$lang['Cpe.label.subdomain'] = "Subdominios";
$lang['Cpe.label.docroot'] = "Documentación Root";
$lang['Cpe.label.domain'] = "Nombre de Dominio";
$lang['Cpe.label.domainuser'] = "Subdominios FTP/Usuario";
$lang['Cpe.label.cronline'] = "Cron Line ID";
$lang['Cpe.label.commonsettings'] = "Ajustes comúnes";
$lang['Cpe.label.minute'] = "Minutos";
$lang['Cpe.label.hour'] = "Horas";
$lang['Cpe.label.day'] = "Día";
$lang['Cpe.label.month'] = "Mes";
$lang['Cpe.label.weekday'] = "Dia de la semana";
$lang['Cpe.label.command'] = "Comando";
$lang['Cpe.label.or'] = "O";
$lang['Cpe.label.company'] = "Compañía";
$lang['Cpe.label.companydiv'] = "División de la empresa";
$lang['Cpe.label.city'] = "Ciudad";
$lang['Cpe.label.state'] = "Estado";
$lang['Cpe.label.selectdom'] = "Seleccionar Dominio";
$lang['Cpe.label.country'] = "País";
$lang['Cpe.label.keyfile'] = "Archivo de clave asociada al certificado";
$lang['Cpe.label.crtfile'] = "Contenido del certificado SSL";
$lang['Cpe.label.passphrase'] = "Frase de contraseña";
$lang['Cpe.label.account'] = "Cuenta";
$lang['Cpe.label.keypaste'] = "Pegue la tecla debajo";
$lang['Cpe.label.keysize'] = "Tamaño de la clave";
$lang['Cpe.label.deletedbfromuser'] = "Eliminar la base de datos del usuario";
$lang['Cpe.label.updateprivs'] = "Actualizar privilegios";
$lang['Cpe.label.parkeddomain'] = "Dominio Aparcado";
$lang['Cpe.label.pointsto'] = "Redireccionar a";
$lang['Cpe.label.close'] = "Cerrar";
$lang['Cpe.label.expire'] = "Fecha De Caducidad";
$lang['Cpe.label.webquota'] = "Cuota Web";
$lang['Cpe.label.bandwidth'] = "Limite de Bancho de Banda (en MB)";
$lang['Cpe.label.defaultpackage'] = "Paquete Predeterminado";
$lang['Cpe.label.default'] = "Predeterminado";
$lang['Cpe.label.package'] = "Paquete";
$lang['Cpe.label.shellacc'] = "Acceso Shell";
$lang['Cpe.label.cgiacc'] = "Acceso CGI";
$lang['Cpe.label.frontpageext'] = "Extensiones Frontpage";
$lang['Cpe.label.cptheme'] = "Tema del cPanel";
$lang['Cpe.label.maxftp'] = "Número máximo de Cuentas FTP";
$lang['Cpe.label.maxsql'] = "Número máximo de Base de Datos SQL";
$lang['Cpe.label.maxsub'] = "Número máximo de Subdominios";
$lang['Cpe.label.maxpop'] = "Número máximo de Cuentas de Correo";
$lang['Cpe.label.maxpark'] = "Número máximo de Dominios Aparcados";
$lang['Cpe.label.maxaddon'] = "Número máximo de Dominios Adicionales";
$lang['Cpe.label.type'] = "Tipo";
$lang['Cpe.label.acl'] = "Lista de Control de Acceso (si eres Reseller)";
$lang['Cpe.label.dedip'] = "IP Dedicada";
$lang['Cpe.label.keysnotavlb'] = "Claves y Certificado no están disponibles";
$lang['Cpe.label.email'] = "Correo";

// Tooltip
$lang['Cpe.tooltip.quota'] = "Proporcionar una cuota en megabytes, 0 indica que es ilimitada";
$lang['Cpe.tooltip.bandwidth'] = "Introduzca un límite de ancho de banda mensual en megabytes, 0 indica que es ilimitada";

// Cron specified
$lang['Cpe.cron.commonsettings'] = "-- Ajustes comunes --";
$lang['Cpe.cron.everyminute'] = "Cada minuto (* * * * *)";
$lang['Cpe.cron.everyfive'] = "Cada 5 minutos (*/5 * * * *)";
$lang['Cpe.cron.twicehour'] = "Dos veces por hora (0,30 * * * *)";
$lang['Cpe.cron.oncehour'] = "Una vez por hora (0 * * * *)";
$lang['Cpe.cron.twiceday'] = "Dos veces por dia (0 0,12 * * *)";
$lang['Cpe.cron.onceday'] = "Una vez por dia (0 0 * * *)";
$lang['Cpe.cron.onceweek'] = "Una vez a la semana (0 0 * * 0)";
$lang['Cpe.cron.firstand15th'] = "1° y 15° (0 0 1,15 * *)";
$lang['Cpe.cron.oncemonth'] = "Una vez al mes (0 0 1 * *)";
$lang['Cpe.cron.onceyear'] = "Una vez al año (0 0 1 1 *)";
$lang['Cpe.cron.minute.everyminute'] = "Cada minuto (*)";
$lang['Cpe.cron.minute.otherminute'] = "Cada dos minutos (*/2)";
$lang['Cpe.cron.minute.everyfive'] = "Cada 5 minutos (*/5)";
$lang['Cpe.cron.minute.everyten'] = "Cada 10 minutos (*/10)";
$lang['Cpe.cron.minute.every15'] = "Cada 15 minutos (*/15)";
$lang['Cpe.cron.minute.every30'] = "Cada 30 minutos (0,30)";
$lang['Cpe.cron.minute.minutes'] = "-- Minutos --";
$lang['Cpe.cron.minute.top'] = "Top de la hora";
$lang['Cpe.cron.minute.quarterpast'] = "Un cuarto";
$lang['Cpe.cron.minute.halfpast'] = "Y media";
$lang['Cpe.cron.minute.quartertil'] = "cuarto para las";
$lang['Cpe.cron.minute.label'] = ":%1\$s %2\$s (%3\$s)"; // %1$s is the formatted minutes, %2$s is the label for the minute (e.g. "quarter past"), %3$s is the minute number
$lang['Cpe.cron.hour.everyhour'] = "Cada hora (*)";
$lang['Cpe.cron.hour.otherhour'] = "Cada 2 horas(*/2)";
$lang['Cpe.cron.hour.everythree'] = "Cada 3 horas (*/3)";
$lang['Cpe.cron.hour.everyfour'] = "Cada 4 horas (*/4)";
$lang['Cpe.cron.hour.everysix'] = "Cada 6 horas (*/6)";
$lang['Cpe.cron.hour.everytwelve'] = "Cada 12 horas (0,12)";
$lang['Cpe.cron.hour.hours'] = "-- Horas --";
$lang['Cpe.cron.hour.label'] = "%1\$s %2\$s (%3\$s)"; // %1$s is the date, %2$s is a label for the date (e.g. midnight), %2$s is the hour number
$lang['Cpe.cron.day.everyday'] = "Cada día (*)";
$lang['Cpe.cron.day.everyother'] = "Cada 2 días (*/2)";
$lang['Cpe.cron.day.twicemonth'] = "1° y 15° (1,15)";
$lang['Cpe.cron.day.days'] = "-- Días --";
$lang['Cpe.cron.day.label'] = "%1\$s%2\$s (%1\$s)"; // %1$s is the day number (e.g. 1), %2$s is the ordinal indicator (e.g. st)
$lang['Cpe.cron.month.everymonth'] = "Cada mes (*)";
$lang['Cpe.cron.month.everyother'] = "Cada 2 meses (*/2)";
$lang['Cpe.cron.month.everythree'] = "Cada 3 meses (*/4)";
$lang['Cpe.cron.month.everysix'] = "Cada 6 meses (1,7)";
$lang['Cpe.cron.month.months'] = "-- Meses --";
$lang['Cpe.cron.month.month'] = "%1\$s (%2\$s)"; // %1$s is the month name, %2$s is the month number
$lang['Cpe.cron.weekday.everyday'] = "Cada día de la semana (*)";
$lang['Cpe.cron.weekday.monfri'] = "Lunes a Viernes (1-5)";
$lang['Cpe.cron.weekday.weekend'] = "Sábado y domingo (6,0)";
$lang['Cpe.cron.weekday.monwedfri'] = "Lunes, miércoles, viernes (1,3,5)";
$lang['Cpe.cron.weekday.tuethu'] = "Martes y Jueves (2,4)";
$lang['Cpe.cron.weekday.weekday'] = "-- Dias de la Semana --";
$lang['Cpe.cron.weekday.label'] = "%1\$s (%2\$s)"; // %1$s is the weekday name, %2$s is the weekday number

$lang['Cpe.sunday'] = "Dominogo";
$lang['Cpe.monday'] = "Lunes";
$lang['Cpe.tuesday'] = "Martes";
$lang['Cpe.wednesday'] = "Miércoles";
$lang['Cpe.thursday'] = "Jueves";
$lang['Cpe.friday'] = "Viernes";
$lang['Cpe.saturday'] = "Sábado";

// Table Headers
$lang['Cpe.th.login'] = "Iniciar Sesión";
$lang['Cpe.th.creationdate'] = "Fecha de Creacion";
$lang['Cpe.th.file'] = "Archivo";
$lang['Cpe.th.name'] = "Nombre";
$lang['Cpe.th.status'] = "Estado";
$lang['Cpe.th.path'] = "Ruta de acceso";
$lang['Cpe.th.quota'] = "Cuota";
$lang['Cpe.th.diskusage'] = "Uso de disco";
$lang['Cpe.th.actions'] = "Acciones";
$lang['Cpe.th.ftpspecial'] = "Cuentas FTP especiales";
$lang['Cpe.th.username'] = "Usuarios";
$lang['Cpe.th.size'] = "Tamaño";
$lang['Cpe.th.dbname'] = "Nombre De La Base De Datos";
$lang['Cpe.th.linkeddbs'] = "Bases de Datos vinculados";
$lang['Cpe.th.command'] = "Comando";
$lang['Cpe.th.redirection'] = "Redirección";
$lang['Cpe.th.docroot'] = "Documentación Root";
$lang['Cpe.th.subdomain'] = "Subdominios";
$lang['Cpe.th.basedir'] = "Directorio de Bases de Datos";
$lang['Cpe.th.minute'] = "Minuto";
$lang['Cpe.th.hour'] = "Hora";
$lang['Cpe.th.day'] = "Día";
$lang['Cpe.th.month'] = "Mes";
$lang['Cpe.th.weekday'] = "Día de la semana";
$lang['Cpe.th.command'] = "Comando";
$lang['Cpe.th.domain'] = "Dominio";
$lang['Cpe.th.expire'] = "Fecha De Caducidad";
$lang['Cpe.th.host'] = "Host";


// Misc
$lang['Cpe.misc.genpasswordtext'] = "Tu contraseña generada es: ";
$lang['Cpe.misc.quotahint'] = "en MB (0 indica que es ilimitada)";
$lang['Cpe.misc.notredirected'] = "no redireccionado";
$lang['Cpe.misc.parkedhint'] = "<strong>Sugerencia:</strong> Dominios deben estar registrados en un registrador válido antes de que se pueden aparcar. Además, no van a ser funcional a menos que estén configurados para el punto en tus servidores DNS.";
$lang['Cpe.misc.addonhint'] = "<strong>Sugerencia:</strong> Esta función debe estar habilitada por su cuenta antes de poder utilizarlo. Los Dominios Addon no funcionarán a menos que el nombre de dominio se ha registrado en un registrador válido y configurado para apuntar a los servidores DNS correctos.";
$lang['Cpe.misc.packageaddhint'] = "<h3>¡Atención!</h3><p>Todo proporcionado arriba en el campo \"Cuota Web\", reemplazará las opciones por defecto para el paquete elegido.</p>";
$lang['Cpe.misc.quotaholder'] = "Por favor, introduzca un nueva cuota";
$lang['Cpe.misc.success'] = "Los cambios fueron guardados correctamente!";
$lang['Cpe.misc.loadertext'] = "Por favor espere...";

// Module management
$lang['Cpe.add_module_row'] = "Añadir Servidor";
$lang['Cpe.add_module_group'] = "Añadir grupo de servidores";
$lang['Cpe.manage.module_rows_title'] = "Servidores";
$lang['Cpe.manage.module_groups_title'] = "Grupos de Servidores";
$lang['Cpe.manage.module_rows_heading.name'] = "Etiqueta del Servidor";
$lang['Cpe.manage.module_rows_heading.hostname'] = "Nombre del Host";
$lang['Cpe.manage.module_rows_heading.accounts'] = "Cuentas";
$lang['Cpe.manage.module_rows_heading.options'] = "Opciones";
$lang['Cpe.manage.module_groups_heading.name'] = "Nombre del grupo";
$lang['Cpe.manage.module_groups_heading.servers'] = "Cantidad de servidores";
$lang['Cpe.manage.module_groups_heading.options'] = "Opciones";
$lang['Cpe.manage.module_rows.count'] = "%1\$s / %2\$s"; // %1$s is the current number of accounts, %2$s is the total number of accounts available
$lang['Cpe.manage.module_rows.edit'] = "Editar";
$lang['Cpe.manage.module_groups.edit'] = "Editar";
$lang['Cpe.manage.module_rows.delete'] = "Eliminar";
$lang['Cpe.manage.module_groups.delete'] = "Eliminar";
$lang['Cpe.manage.module_rows.confirm_delete'] = "¿Estás seguro que deseas eliminar este servidor?";
$lang['Cpe.manage.module_groups.confirm_delete'] = "¿Estás seguro que deseas eliminar este grupo de servidores?";
$lang['Cpe.manage.module_rows_no_results'] = "No hay servidores.";
$lang['Cpe.manage.module_groups_no_results'] = "No hay grupos de servidores.";


$lang['Cpe.order_options.first'] = "Primer servidor no completo";

// Add row
$lang['Cpe.add_row.box_title'] = "Agregar servidor cPanel";
$lang['Cpe.add_row.basic_title'] = "Ajustes Básicos";
$lang['Cpe.add_row.name_servers_title'] = "Nombre de Servidores";
$lang['Cpe.add_row.notes_title'] = "Notas";
$lang['Cpe.add_row.name_server_btn'] = "Añadir nombre de servidor adicional";
$lang['Cpe.add_row.name_server_col'] = "Nombre del Servidor";
$lang['Cpe.add_row.name_server_host_col'] = "Nombre del Host";
$lang['Cpe.add_row.name_server'] = "Nombre del Servidor %1\$s"; // %1$s is the name server number (e.g. 3)
$lang['Cpe.add_row.remove_name_server'] = "Eliminar";
$lang['Cpe.add_row.add_btn'] = "Añadir Servidor";

$lang['Cpe.edit_row.box_title'] = "Editar Servidor cPanel";
$lang['Cpe.edit_row.basic_title'] = "Ajustes Básicos";
$lang['Cpe.edit_row.name_servers_title'] = "Nombre de Servidores";
$lang['Cpe.edit_row.notes_title'] = "Notas";
$lang['Cpe.edit_row.name_server_btn'] = "Añadir nombre de servidor adicional";
$lang['Cpe.edit_row.name_server_col'] = "Nombre del Servidor";
$lang['Cpe.edit_row.name_server_host_col'] = "Nombre del Host";
$lang['Cpe.edit_row.name_server'] = "Nombre del Servidor %1\$s"; // %1$s is the name server number (e.g. 3)
$lang['Cpe.edit_row.remove_name_server'] = "Eliminar";
$lang['Cpe.edit_row.add_btn'] = "Editar Servidor";

$lang['Cpe.row_meta.server_name'] = "Etiqueta de servidor";
$lang['Cpe.row_meta.host_name'] = "Nombre de Host";
$lang['Cpe.row_meta.user_name'] = "Usuario";
$lang['Cpe.row_meta.key'] = "Clave a distacia";
$lang['Cpe.row_meta.password'] = "Contraseña";
$lang['Cpe.row_meta.use_ssl'] = "Usar SSL para conectar a la API (recomendado)";
$lang['Cpe.row_meta.account_limit'] = "Cuenta Limitada";

// Package fields
$lang['Cpe.package_fields.type'] = "Tipo de Cuenta";
$lang['Cpe.package_fields.type_standard'] = "Estándar";
$lang['Cpe.package_fields.type_reseller'] = "Reseller";
$lang['Cpe.package_fields.package'] = "Paquete cPanel";
$lang['Cpe.package_fields.acl'] = "Lista de Control de acceso";
$lang['Cpe.package_fields.acl_default'] = "Predeterminado";

// Service fields
$lang['Cpe.service_field.domain'] = "Dominio";
$lang['Cpe.service_field.username'] = "Usuario";
$lang['Cpe.service_field.password'] = "Contraseña";
$lang['Cpe.service_field.confirm_password'] = "Confirmar Contraseña";

// Service management
$lang['Cpe.tab_stats.info_title'] = "Información";
$lang['Cpe.tab_stats.info_heading.field'] = "Campo";
$lang['Cpe.tab_stats.info_heading.value'] = "Valor";
$lang['Cpe.tab_stats.info.domain'] = "Dominio";
$lang['Cpe.tab_stats.info.ip'] = "Dirección IP";
$lang['Cpe.tab_stats.bandwidth_title'] = "Ancho de Banda";
$lang['Cpe.tab_stats.bandwidth_heading.used'] = "Usado";
$lang['Cpe.tab_stats.bandwidth_heading.limit'] = "Limitado";
$lang['Cpe.tab_stats.bandwidth_value'] = "%1\$s MB"; // %1$s is the amount of bandwidth in MB
$lang['Cpe.tab_stats.bandwidth_unlimited'] = "Ilimitado";
$lang['Cpe.tab_stats.disk_title'] = "Disco";
$lang['Cpe.tab_stats.disk_heading.used'] = "Usado";
$lang['Cpe.tab_stats.disk_heading.limit'] = "Limitado";
$lang['Cpe.tab_stats.disk_value'] = "%1\$s MB"; // %1$s is the amount of disk in MB
$lang['Cpe.tab_stats.disk_unlimited'] = "Ilimitado";

// Client Service management
$lang['Cpe.tab_client_stats.info_title'] = "Información";
$lang['Cpe.tab_client_stats.info_heading.field'] = "Campo";
$lang['Cpe.tab_client_stats.info_heading.value'] = "Valor";
$lang['Cpe.tab_client_stats.info.domain'] = "Dominio";
$lang['Cpe.tab_client_stats.info.ip'] = "Dirección IP";
$lang['Cpe.tab_client_stats.info.user'] = "Usuario";
$lang['Cpe.tab_client_stats.info.plan'] = "Paquete Actual";
$lang['Cpe.tab_client_stats.info.theme'] = "Tema";
$lang['Cpe.tab_client_stats.info.maxftp'] = "Número máximo de cuentas FTP";
$lang['Cpe.tab_client_stats.info.maxsql'] = "Número máximo de bases de datos SQL";
$lang['Cpe.tab_client_stats.info.maxpop'] = "Número máximo de cuentas de correo";
$lang['Cpe.tab_client_stats.info.maxsub'] = "Número máximo de Subdominios";
$lang['Cpe.tab_client_stats.info.maxparked'] = "Número máximo de Dominios Aparcados";
$lang['Cpe.tab_client_stats.info.maxaddons'] = "Número máximo de Dominios Addons";
$lang['Cpe.tab_client_stats.info.email'] = "Email De Contacto";
$lang['Cpe.tab_client_stats.info.startdate'] = "Fecha De Creacion";
$lang['Cpe.tab_client_stats.usage_title'] = "Uso de recursos de la cuenta";
$lang['Cpe.tab_client_stats.bandwidth_title'] = "Ancho de Banda";
$lang['Cpe.tab_client_stats.bandwidth_heading.used'] = "Usado (%1\$s MB)";
$lang['Cpe.tab_client_stats.bandwidth_heading.unused'] = "Libre (%1\$s MB)";
$lang['Cpe.tab_client_stats.disk_title'] = "Disco";
$lang['Cpe.tab_client_stats.disk_heading.used'] = "Usado (%1\$s MB)";
$lang['Cpe.tab_client_stats.disk_heading.unused'] = "Libre (%1\$s MB)";

// Service info
$lang['Cpe.service_info.username'] = "Usuario";
$lang['Cpe.service_info.password'] = "Contraseña";
$lang['Cpe.service_info.server'] = "Servidor";
$lang['Cpe.service_info.options'] = "Opciones";
$lang['Cpe.service_info.option_login'] = "Iniciar Sesión";

// Errors
$lang['Cpe.!error.server_name_valid'] = "Debe introducir una etiqueta de servidor.";
$lang['Cpe.!error.host_name_valid'] = "El nombre de host parece ser inválido.";
$lang['Cpe.!error.user_name_valid'] = "El nombre de usuario parece ser inválida.";
$lang['Cpe.!error.remote_key_valid'] = "La clave a distancia parece ser inválida.";
$lang['Cpe.!error.remote_key_valid_connection'] = "Una conexión con el servidor no se pudo establecer. Por favor, compruebe que el nombre de host, nombre de usuario y clave a distancia son correctos.";
$lang['Cpe.!error.account_limit_valid'] = "El límite de la cuenta debe dejarse en blanco (para las cuentas ilimitadas) o ajustado a un valor entero.";
$lang['Cpe.!error.name_servers_valid'] = "Uno o más de los servidores de nombre introducidos no son válidos.";
$lang['Cpe.!error.name_servers_count'] = "Debe definir al menos 2 servidores de nombres.";
$lang['Cpe.!error.meta[type].valid'] = "Tipo de cuenta debe ser estándar o Reseller.";
$lang['Cpe.!error.servername.empty'] = "Se requiere una etiqueta de servidor";
$lang['Cpe.!error.hostname.empty'] = "Se requiere un nombre de host";
$lang['Cpe.!error.username.empty'] = "Se requiere un nombre de usuario";
$lang['Cpe.!error.meta[package].empty'] = "Se requiere un paquete cPanel.";
$lang['Cpe.!error.api.internal'] = "Se ha producido un error interno, o el servidor no respondió a la solicitud.";

$lang['Cpe.!error.cpanel_domain.format'] = "Por favor, introduzca un nombre de dominio válido.";
$lang['Cpe.!error.cpanel_domain.test'] = "Nombre de dominio no puede empezar con 'prueba'.";
$lang['Cpe.!error.cpanel_username.format'] = "El nombre de usuario puede contener sólo letras y números y no puede comenzar con un número.";
$lang['Cpe.!error.cpanel_username.test'] = "El nombre de usuario puede no empezar con 'prueba'.";
$lang['Cpe.!error.cpanel_username.length'] = "El nombre de usuario debe tener entre 1 y 8 caracteres.";
$lang['Cpe.!error.cpanel_password.valid'] = "La contraseña debe tener al menos 8 caracteres.";
$lang['Cpe.!error.cpanel_password.matches'] = "Las contraseñas no coinciden.";
?>
