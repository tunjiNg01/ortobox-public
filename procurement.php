        <?php 
        if (isset($_GET['p']) && $_GET['p'] == 'purchase-requisition'): 
            include 'purchase-requisition.php';
        elseif ( isset($_GET['p']) && $_GET['p'] == 'receiveable' ):
            include 'receiveable.php';
        elseif ( isset($_GET['p']) && $_GET['p'] == 'purchase-order' ):
            include 'purchase-order.php';
        else:
            include '404.php';
        endif; ?>













