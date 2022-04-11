<!-- <div id="mySidenav" class="sidenav">
  <a href="#">Dashboard</a>
  <a href="#">admin</a>
  <a href="#">students</a>
  <a href="#">teachers</a>
</div> -->

<nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
    <div class="position-sticky">
      <div class="list-group list-group-flush mx-3 mt-4">
        <a
          href="<?php echo base_url('index.php/Dashboard')?>"
          class="list-group-item list-group-item-action py-2 ripple"
          aria-current="true"
        >
          <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Dashboard</span>
        </a>
        <a href="<?php echo base_url('index.php/Admins')?>" class="list-group-item list-group-item-action py-2 ripple">
          <i class="fas fa-chart-area fa-fw me-3"></i><span>admin</span>
        </a>
        <a href="<?php echo base_url('index.php/Students')?>" class="list-group-item list-group-item-action py-2 ripple"
          ><i class="fas fa-lock fa-fw me-3"></i><span>students</span></a
        >
        <a href="<?php echo base_url('index.php/Teachers')?>" class="list-group-item list-group-item-action py-2 ripple"
          ><i class="fas fa-chart-line fa-fw me-3"></i><span>teachers</span></a
        >
        
      </div>
    </div>
  </nav>