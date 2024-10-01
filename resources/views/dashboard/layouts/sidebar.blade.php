<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="d-flex flex-column h-100 pt-4">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="/dashboard">
                    <i class="fa-solid fa-house"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link dropdown-toggle" id="postsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-database"></i>
                    Master Data
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="postsDropdown">
                    <li><a class="dropdown-item" href="/dashboard/jabatan">Jabatan</a></li>
                    <li><a class="dropdown-item" href="/dashboard/pangkat">Pangkat</a></li>
                    <li><a class="dropdown-item" href="/dashboard/department">Department</a></li>
                    <li><a class="dropdown-item" href="/dashboard/unitkerja">Unit Kerja</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/dashboard/pegawai">
                    <i class="fa-solid fa-person"></i>
                    Pegawai
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/dashboard/manager">
                    <i class="fa-solid fa-people-roof"></i>
                    Manager
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link dropdown-toggle" id="postsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-person-walking-arrow-right"></i>
                    Cuti
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="postsDropdown">
                    <li><a class="dropdown-item active" href="/dashboard/cuti">Pengajuan Cuti</a></li>
                    <li><a class="dropdown-item" href="/dashboard/cuti/pending">Pending</a></li>
                    <li><a class="dropdown-item" href="/dashboard/cuti/disetujui">Disetujui</a></li>
                    <li><a class="dropdown-item" href="/dashboard/cuti/sedang-cuti">Sedang Cuti</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/dashboard/kehadiran">
                    <i class="fa-regular fa-clock"></i>
                    Kehadiran
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/dashboard/ketidakhadiran">
                    <i class="fa-solid fa-calendar-days"></i>
                    Ketidakhadiran
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/dashboard/naik-jabatan">
                    <i class="fa-solid fa-award"></i>
                    Naik jabatan
                </a>
            </li>
            <hr>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/dashboard/naikjabatan">
                    <i class="fa-solid fa-gear"></i>
                    Profile
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/dashboard/naikjabatan">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    Keluar
                </a>
            </li>
        </ul>
        <div class="profile-wrapper p-2 bg-primary mt-auto">
            <div class="d-flex align-items-center">
                <div class="profile-card d-flex align-items-center">
                    <a href="#" class="d-block text-decoration-none">
                        <img src="https://github.com/mdo.png" alt="mdo" width="38" height="38" class="rounded">
                    </a>
                    <div class="ms-2">
                        <p class="mb-0 text-white">Muhamad Affan Akmal</p>
                        <small class="text-white">Kepala Biro</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
