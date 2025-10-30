<?php include 'includes/header.php'; ?>

<!--
  INDEX.PHP - Beranda PREMIUM CatLicious+
  Desain: mewah, elegan, profesional — interaktif dengan animasi halus.
  Catatan: tidak mengubah backend. Header/footer tetap dipanggil dari includes.
-->

<style>
/* ========================================================================
   GLOBAL RESET & TYPHOGRAPHY
   ======================================================================== */
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
}

/* Basic reset */
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
}

/* Container */
.container{
  max-width: var(--max-width);
  margin: 0 auto;
  padding: 28px;
}

/* Utility */
.row{display:flex;gap:20px;flex-wrap:wrap}
.col{flex:1 1 0;min-width:0}
.center{text-align:center}
.small{font-size:13px;color:var(--muted)}
.kicker{font-weight:700;color:var(--accent-2);letter-spacing:0.6px;font-size:13px}
.h-intro{font-size:14px;color:var(--muted);margin-top:8px}

/* ========================================================================
   HERO
   ======================================================================== */
.hero{
  margin-top:28px;
  border-radius: calc(var(--radius-lg) + 6px);
  padding: 44px;
  display:grid;
  grid-template-columns: 1fr 480px;
  gap:32px;
  align-items:stretch;
  background: linear-gradient(135deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));
  box-shadow: var(--shadow-1);
  border:1px solid var(--glass-border);
  overflow:hidden;
}

/* left column */
.hero-left{
  padding-right:8px;
}
.hero-kicker{
  display:inline-block;
  background: linear-gradient(90deg, rgba(255,107,90,0.12), rgba(255,184,107,0.06));
  padding:10px 14px;
  border-radius: 999px;
  font-weight:700;
  color:var(--accent-2);
  box-shadow: 0 6px 20px rgba(255,107,90,0.06);
}
.hero-title{
  margin-top:18px;
  font-size:44px;
  line-height:1.02;
  letter-spacing:-0.6px;
  font-weight:800;
  color: linear-gradient(90deg, #fff, #f0f4ff);
  background: linear-gradient(90deg,#fff 0%, #ffe6da 100%);
  -webkit-background-clip:text;
  background-clip:text;
  color:transparent;
  text-shadow: 0 6px 28px rgba(0,0,0,0.45);
}
.hero-sub{
  margin-top:12px;
  color:var(--muted);
  font-size:16px;
  max-width:70%;
}

/* search card */
.hero-search{
  margin-top:22px;
  display:flex;
  gap:12px;
  align-items:center;
  background: linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));
  border-radius:12px;
  padding:10px;
  border: 1px solid var(--glass-border-2);
  box-shadow: var(--shadow-2);
}
.hero-search input{
  flex:1;
  border:none;
  background:transparent;
  color:var(--white);
  padding:12px 10px;
  font-size:15px;
}
.hero-search button{
  background: linear-gradient(90deg,var(--accent),var(--accent-2));
  border:none;
  padding:12px 18px;
  border-radius:10px;
  color:#08121a;
  font-weight:800;
  cursor:pointer;
  box-shadow: 0 10px 30px rgba(255,100,60,0.12);
}
.hero-stats{display:flex;gap:16px;margin-top:20px;align-items:center}
.stat{
  background:linear-gradient(180deg, rgba(255,255,255,0.01), rgba(255,255,255,0.02));
  padding:8px 12px;border-radius:10px;border:1px solid var(--glass-border);
  display:flex;flex-direction:column;align-items:flex-start;gap:6px;
}
.stat .num{font-weight:800;font-size:18px}
.stat .lbl{font-size:13px;color:var(--muted)}

/* right column: 3D-ish product showcase */
.hero-right{
  position:relative;
  display:flex;
  align-items:center;
  justify-content:center;
}
.showcase{
  width:100%;
  max-width:480px;
  height:360px;
  border-radius:18px;
  background: linear-gradient(135deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));
  border:1px solid var(--glass-border);
  box-shadow: 0 30px 80px rgba(7,14,25,0.6), inset 0 1px 0 rgba(255,255,255,0.02);
  padding:18px;
  overflow:hidden;
}
.showcase .bg-shape{
  position:absolute;right:-80px;top:-60px;width:420px;height:420px;border-radius:50%;
  background: radial-gradient(circle at 30% 30%, rgba(255,107,90,0.12), rgba(255,184,107,0.04));
  filter: blur(36px);transform:rotate(12deg);
}
.product-card{
  position:relative;
  width:100%;height:100%;
  display:grid;grid-template-columns: 170px 1fr;gap:18px;
  align-items:center;
}
.product-visual{
  display:flex;align-items:center;justify-content:center;
}
.product-visual img{
  width:150px;height:150px;object-fit:cover;border-radius:16px;box-shadow:0 25px 55px rgba(0,0,0,0.5);
  transform: rotate(-8deg) translateY(-6px);
  transition: transform .6s cubic-bezier(.2,.9,.3,1);
}
.showcase:hover .product-visual img{ transform: rotate(0deg) translateY(-14px) scale(1.02); }

/* product meta */
.product-meta h3{font-size:20px;margin-bottom:6px}
.product-meta p{color:var(--muted);margin-bottom:10px}
.badge{
  display:inline-block;padding:6px 10px;border-radius:999px;background:rgba(255,255,255,0.03);
  color:var(--accent-2);font-weight:700;border:1px solid rgba(255,255,255,0.03);
}
.price {
  font-size:22px;font-weight:900;color:var(--accent);
  margin-top:8px;
}

/* CTA group */
.hero-ctas{display:flex;gap:12px;margin-top:18px}
.cta-primary{
  background: linear-gradient(90deg,var(--accent),var(--accent-2));
  padding:12px 20px;border-radius:12px;border:none;color:#071018;font-weight:800;cursor:pointer;
  box-shadow:0 14px 40px rgba(255,90,50,0.12);
}
.cta-ghost{background:transparent;border:1px solid rgba(255,255,255,0.06);padding:10px 16px;border-radius:12px;color:var(--white);cursor:pointer}

/* ========================================================================
   FEATURES GRID (icons stylized)
   ======================================================================== */
.features-grid{
  margin-top:28px;
  display:grid;
  grid-template-columns: repeat(4,1fr);
  gap:18px;
}
.feature-item{
  padding:18px;border-radius:14px;background:linear-gradient(180deg, rgba(255,255,255,0.01), rgba(255,255,255,0.02));
  border:1px solid var(--glass-border);display:flex;gap:14px;align-items:center;
  transition: transform .22s, box-shadow .22s;
}
.feature-item:hover{ transform: translateY(-6px); box-shadow: 0 20px 60px rgba(2,6,23,0.5); }
.feature-icon{
  width:56px;height:56px;border-radius:12px;background:linear-gradient(90deg,var(--accent),var(--accent-2));display:flex;align-items:center;justify-content:center;
  font-size:24px;color:#071018;font-weight:800;box-shadow:0 10px 30px rgba(255,120,80,0.08)
}
.feature-body h4{font-size:16px;margin-bottom:6px}
.feature-body p{color:var(--muted);font-size:13px}

/* ========================================================================
   PRODUCT GRID - premium cards
   ======================================================================== */
.section{
  margin-top:44px;padding:28px;border-radius:14px;background: linear-gradient(180deg, rgba(255,255,255,0.01), rgba(255,255,255,0.015));
  border:1px solid var(--glass-border);box-shadow:var(--shadow-2);
}
.section h2{font-size:20px;margin-bottom:12px}
.products-grid{
  display:grid;grid-template-columns: repeat(4,1fr);gap:18px;
}
.card-product{
  border-radius:14px;padding:16px;background: linear-gradient(180deg, rgba(255,255,255,0.015), rgba(255,255,255,0.01));
  border:1px solid rgba(255,255,255,0.02);transition:transform .22s, box-shadow .22s;
  position:relative;overflow:hidden;
}
.card-product:hover{transform:translateY(-8px);box-shadow:0 30px 70px rgba(0,0,0,0.6)}
.card-thumb{
  width:100%;height:160px;border-radius:12px;overflow:hidden;margin-bottom:12px;background:linear-gradient(90deg, rgba(255,255,255,0.01), rgba(255,255,255,0.02));
  display:flex;align-items:center;justify-content:center;
}
.card-thumb img{width:100%;height:100%;object-fit:cover}
.card-title{font-weight:800;margin-bottom:8px}
.card-desc{font-size:13px;color:var(--muted);margin-bottom:10px}
.card-bottom{display:flex;justify-content:space-between;align-items:center;gap:12px}
.price-tag{font-weight:900;color:var(--accent)}
.btn-sm{
  background:transparent;border:1px solid rgba(255,255,255,0.04);padding:8px 12px;border-radius:10px;color:var(--white);cursor:pointer
}

/* badge ribbon */
.ribbon{
  position:absolute;left:-32px;top:18px;transform:rotate(-20deg);
  background:linear-gradient(90deg,#ffb86b,#ff6b3a);padding:6px 60px;color:#071018;font-weight:800;border-radius:8px;box-shadow:0 6px 30px rgba(255,110,60,0.12);
}

/* filter bar */
.filter-bar{
  display:flex;gap:12px;align-items:center;margin-bottom:16px;
}
.filter-bar select, .filter-bar input{background:transparent;border:1px solid rgba(255,255,255,0.04);padding:10px;border-radius:10px;color:var(--white)}

/* ========================================================================
   TESTIMONIALS + TRUST
   ======================================================================== */
.testimonials{
  display:grid;grid-template-columns:1fr 360px;gap:20px;align-items:center;margin-top:30px;
}
.testimonial-list{display:flex;flex-direction:column;gap:12px}
.testimonial{
  padding:14px;border-radius:12px;background: linear-gradient(180deg, rgba(255,255,255,0.01), rgba(255,255,255,0.02));
  border:1px solid rgba(255,255,255,0.02);box-shadow:0 10px 30px rgba(0,0,0,0.45);
}
.testimonial .name{font-weight:800}
.testimonial .text{color:var(--muted);margin-top:6px}
.trust-badges{display:flex;gap:12px;flex-wrap:wrap}
.badge-trust{background:linear-gradient(90deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));padding:10px 12px;border-radius:10px;border:1px solid rgba(255,255,255,0.03);color:var(--muted)}

/* ========================================================================
   INFO BARS, CTA STRIP
   ======================================================================== */
.info-strip{
  margin-top:36px;padding:18px;border-radius:12px;background:linear-gradient(90deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));
  display:flex;justify-content:space-between;align-items:center;border:1px solid rgba(255,255,255,0.02)
}
.info-left{display:flex;gap:16px;align-items:center}
.info-left p{color:var(--muted)}
.info-cta button{background:linear-gradient(90deg,var(--accent),var(--accent-2));border:none;padding:12px 18px;border-radius:12px;color:#071018;font-weight:800}

/* ========================================================================
   FOOTER CTA - Elegan
   ======================================================================== */
.footer-cta{
  margin-top:44px;padding:28px;border-radius:16px;background:linear-gradient(180deg,#061018,#081426);
  border:1px solid rgba(255,255,255,0.02);
  display:flex;justify-content:space-between;align-items:center;
}
.footer-cta h3{font-size:20px}
.footer-cta p{color:var(--muted)}

/* ========================================================================
   RESPONSIVE
   ======================================================================== */
@media (max-width: 1100px){
  .hero{grid-template-columns: 1fr 380px}
  .products-grid{grid-template-columns: repeat(3,1fr)}
}
@media (max-width: 860px){
  .hero{grid-template-columns:1fr; padding:20px}
  .hero-right{order: -1;margin-bottom:12px}
  .products-grid{grid-template-columns: repeat(2,1fr)}
  .features-grid{grid-template-columns: repeat(2,1fr)}
  .testimonials{grid-template-columns:1fr;gap:12px}
}
@media (max-width: 520px){
  .products-grid{grid-template-columns: 1fr}
  .feature-item{flex-direction:row}
  .hero-title{font-size:28px}
  .hero-sub{max-width:100%}
  .hero-search input{font-size:14px}
}

/* ========================================================================
   EXTRA ANIMATIONS & MICROINTERACTIONS
   ======================================================================== */
@keyframes floaty {
  0%{ transform: translateY(0px) }
  50%{ transform: translateY(-10px) }
  100%{ transform: translateY(0px) }
}
.floaty{ animation: floaty 6s ease-in-out infinite }

@keyframes shimmer {
  0%{ background-position: -200% 0 }
  100%{ background-position: 200% 0 }
}
.shimmer{
  background: linear-gradient(90deg, rgba(255,255,255,0.02), rgba(255,255,255,0.06), rgba(255,255,255,0.02));
  background-size: 400% 100%;
  animation: shimmer 3s linear infinite;
  border-radius: 8px;
}

/* small helpers for spacing */
.mt-8{margin-top:8px}
.mt-12{margin-top:12px}
.mb-12{margin-bottom:12px}
.p-12{padding:12px}
.p-18{padding:18px}
</style>

<div class="container">

  <!-- HERO -->
  <section class="hero" aria-labelledby="hero-title">
    <div class="hero-left">
      <span class="hero-kicker">Selamat Datang • CatLicious+</span>
      <h1 id="hero-title" class="hero-title">Mewah, Sehat, Bergizi — Makanan Kucing Premium</h1>
      <p class="hero-sub">Kami memilih bahan berkualitas, diracik ahli nutrisi hewan, dikemas premium. Pilihan top untuk keluarga yang menginginkan produk terbaik bagi kucing kesayangan.</p>

      <div class="hero-search" role="search" aria-label="Pencarian produk">
        <input id="searchInput" placeholder="Cari produk: Whiskas, Me-O, kitten, salmon..." aria-label="Cari produk">
        <button id="searchBtn">Cari</button>
      </div>

      <div class="hero-stats" role="list" aria-label="Statistik toko">
        <div class="stat" role="listitem"><div class="num">10.000+</div><div class="lbl">Pelanggan</div></div>
        <div class="stat" role="listitem"><div class="num">4.9</div><div class="lbl">Rating rata-rata</div></div>
        <div class="stat" role="listitem"><div class="num">Gratis</div><div class="lbl">Ongkir terpilih</div></div>
      </div>

      <div class="hero-ctas" role="group" aria-label="Aksi utama">
        <a href="products.php" class="cta-primary">Belanja Sekarang</a>
        <a href="#best-seller" class="cta-ghost">Lihat Best Seller</a>
      </div>

    </div>

    <div class="hero-right">
      <div class="bg-shape" aria-hidden="true"></div>
      <div class="showcase floaty" aria-hidden="false">
        <div class="product-card">
          <div class="product-visual">
            <!-- image fallback uses CSS size; if assets available, show product -->
            <img src="assets/images/whiskas.jpg" alt="Whiskas Tuna" onerror="this.src='data:image/svg+xml;utf8,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22120%22 height=%22120%22><rect width=%22100%25%22 height=%22100%25%22 fill=%22%23081f2a%22/><text x=%2250%25%22 y=%2250%25%22 fill=%22%23fff%22 font-size=%2210%22 font-family=%22Arial%22 text-anchor=%22middle%22 dy=%22.3em%22>No Image</text></svg>';">
          </div>
          <div class="product-meta">
            <span class="badge">Best Seller</span>
            <h3>Whiskas Tuna — 1 kg</h3>
            <p class="small">Makanan kering favorit, formula lengkap untuk kucing dewasa.</p>
            <div class="price">Rp45.000</div>

            <div style="margin-top:10px; display:flex; gap:10px;">
              <a href="product-detail.php?product=Whiskas%20Tuna" class="btn-sm">Lihat</a>
              <a href="order.php?product=Whiskas%20Tuna" class="btn-sm">Pesan Sekarang</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FEATURES GRID -->
  <section class="section" aria-labelledby="features-title">
    <h2 id="features-title">Kenapa Memilih CatLicious+</h2>
    <p class="small">Kami memadukan kualitas bahan, proses produksi higienis, dan kontrol nutrisi yang ketat.</p>

    <div class="features-grid mt-12">
      <div class="feature-item">
        <div class="feature-icon">🌿</div>
        <div class="feature-body">
          <h4>Bahan Pilihan</h4>
          <p>Kami gunakan sumber protein berkualitas dari laut & darat.</p>
        </div>
      </div>

      <div class="feature-item">
        <div class="feature-icon">🧪</div>
        <div class="feature-body">
          <h4>Formulasi Nutrisi</h4>
          <p>Dirancang ahli, seimbang untuk pertumbuhan & kesehatan jangka panjang.</p>
        </div>
      </div>

      <div class="feature-item">
        <div class="feature-icon">🚚</div>
        <div class="feature-body">
          <h4>Pengiriman Premium</h4>
          <p>Kemasan aman & ekspedisi cepat ke seluruh kota besar.</p>
        </div>
      </div>

      <div class="feature-item">
        <div class="feature-icon">⭐</div>
        <div class="feature-body">
          <h4>Jaminan Kepuasan</h4>
          <p>Garansi pengembalian jika tidak cocok — aman & terpercaya.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- BEST SELLER PRODUCTS -->
  <section id="best-seller" class="section" aria-labelledby="best-title">
    <h2 id="best-title">Best Seller & Rekomendasi</h2>
    <div class="filter-bar mt-12">
      <input id="filterSearch" placeholder="Filter: tuna, salmon, kitten..." style="min-width:240px">
      <select id="catFilter">
        <option value="">Semua Kategori</option>
        <option value="makanan-kering">Makanan Kering</option>
        <option value="makanan-basah">Makanan Basah</option>
        <option value="aksesoris">Aksesoris</option>
        <option value="vitamin">Vitamin</option>
      </select>
      <select id="sortBy">
        <option value="popular">Terpopuler</option>
        <option value="price-asc">Harga: Rendah ke Tinggi</option>
        <option value="price-desc">Harga: Tinggi ke Rendah</option>
      </select>
      <div style="flex:1"></div>
      <button class="btn-sm" id="viewAllBtn">Lihat Semua</button>
    </div>

    <div id="productsGrid" class="products-grid mt-12" aria-live="polite">
      <!-- Cards akan di-render oleh JS (jika ingin langsung render statis, bisa) -->
    </div>

    <div style="margin-top:18px; text-align:center">
      <a href="products.php" class="cta-primary">Lihat Semua Produk</a>
    </div>
  </section>

  <!-- TESTIMONIALS & TRUST -->
  <section class="section testimonials" aria-labelledby="testi-title">
    <div>
      <h2 id="testi-title">Testimoni Pelanggan</h2>
      <p class="small">Ribuan pelanggan puas dengan kualitas & layanan kami.</p>

      <div class="testimonial-list mt-12">
        <div class="testimonial">
          <div class="name">Siti — Jakarta</div>
          <div class="text">"Makanan kucingnya bikin bulu anak kucingku lebih lembut, pengiriman cepat. Recomended!"</div>
        </div>
        <div class="testimonial">
          <div class="name">Budi — Bandung</div>
          <div class="text">"Packaging rapi, rasa tuna disukai kucing saya. Support CS ramah."</div>
        </div>
        <div class="testimonial">
          <div class="name">Alya — Surabaya</div>
          <div class="text">"Layanan premium, dapat sample gratis. Mantap untuk yang butuh kualitas."</div>
        </div>
      </div>
    </div>

    <aside>
      <div class="trust-badges">
        <div class="badge-trust">🔒 Pembayaran AMAN</div>
        <div class="badge-trust">🚀 Ekspedisi Express</div>
        <div class="badge-trust">🏆 Terpercaya 10K+</div>
        <div class="badge-trust">📦 Pengemasan Premium</div>
      </div>

      <div style="margin-top:18px">
        <a href="contact.php" class="btn-sm">Hubungi Kami</a>
      </div>
    </aside>
  </section>

  <!-- INFO STRIP -->
  <section class="info-strip" aria-hidden="false">
    <div class="info-left">
      <div>
        <strong>Gratis ongkir</strong> untuk pembelian tertentu — gunakan kode <span style="color:var(--accent)">FREESHIP</span>
      </div>
      <div class="small" style="margin-left:12px">Berlaku khusus wilayah Jabodetabek</div>
    </div>
    <div class="info-cta">
      <button onclick="location.href='products.php'">Dapatkan Sekarang</button>
    </div>
  </section>

  <!-- FOOTER CTA -->
  <section class="footer-cta" aria-labelledby="footer-cta-title">
    <div>
      <h3 id="footer-cta-title">Siap beri kucingmu yang terbaik?</h3>
      <p class="small">Jelajahi katalog premium kami. Dari makanan kering hingga vitamin — lengkap dan berkualitas.</p>
    </div>
    <div>
      <a href="products.php" class="cta-primary">Mulai Belanja</a>
    </div>
  </section>

</div> <!-- end container -->

<!-- SCRIPT: Produk sample, rendering & interaksi -->
<script>
/*
  Produk sample (sinkron dengan data produk yang ada) - array JS ringan 
  (digunakan hanya untuk menampilkan kartu di beranda tanpa mengubah DB/backend)
*/
const PRODUCTS = [
  {name:"Whiskas Tuna", desc:"Makanan kucing dewasa rasa tuna — seimbang & lezat.", price:45000, img:"assets/images/whiskas.jpg", category:"makanan-kering"},
  {name:"Me-O Salmon", desc:"Bulu lebih berkilau dengan omega-3.", price:38000, img:"assets/images/meo.jpg", category:"makanan-kering"},
  {name:"Royal Canin Kitten", desc:"Nutrisi lengkap untuk anak kucing", price:75000, img:"assets/images/royalcanin.jpg", category:"makanan-kering"},
  {name:"Felibite Ocean Fish", desc:"Kaya protein & anti hairball", price:35000, img:"assets/images/felibite.jpg", category:"makanan-kering"},
  {name:"Bolt Adult", desc:"Pilihan hemat nutrisi seimbang", price:32000, img:"assets/images/bolt.jpg", category:"makanan-kering"},
  {name:"Whiskas Pouch Tuna", desc:"Pouch praktis, favorit kucing", price:10000, img:"assets/images/whiskas-pouch.jpg", category:"makanan-basah"},
  {name:"Sheba Chicken Fillet", desc:"Basah premium, tekstur lembut", price:18000, img:"assets/images/sheba.jpg", category:"makanan-basah"},
  {name:"VitaCat Multivitamin", desc:"Vitamin A,D,E & B untuk kucing aktif", price:25000, img:"assets/images/vitacat.jpg", category:"vitamin-suplemen"},
  {name:"Mainan Bola Kucing", desc:"Bola interaktif untuk stimulasi", price:25000, img:"assets/images/bola-kucing.jpg", category:"aksesoris"},
  {name:"Tempat Tidur Kucing", desc:"Empuk & mudah dicuci", price:150000, img:"assets/images/tempat-tidur.jpg", category:"aksesoris"},
  {name:"Purina One", desc:"Khusus kucing indoor", price:68000, img:"assets/images/purina.jpg", category:"makanan-kering"},
  {name:"Pro Plan Sterilised", desc:"Menjaga berat badan ideal", price:130000, img:"assets/images/proplan.jpg", category:"makanan-kering"},
  {name:"Pasir Kristal Silika", desc:"Anti bau dan higienis", price:55000, img:"assets/images/silica.jpg", category:"kebutuhan"},
  {name:"Kandang Lipat", desc:"Portable & mudah dibersihkan", price:280000, img:"assets/images/kandang.jpg", category:"aksesoris"},
  {name:"Shampoo Cat Fresh", desc:"Bulu wangi & lembut", price:35000, img:"assets/images/shampo.jpg", category:"perawatan"},
  {name:"Lactol Milk", desc:"Susu pengganti anak kucing", price:55000, img:"assets/images/lactol.jpg", category:"vitamin-suplemen"}
];

/* Render products ke grid (limit 12 di home) */
function formatPrice(n){ return 'Rp' + n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."); }

function renderProducts(list){
  const grid = document.getElementById('productsGrid');
  grid.innerHTML = '';
  if(!list.length){
    grid.innerHTML = '<div style="grid-column:1/-1;text-align:center;color:var(--muted);padding:30px">Produk tidak ditemukan.</div>';
    return;
  }
  list.slice(0,12).forEach(p=>{
    const div = document.createElement('div');
    div.className = 'card-product';
    div.innerHTML = `
      <div class="ribbon">Top</div>
      <div class="card-thumb"><img src="${p.img}" alt="${p.name}" onerror="this.src='data:image/svg+xml;utf8,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22240%22 height=%22160%22><rect width=%22100%25%22 height=%22100%25%22 fill=%22%23061b2a%22/><text x=%2250%25%22 y=%2250%25%22 fill=%22%23fff%22 font-size=%2212%22 font-family=%22Arial%22 text-anchor=%22middle%22 dy=%22.3em%22>No Image</text></svg>'></div>
      <div class="card-title">${p.name}</div>
      <div class="card-desc">${p.desc}</div>
      <div class="card-bottom">
        <div class="price-tag">${formatPrice(p.price)}</div>
        <div style="display:flex;gap:8px">
          <a class="btn-sm" href="product-detail.php?product=${encodeURIComponent(p.name)}">Detail</a>
          <a class="btn-sm" href="order.php?product=${encodeURIComponent(p.name)}">Pesan</a>
        </div>
      </div>
    `;
    grid.appendChild(div);
  });
}

/* Filter & search */
document.getElementById('searchBtn').addEventListener('click', () => {
  const q = document.getElementById('searchInput').value.trim().toLowerCase();
  const filtered = PRODUCTS.filter(p => p.name.toLowerCase().includes(q) || p.desc.toLowerCase().includes(q));
  renderProducts(filtered.length ? filtered : PRODUCTS);
});
document.getElementById('filterSearch').addEventListener('input', (e)=>{
  const q = e.target.value.trim().toLowerCase();
  const filtered = PRODUCTS.filter(p => p.name.toLowerCase().includes(q) || p.desc.toLowerCase().includes(q));
  renderProducts(filtered.length ? filtered : PRODUCTS);
});
document.getElementById('viewAllBtn').addEventListener('click', ()=> location.href='products.php');

/* initial render */
renderProducts(PRODUCTS);

/* small accessibility: keyboard search enter */
document.getElementById('searchInput').addEventListener('keydown', (e)=>{
  if(e.key === 'Enter') document.getElementById('searchBtn').click();
});

/* little floating parallax on mouse move for showcase */
const showcase = document.querySelector('.showcase');
if(showcase){
  document.addEventListener('mousemove', (e)=>{
    const rect = showcase.getBoundingClientRect();
    const cx = rect.left + rect.width/2;
    const cy = rect.top + rect.height/2;
    const dx = (e.clientX - cx)/rect.width;
    const dy = (e.clientY - cy)/rect.height;
    showcase.style.transform = `perspective(900px) rotateY(${dx*6}deg) rotateX(${-dy*4}deg) translateZ(0)`;
  });
  document.addEventListener('mouseleave', ()=>{
    showcase.style.transform = 'none';
  });
}

/* tiny reveal on scroll */
const revealEls = document.querySelectorAll('.section, .hero, .testimonials, .footer-cta');
const revealOnScroll = () => {
  const top = window.innerHeight * 0.85;
  revealEls.forEach(el => {
    const r = el.getBoundingClientRect();
    if(r.top < top) el.style.opacity = 1, el.style.transform = 'translateY(0)', el.style.transition = 'opacity .8s ease, transform .8s ease';
    else el.style.opacity = 0.0, el.style.transform = 'translateY(20px)';
  });
};
window.addEventListener('load', revealOnScroll);
window.addEventListener('scroll', revealOnScroll);

/* small local theme toggle: dark/light (keeps mewah tapi optional) */
(function(){
  const html = document.documentElement;
  const key = 'cat_theme';
  const tbtn = document.createElement('button');
  tbtn.className = 'btn-sm';
  tbtn.style.marginLeft = '12px';
  tbtn.textContent = 'Mode';
  document.querySelector('.container').appendChild(tbtn);
  tbtn.addEventListener('click', ()=>{
    if(html.dataset.theme === 'light'){
      html.dataset.theme = 'dark';
      tbtn.textContent = 'Mode: Dark';
      document.body.style.background = 'linear-gradient(180deg,#061021,#071426)';
    } else {
      html.dataset.theme = 'light';
      tbtn.textContent = 'Mode: Light';
      document.body.style.background = 'linear-gradient(180deg,#f8fafc,#eef2ff)';
    }
    localStorage.setItem(key, html.dataset.theme);
  });
  const saved = localStorage.getItem(key);
  if(saved === 'light'){ html.dataset.theme = 'light'; document.body.style.background = 'linear-gradient(180deg,#f8fafc,#eef2ff)'; tbtn.textContent='Mode: Light' }
  else { html.dataset.theme = 'dark'; tbtn.textContent='Mode: Dark' }
})();

/* smooth page transition: fade-in on load & smooth scroll for internal links */
document.body.style.opacity = '0';
document.body.style.transition = 'opacity 0.6s ease';
window.addEventListener('load', () => {
  document.body.style.opacity = '1';
});

/* smooth scroll for internal links (jika ada anchor #) */
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    if (target) {
      target.scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });
    }
  });
});
</script>

<?php include 'includes/footer.php'; ?>
