<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?=$title;?></title>
  <link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.min.css">
</head>
<body>
  <?php if($title != 'Welcome') { ?>
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link active" href="/">Startseite</a>
      </li>
    </ul>
  <?php } ?>
