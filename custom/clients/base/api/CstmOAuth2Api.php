<?php

require_once("clients/base/api/CurrentUserApi.php");

class CstmOAuth2Api extends OAuth2Api
{
    public function token(ServiceBase $api, array $args)
    {
        global $current_user, $db;
        $userArray = parent::token($api, $args);
        // $hoy = getdate();
        // // Obtenemos la fecha Actual
        // $query = "SELECT date_format(NOW(),'%W %H %i') AS Fecha,UTC_TIMESTAMP()";
        // $queryResult = $db->query($query);
        // $row = $db->fetchByAssoc($queryResult);
        // $date_Hoy = $row['Fecha'];
        // $array_date = explode(" ", $date_Hoy);
        // $dia_semana = $array_date[0];
        // $horaDia = $array_date[1] . ":" . $array_date[2];
        // $dateInput = date('H:i', strtotime($horaDia));
        // 
        // //$GLOBALS['log']->fatal('Puesto ' . $current_user->puestousuario_c);
        // if ($current_user->puestousuario_c == '27') {
        //     if ($current_user->access_hours_c != "") {
        // 
        //         $horas = json_decode($current_user->access_hours_c, true);
        //         $dateIn = $horas[$dia_semana]['entrada'];
        //         $dateOut = $horas[$dia_semana]['salida'];
        //         $dateComida = $horas[$dia_semana]['comida'];
        //         $dateRegreso = $horas[$dia_semana]['regreso'];
        // 
        //         if ($dateIn != "Libre" && $dateIn != "Bloqueado") {
        //             $from = $dateIn;
        //             $to = $dateOut;
        //             $input = $dateInput;
        //             $response = $this->accessHours($dateIn, $dateOut, $dateComida, $dateRegreso, $input);
        //             $GLOBALS['log']->fatal('Resultado horario ' . $response);
        //             if (!$response) {
        //                 $userArray = null;
        //                 $e = new SugarApiExceptionError(
        //                     "<br>Esta fuera de Horario",
        //                     null,
        //                     null,
        //                     0,
        //                     null
        //                 );
        //                 $api->needLogin($e);
        //             }
        //         } elseif ($dateIn == "Bloqueado") {
        //             $userArray = null;
        //             $e = new SugarApiExceptionError(
        //                 "<br>Hoy no cuenta con Acceso al CRM ",
        //                 null,
        //                 null,
        //                 0,
        //                 null
        //             );
        //             $api->needLogin($e);
        //         }
        // 
        //     }
        // }
        // //Recupera lista de usuarios
        // // $GLOBALS['log']->fatal('Usuario '. $current_user->user_name);
        // // $GLOBALS['log']->fatal('Platform '. $args['platform']);
        // $usuario = isset($current_user->user_name) ? $current_user->user_name : '';
        // $plataforma = isset($args['platform']) ? $args['platform'] : '';
        // global $app_list_strings;
        // $usuariosExternos = $app_list_strings['usuarios_api_ext_list'];
        // $plataformaNoValida = $app_list_strings['plataformas_no_validas_ext_list'];
        // //Valida usuario y plataforma definidos
        // if (!empty($usuario) && !empty($plataforma)) {
        //     //Valida si es usuario de integracion(externo) y si plataforma no está habilitada para usuario de integración
        //     if (in_array($usuario, $usuariosExternos) && in_array($plataforma, $plataformaNoValida) ){
        //         $userArray = null;
        //         $e = new SugarApiExceptionError(
        //             "La plataforma: ".$plataforma. " no es valida para usuario de integración",
        //             null,
        //             null,
        //             0,
        //             null
        //         );
        //         $api->needLogin($e);
        //     }
        // }
        $GLOBALS['log']->fatal('api ', $api);
        $GLOBALS['log']->fatal('args ', $args);
        $GLOBALS['log']->fatal('userArray ', $userArray);
        return $userArray;
    }

}
