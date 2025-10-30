<?php
ob_start(); // ← Tambahkan ini untuk mencegah error header sent
session_start();
include 'includes/header.php';

// Ambil nama produk dari URL
$productName = isset($_GET['product']) ? urldecode($_GET['product']) : '';

// Daftar lengkap produk (isi semua 35 item)
$products = [
    // === MAKANAN KERING ===
    ["Whiskas Tuna", "Makanan kucing dewasa rasa tuna", "Rp45.000", "whiskas.jpg", "makanan-kering", "Tuna", "Komposisi: Ikan tuna, vitamin, protein tinggi. Berat: 1 kg. Cocok untuk kucing dewasa."],
    ["Me-O Salmon", "Meningkatkan nafsu makan & bulu mengkilap", "Rp38.000", "meo.jpg", "makanan-kering", "Salmon", "Komposisi: Ikan salmon, omega-3, antioksidan. Berat: 800g. Baik untuk bulu sehat."],
    ["Royal Canin Kitten", "Nutrisi lengkap untuk anak kucing", "Rp75.000", "royalcanin.jpg", "makanan-kering", "Ayam", "Komposisi: Ayam, kalsium, vitamin D. Berat: 2 kg. Khusus anak kucing 2-12 bulan."],
    ["Felibite Ocean Fish", "Kaya protein & anti hairball", "Rp35.000", "felibite.jpg", "makanan-kering", "Ikan Laut", "Komposisi: Ikan laut, serat, probiotik. Berat: 1.2 kg. Mengurangi bulu bola."],
    ["Bolt Adult", "Pilihan hemat dengan nutrisi seimbang", "Rp32.000", "bolt.jpg", "makanan-kering", "Ayam & Ikan", "Komposisi: Ayam, ikan, vitamin. Berat: 1 kg. Ekonomis dan bergizi."],
    ["Purina One", "Khusus untuk kucing indoor", "Rp68.000", "purina.jpg", "makanan-kering", "Daging Sapi", "Komposisi: Daging sapi, serat, vitamin. Berat: 1.5 kg. Mendukung kesehatan ginjal."],
    
    // === MAKANAN BASAH ===
    ["Whiskas Pouch Tuna", "Makanan basah rasa tuna dalam pouch", "Rp10.000", "whiskas-pouch.jpg", "makanan-basah", "Tuna", "Komposisi: Tuna, gravy, vitamin. Berat: 85g per pouch. Praktis dan lezat."],
    ["Me-O Pouch Salmon", "Makanan basah salmon untuk kucing", "Rp12.000", "meo-pouch.jpg", "makanan-basah", "Salmon", "Komposisi: Salmon, omega-3. Berat: 80g per pouch. Kaya nutrisi."],
    ["Sheba Chicken Fillet", "Makanan basah premium rasa ayam", "Rp18.000", "sheba.jpg", "makanan-basah", "Ayam", "Daging ayam fillet lembut. Berat: 70g."],
    ["Kit Cat Gravy Tuna", "Pouch tuna untuk bulu halus", "Rp14.000", "kitcat.jpg", "makanan-basah", "Tuna", "Mengandung vitamin E & omega-3. Berat: 85g."],
    ["SmartHeart Chicken (wet)", "Makanan basah untuk kitten", "Rp11.000", "smartheart-wet.jpg", "makanan-basah", "Ayam", "85g per pouch."],
    ["Royal Canin Instinctive", "Formula ideal kucing dewasa", "Rp20.000", "rc-instantive.jpg", "makanan-basah", "Daging", "85g per pouch."],
    ["Cleo Wet Food Tuna", "Makanan basah lokal", "Rp9.000", "cleo.jpg", "makanan-basah", "Tuna", "80g per pouch."],
    ["Bolt Wet Food Salmon", "Varian basah dari Bolt", "Rp8.500", "bolt-wet.jpg", "makanan-basah", "Salmon", "85g per pouch."],

    // === VITAMIN & SUPLEMEN ===
    ["VitaCat Multivitamin", "Vitamin lengkap untuk kucing aktif", "Rp25.000", "vitacat.jpg", "vitamin-suplemen", "Vitamin", "60ml botol."],
    ["NutriCat Paste", "Suplemen nafsu makan & bulu", "Rp45.000", "nutricat.jpg", "vitamin-suplemen", "Vitamin", "100g tube."],
    ["Imboost Cat", "Meningkatkan imun alami", "Rp35.000", "imboostcat.jpg", "vitamin-suplemen", "Vitamin", "Dosis: 2ml/hari."],
    ["Nutri-Vet Hairball Remedy", "Mengurangi bulu bola", "Rp55.000", "nutrivet.jpg", "vitamin-suplemen", "Pasta", "85g pasta."],
    ["Vita-Grow", "Menambah nafsu makan dan energi", "Rp35.000", "vitagrow.jpg", "vitamin-suplemen", "Cair", "Dosis: 2ml/hari."],
    ["Virbac Nutri Plus Gel", "Suplemen energi tinggi", "Rp130.000", "virbac.jpg", "vitamin-suplemen", "Pasta", "Pasta energi."],

    // === AKSESORIS & PERAWATAN ===
    ["Mainan Bola Kucing", "Bola interaktif untuk kucing", "Rp25.000", "bola-kucing.jpg", "aksesoris", "-", "Bahan: Plastik tahan lama. Ukuran: Diameter 5cm."],
    ["Tempat Tidur Kucing", "Tempat tidur empuk dan nyaman", "Rp150.000", "tempat-tidur.jpg", "aksesoris", "-", "Bahan: Kain microfiber, busa. Ukuran: 50x40cm."],
    ["Sisir Kucing", "Sisir anti kusut untuk bulu kucing", "Rp30.000", "sisir-kucing.jpg", "aksesoris", "-", "Gigi halus logam. Mengurangi kusut."],
    ["Kandang Lipat", "Kandang portable baja ringan", "Rp280.000", "kandang.jpg", "aksesoris", "-", "Ukuran 60x40x50cm."],
    ["Pasir Kristal Silika", "Anti bau & higienis", "Rp55.000", "silica.jpg", "kebutuhan", "-", "Isi 4 liter."],
    ["Shampoo Cat Fresh", "Shampo khusus bulu lembut", "Rp35.000", "shampo.jpg", "perawatan", "-", "Isi 250ml."]
];

// Cari produk berdasarkan nama
$productDetail = null;
foreach ($products as $p) {
    if ($p[0] === $productName) {
        $productDetail = $p;
        break;
    }
}

// Jika tidak ditemukan
if (!$productDetail) {
    echo "<p style='text-align:center;'>Produk tidak ditemukan.</p>";
    include 'includes/footer.php';
    ob_end_flush();
    exit;
}

// Tambah ke keranjang
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_to_cart'])) {
    $quantity = max(1, (int)$_POST['quantity']);
    $price = (int)str_replace(['Rp', '.', ' '], '', $productDetail[2]);

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    $_SESSION['cart'][] = [
        'name' => $productDetail[0],
        'price' => $price,
        'quantity' => $quantity
    ];

    header("Location: cart.php"); // langsung arahkan ke keranjang
    exit;
}
?>

<!-- ====================== STYLE DAN UI ======================= -->
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

/* Header override (sama seperti halaman sebelumnya) */
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

/* categories (sama seperti halaman sebelumnya) */
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

/* Layout container */
.container{
  max-width: var(--max-width);
  margin: 22px auto;
  padding: 0 24px 40px;
}

/* Product detail layout (disesuaikan dengan tema) */
.product-detail{
  display:flex;
  flex-wrap:wrap;
  gap:40px;
  background: linear-gradient(180deg, rgba(255,255,255,0.015), rgba(255,255,255,0.01));
  border:1px solid var(--glass-border-2);
  border-radius:var(--radius-lg);
  padding:40px;
  box-shadow: var(--shadow-2);
  margin-bottom:40px;
}

.detail-image{
  flex:1 1 45%;
  display:flex;
  justify-content:center;
  align-items:center;
}
.detail-image img{
  width:100%;
  max-width:420px;
  height:auto;
  border-radius:var(--radius-md);
  object-fit:cover;
  box-shadow: var(--shadow-2);
  transition: transform .45s ease;
}
.detail-image img:hover{ transform: scale(1.03) translateY(-6px); }

.detail-info{
  flex:1 1 50%;
}
.detail-info h2{
  font-size:2rem;
  color:var(--white);
  margin-bottom:15px;
  font-weight:800;
}
.detail-info .price{
  font-size:1.8rem;
  color:var(--accent);
  margin-bottom:20px;
  font-weight:900;
}
.detail-info p{
  line-height:1.6;
  color:var(--muted);
  margin-bottom:25px;
}

.add-to-cart-form{
  margin-top:20px;
  display:flex;
  gap:10px;
  align-items:center;
  flex-wrap:wrap;
}
.add-to-cart-form label{
  color:var(--white);
  font-weight:600;
}
.add-to-cart-form input{
  width:80px;
  padding:10px;
  border-radius:var(--radius-md);
  border:1px solid var(--glass-border-2);
  background:var(--glass-2);
  color:var(--white);
  text-align:center;
}
.btn-cart, .btn-order{
  padding:12px 20px;
  border:none;
  border-radius:var(--radius-md);
  font-weight:700;
  cursor:pointer;
  transition: all .2s ease;
  text-decoration:none;
  font-size:1rem;
}
.btn-cart{
  background: linear-gradient(90deg,var(--accent),var(--accent-2));
  color:#071018;
}
.btn-cart:hover{
  transform: translateY(-3px);
  box-shadow: 0 6px 20px rgba(255,107,58,0.3);
}
.btn-order{
  background:var(--glass);
  border:1px solid var(--glass-border);
  color:var(--white);
}
.btn-order:hover{
  background: rgba(255,255,255,0.08);
  transform: translateY(-3px);
}

.detail-tabs{
  width:100%;
  margin-top:40px;
}
.tab-buttons{
  display:flex;
  gap:10px;
}
.tab-btn{
  flex:1;
  background:var(--glass-2);
  border:1px solid var(--glass-border-2);
  color:var(--white);
  padding:12px;
  border-radius:var(--radius-md);
  cursor:pointer;
  transition: all .2s ease;
  font-weight:600;
}
.tab-btn.active, .tab-btn:hover{
  background: linear-gradient(90deg,var(--accent),var(--accent-2));
  color:#071018;
}
.tab-content{
  display:none;
  background: linear-gradient(180deg, rgba(255,255,255,0.01), rgba(255,255,255,0.02));
  margin-top:15px;
  border-radius:var(--radius-md);
  padding:20px;
  border:1px solid var(--glass-border-2);
  box-shadow: var(--shadow-2);
}
.tab-content.active{ display:block; }

/* Responsive */
@media (max-width:1100px){
  .product-detail{ flex-direction:column; gap:20px; padding:20px; }
  .detail-image img{ max-width:100%; }
}
@media (max-width:520px){
  .add-to-cart-form{ flex-direction:column; align-items:flex-start; }
  .tab-buttons{ flex-direction:column; }
}
</style>

<div class="product-detail">
    <div class="detail-image">
        <img src="assets/images/<?php echo htmlspecialchars($productDetail[3]); ?>" alt="<?php echo htmlspecialchars($productDetail[0]); ?>">
    </div>

    <div class="detail-info">
        <h2><?php echo htmlspecialchars($productDetail[0]); ?></h2>
        <div class="price"><?php echo $productDetail[2]; ?></div>
        <p><strong>Rasa:</strong> <?php echo htmlspecialchars($productDetail[5]); ?></p>
        <p><?php echo htmlspecialchars($productDetail[1]); ?></p>

        <form method="post" class="add-to-cart-form">
            <label for="quantity">Jumlah:</label>
            <input type="number" id="quantity" name="quantity" min="1" value="1" required>
            <button type="submit" name="add_to_cart" class="btn-cart">Tambah ke Keranjang</button>
            <a href="order.php?product=<?php echo urlencode($productDetail[0]); ?>" class="btn-order">Pesan Sekarang</a>
        </form>
    </div>

    <div class="detail-tabs">
        <div class="tab-buttons">
            <button class="tab-btn active" onclick="openTab('desc')">Deskripsi</button>
            <button class="tab-btn" onclick="openTab('spec')">Spesifikasi</button>
        </div>
        <div id="desc" class="tab-content active">
            <p><?php echo htmlspecialchars($productDetail[1]); ?></p>
        </div>
        <div id="spec" class="tab-content">
            <p><?php echo htmlspecialchars($productDetail[6]); ?></p>
        </div>
    </div>
</div>

<script>
function openTab(tab) {
    const tabs = document.querySelectorAll('.tab-content');
    const btns = document.querySelectorAll('.tab-btn');
    tabs.forEach(t => t.classList.remove('active'));
    btns.forEach(b => b.classList.remove('active'));
    document.getElementById(tab).classList.add('active');
    event.target.classList.add('active');
}

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

<?php include 'includes/footer.php'; ob_end_flush(); ?>
