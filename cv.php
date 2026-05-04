<?php
// ---- DATA PRIBADI — Edit bagian ini sesuai datamu ----

$nama_lengkap   = "Zainal Abidin, S.Kom. (Cand.)";
$jabatan        = "Mahasiswa S1 Teknik Informatika";
$inisial_logo   = "ZA";          // Huruf untuk logo pojok kiri atas
$warna_logo     = "#003f8a";     // Warna latar logo (bisa diganti)
$email          = "zainalabidinworkingout@gmail.com";
$nomor_hp       = "+62 858-5749-8589";
$kota           = "Surabaya, Indonesia";
$linkedin       = "linkedin.com/in/Zainal-Abidin";
$github         = "github.com/jeanvonabidenheim";
$instagram	= "instagram.com/zainsv_";
$tiktok		= "tikTok.com/jeanaffiliate";

// Tentang saya — deskripsi singkat diri sendiri
$tentang_saya   = "Saya adalah mahasiswa semester 2 yang antusias dalam dunia pemrograman web. 
                   Saya suka belajar teknologi baru dan selalu berusaha memberikan hasil terbaik 
                   dalam setiap proyek yang saya kerjakan.";

// ---- DATA PENDIDIKAN ----
// Setiap item: [nama sekolah, jurusan, tahun, keterangan]
$daftar_pendidikan = [
	["Universitas Narotama", "S1 Teknik Informatika", "2025 – Sekarang", "Sedang berjalan"],
    	["SMKS PGRI 4 Surabaya", "Teknik Instalasi Tenaga Listrik", "2022 – 2025", "Lulusan 2 Besar Terbaik"],
	["SMPN 60 Surabaya","Ilmu Pengetahuan Sosial","2019-2022","Lulusan 5 Besar Terbaik"],
	["SDN Mojo I/220 Surabaya", "Matematika", "2013-2019", "Lulusan 3 Besar Terbaik"],
	["PAUD - TK Istana Anak", "Calistung", "2010-2013", "Lulusan Terbaik"
];

// ---- DATA PENGALAMAN ----
// Setiap item: [posisi, perusahaan, periode, deskripsi]
$daftar_pengalaman = [
    	["Electrical Engineer Internship", "Zoom Smart Hotel Management", "Nov 2023 – Apr 2024", "Membantu perbaikan dan perawatan fasilitas fisik hotel secara keseluruhan."],
	["CEO", "Jean Affiliate.com.id", "Mar 2026 - Sekarang", "Pendiri sekaligus karyawan pertama yang mengurus jalannya perusahaan."],
	["Driver Online", "Shopeefood dan Maxim Indonesia", "Juni 2025 - Sekarang", "-"],
	["Peracik Kopi Keliling", "Kopi Kelana dan Loka", "July 2025 - Aug 2025", "Produsen kopi yang akan dijadikan bahan penjualan kopi keliling."],
	["Design Creator & Admin", "High Quality Property", "Jan 2026 - Mar 2026", "Tim desain media promosi dan mengelola media social."],
	["Design Creator & Admin", "High Serve Education", "Mar 2026 - Sekarang", "Tim desain media promosi dan mengelola media social."],
	["CEO", "Zevoline Private Lesson", "Mei 2025 - Sekarang", "Founder dan Coach untuk siswa SD dan SMP yang membutuhkan media pembelajaran tambahan secara langsung dari ahli."],
	["Asisten Kerja", "Penjahit Bintang", "Jan 2019 - Sekarang", "Membantu bisnis tailor sederhana orang tua saya dirumah."]
];

// ---- DATA KEAHLIAN ----
// Setiap item: [nama keahlian, nilai 0-100]
$daftar_keahlian = [
    ["HTML",		 90],
    ["C",              	 80],
    ["Python",	         80],
    ["MySQL",            70],
    ["Microsoft Office", 85],
    ["Desain Canva",     70],
    ["Desain Fotografi", 60],
    ["Elektronika",	 90],
    ["CSS",		 50],
    ["Javascript",	 50]
];

// ---- DATA PROYEK ----
// Setiap item: [nama proyek, teknologi, deskripsi]
$daftar_proyek = [
    ["Sistem Absensi Mahasiswa", "PHP, MySQL, HTML",  "Aplikasi web untuk mencatat kehadiran mahasiswa dengan fitur rekap otomatis."],
    ["Web CV Pribadi",           "PHP, HTML, CSS",    "Website CV profesional yang bisa diupdate dengan mudah melalui variabel PHP."],
    ["Algoritma Kalkulator", "HTML, JavaScript",  "Kalkulator sederhana berbasis web dengan tampilan yang responsif."],
];

// ---- DATA ORGANISASI ----
// Setiap item: [posisi, nama organisasi, periode]
$daftar_organisasi = [
    	["Ketua Angkatan",  "Fakultas Ilmu Komputer", "Okt 2025 – Sekarang", "Mengkoordinasikan mahasiswa angkatan 2025 kelas A dalam tugas akademik dan hubungan dengan dosen."],
    	["Ketua Prodi", "Teknik Informatika", "Okt 2025 - Sekarang", "Mengkoordinasikan mahasiswa Angkatan 2025 yang menjalani studi Teknik Informatika dan hubungan dengan dosen."],
    	["PIC Foreign Affairs", "Narotama Language Centre", "Feb 2026 - Sekarang", "Mengkoordinasikan kerja divisi untuk hubungan dengan pihak luar."],
    	["Ketua Bidang Idarah", "Mushola Nurul Ulum", "Jan 2026 - Sekarang", "Mengkoordinasikan kerja administrasi dan hubungan luar."]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV — <?= $nama_lengkap ?></title>
    <style>
        /* GAYA DASAR */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f0f4f8;
            color: #333;
        }

        /* NAVBAR — pojok kiri ada logo inisial */
        .navbar {
            background: white;
            padding: 0 32px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        /* Logo inisial pojok kiri atas */
        .logo-inisial {
            width: 42px;
            height: 42px;
            border-radius: 10px;
            background: <?= $warna_logo ?>;
            color: white;
            font-size: 15px;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            letter-spacing: 1px;
        }

        /* Menu navigasi kanan */
        .menu-nav {
            display: flex;
            gap: 24px;
            list-style: none;
        }

        .menu-nav a {
            text-decoration: none;
            color: #555;
            font-size: 14px;
            font-weight: bold;
            transition: color 0.2s;
        }

        .menu-nav a:hover {
            color: <?= $warna_logo ?>;
        }

        /* LAYOUT UTAMA — 2 kolom */
        .layout-utama {
            max-width: 1050px;
            margin: 30px auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: 300px 1fr;
            gap: 24px;
            align-items: start;
        }

        /* KOLOM KIRI — profil & kontak */
        .kolom-kiri {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        /* Kartu profil */
        .kartu-profil {
            background: white;
            border-radius: 12px;
            padding: 28px 20px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.07);
        }

        /* Foto profil — lingkaran dengan inisial */
        .foto-profil {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: <?= $warna_logo ?>;
            color: white;
            font-size: 32px;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 16px;
            border: 4px solid #e8f0fe;
        }

        .nama-profil {
            font-size: 18px;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 6px;
        }

        .jabatan-profil {
            font-size: 13px;
            color: #888;
            margin-bottom: 16px;
            line-height: 1.5;
        }

        /* Badge tersedia untuk kerja */
        .badge-tersedia {
            display: inline-block;
            background: #d4edda;
            color: #155724;
            font-size: 12px;
            font-weight: bold;
            padding: 4px 14px;
            border-radius: 20px;
        }

        /* Kartu kontak */
        .kartu {
            background: white;
            border-radius: 12px;
            padding: 22px 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.07);
        }

        .judul-kartu {
            font-size: 14px;
            font-weight: bold;
            color: <?= $warna_logo ?>;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 16px;
            padding-bottom: 8px;
            border-bottom: 2px solid #e8f0fe;
        }

        /* Item kontak */
        .item-kontak {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin-bottom: 12px;
            font-size: 13px;
            color: #555;
        }

        .ikon-kontak {
            width: 28px;
            height: 28px;
            border-radius: 6px;
            background: #e8f0fe;
            color: <?= $warna_logo ?>;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            flex-shrink: 0;
        }

        .teks-kontak {
            line-height: 1.5;
        }

        /* Skill bar */
        .item-keahlian {
            margin-bottom: 13px;
        }

        .label-keahlian {
            display: flex;
            justify-content: space-between;
            font-size: 13px;
            color: #555;
            margin-bottom: 5px;
        }

        .bar-luar {
            background: #f0f4f8;
            border-radius: 10px;
            height: 8px;
            overflow: hidden;
        }

        .bar-dalam {
            height: 100%;
            border-radius: 10px;
            background: linear-gradient(to right, <?= $warna_logo ?>, #4a90d9);
        }

        /* KOLOM KANAN — isi CV utama */
        .kolom-kanan {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        /* Kartu tentang saya */
        .teks-tentang {
            font-size: 14px;
            line-height: 1.8;
            color: #555;
        }

        /* Item pengalaman / pendidikan */
        .item-riwayat {
            display: flex;
            gap: 16px;
            margin-bottom: 20px;
        }

        .item-riwayat:last-child {
            margin-bottom: 0;
        }

        /* Titik dan garis timeline */
        .garis-waktu {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .titik-waktu {
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background: <?= $warna_logo ?>;
            border: 3px solid #e8f0fe;
            flex-shrink: 0;
            margin-top: 4px;
        }

        .garis-bawah {
            width: 2px;
            flex: 1;
            background: #e8f0fe;
            margin-top: 4px;
        }

        .isi-riwayat {
            flex: 1;
            padding-bottom: 4px;
        }

        .posisi-riwayat {
            font-size: 14px;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 2px;
        }

        .tempat-riwayat {
            font-size: 13px;
            color: <?= $warna_logo ?>;
            font-weight: bold;
            margin-bottom: 4px;
        }

        .periode-riwayat {
            font-size: 12px;
            color: #aaa;
            margin-bottom: 6px;
        }

        .desk-riwayat {
            font-size: 13px;
            color: #666;
            line-height: 1.6;
        }

        /* Badge keterangan */
        .badge-riwayat {
            display: inline-block;
            font-size: 11px;
            padding: 2px 10px;
            border-radius: 20px;
            background: #e8f0fe;
            color: <?= $warna_logo ?>;
            font-weight: bold;
        }

        /* Kartu proyek */
        .grid-proyek {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 14px;
        }

        .kartu-proyek {
            background: #f8f9fa;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            padding: 16px;
            border-left: 4px solid <?= $warna_logo ?>;
        }

        .nama-proyek {
            font-size: 14px;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 4px;
        }

        .teknologi-proyek {
            font-size: 11px;
            color: white;
            background: <?= $warna_logo ?>;
            padding: 2px 8px;
            border-radius: 20px;
            display: inline-block;
            margin-bottom: 8px;
        }

        .desk-proyek {
            font-size: 12px;
            color: #666;
            line-height: 1.6;
        }

        /* Organisasi */
        .item-organisasi {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px solid #f0f0f0;
            font-size: 13px;
        }

        .item-organisasi:last-child {
            border-bottom: none;
        }

        .posisi-organisasi {
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 2px;
        }

        .nama-organisasi {
            color: #666;
        }

        .periode-organisasi {
            font-size: 12px;
            color: #aaa;
            white-space: nowrap;
            margin-left: 16px;
        }

        /* FOOTER */
        .footer {
            text-align: center;
            padding: 20px;
            font-size: 12px;
            color: #aaa;
            margin-top: 10px;
        }

        /* RESPONSIF — layar kecil jadi 1 kolom */
        @media (max-width: 768px) {
            .layout-utama {
                grid-template-columns: 1fr;
            }

            .grid-proyek {
                grid-template-columns: 1fr;
            }

            .menu-nav {
                display: none;
            }
        }
    </style>
</head>
<body>

<!-- NAVBAR — logo inisial di pojok kiri atas -->
<nav class="navbar">
    <!-- Logo inisial pojok kiri atas -->
    <div class="logo-inisial"><?= $inisial_logo ?></div>

    <!-- Menu navigasi -->
    <ul class="menu-nav">
        <li><a href="#tentang">Tentang</a></li>
        <li><a href="#pengalaman">Pengalaman</a></li>
        <li><a href="#pendidikan">Pendidikan</a></li>
        <li><a href="#proyek">Proyek</a></li>
        <li><a href="#kontak">Kontak</a></li>
    </ul>
</nav>

<!-- LAYOUT UTAMA -->
<div class="layout-utama">

    <!-- KOLOM KIRI -->
    <div class="kolom-kiri">

        <!-- Kartu Profil -->
        <div class="kartu-profil">
            <!-- Foto profil berupa inisial -->
            <div class="foto-profil"><?= $inisial_logo ?></div>
            <div class="nama-profil"><?= $nama_lengkap ?></div>
            <div class="jabatan-profil"><?= $jabatan ?></div>
            <span class="badge-tersedia">✓ Tersedia</span>
        </div>

        <!-- Kartu Kontak -->
        <div class="kartu" id="kontak">
            <div class="judul-kartu">Kontak</div>

            <div class="item-kontak">
                <div class="ikon-kontak">✉</div>
                <div class="teks-kontak"><?= $email ?></div>
            </div>

            <div class="item-kontak">
                <div class="ikon-kontak">☏</div>
                <div class="teks-kontak"><?= $nomor_hp ?></div>
            </div>

            <div class="item-kontak">
                <div class="ikon-kontak">⌂</div>
                <div class="teks-kontak"><?= $kota ?></div>
            </div>

            <div class="item-kontak">
                <div class="ikon-kontak">in</div>
                <div class="teks-kontak"><?= $linkedin ?></div>
            </div>

            <div class="item-kontak">
                <div class="ikon-kontak">GH</div>
                <div class="teks-kontak"><?= $github ?></div>
            </div>
        </div>

        <!-- Kartu Keahlian -->
        <div class="kartu">
            <div class="judul-kartu">Keahlian</div>

            <?php
            // Tampilkan setiap keahlian dengan skill bar
            foreach ($daftar_keahlian as $keahlian) {
                $nama_skill  = $keahlian[0]; // Nama keahlian
                $nilai_skill = $keahlian[1]; // Nilai 0-100
            ?>
            <div class="item-keahlian">
                <div class="label-keahlian">
                    <span><?= $nama_skill ?></span>
                    <span><?= $nilai_skill ?>%</span>
                </div>
                <div class="bar-luar">
                    <div class="bar-dalam" style="width: <?= $nilai_skill ?>%"></div>
                </div>
            </div>
            <?php } ?>
        </div>

    </div>
    <!-- akhir kolom kiri -->

    <!-- KOLOM KANAN -->
    <div class="kolom-kanan">

        <!-- Tentang Saya -->
        <div class="kartu" id="tentang">
            <div class="judul-kartu">Tentang Saya</div>
            <p class="teks-tentang"><?= $tentang_saya ?></p>
        </div>

        <!-- Pengalaman -->
        <div class="kartu" id="pengalaman">
            <div class="judul-kartu">Pengalaman</div>

            <?php
            // Tampilkan setiap pengalaman kerja
            $jumlah_pengalaman = count($daftar_pengalaman);
            for ($i = 0; $i < $jumlah_pengalaman; $i++) {
                $pengalaman = $daftar_pengalaman[$i];
                $posisi     = $pengalaman[0];
                $perusahaan = $pengalaman[1];
                $periode    = $pengalaman[2];
                $deskripsi  = $pengalaman[3];
                $terakhir   = ($i == $jumlah_pengalaman - 1); // cek apakah item terakhir
            ?>
            <div class="item-riwayat">
                <!-- Garis waktu (timeline) -->
                <div class="garis-waktu">
                    <div class="titik-waktu"></div>
                    <?php if (!$terakhir): ?>
                        <div class="garis-bawah"></div>
                    <?php endif; ?>
                </div>
                <!-- Isi pengalaman -->
                <div class="isi-riwayat">
                    <div class="posisi-riwayat"><?= $posisi ?></div>
                    <div class="tempat-riwayat"><?= $perusahaan ?></div>
                    <div class="periode-riwayat"><?= $periode ?></div>
                    <div class="desk-riwayat"><?= $deskripsi ?></div>
                </div>
            </div>
            <?php } ?>
        </div>

        <!-- Pendidikan -->
        <div class="kartu" id="pendidikan">
            <div class="judul-kartu">Pendidikan</div>

            <?php
            // Tampilkan setiap riwayat pendidikan
            $jumlah_pendidikan = count($daftar_pendidikan);
            for ($i = 0; $i < $jumlah_pendidikan; $i++) {
                $pendidikan  = $daftar_pendidikan[$i];
                $sekolah     = $pendidikan[0];
                $jurusan     = $pendidikan[1];
                $tahun       = $pendidikan[2];
                $keterangan  = $pendidikan[3];
                $terakhir    = ($i == $jumlah_pendidikan - 1);
            ?>
            <div class="item-riwayat">
                <div class="garis-waktu">
                    <div class="titik-waktu"></div>
                    <?php if (!$terakhir): ?>
                        <div class="garis-bawah"></div>
                    <?php endif; ?>
                </div>
                <div class="isi-riwayat">
                    <div class="posisi-riwayat"><?= $sekolah ?></div>
                    <div class="tempat-riwayat"><?= $jurusan ?></div>
                    <div class="periode-riwayat"><?= $tahun ?></div>
                    <span class="badge-riwayat"><?= $keterangan ?></span>
                </div>
            </div>
            <?php } ?>
        </div>

        <!-- Proyek -->
        <div class="kartu" id="proyek">
            <div class="judul-kartu">Proyek</div>
            <div class="grid-proyek">
                <?php
                // Tampilkan setiap proyek dalam bentuk grid
                foreach ($daftar_proyek as $proyek) {
                    $nama_proyek      = $proyek[0];
                    $teknologi_proyek = $proyek[1];
                    $desk_proyek      = $proyek[2];
                ?>
                <div class="kartu-proyek">
                    <div class="nama-proyek"><?= $nama_proyek ?></div>
                    <div class="teknologi-proyek"><?= $teknologi_proyek ?></div>
                    <div class="desk-proyek"><?= $desk_proyek ?></div>
                </div>
                <?php } ?>
            </div>
        </div>

        <!-- Organisasi -->
        <div class="kartu">
            <div class="judul-kartu">Organisasi</div>

            <?php
            // Tampilkan setiap organisasi
            foreach ($daftar_organisasi as $organisasi) {
                $posisi_org  = $organisasi[0];
                $nama_org    = $organisasi[1];
                $periode_org = $organisasi[2];
            ?>
            <div class="item-organisasi">
                <div>
                    <div class="posisi-organisasi"><?= $posisi_org ?></div>
                    <div class="nama-organisasi"><?= $nama_org ?></div>
                </div>
                <div class="periode-organisasi"><?= $periode_org ?></div>
            </div>
            <?php } ?>
        </div>

    </div>
    <!-- akhir kolom kanan -->

</div>
<!-- akhir layout utama -->

<!-- Footer -->
<div class="footer">
    © <?= date("Y") ?> <?= $nama_lengkap ?> — Dibuat dengan PHP & HTML
</div>

</body>
</html>