<?php
if (isset($_GET['p']) && $_GET['p'] == 'PIM'):
    include 'pim.php';
elseif ( isset($_GET['p']) && $_GET['p'] == 'hr-overview' ):
    include 'hr-overview.php';
elseif ( isset($_GET['p']) && $_GET['p'] == 'leaves-time-mgt' ):
    include 'leaves-time-management.php';
else:
    include '404.php';
endif; ?>
