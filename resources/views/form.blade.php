<!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <title>Bootstrap Example</title>
                <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        </head>

        <body>
            <div class="container">
                <h2>Button Elements</h2>
                  <a href="#" class="btn btn-info" role="button">Link Button</a>
                     <button type="button" class="btn btn-info">Button</button>
                        <input type="button" class="btn btn-info" value="Input Button">
                        <input type="submit" class="btn btn-info" value="Submit Button">
            </div>
        </body>
    </html>
</html>
