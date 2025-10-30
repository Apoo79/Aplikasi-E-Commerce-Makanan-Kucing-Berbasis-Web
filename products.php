<?php include 'includes/header.php'; ?>

<?php
// ===================== DATA PRODUK LENGKAP (35 item) =====================
$products = [
    // Makanan Kering (1-14)
    ["Whiskas Tuna", "Makanan kucing dewasa rasa tuna", "Rp45.000", "whiskas.jpg", "makanan-kering", "Tuna", "Komposisi: Ikan tuna, vitamin, protein tinggi. Berat: 1 kg. Cocok untuk kucing dewasa."],
    ["Me-O Salmon", "Meningkatkan nafsu makan & bulu mengkilap", "Rp38.000", "meo.jpg", "makanan-kering", "Salmon", "Komposisi: Ikan salmon, omega-3, antioksidan. Berat: 800g. Baik untuk bulu sehat."],
    ["Royal Canin Kitten", "Nutrisi lengkap untuk anak kucing", "Rp75.000", "royalcanin.jpg", "makanan-kering", "Ayam", "Komposisi: Ayam, kalsium, vitamin D. Berat: 2 kg. Khusus anak kucing 2–12 bulan."],
    ["Felibite Ocean Fish", "Kaya protein & anti hairball", "Rp35.000", "felibite.jpg", "makanan-kering", "Ikan Laut", "Komposisi: Ikan laut, serat, probiotik. Berat: 1.2 kg. Mengurangi hairball."],
    ["Bolt Adult", "Pilihan hemat dengan nutrisi seimbang", "Rp32.000", "bolt.jpg", "makanan-kering", "Ayam & Ikan", "Komposisi: Ayam, ikan, vitamin. Berat: 1 kg. Ekonomis dan bergizi."],
    ["Purina One", "Khusus untuk kucing indoor", "Rp68.000", "purina.jpg", "makanan-kering", "Daging Sapi", "Komposisi: Daging sapi, serat, vitamin. Berat: 1.5 kg. Mendukung kesehatan ginjal."],
    ["Cat Choize Adult", "Menjaga berat badan ideal kucing", "Rp40.000", "catchoize.jpg", "makanan-kering", "Tuna & Ayam", "Komposisi: Tuna, ayam, karbohidrat kompleks. Berat: 1 kg."],
    ["Equilibrio Adult Cat", "Super premium dari Brazil", "Rp120.000", "equilibrio.jpg", "makanan-kering", "Ayam", "Komposisi: Ayam, jagung, vitamin lengkap. Berat: 1.5 kg."],
    ["OriCat Tuna", "Khusus kulit sensitif", "Rp42.000", "oricat.jpg", "makanan-kering", "Tuna", "Mengandung zinc & biotin. Berat: 1 kg."],
    ["Cleo Adult Cat Food", "Nutrisi seimbang untuk dewasa", "Rp37.000", "cleo.jpg", "makanan-kering", "Ikan Laut", "Berat: 1.2 kg. Mendukung sistem imun."],
    ["Whiskas Junior", "Untuk anak kucing usia 2–12 bulan", "Rp48.000", "whiskas-junior.jpg", "makanan-kering", "Ikan", "Berat: 1.1 kg. Mendukung pertumbuhan."],
    ["SmartHeart Dry Adult", "Nutrisi lengkap untuk kucing dewasa", "Rp40.000", "smartheart.jpg", "makanan-kering", "Ayam", "Berat 1.1 kg. Mengandung antioksidan."],
    ["Me-O Gold", "Varian premium dari Me-O", "Rp80.000", "meo-gold.jpg", "makanan-kering", "Ayam", "Berat: 2 kg. Mengandung probiotik."],
    ["Pro Plan Sterilised", "Makanan kucing steril", "Rp130.000", "proplan.jpg", "makanan-kering", "Salmon", "Berat: 1.5 kg. Menjaga berat badan ideal."],

    // Makanan Basah (15-23)
    ["Whiskas Pouch Tuna", "Makanan basah rasa tuna dalam pouch", "Rp10.000", "whiskas-pouch.jpg", "makanan-basah", "Tuna", "85g per pouch, praktis."],
    ["Me-O Pouch Salmon", "Makanan basah salmon untuk kucing", "Rp12.000", "meo-pouch.jpg", "makanan-basah", "Salmon", "80g per pouch."],
    ["Sheba Chicken Fillet", "Makanan basah premium untuk kucing", "Rp18.000", "sheba.jpg", "makanan-basah", "Ayam", "Daging ayam fillet lembut. 70g."],
    ["Kit Cat Gravy Tuna", "Pouch tuna untuk bulu halus", "Rp14.000", "kitcat.jpg", "makanan-basah", "Tuna", "Mengandung vitamin E & omega-3. 85g."],
    ["Sheba Tuna", "Makanan basah premium Sheba rasa tuna", "Rp17.000", "sheba.jpg", "makanan-basah", "Tuna", "85g per pouch."],
    ["SmartHeart Chicken (wet)", "Makanan basah untuk kitten", "Rp11.000", "smartheart-wet.jpg", "makanan-basah", "Ayam", "85g per pouch."],
    ["Royal Canin Instinctive", "Formula ideal dewasa", "Rp20.000", "rc-instantive.jpg", "makanan-basah", "Daging", "85g per pouch."],
    ["Cleo Wet Food Tuna", "Makanan basah lokal", "Rp9.000", "cleo.jpg", "makanan-basah", "Tuna", "80g per pouch."],
    ["Bolt Wet Food Salmon", "Varian basah dari Bolt", "Rp8.500", "bolt-wet.jpg", "makanan-basah", "Salmon", "85g per pouch."],

    // Vitamin & Suplemen (24-29)
    ["VitaCat Multivitamin", "Vitamin lengkap untuk kucing aktif", "Rp25.000", "vitacat.jpg", "vitamin-suplemen", "Vitamin", "60ml botol."],
    ["NutriCat Paste", "Suplemen nafsu makan & bulu", "Rp45.000", "nutricat.jpg", "vitamin-suplemen", "Vitamin", "100g tube."],
    ["Imboost Cat", "Meningkatkan imun alami", "Rp35.000", "imboostcat.jpg", "vitamin-suplemen", "Vitamin", "Dosis: 2ml/hari."],
    ["Nutri-Vet Hairball Remedy", "Mengurangi bulu bola", "Rp55.000", "nutrivet.jpg", "vitamin-suplemen", "Pasta", "85g pasta."],
    ["Vita-Grow", "Menambah nafsu makan dan energi", "Rp35.000", "vitagrow.jpg", "vitamin-suplemen", "Cair", "Dosis: 2ml/hari."],
    ["Virbac Nutri Plus Gel", "Suplemen energi tinggi", "Rp130.000", "virbac.jpg", "vitamin-suplemen", "Pasta", "Pasta energi."],

    // Aksesoris & Perawatan (30-35)
    ["Mainan Bola Kucing", "Bola interaktif untuk kucing", "Rp25.000", "bola-kucing.jpg", "aksesoris", "Mainan", "Diameter 5cm. Plastik tahan lama."],
    ["Tempat Tidur Kucing", "Tempat tidur empuk & nyaman", "Rp150.000", "tempat-tidur.jpg", "aksesoris", "Aksesoris", "Ukuran 50x40cm."],
    ["Sisir Kucing", "Sisir anti kusut", "Rp30.000", "sisir-kucing.jpg", "aksesoris", "Perawatan", "Gigi halus logam."],
    ["Kandang Lipat", "Kandang portable baja ringan", "Rp280.000", "kandang.jpg", "aksesoris", "Aksesoris", "Ukuran 60x40x50cm."],
    ["Pasir Kristal Silika", "Anti bau & higienis", "Rp55.000", "silica.jpg", "kebutuhan", "Kebutuhan", "4 liter."],
    ["Shampoo Cat Fresh", "Shampo khusus bulu lembut", "Rp35.000", "shampo.jpg", "perawatan", "Perawatan", "Isi 250ml."]
];

// Ambil kategori & search dari URL
$category = isset($_GET['category']) ? $_GET['category'] : '';
$search = isset($_GET['search']) ? trim(strtolower($_GET['search'])) : '';

// Judul dinamis
$title = "Produk Terlaris";
if ($category == 'makanan-kering') $title = "Produk Makanan Kering";
elseif ($category == 'makanan-basah') $title = "Produk Makanan Basah";
elseif ($category == 'vitamin-suplemen') $title = "Produk Vitamin & Suplemen";
elseif ($category == 'aksesoris') $title = "Produk Aksesoris";
?>

<!-- ============== THEME INLINE (SAMA PERSIS DENGAN INDEX) ============== -->
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

/* Header override (makes header look like index) */
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

/* categories (same look as index) */
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

/* Page title & search */
.page-head{
  display:flex;
  align-items:center;
  gap:18px;
  justify-content:space-between;
  margin-bottom:18px;
}
.page-head h2{ font-size:20px; font-weight:800; color:var(--white); }
.search-form{ display:flex; gap:12px; align-items:center; }
.search-form input[type="text"]{
  padding:10px 12px; border-radius:10px; border:1px solid rgba(255,255,255,0.03); background:transparent; color:var(--white);
  min-width:320px;
}
.search-form button{
  padding:10px 14px; border-radius:10px; border:none; cursor:pointer; background: linear-gradient(90deg,var(--accent),var(--accent-2)); color:#071018; font-weight:800;
}

/* PRODUCT LIST (match index visual) */
.product-list{
  display:grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 18px;
  margin-top: 18px;
}

/* single product card */
.product{
  background: linear-gradient(180deg, rgba(255,255,255,0.015), rgba(255,255,255,0.01));
  border:1px solid rgba(255,255,255,0.02);
  border-radius:14px;
  padding:14px;
  display:flex;
  flex-direction:column;
  gap:10px;
  transition: transform .24s ease, box-shadow .24s ease;
  min-height: var(--card-height);
  box-shadow: var(--shadow-2);
  position:relative;
}
.product:hover{ transform: translateY(-8px); box-shadow: 0 30px 70px rgba(0,0,0,0.6); }

/* image area */
.product img{
  width:100%;
  height:160px;
  object-fit:cover;
  border-radius:10px;
  display:block;
  box-shadow: 0 14px 40px rgba(0,0,0,0.45);
  transition: transform .45s ease;
}
.product:hover img{ transform: scale(1.03) translateY(-6px); }

/* product meta */
.product h3{ font-size:18px; color:var(--white); margin-top:6px; font-weight:800; }
.product p{ color:var(--muted); font-size:13px; flex:1 0 auto; }
.product span{ font-weight:900; color:var(--accent); font-size:16px; display:block; margin-top:8px; }

/* actions */
.btn-small{
  display:inline-block;
  background:transparent;
  border:1px solid rgba(255,255,255,0.04);
  padding:8px 12px;
  border-radius:10px;
  color:var(--white);
  text-decoration:none;
  font-weight:700;
  cursor:pointer;
  transition: all .2s ease;
}
.btn-small:hover{ background: rgba(255,255,255,0.02); transform: translateY(-3px); }

/* ribbon badge */
.ribbon{
  position:absolute; left:-28px; top:18px; transform: rotate(-18deg);
  background: linear-gradient(90deg,#ffb86b,#ff6b3a); padding:6px 56px; color:#071018; font-weight:800; border-radius:8px; box-shadow: 0 6px 30px rgba(255,110,60,0.12);
}

/* empty state */
.empty {
  grid-column: 1 / -1;
  text-align:center;
  color:var(--muted);
  padding:40px 12px;
  background: linear-gradient(180deg, rgba(255,255,255,0.01), rgba(255,255,255,0.02));
  border-radius:12px;
  border:1px solid rgba(255,255,255,0.02);
}

/* filter bar (top) */
.filter-bar{ display:flex; gap:12px; align-items:center; margin-bottom:10px; }
.filter-bar select, .filter-bar input{ padding:10px; border-radius:10px; border:1px solid rgba(255,255,255,0.03); background:transparent; color:var(--white); }

/* responsive */
@media (max-width:1100px){ .product-list{ grid-template-columns: repeat(3,1fr); } .search-form input{ min-width:220px; } }
@media (max-width:860px){ .product-list{ grid-template-columns: repeat(2,1fr); } .search-form input{ min-width:150px; } }
@media (max-width:520px){ .product-list{ grid-template-columns: 1fr; } .page-head{ flex-direction:column; align-items:flex-start; gap:12px; } .search-form input{ min-width:100%; } }

</style>

<!-- ============== PAGE CONTENT ============== -->
<div class="container">

  <div class="page-head">
    <h2><?php echo htmlspecialchars($title); ?></h2>

    <form method="get" class="search-form" style="margin-left:auto;">
      <input type="text" name="search" placeholder="Cari produk..." value="<?php echo htmlspecialchars(isset($_GET['search'])?$_GET['search']:''); ?>">
      <input type="hidden" name="category" value="<?php echo htmlspecialchars($category); ?>">
      <button type="submit">Cari</button>
    </form>
  </div>

  <div class="filter-bar" style="margin-bottom:18px;">
    <select id="catFilter" onchange="applyCategory(this.value)">
      <option value="">Semua Kategori</option>
      <option value="makanan-kering" <?php echo $category=='makanan-kering'?'selected':''; ?>>Makanan Kering</option>
      <option value="makanan-basah" <?php echo $category=='makanan-basah'?'selected':''; ?>>Makanan Basah</option>
      <option value="vitamin-suplemen" <?php echo $category=='vitamin-suplemen'?'selected':''; ?>>Vitamin & Suplemen</option>
      <option value="aksesoris" <?php echo $category=='aksesoris'?'selected':''; ?>>Aksesoris</option>
      <option value="kebutuhan" <?php echo $category=='kebutuhan'?'selected':''; ?>>Kebutuhan</option>
      <option value="perawatan" <?php echo $category=='perawatan'?'selected':''; ?>>Perawatan</option>
    </select>

    <select id="sortBy" onchange="applySort(this.value)">
      <option value="default">Urutkan</option>
      <option value="price-asc">Harga: Rendah → Tinggi</option>
      <option value="price-desc">Harga: Tinggi → Rendah</option>
      <option value="name-asc">Nama A→Z</option>
    </select>

    <div style="flex:1"></div>

    <button class="btn-small" onclick="location.href='index.php'">Kembali ke Beranda</button>
  </div>

  <div class="product-list" id="productList">
    <?php
    // Render produk server-side agar SEO friendly dan langsung sesuai kategori/search
    $found = false;
    foreach ($products as $p) {
        $matchesCategory = ($category === '' || $p[4] === $category);
        $matchesSearch = ($search === '' || stripos($p[0], $search) !== false || stripos($p[1], $search) !== false);
        if ($matchesCategory && $matchesSearch) {
            $found = true;
            // safe escape
            $name = htmlspecialchars($p[0]);
            $desc = htmlspecialchars($p[1]);
            $price = htmlspecialchars($p[2]);
            $img = htmlspecialchars($p[3]);
            $detailUrl = 'product-detail.php?product=' . urlencode($p[0]);
            $orderUrl = 'order.php?product=' . urlencode($p[0]);

            echo "<div class='product'>
        <img src='assets/images/{$img}' alt='{$name}' onerror=\"this.src='data:image/svg+xml;utf8,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22240%22 height=%22160%22><rect width=%22100%25%22 height=%22100%25%22 fill=%22%23061b2a%22/><text x=%2250%25%22 y=%2250%25%22 fill=%22%23fff%22 font-size=%2212%22 font-family=%22Arial%22 text-anchor=%22middle%22 dy=%22.3em%22>No Image</text></svg>'\">
        <h3>{$name}</h3>
        <p>{$desc}</p>
        <span>{$price}</span>
        <div style='margin-top:10px; display:flex; gap:8px;'>
          <a class='btn-small' href='{$detailUrl}'>Lihat Detail</a>
          <a class='btn-small' href='{$orderUrl}'>Pesan Sekarang</a>
        </div>
      </div>";
        }
    }
    if (!$found) {
        echo "<div class='empty'>Produk tidak ditemukan. Coba ubah kata kunci atau kategori.</div>";
    }
    ?>
  </div>

</div>

<!-- ============== INTERACTIONS (JS) ============== -->
<script>
  // Simple client-side helpers to mirror index behavior (filter, sort)
  const PRODUCTS = <?php echo json_encode(array_map(function($p){
      return [
        'name'=>$p[0],'desc'=>$p[1],'price'=> (int) preg_replace('/\D/','',$p[2]), 'priceText'=>$p[2],'img'=>'assets/images/'.$p[3],'category'=>$p[4]
      ];
  }, $products), JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE); ?>;

  function formatPrice(n){ return 'Rp' + n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."); }

  function applyCategory(cat){
    const params = new URLSearchParams(window.location.search);
    if(cat) params.set('category', cat);
    else params.delete('category');
    params.delete('page');
    window.location.search = params.toString();
  }

  function applySort(mode){
    // client-side sort re-render (only for current page DOM)
    const grid = document.getElementById('productList');
    const nodes = Array.from(grid.querySelectorAll('.product'));
    if(mode === 'default') return; // do nothing
    // Build array of objects linking to DOM nodes using product name
    const arr = nodes.map(node=>{
      const name = node.querySelector('h3').textContent.trim();
      const priceText = node.querySelector('span').textContent.trim();
      const num = parseInt(priceText.replace(/\D/g,''),10) || 0;
      return {node, name, num};
    });
    if(mode === 'price-asc') arr.sort((a,b)=>a.num - b.num);
    else if(mode === 'price-desc') arr.sort((a,b)=>b.num - a.num);
    else if(mode === 'name-asc') arr.sort((a,b)=> a.name.localeCompare(b.name));
    // re-append
    grid.innerHTML = '';
    arr.forEach(a=> grid.appendChild(a.node));
  }

  // client-side quick filter for the index-like search box (the one in header)
  (function(){
    // hook header search button if present; keep progressive enhancement: if header search exists inside page, use it
    const headerSearch = document.querySelector('.search-bar input');
    const headerBtn = document.querySelector('.search-bar button');
    if(headerBtn && headerSearch){
      headerBtn.addEventListener('click', ()=>{
        const q = headerSearch.value.trim();
        const params = new URLSearchParams(window.location.search);
        if(q) params.set('search', q);
        else params.delete('search');
        window.location.search = params.toString();
      });
      headerSearch.addEventListener('keydown', (e)=>{ if(e.key==='Enter') headerBtn.click(); });
    }
  })();

  /* tiny reveal on scroll (sama seperti index.php untuk efek smooth) */
const revealEls = document.querySelectorAll('.product, .page-head, .filter-bar, .empty');
const revealOnScroll = () => {
  const top = window.innerHeight * 0.85;
  revealEls.forEach(el => {
    const r = el.getBoundingClientRect();
    if(r.top < top) {
      el.style.opacity = 1;
      el.style.transform = 'translateY(0)';
      el.style.transition = 'opacity .8s ease, transform .8s ease';
    } else {
      el.style.opacity = 0.0;
      el.style.transform = 'translateY(20px)';
    }
  });
};
window.addEventListener('load', revealOnScroll);
window.addEventListener('scroll', revealOnScroll);

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
