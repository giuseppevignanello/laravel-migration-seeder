<header>
    <div id="headerBanner" class="bg-dark text-center">
        <h2 class="text-white py-3">🚈Do not miss the latest offers!</h2>
    </div>
    <div id="bottomHeader" class="bg-light d-flex justify-content-between">
        <div class="logo ms-3 d-flex align-items-center">
            <img class="rounded-circle" src="{{ Vite::asset('resources\img\train-logo.png') }}" alt="">
            <h4 class="ms-2">My Trains App</h4>
        </div>
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container">

                <div>
                    <ul class="navbar-nav me-auto mt-lg-0 flex-row bg-transparent">
                        <li class="nav-item">
                            <a class="p-1 nav-link {{ Route::currentRouteName() === 'home' ? 'bg-dark text-white' : '' }}"
                                href="{{ Route('home') }}" aria-current="page">Home </a>
                        </li>
                        <li class="nav-item ms-2">
                            <a class="p-1 nav-link {{ Route::currentRouteName() === 'nextTrains' ? 'bg-dark text-white' : '' }}"
                                href="{{ Route('nextTrains') }}"aria-current="page">Next Trains</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
