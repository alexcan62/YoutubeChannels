<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Youtube Data API v3</title>
            <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        </head>
        <body>
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/">Youtube</a>
                    </div>
                    <div id="nav" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="/alexcan">Alex'Can'</a></li>
                            <li><a href="/cremi">CRémi</a></li>
                            <li><a href="/grafikart">Grafikart</a></li>
                            <li><a href="/primfx">PrimFX</a></li>
                            <li><a href="/graven">Graven</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container">
                <?= $content_for_template ?>
            </div>
            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        </body>
    </html>