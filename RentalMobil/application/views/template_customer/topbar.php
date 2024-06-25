<body>

  <!-- Nav -->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand">Rental.Ly</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mx-auto">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
          <a class="nav-link" href="#">Order</a>
          <a class="nav-link" href="#">About</a>
          <a class="nav-link" href="#">Contact</a>
        </div>
        <div class="navbar-nav">
          <a class="nav-link" href="<?php echo base_url('register')  ?>">Register</a>
        </div>
        <div class="navbar-nav">
          <?php if ($this->session->userdata('nama')) { ?>
            <a href="<?php echo base_url('auth/Login/logout') ?>" class="nav-link">Welcome <?php echo $this->session->userdata('nama') ?>
              <span class="btn btn-sm btn-warning">Logout</span></a>
          <?php } else { ?>
            <a class="nav-link" href="<?php echo base_url('auth/Login') ?>">Login</a>
          <?php } ?>
        </div>
      </div>
    </div>
  </nav>