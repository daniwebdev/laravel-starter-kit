<ul class="metismenu" id="menu">
    <li>
        <a href="{{ route('dashboard') }}" aria-expanded="false">
            <i class="material-icons-outlined">dashboard</i>
            <span class="nav-text">Dashboard</span>
        </a>
    </li>

    <li>
        <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
            <i class="material-icons">account_circle</i>
            <span class="nav-text">Customer</span>
        </a>
        <ul aria-expanded="false">
            <li><a href="/user">Data Customer</a></li>
            <li><a href="/role">Account Verify</a></li>
            <li><a href="/permission">Bank Account</a></li>
        </ul>
    </li>

    <li>
        <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
            <i class="material-icons">account_circle</i>
            <span class="nav-text">Transaction</span>
        </a>
        <ul aria-expanded="false">
            <li><a href="/user">Deposit</a></li>
            <li>
                <a class="has-arrow"  aria-expanded="false" href="javascript:void(0);">Withdraw</a>

                <ul aria-expanded="false">
                    <li><a href="/user">Request</a></li>
                    <li><a href="/role">Process</a></li>
                </ul>
            </li>
        </ul>
    </li>

    <li>
        <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
            <i class="material-icons">account_circle</i>
            <span class="nav-text">Content</span>
        </a>
        <ul aria-expanded="false">
            <li><a href="/user">Article</a></li>
            <li><a href="/user">Category</a></li>
        </ul>
    </li>

    <li>
        <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
            <i class="material-icons">group</i>
            <span class="nav-text">User & Akses</span>
        </a>
        <ul aria-expanded="false">
            <li><a href="/user">User Manager</a></li>
            <li><a href="/role">Role</a></li>
            <li><a href="/permission">Persmission</a></li>
        </ul>
    </li>

</ul>
