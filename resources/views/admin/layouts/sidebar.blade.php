<aside class="sidebar">
    <div class="logo">
        <i class="fa-solid fa-user-shield"></i>
        <span>Admin</span>
    </div>

    <ul>
        <li class="active">
            <a href="{{ route('admin.dashboard') }}">
                <i class="fa-solid fa-gauge"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.siswa') }}">
                <i class="fa-solid fa-users"></i>
                <span>Kelola Siswa</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa-solid fa-tags"></i>
                <span>Kelola Kategori</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa-solid fa-comment-dots"></i>
                <span>Data Aspirasi</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa-solid fa-file-lines"></i>
                <span>Laporan</span>
            </a>
        </li>
    </ul>
</aside>
