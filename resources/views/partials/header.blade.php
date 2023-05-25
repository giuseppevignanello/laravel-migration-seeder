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

                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#" aria-current="page">Home <span
                                    class="visually-hidden">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ Route('nextTrains') }}">Next Trains</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
