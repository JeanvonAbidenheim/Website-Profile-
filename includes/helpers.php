<?php
function e($text): string
{
    return htmlspecialchars((string)$text, ENT_QUOTES, 'UTF-8');
}

function render_contact_item(string $icon, string $text): string
{
    return '
    <div class="item-kontak">
        <div class="ikon-kontak">' . e($icon) . '</div>
        <div class="teks-kontak">' . e($text) . '</div>
    </div>';
}

function render_timeline_item(string $title, string $subtitle, string $period, string $desc, bool $last = false, ?string $badge = null): string
{
    $badgeHtml = $badge ? '<span class="badge-riwayat">' . e($badge) . '</span>' : '';

    $lineHtml = $last ? '' : '<div class="garis-bawah"></div>';

    return '
    <div class="item-riwayat">
        <div class="garis-waktu">
            <div class="titik-waktu"></div>
            ' . $lineHtml . '
        </div>
        <div class="isi-riwayat">
            <div class="posisi-riwayat">' . e($title) . '</div>
            <div class="tempat-riwayat">' . e($subtitle) . '</div>
            <div class="periode-riwayat">' . e($period) . '</div>
            ' . $badgeHtml . '
            ' . ($desc !== '' ? '<div class="desk-riwayat">' . e($desc) . '</div>' : '') . '
        </div>
    </div>';
}

function render_project_card(string $name, string $tech, string $desc): string
{
    return '
    <div class="kartu-proyek">
        <div class="nama-proyek">' . e($name) . '</div>
        <div class="teknologi-proyek">' . e($tech) . '</div>
        <div class="desk-proyek">' . e($desc) . '</div>
    </div>';
}