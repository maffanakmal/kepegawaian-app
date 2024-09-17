<header class="navbar sticky-top flex-md-nowrap p-0 bg-primary shadow-sm">
    <div class="container d-flex flex-wrap align-items-center justify-content-between">
        <a href="/" class="navbar-brand d-flex align-items-center text-warning fw-bold">
            <img src="{{ asset('img/lsf-logo.png') }}" alt="logo-lsf" width="100px" class="me-2">
        </a>

        <div class="d-flex align-items-center position-relative link-light"  id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="dropdown profile-card d-flex align-items-center ">
                <a href="#" class="d-block text-decoration-none">
                    <img src="https://github.com/mdo.png" alt="mdo" width="42" height="42" class="rounded">
                </a>
                <div class="ms-2">
                    <p class="mb-0 text-white">Muhamad Affan Akmal</p>
                    <small class="text-white">Kepala Biro</small>
                </div>
                
                <ul class="dropdown-menu dropdown-menu-center text-small position-absolute" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Keluar</a></li>
                </ul>
            </div>

        </div>
        <button class="navbar-toggler d-md-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</header>
