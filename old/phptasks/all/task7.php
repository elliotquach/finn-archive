<!DOCTYPE html>
<html>
    <body>
        <h1>Joining Arrays</h1>
        <?php
            $fruits = array('apple', 'banana', 'orange', 'strawberry', 'mango');
            
            echo '<ul>';
            foreach ($fruits as $fruit) {
              echo '<li>' . $fruit . '</li>';
            }
            echo '</ul>';

            echo '<h1>Omitted</h1><ul>';
            foreach ($fruits as $fruit) {
              if ($fruit == 'banana') {
                continue;
              }

              echo '<li>' . $fruit . '</li>';
            }
            echo '</ul>';

            echo '<h1>First Letter Capital</h1><ul>';
            foreach ($fruits as $fruit) {
              echo '<li>' . ucfirst($fruit) . '</li>';
            }
            echo '</ul>';
        ?>
    </body>
</html>