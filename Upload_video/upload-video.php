<?php
// Tentukan folder penyimpanan
$targetDir = __DIR__ . "/uploads/videos/";
if (!is_dir($targetDir)) {
    mkdir($targetDir, 0777, true); // Buat folder jika belum ada
}

// Dapatkan nama file video
$targetFile = $targetDir . basename($_FILES["video"]["name"]);

// Pindahkan file yang diunggah ke folder penyimpanan
if (move_uploaded_file($_FILES["video"]["tmp_name"], $targetFile)) {
    echo "Video berhasil diunggah! <a href='tampilkan-video.html'>Lihat Video</a>";
} else {
    echo "Gagal mengunggah video.";
}
?>
