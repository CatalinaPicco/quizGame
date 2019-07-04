<?php require_once ("header-nav.php");

require_once ("controller.php");


?>
    <header> <!-- Encabezadp -->
      <nav class="main-nav">
<!-- probando el menu desplegable de bootstrap-->

<?php if (!estaLogueado()): ?>
    <div class="toggle-nav">
        <div class="btn-group">

          <button type="button" class="btn btn-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="material-icons">menu</i>
          </button>
          <div class="dropdown-menu dropdown-menu-right">
            <button class="dropdown-item" type="button">
                <?php foreach ($navAccess as $linkAcc => $links) : ?>
                  <li class="navLink"><a href="<?php echo $links; ?>"> <?php echo $linkAcc; ?> </a></li>
                <?php endforeach; ?>
                </button>

          </div>
        </div>
</div>

<?php else : ?>

            <div class="nav-profile-ico">
              <div class="btn-group">
                <button type="button" class="btn btn-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">account_circle</i>
                </button>
                <div class="dropdown-menu dropdown-menu-left">
                  <button class="dropdown-item" type="button">
                  <li>  <?php foreach ($navLinks as $linkPer => $linkUrl) : ?>
                    <a style="color:#FFFFFF; font-size:1.2em ;" href="<?= $linkUrl;?>"><?php echo $linkPer; ?>
                    </a></li>
                        <?php endforeach; ?></button>

  </div>
</div></div>
<div class="toggle-nav">
   <div class="btn-group">

     <button type="button" class="btn btn-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     <i class="material-icons">menu</i>
     </button>
     <div class="dropdown-menu dropdown-menu-right">
       <button class="dropdown-item" type="button">
           <?php foreach ($navLog as $linkL => $linkLs) : ?>
             <li class="navLink"><a href="<?php echo $linkLs; ?>"> <?php echo $linkL; ?> </a></li>
           <?php endforeach; ?>
           </button>
     </div>
   </div>
</div>
<?php endif; ?>


<?php if (estaLogueado()): ?>
          <ul class="nav-profile">

              <div class="btn-group">
                <button type="button" class="btn btn-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">account_circle</i>
                </button>
                <div class="dropdown-menu dropdown-menu-left">
                  <button class="dropdown-item" type="button">
                  <li>  <?php foreach ($navLinks as $linkPer => $linkUrl) : ?>
                    <a style="color:#FFFFFF; font-size:1.2em ;" href="<?= $linkUrl;?>"><?php echo $linkPer; ?>
                    </a></li>
                        <?php endforeach; ?></button>

  </div>
</div></ul>


        <ul class="nav-access">
          <?php foreach ($navLog as $linkLog => $linkLs) : ?>
            <li class="navLink"><a href="<?php echo $linkLs; ?>"> <?php echo $linkLog; ?> </a></li>
          <?php endforeach; ?> </ul>

<?php else : ?>

  <ul class="nav-access">
  <?php foreach ($navAccess as $linkAcc => $links) : ?>
    <li class="navLink"><a href="<?php echo $links; ?>"> <?php echo $linkAcc; ?> </a></li>
  <?php endforeach; ?></ul>

<?php endif; ?>


      </nav>
    </header>
