<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/index'); ?>">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <!-- ?php if (session()->get('level') == 'Site Administrator') { ?>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="ti-user menu-icon"></i>
                    <span class="menu-title">Manage User</span>
                </a>
            </li>
        ?php } ?> -->

        <br>
        <li class="nav-item" onclick="logout('<?= base_url('login/logout'); ?>')">
            <a class="nav-link" href="#">
                <i class="ti-power-off menu-icon text-danger"></i>
                <span class="menu-title text-danger">Logout</span>
            </a>
        </li>
    </ul>
</nav>