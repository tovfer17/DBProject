<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Wholesale Manager Account">
    <title>My Account</title>
    <link rel="icon" type="image/png" href="images/caricon.png">
    <link rel="stylesheet" type=text/css href="styles/main.css">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles/util.css">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    
 <!-------- dowload table's pretty design here https://colorlib.com/wp/template/fixed-header-table/-->
    //THIS A BIG BOY TEST
    //TEST v2
    //TEST v3
    
</head>

<body>
    <?php session_start(); ?>

    <header>
        <div id="logo"><a><img src="images/logo.png"></a></div>
        <nav>
            <ul>
                <?php
                    if(isset($_SESSION['customer']) || isset($_SESSION['name']))
                    {
                        echo '<li><a href="logout.php">Logout</a></li>';
                        echo '<li><a href="custAccount.php" style=text-decoration:none;>Welcome ' . $_SESSION['fname'] . '</a></li>';
                    } else if(isset($_SESSION['wsmanager']) || isset($_SESSION['ldmanager1']) || isset($_SESSION['ldmanager2']) ||                    isset($_SESSION['salesrep1']) || isset($_SESSION['salesrep2']))
                    {
                        echo '<li><a href="logout.php">Logout</a></li>';
                        echo '<li><a href="empAccount.php" style=text-decoration:none;>Welcome ' . $_SESSION['fname'] . '</a></li>';
                    } else
                    {
                        echo '<li>';
                            echo '<a style=color:red;>Sign In</a>';
                                echo '<ul class="dropdown">';
                                    echo '<li><a href="signIn.php">Customers</a></li>';
                                    echo '<li><a href="empSignin.php">Employees</a></li>';
                                echo '</ul>';
                        echo '</li>';
                        echo '<li><a href="registerPage.php">Register</a></li>';
                    }
                ?>
                <li><a>|</a></li>
                <li><a href="contactUs.php">Contact Us</a></li>
                <li><a href="findDealer.php">Find Dealer</a></li>
                <li><a href="vehicles.php">Vehicles</a></li>
                <li><a href="index.php">Home</a></li>
            </ul>
        </nav>
        
        <div class="services">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="section_title">Add Sales Personnel</div>
                        <div class="section_subtitle">Use the form</div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form" action="newRep.php">
                        <span class="login100-form-title p-b-33">Add Representative:</span>

                        <div class="wrap-input100 validate-input" data-validate="Name required">
                            <input class="input100" type="text" name="name" placeholder="Name" id="name" required>
                            <span class="focus-input100-1"></span>
                            <span class="focus-input100-2"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Address required">
                            <input class="input100" type="text" name="address" placeholder="Address" id="address" required>
                            <span class="focus-input100-1"></span>
                            <span class="focus-input100-2"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Phone Number required">
                            <input class="input100" type="text" maxlength="13" name="phone" placeholder="Phone Number" id="phone" required>
                            <span class="focus-input100-1"></span>
                            <span class="focus-input100-2"></span>
                        </div>
                        
                        <div class="wrap-input100 validate-input" data-validate="Base Salary required">
                            <input class="input100" type="text" name="salary" placeholder="Base Salary " id="salary" required>
                            <span class="focus-input100-1"></span>
                            <span class="focus-input100-2"></span>
                        </div>
                        
                        <div class="wrap-input100 validate-input" data-validate="YTD Sales required">
                            <input class="input100" type="text" name="ytd" placeholder="YTD Sales " id="ytd" required>
                            <span class="focus-input100-1"></span>
                            <span class="focus-input100-2"></span>
                        </div>
                        
                        <div class="wrap-input100 validate-input" data-validate="Commissions required">
                            <input class="input100" type="text" name="comm" placeholder="Commissions " id="comm" required>
                            <span class="focus-input100-1"></span>
                            <span class="focus-input100-2"></span>
                        </div>
                        
                        <div class="wrap-input100 validate-input" data-validate="Email required">
                            <input class="input100" type="text" name="email" placeholder="Email " id="email" required>
                            <span class="focus-input100-1"></span>
                            <span class="focus-input100-2"></span>
                        </div>
                        
                        <div class="wrap-input100 validate-input" data-validate="Password required">
                            <input class="input100" type="password" name="password" placeholder="Password " id="password" required>
                            <span class="focus-input100-1"></span>
                            <span class="focus-input100-2"></span>
                        </div>

                        <div class="container-login100-form-btn m-t-20">
                            <button class="login100-form-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <footer>
        <h3>All Rights Reserved, Copyright &copy; 2020</h3>
    </footer>
</body>
</html>