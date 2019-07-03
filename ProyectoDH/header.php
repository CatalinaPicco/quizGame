<?php require_once ("header-nav.php");
require_once ("controller.php");

if (estaLogueado()) {
  $user=$_SESSION['usuarioLogueado'];
}

?>
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
              <?php if ( !estaLogueado() ): ?>
                <?php foreach ($navAccess as $linkAcc => $links) : ?>
                  <li class="navLink"><a href="<?php echo $links; ?>"> <?php echo $linkAcc; ?> </a></li>
                <?php endforeach; ?>
              <?php else: ?>
                  <?php foreach ($navLog as $linkLog => $linkLogs) : ?>
                    <li class="navLink"><a href="<?php echo $linkLogs; ?>"> <?php echo $linkLog; ?> </a></li>
                  <?php endforeach; ?>
	<?php endif; ?>
                </button>
          </div>
        </div>
</div>


            <ul class="nav-profile-ico">
              <div class="btn-group">
                <button type="button" class="btn btn-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">account_circle</i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                  <button class="dropdown-item" type="button">
                  <li>  <?php foreach ($navLinks as $linkPer => $linkUrl) : ?>
                    <a style="color:#FFFFFF; font-size:1.2em ;" href="<?= $linkUrl;?>"><?php echo $linkPer; ?>
                    </a></li>
                        <?php endforeach; ?></ul>

  </button>
</div></div></ul>








        <ul class="nav-profile">
          <?php if ( estaLogueado() ): ?>
          <?php foreach ($navLinks as $linkTxt => $linkUrl) : ?>
            <li><i class="material-icons">account_circle</i><a href="<?php echo $linkUrl ?>">   <?php echo $linkTxt; ?> </a></li>
          <?php endforeach; ?>
          	<?php endif; ?>
        </ul>


        <ul class="nav-access">
          <?php if ( !estaLogueado() ): ?>
          <?php foreach ($navAccess as $linkAcc => $links) : ?>
            <li class="navLink"><a href="<?php echo $links; ?>"> <?php echo $linkAcc; ?> </a></li>
          <?php endforeach; ?>
        <?php else: ?>
            <?php foreach ($navLog as $linkLog => $linkLogs) : ?>
              <li class="navLink"><a href="<?php echo $linkLogs; ?>"> <?php echo $linkLog; ?> </a></li>
            <?php endforeach; ?>
<?php endif; ?>
        </ul>
      </nav>
    </header>
