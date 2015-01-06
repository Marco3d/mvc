<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="<?php echo $_layoutParams['ruta_img']; ?>favicon.png">

        <title><?php if (isset($this->titulo)) echo $this->titulo; ?></title>
        <link href="<?php echo $_layoutParams['ruta_css']; ?>bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo $_layoutParams['ruta_css']; ?>starter-template.css" rel="stylesheet">
        <script src="<?php echo $_layoutParams['ruta_js']; ?>ie-emulation-modes-warning.js"></script>

    </head>

    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo BASE_URL;?>"><?php echo APP_TITULO; ?></a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <!--                        <li class="active"><a href="#">Home</a></li>-->
                        <?php if (isset($_layoutParams['menu'])): ?>
                            <?php for ($i = 0; $i < count($_layoutParams['menu']); $i++): ?>

                            <?php 
                            	if($item && $_layoutParams['menu'][$i]['id'] == $item ){ 
				                        $_item_style = 'current'; 
				                    } else {
				                        $_item_style = '';
				                    }
			                    ?>
                           

                                <li><a class="<?php echo $_item_style; ?>" href="<?php echo $_layoutParams['menu'][$i]['enlace']; ?>"><?php echo $_layoutParams['menu'][$i]['titulo']; ?></a></li>
                            <?php endfor; ?>
                        <?php endif; ?>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <div class="container">

            <div class="starter-template">
                <h1><?php echo APP_NAME; ?></h1>
                <p><?php echo APP_SLOGAN; ?></p>
            </div>

        

