<div class="table-responsive">
    <table class="table table-bordered table-hover align-middle">
        <thead class="table-secondary">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->nama }}</td>
                    <td>{{ $user->nim }}</td>
                    <td><span class="badge badge-kelas">{{ $user->nama_kelas }}</span></td>
                    <td>
                        <div class="d-flex gap-2">
                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-edit">
                                <i class="bi bi-pencil-square"></i> Edit
                            </a>
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-hapus">
                                    <i class="bi bi-trash3"></i> Hapus
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center text-muted">Belum ada data pengguna.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>