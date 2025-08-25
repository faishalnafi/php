<tbody>
    <?php if (empty($data['siswa'])): ?>
        <tr>
            <td colspan="5" class="text-center">Data siswa masih kosong.</td>
        </tr>
    <?php else: ?>
        <?php foreach ($data['siswa'] as $siswa): ?>
            <tr>
                <td><?= htmlspecialchars($siswa['nisn']); ?></td>
                <td><?= htmlspecialchars($siswa['nama_lengkap']); ?></td>
                <td><?= htmlspecialchars($siswa['kelas']); ?></td>
                <td><?= htmlspecialchars($siswa['jenis_kelamin']); ?></td>
                <td>
                    <a href="#" class="btn btn-warning btn-sm"><i class="bi bi-pencil-fill"></i> Edit</a>
                    <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i> Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</tbody>