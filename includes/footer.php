<?php
// includes/footer.php - Footer yang disesuaikan agar selaras dengan tema UI utama (gelap, glassmorphism, responsif)
?>

<!-- Footer styling inline untuk konsistensi dengan tema halaman -->
<style>
footer {
  background: linear-gradient(180deg, rgba(255,255,255,0.01), rgba(255,255,255,0.00));
  border-top: 1px solid rgba(255,255,255,0.02);
  padding: 20px 24px;
  text-align: center;
  color: var(--muted);
  font-size: 14px;
  font-weight: 500;
  backdrop-filter: blur(6px);
  margin-top: 40px;
}

footer p {
  margin: 0;
  color: var(--white);
}

footer a {
  color: var(--accent);
  text-decoration: none;
  font-weight: 600;
}

footer a:hover {
  color: var(--accent-2);
}

/* Responsivitas footer */
@media (max-width: 520px) {
  footer {
    padding: 16px 12px;
    font-size: 12px;
  }
}
</style>

<footer>
  <p>&copy; <?php echo date('Y'); ?> CatLicious+ | Makanan Kucing Sehat & Bahagia 😸</p>
  <!-- Opsional: Tambah link navigasi jika diperlukan, misalnya -->
  <!-- <p><a href="about.php">Tentang Kami</a> | <a href="contact.php">Kontak</a></p> -->
</footer>

</body>
</html>
