<!-- navbar -->
<header>
  <nav class="bg-primary border-bottom navbar navbar-dark navbar-expand-lg py-lg-1" style="top: 0; width: 100%; position: fixed;">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown-4" aria-controls="navbarNavDropdown-4" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id="navbarNavDropdown-4" class="collapse navbar-collapse" style="width: 32px;">
        <ul class="navbar-nav">
          <?php
          if (isset($_SESSION['token'])) {
            if ($_SESSION['token'] == "1") {
              echo "
                <li class='nav-item'>
                  <a class='nav-link px-lg-3 py-lg-4' href='?controller=center&action=updateCenterIndex' style='color: #ffffff;  margin-right: 5px; width: 119px;'>Edit centers</a>
                </li>
                <li class='nav-item'>
                  <a class='nav-link px-lg-3 py-lg-4' href='?controller=vaccine&action=index' style='color: #ffffff;  width: 119px; margin-left: -17px;'>Edit Vaccine</a>
                </li>
                ";
            }
          }

          ?>
          <li class="nav-item">
          </li>

          <li class="nav-item">
          </li>
          <li class="nav-item">
          </li>
        </ul>
        <?php
        if (isset($_SESSION['firstName'])) {
          echo "<b class='text-white' style='margin-left: 48%;'>";
          echo $_SESSION['firstName'];
          echo "</b>";
        ?>
          <a class="btn btn-light ms-lg-auto ps-4 pe-4 rounded-pill" href="?controller=login&action=signOut">Sign Out</a>
        <?php
        } else {
          echo "<a class='btn btn-light ms-lg-auto ps-4 pe-4 rounded-pill' href='?controller=login&action=index'>Admin</a>";
        }
        ?>
      </div>
    </div>
  </nav>
  <br><br><br>
</header>