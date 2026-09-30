<nav class="navbar navbar-expand-lg navbar-light navbar-lilac">
    <div class="container">
        <a class="navbar-brand fw-semibold" href="{{ url('/user') }}">
            <i class="bi bi-mortarboard-fill me-1"></i> Portal Mahasiswa
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.index') }}">Daftar Pengguna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.create') }}">Tambah Pengguna</a>
                </li>
            </ul>
        </div>
    </div>
</nav>