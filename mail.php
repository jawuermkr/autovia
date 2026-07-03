<?php

if (isset($_POST['btnSend'])) {

  if ($_POST['robot'] == 10) {
    $nombre  = htmlspecialchars($_POST['nombre']);
    $cel     = htmlspecialchars($_POST['cel']);
    $mail    = htmlspecialchars($_POST['mail']);
    $mensaje = nl2br(htmlspecialchars($_POST['mensaje']));

    $asunto = "Contacto";

    $cuerpo = '
  <!DOCTYPE html>
  <html lang="es">
  
  <head>
    <meta charset="UTF-8">
    <title>Nuevo Contacto</title>
  </head>
  
  <body style="margin:0;padding:30px;background:#f4f4f4;font-family:Arial,Helvetica,sans-serif;">
  
    <table width="100%" cellpadding="0" cellspacing="0" border="0">
      <tr>
        <td align="center">
  
          <table width="650" cellpadding="0" cellspacing="0" border="0" style="background:#ffffff;border-radius:10px;overflow:hidden;border:1px solid #dddddd;">
  
            <tr>
              <td style="background:#021533;padding:25px;text-align:center;color:#ffffff;">
                <h1 style="margin:0;font-size:28px;">Nuevo Mensaje de Contacto</h1>
              </td>
            </tr>
  
            <tr>
              <td style="padding:30px;">
  
                <p style="font-size:16px;color:#555;">
                  Se ha recibido un nuevo mensaje desde el formulario de contacto.
                </p>
  
                <table width="100%" cellpadding="8" cellspacing="0" style="border-collapse:collapse;font-size:15px;">
  
                  <tr>
                    <td width="160" style="font-weight:bold;background:#f7f7f7;border:1px solid #ddd;">Nombre</td>
                    <td style="border:1px solid #ddd;">' . $nombre . '</td>
                  </tr>
  
                  <tr>
                    <td style="font-weight:bold;background:#f7f7f7;border:1px solid #ddd;">Celular</td>
                    <td style="border:1px solid #ddd;">' . $cel . '</td>
                  </tr>
  
                  <tr>
                    <td style="font-weight:bold;background:#f7f7f7;border:1px solid #ddd;">Correo</td>
                    <td style="border:1px solid #ddd;">' . $mail . '</td>
                  </tr>
  
                  <tr>
                    <td style="font-weight:bold;background:#f7f7f7;border:1px solid #ddd;vertical-align:top;">Mensaje</td>
                    <td style="border:1px solid #ddd;">' . $mensaje . '</td>
                  </tr>
  
                </table>
  
              </td>
            </tr>
  
            <tr>
              <td style="background:#f7f7f7;padding:20px;text-align:center;font-size:12px;color:#777;">
                Este correo fue generado automáticamente desde el formulario de contacto del sitio web.
              </td>
            </tr>
  
          </table>
  
        </td>
      </tr>
    </table>
  
  </body>
  
  </html>';

    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "From: Sitio Web <no-reply@autoviaasistencia.com>\r\n";
    $headers .= "Reply-To: " . $mail . "\r\n";

    if (mail("verdaluno@gmail.com, autoviaasistencia@gmail.com", $asunto, $cuerpo, $headers)) {

      echo "<script>
                alert('Gracias por enviar tus comentarios.');
                window.location='index.php';
              </script>";
    } else {

      echo "<script>
                alert('No fue posible enviar el correo.');
                history.back();
              </script>";
    }
  } else {
    echo "<script>
                alert('Por favor digite la respuesta a la suma para comprobar que no eres un Robot');
                history.back();
              </script>";
  }
} // <-- ESTA LLAVE FALTABA
