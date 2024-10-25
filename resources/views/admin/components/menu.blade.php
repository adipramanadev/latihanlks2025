<ul class="sidebar-menu">
    <li class="menu-header">Dashboard</li>
    <li class="menu-header">Menu Master</li>
    <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
            <span>Menu</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('category.index') }}">Category</a></li>
            <li><a class="nav-link" href="{{ route('product.index') }}">Product</a></li>
            <li><a href="{{ route('order.index') }}" class="nav-link">Order</a></li>

        </ul>
    </li>
    <li><a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a></li>
</ul>
