<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="<?= base_url('/'); ?>">Project Sederhana</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="<?= base_url('/'); ?>">PS</a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li>
        <a href="<?= base_url('/'); ?>" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
      </li>
      <li class="menu-header"><?= in_groups('Admin') ? 'Admin' : 'User'; ?></li>
      <?php if (in_groups('Admin')) :  ?>
        <li>
          <a href="<?= base_url('/Admin/Users'); ?>" class="nav-link"><i class="fas fa-users"></i><span>Manage Users</span></a>
        </li>
      <?php endif; ?>
      <li>
        <a href="<?= base_url('/User/profile'); ?>" class="nav-link"><i class="fas fa-user"></i><span>Profile</span></a>
      </li>

      <li class="menu-header">Settings</li>
      <li>
        <a href="<?= base_url('/logout'); ?>" class="nav-link"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>
      </li>
    </ul>


  </aside>
</div>