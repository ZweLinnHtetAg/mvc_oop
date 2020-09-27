<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

    <button type="button" id="sidebarCollapse" class="btn btn-primary">
        <i class="fa fa-bars"></i>
        <span class="sr-only">Toggle Menu</span>
    </button>
    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT ?>/income/index">Income</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT ?>/expense/index">Expense</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT ?>/category/index">Category</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT ;?>/auth/logout/<?php echo $_SESSION['auth_id'] ?>">Log Out</a>
        </li>
        </ul>
    </div>
    </div>
</nav>