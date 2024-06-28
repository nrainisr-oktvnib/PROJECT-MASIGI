<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="sholat.css">
    <title>PROJEK AKHIR WEB</title>
</head>

<body>
    <section class="jadwal-petugas">
        <div class="jadwal">
            <h2>Jadwal Petugas Sholat Jumat</h2>
        </div>

        <div class="tambah-jadwal">
            <a href="#popup" class="add-button">Tambah Jadwal</a>
        </div>

        <div class="tabel">
            <table>
                <thead>
                    <tr>
                        <th>HARI/TANGGAL</th>
                        <th>IMAM</th>
                        <th>KHOTIB</th>
                        <th>MUADZIN</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>20 April 2024</td>
                        <td>Sheikh Ibrahim Al-Mansur</td>
                        <td>Sainuddin</td>
                        <td>Kareem Malik</td>
                        <td>
                            <button class="edit-button">Edit</button>
                            <button class="delete-button">Hapus</button>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>10 Mei 2024</td>
                        <td>Ahmad Abdullah</td>
                        <td>Muhammad Ali</td>
                        <td>Bilal Rahman</td>
                        <td>
                            <button class="edit-button">Edit</button>
                            <button class="delete-button">Hapus</button>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>13 Mei 2024</td>
                        <td>Abdullah Rahman</td>
                        <td>Iyas Siddiqh</td>
                        <td>Hamzah Farid</td>
                        <td>
                            <button class="edit-button">Edit</button>
                            <button class="delete-button">Hapus</button>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>27 Juni 2024</td>
                        <td>Al-Fahrizi</td>
                        <td>Khaliq</td>
                        <td>Yusuf Akbar</td>
                        <td>
                            <button class="edit-button">Edit</button>
                            <button class="delete-button">Hapus</button>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>3 November 2024</td>
                        <td>Amir Al-Qadri</td>
                        <td>Sayifah Aziz</td>
                        <td>Idri Syaifullah</td>
                        <td>
                            <button class="edit-button">Edit</button>
                            <button class="delete-button">Hapus</button>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>6 Oktober 2024</td>
                        <td>Kamal Al-Hasimi</td>
                        <td>Zainab Ahmad</td>
                        <td>Syarifai</td>
                        <td>
                            <button class="edit-button">Edit</button>
                            <button class="delete-button">Hapus</button>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>1 Desember 2024</td>
                        <td>Amirullah</td>
                        <td>Muhammad Rifki</td>
                        <td>Muhammad Taufik</td>
                        <td>
                            <button class="edit-button">Edit</button>
                            <button class="delete-button">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="pop" id="popup">
        <div class="popup-jadwal">
            <div class="popup-content">
                <a href="#" class="popup-close">&times;</a>
                <h3>Tambah Jadwal Sholat Jumat</h3>
                <form id="jadwalForm">
                    <label for="tanggal">Hari/Tanggal:</label>
                    <input type="date" id="tanggal" name="tanggal"><br><br>

                    <label for="imam">Imam:</label>
                    <input type="text" id="imam" name="imam"><br><br>

                    <label for="khotib">Khotib:</label>
                    <input type="text" id="khotib" name="khotib"><br><br>

                    <label for="muadzin">Muadzin:</label>
                    <input type="text" id="muadzin" name="muadzin"><br><br>

                    <div class="popup-class-btn">
                        <a href="#" class="popup-btn">Simpan</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>