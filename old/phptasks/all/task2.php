<!DOCTYPE html>
<html>
    <body>
        <h1>Using Date Parts to Control Output</h1>
        <p1>Today is <?php echo date('l'); ?>, the time is now <?php echo date('H:i'); ?></p1>
        <br>
        <br>
        <?php
            if (date('H') < 4) {
                echo "Good night";
            } else if (date('H') < 12) {
                echo "Good morning!";
            } else if (date('H') < 17) {
                echo "Good afternoon!";
            } else if (date('H') < 20) {
                echo "Good evening!";
            } else {
                echo "Good night";
            }
        ?>
    </body>
</html>