<?php
session_start();
$id = $_POST['id'];
if ($id == 1) {
    $_SESSION['money'] = $_SESSION['money'] + 1;
    ?>
    <script>
    alert("加油，你現在有 <?php echo $_SESSION['money'] ?> 元");
    window.location.replace("/earn.php");
    </script>
    <?php
    
} else if ($id == 2) {
    $_SESSION['money'] = $_SESSION['money'] + 1;
    ?>
    <script>
    alert("加油，你現在有 <?php echo $_SESSION['money'] ?> 元");
    window.location.replace("/earn.php");
    </script>
    <?php
} else if ($id == 3) {
    $_SESSION['money'] = $_SESSION['money'] + 2;
    ?>
    <script>
    alert("謝謝你的幫忙，但你題目出爛了，為了賠償 TICO 損失你只賺 2 塊，你現在有 <?php echo $_SESSION['money'] ?> 元");
    window.location.replace("/earn.php");
    </script>
    <?php
} else if ($id == 4) {
    $_SESSION['money'] = $_SESSION['money'] + 2;
    ?>
    <script>
    alert("謝謝你的幫忙，但你搞砸了，為了賠償 TICO 損失你只賺 2 塊，你現在有 <?php echo $_SESSION['money'] ?> 元");
    window.location.replace("/earn.php");
    </script>
    <?php
}
