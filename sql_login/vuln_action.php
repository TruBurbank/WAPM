<?php 
echo '<html>';
echo '<head>';
echo '<title>Vulnerable</title>';
echo '<link rel="stylesheet" href="Des.css">';
echo '<style>';
echo '.login{';
echo 'width:360px;';
echo 'margin:50px auto;';
echo 'font-family:arial; ';
echo 'color: black;';
echo 'border-radius:10px;';
echo 'border:2px solid #168DA0;';
echo 'padding:12px 40px 25px;';
echo 'margin-top:70px; ';
echo '}';
echo 'input[type=text], ';
echo 'input[type=password]{';
echo 'width:99%;';
echo 'padding:12px;';
echo 'margin-top:8px;';
echo 'border:1px solid #168DA0;';
echo 'padding-left:5px;';
echo 'font-size:16px;';
echo 'font-family:arial; ';
echo '}';
echo 'input[type=submit]{';
echo 'width:100%;';
echo 'background-color:black;';
echo 'color:#fff;';
echo 'padding:12px;';
echo 'font-size:20px;';
echo 'cursor:pointer;';
echo 'border-radius:5px;';
echo 'margin-bottom:15px; ';
echo '}';
echo '</style>';
echo '</head>';
echo '<body>';
echo "<center>";
echo "<h1>Admin Dashboard</h1>";
echo "</center>";
echo '<div class="login">';
echo '<h1 align="center">Login</h1>';
echo '<form action="vuln_process.php" method="post" style="text-align:center;">';
echo '<input placeholder="Username" type="text"  name="user" id="myusername" ><br/><br/>';
echo '<input placeholder="Password" type="password"  name="pass" id="mypassword"><br/><br/>';
echo '<input type="submit" value="Login" name="submit">';
echo "</body>";
echo '</html>';

?>