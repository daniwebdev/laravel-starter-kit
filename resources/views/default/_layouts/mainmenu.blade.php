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
            <li><a href="/customer">Data Customer</a></li>
            <li><a href="/customer-verify">Account Verify</a></li>
            <li><a href="/customer-bank-account">Bank Account</a></li>
        </ul>
    </li>

    <li>
        <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
            <i class="material-icons">contactless</i>
            <span class="nav-text">Transaction</span>
        </a>
        <ul aria-expanded="false">
            <li><a href="/deposi">Deposit</a></li>
            <li>
                <a class="has-arrow"  aria-expanded="false" href="javascript:void(0);">Withdraw</a>

                <ul aria-expanded="false">
                    <li><a href="/withdraw-requeset">Request</a></li>
                    <li><a href="/withdraw-process">Process</a></li>
                </ul>
            </li>
        </ul>
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
