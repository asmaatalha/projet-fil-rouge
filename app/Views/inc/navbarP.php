<nav class="navbar navbar-expand-lg navbar-dark  navba-header log">
  <h5 class="navbar-brand nav-link"><?php echo SITENAME; ?></h5>
      
  <!-- home and login list -->
  <li class="navbar-nav navb ml-auto">
    <a class="nav-link" href="<?php echo URLROOT;?>/UserController/HomePagey">Home</a>
    <a class="nav-link" href="<?php echo URLROOT;?>/UserController/logout">Logout</a>
    <a class="nav-link" href="<?php echo URLROOT;?>/UserController/HomePage"><?php echo $_SESSION['username']; ?></a>

  </li>
  
</nav> 