<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="{{route('dashboard')}}">
            <span class="nav-link-title">
                Home
            </span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('categories')}}">
            <span class="nav-link-title">
                Categories
            </span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('books')}}">
            <span class="nav-link-title">
                Books
            </span>
        </a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#navbar-help" data-bs-toggle="dropdown" data-bs-auto-close="outside"
            role="button" aria-expanded="false">
            <span class="nav-link-title">
                Categories
            </span>
        </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="https://tabler.io/docs" target="_blank" rel="noopener">
              Books
            </a>
            <a class="dropdown-item" href="./changelog.html">

            </a>
        </div>
    </li>
</ul>
