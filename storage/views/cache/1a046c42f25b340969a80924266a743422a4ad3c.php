<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="/superFood_MVC/admin/dashboard">
        Xin chào <?php echo App\Users::find($_SESSION['user']['id'])->firstname?>
    </a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i>
    </button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Tìm kiếm..." aria-label="Search"
                   aria-describedby="basic-addon2"/>
            <div class="input-group-append">
                <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false"><img style="border-radius: 50%" src="
                <?php if(App\Users::find($_SESSION['user']['id'])->image): ?>
                        /superFood_MVC/backend/assets/images/<?php echo e(App\Users::find($_SESSION['user']['id'])->image); ?>

                <?php else: ?> /superFood_MVC/backend/assets/images/user/defaultImage.png
                <?php endif; ?>
                        " alt="" width="30" height="30"></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item"
                   href="/superFood_MVC/admin/userProfile/edit/<?php echo $_SESSION['user']['id'] ?>">Thông tin cá
                    nhân</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/superFood_MVC/admin/logout">Đăng xuất</a>
            </div>
        </li>
    </ul>
</nav>
<?php /**PATH C:\xampp\htdocs\SuperFood_MVC\resources\views/admin/layouts/navbar.blade.php ENDPATH**/ ?>