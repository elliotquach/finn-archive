<!DOCTYPE html>
<html>
    <body>
        <?php
            $seasons = array(
              'dec' => 'summer',
              'jan' => 'summer',
              'feb' => 'summer',
              'mar' => 'autumn',
              'apr' => 'autumn',
              'may' => 'autumn',
              'jun' => 'winter',
              'jul' => 'winter',
              'aug' => 'winter',
              'sep' => 'spring',
              'oct' => 'spring',
              'nov' => 'spring',
            );

            $features = array(
              'summer' => 'Probably the best season.',
              'autumn' => 'Leaves, leaves and more leaves.',
              'winter' => 'I wish we had snow...',
              'spring' => 'It must be spring!',
            );

            $month = strtolower(date('M'));
            $season = $seasons[$month];
            $feature = $features[$season];
            echo '<h1>' . ucfirst($season) . '!</h1>';
            echo $feature . '<br><br>';
            echo '<img width=700 src=\'assets/seasons/' . $season . '.jpg\'>';
        ?>
    </body>
</html>