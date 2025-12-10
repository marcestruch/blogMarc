<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Blog</a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('inici') ? 'active' : '' }}" 
                       href="{{ route('inici') }}">
                        Pàgina d'inici
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('posts.*') ? 'active' : '' }}" 
                       href="{{ route('posts.index') }}">
                        Llistat de posts
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('posts.create') ? 'active' : '' }}" 
                       href="{{ route('posts.crear') }}">
                        Nou Post
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('posts.edit') ? 'active' : '' }}" 
                       href="{{ route('posts.editar', ['post' => 1]) }}">
                        Editar Post 1
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>