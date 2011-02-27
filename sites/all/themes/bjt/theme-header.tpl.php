<!doctype html>
<html>
<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyled Content in IE */ ?> </script>
</head>
<body class="<?php print $body_classes; ?>">
    <div id="wrap">
    <header>
        <h1><a href="<?php echo '/bjt/'; ?>">Biblioteca <span>Virtuală</span></a></h1>
        <!--<h2>Locul unde ... lorem ipsum dolor sit amet</h2>-->

        <?php echo $search_box; ?>
        
    </header>

    <div id="page-content">
        