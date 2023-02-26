<?php
session_start();
$id = $_POST['id'];
$money = $_POST['money'];
if ($id == 1) {
    if ($money >= 5488) {
        $_SESSION['money'] = $money - 5488;
        ?>
        <script>
        alert("成交，剩餘 <?php echo $_SESSION['money'] ?> 元");
        window.location.replace("/");
        </script>
        <?php
    } else {
        ?>
        <script>
        alert("錢賺夠再給我來！");
        window.location.replace("/");
        </script>
        <?php
    }
} else if ($id == 2) {
    if ($money >= 12900) {
        $_SESSION['money'] = $money - 12900;
        ?>
        <script>
        alert("成交，剩餘 <?php echo $_SESSION['money'] ?> 元");
        window.location.replace("/");
        </script>
        <?php
    } else {
        ?>
        <script>
        alert("錢賺夠再給我來！");
        window.location.replace("/");
        </script>
        <?php
    }
} else if ($id == 3) {
    if ($money >= 27900) {
        $_SESSION['money'] = $money - 27900;
        ?>
        <script>
        alert("成交，剩餘 <?php echo $_SESSION['money'] ?> 元");
        window.location.replace("/");
        </script>
        <?php
    } else {
        ?>
        <script>
        alert("錢賺夠再給我來！");
        window.location.replace("/");
        </script>
        <?php
    }
} else if ($id == 4) {
    if ($money >= 1000000000) {
        $_SESSION['money'] = $money - 1000000000;
        ?>
        <script>
        alert("SCIST{w0w!y0u_4RE_$o_H@rd_w0Rk}");
        window.location.replace("/");
        </script>
        <?php
    } else {
        ?>
        <script>
        alert("錢賺夠再給我來！");
        window.location.replace("/");
        </script>
        <?php
    }
} else {
    header('Location: /');
    die();
}
