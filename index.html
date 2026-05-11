<?php
require_once __DIR__ . '/config/cv-data.php';
require_once __DIR__ . '/includes/helpers.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV — <?= e($nama_lengkap) ?></title>
    <style>
        :root {
            --warna-logo: <?= e($warna_logo) ?>;
        }
    </style>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<nav class="navbar">
    <div class="logo-inisial"><?= e($inisial_logo) ?></div>
    <ul class="menu-nav">
        <li><a href="#tentang">Tentang</a></li>
        <li><a href="#pengalaman">Pengalaman</a></li>
        <li><a href="#pendidikan">Pendidikan</a></li>
        <li><a href="#proyek">Proyek</a></li>
        <li><a href="#kontak">Kontak</a></li>
    </ul>
</nav>

<div class="layout-utama">
    <div class="kolom-kiri">

        <div class="kartu-profil">
            <div class="foto-profil"><?= e($inisial_logo) ?></div>
            <div class="nama-profil"><?= e($nama_lengkap) ?></div>
            <div class="jabatan-profil"><?= e($jabatan) ?></div>
            <span class="badge-tersedia">✓ Tersedia</span>
        </div>

        <div class="kartu" id="kontak">
            <div class="judul-kartu">Kontak</div>
            <?= render_contact_item("✉", $email) ?>
            <?= render_contact_item("☏", $nomor_hp) ?>
            <?= render_contact_item("⌂", $kota) ?>
            <?= render_contact_item("in", $linkedin) ?>
            <?= render_contact_item("GH", $github) ?>
        </div>

        <div class="kartu">
            <div class="judul-kartu">Keahlian</div>
            <?php foreach ($daftar_keahlian as $keahlian): ?>
                <?php
                    $nama_skill = $keahlian[0];
                    $nilai_skill = $keahlian[1];
                ?>
                <div class="item-keahlian">
                    <div class="label-keahlian">
                        <span><?= e($nama_skill) ?></span>
                        <span><?= e($nilai_skill) ?>%</span>
                    </div>
                    <div class="bar-luar">
                        <div class="bar-dalam" style="width: <?= e($nilai_skill) ?>%"></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>

    <div class="kolom-kanan">

        <div class="kartu" id="tentang">
            <div class="judul-kartu">Tentang Saya</div>
            <p class="teks-tentang"><?= nl2br(e($tentang_saya)) ?></p>
        </div>

        <div class="kartu" id="pengalaman">
            <div class="judul-kartu">Pengalaman</div>
            <?php
            $jumlah_pengalaman = count($daftar_pengalaman);
            foreach ($daftar_pengalaman as $i => $pengalaman) {
                echo render_timeline_item(
                    $pengalaman[0],
                    $pengalaman[1],
                    $pengalaman[2],
                    $pengalaman[3],
                    $i === $jumlah_pengalaman - 1
                );
            }
            ?>
        </div>

        <div class="kartu" id="pendidikan">
            <div class="judul-kartu">Pendidikan</div>
            <?php
            $jumlah_pendidikan = count($daftar_pendidikan);
            foreach ($daftar_pendidikan as $i => $pendidikan) {
                echo render_timeline_item(
                    $pendidikan[0],
                    $pendidikan[1],
                    $pendidikan[2],
                    '',
                    $i === $jumlah_pendidikan - 1,
                    $pendidikan[3]
                );
            }
            ?>
        </div>

        <div class="kartu" id="proyek">
            <div class="judul-kartu">Proyek</div>
            <div class="grid-proyek">
                <?php foreach ($daftar_proyek as $proyek): ?>
                    <?= render_project_card($proyek[0], $proyek[1], $proyek[2]) ?>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="kartu">
            <div class="judul-kartu">Organisasi</div>
            <?php foreach ($daftar_organisasi as $organisasi): ?>
                <div class="item-organisasi">
                    <div>
                        <div class="posisi-organisasi"><?= e($organisasi[0]) ?></div>
                        <div class="nama-organisasi"><?= e($organisasi[1]) ?></div>
                    </div>
                    <div class="periode-organisasi"><?= e($organisasi[2]) ?></div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>

<div class="footer">
    © <?= date("Y") ?> <?= e($nama_lengkap) ?> — Dibuat dengan PHP & HTML
</div>

</body>
</html>
