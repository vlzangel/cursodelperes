<?php
	include dirname(dirname(__DIR__)).'/importador.php';
	include dirname(__DIR__).'/lib/recaptchalib.php';

	extract($_POST);

    $secret = "6LfCD0oUAAAAAJgVTkztrNVV-s44JHc_5g2W6i8B";

    $response = null;
    $reCaptcha = new ReCaptcha($secret);
    if ($_POST["g-recaptcha-response"]) {
        $response = $reCaptcha->verifyResponse(
            $_SERVER["REMOTE_ADDR"],
            $_POST["g-recaptcha-response"]
        );
    }

    if ($response != null && $response->success) {
		if( $terminos == "si" ){

			$data = array(
				"poblacion" => $poblacion,
				"provincia" => $provincia,
				"direccion" => $direccion,
				"cp" => $cp,
				"telefono" => $telefono,
				"comentarios" => $comentarios
			);

			$data = serialize($data);

			$DB->query(
				"INSERT INTO pedidos VALUES(
					NULL,
					'{$nombre}',
					'{$nif}',
					'{$email}',
					'{$data}',
					'Por pagar'
				)"
			);

			echo json_encode(array(
				"code" => 1,
				"data" => $_POST
			));

		}else{

			echo json_encode(array(
				"code" => 0,
				"error" => "Debe aceptar los t&eacute;rminos y condiciones"
			));
		}
	} else {
        echo json_encode(array(
            "error" => "Captcha no valido",
            "code" => 0
        ));
    }
?>