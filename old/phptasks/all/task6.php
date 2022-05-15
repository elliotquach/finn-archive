<!DOCTYPE html>
<html>
    <body>
        <h1>Joining Arrays</h1>
        <?php
            $fruits = array('apple', 'banana', 'orange', 'strawberry', 'mango');

            echo '<p1>' . implode($fruits) . '</p1>';
            echo '<br><br>';
            echo '<p1>' . implode(', ', $fruits) . '</p1>';
            echo '<br>';
            echo '<ul><li>';
            echo implode('</li><li>', $fruits);
            echo '</li></ul>';
        ?>
    </body>
</html>