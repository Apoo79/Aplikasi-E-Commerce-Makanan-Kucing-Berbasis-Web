<?php
// includes/header.php - Header yang disesuaikan agar selaras dengan tema UI utama (gelap, glassmorphism, responsif)
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CatLicious+</title>

<!-- ============== THEME INLINE (SAMA PERSIS DENGAN HALAMAN SEBELUMNYA) ============== -->
<style>
:root{
  --bg:#0f1724;
  --card:#0b1220;
  --muted:#94a3b8;
  --accent:#ff6b3a;
  --accent-2:#ffb86b;
  --glass: rgba(255,255,255,0.04);
  --glass-2: rgba(255,255,255,0.02);
  --white: #f8fafc;
  --radius-lg: 18px;
  --radius-md: 12px;
  --shadow-1: 0 10px 30px rgba(2,6,23,0.6);
  --shadow-2: 0 6px 20px rgba(2,6,23,0.45);
  --glass-border: rgba(255,255,255,0.06);
  --glass-border-2: rgba(255,255,255,0.03);
  --max-width: 1220px;
  --card-height: 320px;
}

/* Reset */
*{box-sizing:border-box;margin:0;padding:0}
html,body{height:100%}
body{
  font-family: Inter, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
  background: linear-gradient(180deg,#061021 0%, #071426 35%, #0b1524 100%);
  color:var(--white);
  -webkit-font-smoothing:antialiased;
  -moz-osx-font-smoothing:grayscale;
  line-height:1.45;
  -webkit-tap-highlight-color: transparent;
  padding-bottom:40px;
}

/* Header */
header {
  background: linear-gradient(180deg, rgba(255,255,255,0.01), rgba(255,255,255,0.00));
  border-bottom: 1px solid rgba(255,255,255,0.02);
  position: sticky;
  top: 0;
  z-index: 9999;
  backdrop-filter: blur(6px);
}
.header-top{
  max-width: var(--max-width);
  margin: 6px auto;
  padding: 10px 24px;
  display:flex;
  gap:16px;
  align-items:center;
}
.logo{
  font-size:1.4rem;
  font-weight:800;
  color:var(--white);
  text-decoration:none;
  display:flex;
  gap:8px;
  align-items:center;
}
.search-bar{
  flex:1;
  display:flex;
  gap:8px;
  align-items:center;
  padding:8px;
  border-radius:12px;
  background: linear-gradient(180deg, rgba(255,255,255,0.01), rgba(255,255,255,0.02));
  border:1px solid var(--glass-border-2);
  box-shadow: var(--shadow-2);
}
.search-bar input{
  flex:1;
  background:transparent;
  border:none;
  color:var(--white);
  padding:10px;
  font-size:14px;
}
.search-bar input::placeholder{ color:var(--muted); }
.search-bar button{
  background: linear-gradient(90deg,var(--accent),var(--accent-2));
  border:none;
  padding:10px 14px;
  border-radius:10px;
  color:#071018;
  font-weight:800;
  cursor:pointer;
}
nav{
  display:flex;
  gap:12px;
  align-items:center;
}
nav a{
  color:var(--white);
  text-decoration:none;
  padding:8px 12px;
  border-radius:10px;
  font-weight:600;
  font-size:14px;
}
nav a:hover{ background: rgba(255,255,255,0.03); }

/* categories */
.categories{
  background: transparent;
  padding: 8px 24px 18px;
  border-bottom: 1px solid rgba(255,255,255,0.02);
}
.categories ul{
  list-style:none; display:flex; gap:18px; max-width:var(--max-width); margin:0 auto; padding:0;
}
.categories a{ color:var(--muted); text-decoration:none; padding:6px 10px; border-radius:8px; font-weight:600; }
.categories a:hover{ color:var(--accent-2); background: rgba(255,255,255,0.02); }

/* responsive */
@media (max-width:1100px){ .header-top{ flex-direction:column; gap:12px; } .search-bar{ width:100%; } nav{ flex-wrap:wrap; justify-content:center; gap:8px; } }
@media (max-width:520px){ .categories ul{ flex-direction:column; gap:8px; text-align:center; } }
</style>
</head>
<body>
<header>
    <div class="header-top">
        <a href="index.php" class="logo"><span>🐾</span> CatLicious+</a>

        <div class="search-bar">
            <input type="text" placeholder="Cari produk kucing..." id="searchInput">
            <button id="searchBtn">Cari</button>
        </div>

        <nav>
            <a href="index.php">Beranda</a>
            <a href="products.php">Produk</a>
            <a href="order.php">Pesan</a>
            <a href="about.php">Tentang Kami</a>
            <a href="cart.php">Keranjang (<?php echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0; ?>)</a>
            <a href="contact.php">Kontak</a>
        </nav>
    </div>

    <div class="categories">
        <ul>
            <li><a href="products.php?category=makanan-kering">Makanan Kering</a></li>
            <li><a href="products.php?category=makanan-basah">Makanan Basah</a></li>
            <li><a href="products.php?category=vitamin-suplemen">Vitamin & Suplemen</a></li>
            <li><a href="products.php?category=aksesoris">Aksesoris</a></li>
        </ul>
    </div>
</header>

<!-- Optional: Simple JS for search if needed -->
<script>
document.getElementById('searchBtn').addEventListener('click', function(){
    const q = document.getElementById('searchInput').value.trim();
    if(q) window.location.href = 'products.php?search=' + encodeURIComponent(q);
});
document.getElementById('searchInput').addEventListener('keydown', function(e){
    if(e.key === 'Enter') document.getElementById('searchBtn').click();
});
</script>
</body>
</html>