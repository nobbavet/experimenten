<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
    <!-- zuja: let op de ? -->
      <li class="<?php echo ($page=='home')?'active':''; ?>"><a href="?i=home">Home</a></li>
      <li class="<?php echo ($page=='p1')?'active ':''; ?>dropdown"><a href="?i=p1">Page 1 <span class="caret"></span></a>
      </li>
      <li class="<?php echo ($page=='p2')?'active':''; ?>"><a href="?i=p2">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>