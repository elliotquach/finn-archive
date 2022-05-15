<!DOCTYPE html>
<html>
    <body>
        <h1>Image Of The Month</h1>
        <?php
            $month = strtolower(date('M'));
            echo '<img width=700 src=\'assets/months/' . $month . '.jpg\'>';
        ?>
    </body>
</html>