<ul class="metismenu" id="menu">
    <li>
        <a href="{{ route('dashboard') }}" aria-expanded="false">
            <i class="material-icons-outlined">dashboard</i>
            <span class="nav-text">Dashboard</span>
        </a>
    </li>

    <li>
        <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
            <i class="material-icons">newspaper </i>
            <span class="nav-text">Content</span>
        </a>
        <ul aria-expanded="false">
            <li><a href="/article">Article</a></li>
            <li><a href="{{ route('article-category.index') }}">Category</a></li>
        </ul>
    </li>

    <li>
        <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
            <i class="material-icons">group</i>
            <span class="nav-text">User & Akses</span>
        </a>
        <ul aria-expanded="false">
            <li><a href="{{ route('user.index') }}">User Manager</a></li>
            <li><a href="{{ route('role.index') }}">Role</a></li>
        </ul>
    </li>

</ul>
