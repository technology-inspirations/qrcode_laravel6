<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>QRCode Laravel 6</title>
  </head>
  <body>

    <div class="visible-print text-center">
      <h1>Laravel 6 QRCode Example</h1>
      {!! QrCode::size(250)->generate('imanart.tech'); !!}

      <p>Copyright all right reserved</p>
    </div>

  </body>
</html>
