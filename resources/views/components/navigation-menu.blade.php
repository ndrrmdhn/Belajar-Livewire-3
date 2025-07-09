<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <i class="bi bi-bootstrap-fill"></i> {{ config('app.name') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <x-nav-link :active="request()->routeIs('home')" href="{{ route('home') }}">Home</x-nav-link>
                </li>
                <li class="nav-item">
                    <x-nav-link :active="request()->routeIs('about')" href="{{ route('about') }}">About</x-nav-link>
                </li>
                <li class="nav-item">
                    <x-nav-link :active="request()->routeIs('contact')" href="{{ route('contact') }}">Contact</x-nav-link>
                </li>
                <li class="nav-item">
                    <x-nav-link :active="request()->routeIs('posts.*')" href="{{ route('posts.index') }}">Posts</x-nav-link>
                </li>
                <li class="nav-item">
                    <x-nav-link :active="request()->routeIs('users.*')" href="{{ route('users.index') }}">Users</x-nav-link>
                </li>
            </ul>
        </div>
    </div>
</nav>
