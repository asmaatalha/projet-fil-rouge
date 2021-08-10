<nav class="navbar navbar-expand-lg navbar-dark bg-prime">
  <a href="<?php echo URLROOT;?>/UserController/HomePagey">
    <h5 class="navbar-brand nav-link"><?php echo SITENAME; ?></h5>
  </a>
      
  <!-- home and login list -->
  <li class="navbar-nav navb ml-auto">
    <!-- <a class="nav-link" href="<?php echo URLROOT;?>/UserController/HomePagey">Home</a> -->
    <a href="<?php echo URLROOT;?>/ProfilController/updateP/<?= $data->id; ?>" class="pt-1">
      <img src="../icon/profil.png" alt="user" width="20">Profil
    </a>
    <a class="nav-link pt-1" href="<?php echo URLROOT;?>/UserController/logout">Logout</a>
    <!-- <a class="nav-link" href="<?php echo URLROOT;?>/UserController/HomePage"><?php echo $_SESSION['username']; ?></a> -->

  </li>
  
</nav> 