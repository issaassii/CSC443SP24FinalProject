<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <a href="index.html" class="logo">
                        <img src="assets/images/logo.png" alt="" style="width: 158px;">
                    </a>
                    <ul class="nav">
                      <li><a href="/index.php">About us</a></li>
                      <li><a href="/shop.php">Books</a></li>
                      <li><a href="/product-details.php">Product Details</a></li>
                      <li><a href="/contact.php">Contact Us</a></li>
                      <li><a href="/cms">Admin</a></li>
                      <?php if(isset($_SESSION["email"])) {
                        echo '
                            <li><a href="/cms/signup.php">Sign Up</a></li>
                            <li><a href="/cms/logout.php">Log Out</a></li>
                        ';
                        }?>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                </nav>
            </div>
        </div>
    </div>
  </header>