<?php defined("__LJTemplate") or die; ?>
<!DOCTYPE html>
<html>
    <head>
        <jdoc:include type="head" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="stylesheet" href="<?php echo $data['baseUrl']; ?>/vendors/bootstrap-3.3.4-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $data['baseUrl']; ?>/vendors/bootstrap-3.3.4-dist/bootstrap-theme.min.css">
        <script src="<?php echo $data['baseUrl']; ?>/vendors/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>

    </head>
    <body>
        <?php

        foreach ($data['blockConfigs'] as $blockConfig) {

            if (isset($blockConfig['size']))
                $className = $blockConfig['size'];

            if (isset($blockConfig['name']))
                $positionName = $blockConfig['name'];

            require_once (__DIR__ . '/blocks/' . $blockConfig['type'] . '.php');
        }

        ?>
    </body>
</html>
