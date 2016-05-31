<?php
include("connect.php");
include("check.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<?php include("header.php"); ?>
<div class="container">
    <?php include("left.php"); ?>
    <div class="cont">
        <table>
            <tr>
                <th>Login</th>
                <th>Name</th>
            </tr>
        <?php
        $q = mysql_query("SELECT * FROM users");
        while (($r = mysql_fetch_assoc($q)) != false) {

            echo '<tr></tr><td>'.$r['login'].'</td>';
            echo '<td>'.$r['first_name'].' '.$r['last_name'].'</td></tr>';
        }

        ?>
        </table>
    </div>
    <?php include("right.php"); ?>
</div>
</body>
</html>