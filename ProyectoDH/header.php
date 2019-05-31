<?php require_once ("header-nav.php") ?>
    <header> <!-- Encabezadp -->
      <nav class="main-nav">
<!-- probando el menu desplegable de bootstrap-->
      <div class="toggle-nav">
        <div class="btn-group">
          <button type="button" class="btn btn-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="material-icons">menu</i>
          </button>
          <div class="dropdown-menu dropdown-menu-right">
            <button class="dropdown-item" type="button">
                <?php foreach ($navAccess as $linkAcc => $links) : ?>
                  <li><a href="<?php echo $links; ?>"> <?php echo $linkAcc; ?> </a></li>
                <?php endforeach; ?></button>
          </div>
        </div>
</div>
        <ul class="nav-profile-ico">  <?php foreach ($navLinks as $linkTxt => $linkUrl) : ?>
          <i class="material-icons">account_circle</i><a href="<?php echo $linkUrl ?>">
            <?php endforeach; ?></ul>
        <ul class="nav-profile">
          <?php foreach ($navLinks as $linkTxt => $linkUrl) : ?>
            <li><i class="material-icons">account_circle</i><a href="<?php echo $linkUrl ?>">   <?php echo $linkTxt; ?> </a></li>
          <?php endforeach; ?>
        </ul>
        <ul class="nav-access">
          <?php foreach ($navAccess as $linkAcc => $links) : ?>
            <li><a href="<?php echo $links; ?>"> <?php echo $linkAcc; ?> </a></li>
          <?php endforeach; ?>
        </ul>
      </nav>
    </header>
