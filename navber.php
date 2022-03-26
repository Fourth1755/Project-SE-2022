<!-- navbar -->
<header>
          <?php
          if (isset($_SESSION['token'])) {
            if ($_SESSION['token'] == "1") {
              echo "
                <li class='nav-item'>
                  <a class='nav-link px-lg-3 py-lg-4' href='?controller=login&action=index' </a>
                </li>
                ";
            }
          }
    
          if (isset($_SESSION['firstname'])) {
            echo "<b class='text-white' style='margin-left: 48%;'>";
            echo $_SESSION['firstname'];
            echo " ";
            echo $_SESSION['lastname'];
            echo "</b>";
          ?>
            <a class="btn" href="?controller=pages&action=login">LOGOUT</a>
          <?php
          } else {
            echo "<a class='btn' href='?controller=pages&action=login'>LOGIN</a>";
          }
          ?>
          </div>
        </div>
      <br><br><br>
    </header>