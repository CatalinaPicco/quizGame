<?php require_once ("header-nav.php");

require_once ("controller.php");




?>
    <header> <!-- Encabezadp -->
      <nav class="main-nav">
<!-- probando el menu desplegable de bootstrap-->
    <?php if (!estalogueado()): ?>  <div class="toggle-nav">
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
                <?php endif; ?>
          </div>
        </div>
</div>

  <?php if (estalogueado()): ?>
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




        <ul class="nav-profile">
          <?php foreach ($navLinks as $linkTxt => $linkUrl) : ?>
            <li><i class="material-icons">account_circle</i><a href="<?php echo $linkUrl ?>">   <?php echo $linkTxt; ?> </a></li>
          <?php endforeach; ?>
        </ul>
        <ul class="nav-access">
          <?php foreach ($navLog as $linkLog => $linkLs) : ?>
            <li class="navLink"><a href="<?php echo $linkLs; ?>"> <?php echo $linkLog; ?> </a></li>
          <?php endforeach; ?> </ul>
<?php endif; ?>

<?php if (!estalogueado()): ?>
  <ul class="nav-access">
  <?php foreach ($navAccess as $linkAcc => $links) : ?>
    <li class="navLink"><a href="<?php echo $links; ?>"> <?php echo $linkAcc; ?> </a></li>
  <?php endforeach; ?></ul>
<?php endif; ?>



      </nav>
    </header>
