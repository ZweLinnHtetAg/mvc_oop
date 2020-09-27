<nav id="sidebar">
        <div class="p-4 pt-5">
        <a href="#" class="img logo rounded-circle mb-5" style="background-image: url('<?php echo URLROOT; ?>/public/images/logo.jpg');"></a>
    <ul class="list-unstyled components mb-5">
        <li>
            <a href="<?php echo URLROOT."/page/dashboard" ?>">Dashboard</a>
        </li>
        <li>
        <a href="#incomeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Income</a>
        <ul class="collapse list-unstyled" id="incomeSubmenu">
        <li>
            <a href="<?php echo URLROOT ?>/income/index">View All</a>
            <a href="<?php echo URLROOT ?>/income/create">Add New</a>
        </li>
        </li>
        </ul>
        </li>
        <li>
        <a href="#expenseSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Expense</a>
        <ul class="collapse list-unstyled" id="expenseSubmenu">
        <li>
            <a href="<?php echo URLROOT; ?>/expense/index">View All</a>
            <a href="<?php echo URLROOT; ?>/expense/create">Add New</a>
        </li>
        </li>
        </ul>
        </li>
        <li>
        <a href="#categorySubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Category</a>
        <ul class="collapse list-unstyled" id="categorySubmenu">
        <li>
            <a href="<?php echo URLROOT ?>/category/index">View All</a>
            <a href="<?php echo URLROOT ?>/category/create">Add New</a>
        </li>
        
        </ul>
        </li>
        <li>
            <a href="<?php echo URLROOT ;?>/auth/logout/<?php echo $_SESSION['auth_id'] ?>">Log Out</a>
        </li>
        <!-- <li>
            <a href="#">About</a>
        </li>
        <li>
        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
        <ul class="collapse list-unstyled" id="pageSubmenu">
        <li>
            <a href="#">Page 1</a>
        </li>
        <li>
            <a href="#">Page 2</a>
        </li>
        <li>
            <a href="#">Page 3</a>
        </li>
        </ul>
        </li>
        <li>
        <a href="#">Portfolio</a>
        </li>
        <li>
        <a href="#">Contact</a>
        </li> -->
    </ul>

    <div class="footer">
       
    </div>

    </div>
</nav>