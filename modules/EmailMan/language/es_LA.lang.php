<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/*********************************************************************************

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
	'LBL_SEND_DATE_TIME'						=> 'Fecha de Envío',
	'LBL_IN_QUEUE'								=> 'En Proceso',
	'LBL_IN_QUEUE_DATE'							=> 'Fecha de colocación en fila',

	'ERR_INT_ONLY_EMAIL_PER_RUN'				=> 'Utilice únicamente valores enteros para especificar el número de correos electrónicos enviados por lote',

	'LBL_ATTACHMENT_AUDIT'						=> ' ha sido enviado.  No se ha duplicado a nivel local para minimizar la utilización de espacio en el disco duro.',
	'LBL_CONFIGURE_SETTINGS'					=> 'Configurar Opciones de Correo',
	'LBL_CUSTOM_LOCATION'						=> 'Definido por el Usuario',
	'LBL_DEFAULT_LOCATION'						=> 'Por Defecto',
	
	'LBL_DISCLOSURE_TITLE'						=> 'Añadir Mensaje sobre Confidencialidad de Contenido a Cada Correo',
	'LBL_DISCLOSURE_TEXT_TITLE'					=> 'Confidencialidad de Contenido',
	'LBL_DISCLOSURE_TEXT_SAMPLE'				=> 'AVISO: Este mensaje de correo es para uso único de su(s) destinatario(s) y puede contener información privada y confidencial. Queda prohibido cualquier tipo de revisión, uso, divulgación o distribución no autorizada. Si usted no es el destinatario previsto, por favor, destruya todas las copias del mensaje original y notifique al remitente de forma que podamos corregir la dirección de correo en nuestro registro. Gracias.',
	
	'LBL_EMAIL_DEFAULT_CHARSET'					=> 'Redactar mensajes de correo electrónico con este juego de caracteres',
	'LBL_EMAIL_DEFAULT_EDITOR'					=> 'Redactar correo usando este cliente',
	'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS'		=> 'Eliminar archivos adjuntos y notas relacionadas junto con los Correos Electrónicos borrados',
	'LBL_EMAIL_GMAIL_DEFAULTS'					=> 'Rellenar previamente valores por defecto para Gmail&#153;',
	'LBL_EMAIL_PER_RUN_REQ'						=> 'Número de correos electrónicos enviados por lote:',
	'LBL_EMAIL_SMTP_SSL'						=> '¿Habilitar SMTP sobre SSL?',
	'LBL_EMAIL_USER_TITLE'						=> 'Configuración por Defecto de Correo Electrónico para el Usuario',
	'LBL_EMAIL_OUTBOUND_CONFIGURATION'			=> 'Configuración de Correo Saliente',
	'LBL_EMAILS_PER_RUN'						=> 'Número de correos electrónicos enviados por lote:',
	'LBL_ID'									=> 'ID',
	'LBL_LIST_CAMPAIGN'							=> 'Campaña',
	'LBL_LIST_FORM_PROCESSED_TITLE'				=> 'Procesados',
	'LBL_LIST_FORM_TITLE'						=> 'En cola',
	'LBL_LIST_FROM_EMAIL'						=> 'Correo Electrónico de Remitente',
	'LBL_LIST_FROM_NAME'						=> 'Nombre de Remitente',
	'LBL_LIST_IN_QUEUE'							=> 'En Proceso',
	'LBL_LIST_MESSAGE_NAME'						=> 'Mensaje de Marketing',
	'LBL_LIST_RECIPIENT_EMAIL'					=> 'Correo Electrónico del Destinatario',
	'LBL_LIST_RECIPIENT_NAME'					=> 'Nombre del Destinatario',
	'LBL_LIST_SEND_ATTEMPTS'					=> 'Intentos de Envío',
	'LBL_LIST_SEND_DATE_TIME'					=> 'Enviar el',
	'LBL_LIST_USER_NAME'						=> 'Nombre de Usuario',
	'LBL_LOCATION_ONLY'							=> 'Ubicación',
	'LBL_LOCATION_TRACK'						=> 'Ubicación de los archivos de seguimiento de campaña (como campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY'                     => 'Guardar copias de los mensajes de la campaña:',
    'LBL_CAMP_MESSAGE_COPY_DESC'                     => '¿Desea guardar copias completas de <bold>CADA</bold> mensaje de Correo Electrónico enviado durante todas las campañas?  <bold>Se recomienda el valor por defecto de no hacerlo</bold>.  Si elige no, sólo se guardará la plantilla enviada y las variables para recrear el mensaje individual.',
	'LBL_MAIL_SENDTYPE'							=> 'Agente de Transferencia de Correo (MTA):',
	'LBL_MAIL_SMTPAUTH_REQ'						=> 'Usar Autenticación SMTP:',
	'LBL_MAIL_SMTPPASS'							=> 'Contraseña:',
	'LBL_MAIL_SMTPPORT'							=> 'Puerto SMTP:',
	'LBL_MAIL_SMTPSERVER'						=> 'Servidor de Correo SMTP:',
	'LBL_MAIL_SMTPUSER'							=> 'Nombre de usuario:',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => 'Elija su proveedor de Correo Electrónico:',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Contraseña de Correo Yahoo!:',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'ID de Correo Yahoo!:',
	'LBL_GMAIL_SMTPPASS'					=> 'Contraseña de Gmail:',
	'LBL_GMAIL_SMTPUSER'					=> 'Dirección de Correo Electrónico de Gmail:',
	'LBL_EXCHANGE_SMTPPASS'					=> 'Contraseña de Exchange:',
	'LBL_EXCHANGE_SMTPUSER'					=> 'Nombre de usuario de Exchange:',
	'LBL_EXCHANGE_SMTPPORT'					=> 'Puerto de Servidor Exchange:',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'Servidor Exchange:',
    'LBL_AUTH_STATUS' => 'Estado',
    'LBL_AUTHORIZED_ACCOUNT' => 'Dirección de correo electrónico autorizado',
	'LBL_EMAIL_LINK_TYPE'				=> 'Cliente de correo electrónico',
    'LBL_EMAIL_LINK_TYPE_HELP'			=> '<b>Cliente de Correo Sugar:</b> Enviar correo utilizando el cliente de correo de la aplicación Sugar.<br><b>Cliente de Correo Externo:</b> Enviar correo utilizando un cliente de correo fuera de la aplicación Sugar, como Microsoft Outlook.',
	'LBL_MARKETING_ID'							=> 'Id de Mercadotecnia',
    'LBL_MODULE_ID'                             => 'EmailMan',
	'LBL_MODULE_NAME'							=> 'Configuración de Correo',
	'LBL_MODULE_NAME_SINGULAR'						=> 'Configuración de Correo',
	'LBL_CONFIGURE_CAMPAIGN_EMAIL_SETTINGS'    => 'Configurar Opciones de Correo de la Campaña',
	'LBL_MODULE_TITLE'							=> 'Administración de Correo Electrónico Saliente en cola',
	'LBL_NOTIFICATION_ON_DESC' 					=> 'Cuando está habilitado, se enviarán correos a los usuarios cuando se les asignen registros.',
	'LBL_NOTIFY_FROMADDRESS' 					=> 'Dirección "De":',
	'LBL_NOTIFY_FROMNAME' 						=> 'Nombre "De":',
	'LBL_NOTIFY_ON'								=> 'Notificaciones de Asignación',
	'LBL_ALLOW_USER_EMAIL_ACCOUNT'				=> 'Allow users to configure email accounts',
	'LBL_NOTIFY_SEND_BY_DEFAULT'				=> 'Enviar notificaciones a usuarios nuevos',
	'LBL_NOTIFY_TITLE'							=> 'Opciones de Correo',
	'LBL_OLD_ID'								=> 'Id Antiguo',
	'LBL_OUTBOUND_EMAIL_TITLE'					=> 'Opciones de Correo Saliente',
	'LBL_RELATED_ID'							=> 'Id Relacionado',
	'LBL_RELATED_TYPE'							=> 'Tipo Relacionado',
	'LBL_SAVE_OUTBOUND_RAW'						=> 'Guardar los Emails Salientes en formato original',
	'LBL_SEARCH_FORM_PROCESSED_TITLE'			=> 'Búsqueda de Procesados',
	'LBL_SEARCH_FORM_TITLE'						=> 'Búsqueda de en cola',
	'LBL_VIEW_PROCESSED_EMAILS'					=> 'Ver Correos Electrónicos Procesados',
	'LBL_VIEW_QUEUED_EMAILS'					=> 'Ver Correos Electrónicos en cola',
	'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE'	=> 'Valor en Config.php para site_url',
	'TXT_REMOVE_ME_ALT'							=> 'Para borrar su suscripción a esta lista de correo vaya a',
	'TXT_REMOVE_ME_CLICK'						=> 'haga clic aquí',
	'TXT_REMOVE_ME'								=> 'Para borrar su suscripción a esta lista de correo',
	'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER'		=> 'Enviar notificación usando como remitente la dirección de correo electrónico del usuario asignador',
    'LBL_EMAIL_OPT_OUT_DEFAULT' => 'Dar de baja las nuevas direcciones de correo electrónico por defecto',

	'LBL_SECURITY_TITLE'						=> 'Configuración de Seguridad de Correo Electrónico',
	'LBL_SECURITY_DESC'							=> 'Marque lo que NO debería permitirse en Correo Electrónico entrante o mostrarse en el módulo de Correos Electrónicos.',
	'LBL_SECURITY_APPLET'						=> 'Etiqueta Applet',
	'LBL_SECURITY_BASE'							=> 'Etiqueta Base',
	'LBL_SECURITY_EMBED'						=> 'Etiqueta Embed',
	'LBL_SECURITY_FORM'							=> 'Etiqueta de Forma',
	'LBL_SECURITY_FRAME'						=> 'Etiqueta Frame',
	'LBL_SECURITY_FRAMESET'						=> 'Etiqueta Frameset',
	'LBL_SECURITY_IFRAME'						=> 'Etiqueta iFrame',
	'LBL_SECURITY_IMPORT'						=> 'Importar Etiqueta',
	'LBL_SECURITY_LAYER'						=> 'Etiqueta de nivel',
	'LBL_SECURITY_LINK'							=> 'Etiqueta de vínculo',
	'LBL_SECURITY_OBJECT'						=> 'Etiqueta de Objeto',
	'LBL_SECURITY_OUTLOOK_DEFAULTS'				=> 'Seleccionar la configuración mínima de seguridad por defecto en Outlook (errores en la visualización del contenido).',
	'LBL_SECURITY_SCRIPT'						=> 'Etiqueta de script',
	'LBL_SECURITY_STYLE'						=> 'Etiqueta de estilo',
	'LBL_SECURITY_TOGGLE_ALL'					=> 'Cambiar Todas las Opciones',
	'LBL_SECURITY_XMP'							=> 'Etiqueta Xmp',
    'LBL_YES'                                   => 'Sí',
    'LBL_NO'                                    => 'No',
    'LBL_PREPEND_TEST'                          => '[Prueba]:',
	'LBL_SEND_ATTEMPTS'							=> 'Intentos de Envío',
	'LBL_OUTGOING_SECTION_HELP'                 => 'Configurar el servidor de correo saliente por defecto para enviar notificaciones de correo, incluyendo alertas de flujo de trabajo.',
    'LBL_ALLOW_DEFAULT_SELECTION'               => 'Permite a los usuarios utilizar esta cuenta para correo saliente:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP'          => 'Cuando esta opción está seleccionada, todos los usuarios podrán enviar correos utilizando la misma<br> cuenta de correo saliente para enviar notificaciones del sistema y alertas.  Si la opción no está seleccionada,<br> los usuarios podrán utilizar el servidor de correo saliente una vez que proporcionen la información sobre su propia cuenta.',
    'LBL_FROM_ADDRESS_HELP'                     => 'Cuando esta activada, el nombre y correo electrónico del usuario que asigna se incluirá en el campo &#39; De&#39; del correo electrónico. Es posible que esta funcionalidad no esté habilitada con servidores SMTP que no permiten el envío desde una dirección de correo diferente a la de la cuenta del servidor.',
    'LBL_EMAIL_OPT_OUT_DEFAULT_TOOLTIP' => 'Cuando se añada una nueva dirección de correo electrónico, automáticamente se dará de baja. No se enviarán correos electrónicos de campañas a las direcciones que se han dado de baja. El cambio de este ajuste no afectará a las direcciones de correo electrónico existentes.',
	'LBL_GMAIL_LOGO' => 'Gmail' /*for 508 compliance fix*/,
	'LBL_YAHOO_MAIL_LOGO' => 'Yahoo Mail' /*for 508 compliance fix*/,
	'LBL_EXCHANGE_LOGO' => 'Exchange' /*for 508 compliance fix*/,
	'LBL_HELP' => 'Ayuda' /*for 508 compliance fix*/,
    'LBL_UNAUTH_ACCESS' => 'Acceso a administración no autorizado.',
    'LBL_INVALID_ENTRY_POINT' => 'Punto de acceso no válido.',
);
