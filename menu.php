<?php
?>
<ul class="nav">

  <?php if( !isset($_SESSION['connected']) ): ?>
  <li class="nav-item">
    <a class="nav-link" href="sign_in.php">Register</a>
  </li>
  <?php endif; ?> 
  <?php if( !isset($_SESSION['connected']) ): ?>
  <li class="nav-item">
    <a class="nav-link" href="login.php">login</a>
  </li>
  <?php endif; ?> 
  <?php if( isset($_SESSION['connected']) ): ?>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">logout</a>
      </li>
  <?php endif; ?>  
  <?php if( isset($_SESSION['connected']) ): ?>
      <li class="nav-item">
        <a class="nav-link" href="admin_blog.php">admin_blog</a>
      </li>
  <?php endif; ?>
  <?php if( isset($_SESSION['connected']) ): ?>
      <li class="nav-item">
        <a class="nav-link" href="addpost.php">Ajouter un article</a>
      </li>
  <?php endif; ?>  
</ul>