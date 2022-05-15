<!DOCTYPE html>
<html>
    <body>
        <h1>Image Of The Month</h1>
        <?php
            $descriptions = array(
                'jan'=>'January is very cool', 
                'feb'=>'Feb cool',
                'mar'=>'Wow march',
                'apr'=>'April amazing',
                'may'=>'May is my favourite?');
            
            $month = strtolower(date('M'));
            echo '<img width=700 alt=\'' . $descriptions[$month] . '\' src=\'assets/months/' . $month . '.jpg\'>';
        ?>
    </body>
</html>