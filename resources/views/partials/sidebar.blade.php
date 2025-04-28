<!-- sidebar.blade.php -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar content, nav items, etc -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <!-- More items -->
     <!-- Nav Item - Registration Form -->
<li class="nav-item">
    <a class="nav-link" href="{{ route('registration.form') }}">
        <i class="fas fa-fw fa-user-plus"></i>
        <span>T&CM Registration</span>
    </a>
</li>
</ul>
