<?php 

$click_count = get_option('click_count', 0);

echo '<div class="wrap">';
echo '<h1>Successful Calculations Count</h1>';
echo '<p>Butoni eshte klikuar ' . $click_count . ' here.</p>';
echo '</div>';
