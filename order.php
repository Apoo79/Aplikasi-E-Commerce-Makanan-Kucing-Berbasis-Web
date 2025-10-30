<?php
// order.php (final - tombol diganti jadi "Pesan Sekarang" dan menampilkan modal struk)
// Pastikan file ini berada di folder root proyek dan assets/images/... ada

session_start();
include 'includes/header.php';

// ========== Daftar produk (sama seperti produk.php) ==========
$products = [
    ["Whiskas Tuna", "Makanan kucing dewasa rasa tuna", "Rp45.000", "whiskas.jpg", "Tuna", "Komposisi: Ikan tuna, vitamin, protein tinggi. Berat: 1 kg. Cocok untuk kucing dewasa."],
    ["Me-O Salmon", "Meningkatkan nafsu makan & bulu mengkilap", "Rp38.000", "meo.jpg", "Salmon", "Komposisi: Ikan salmon, omega-3, antioksidan. Berat: 800g. Baik untuk bulu sehat."],
    ["Royal Canin Kitten", "Nutrisi lengkap untuk anak kucing", "Rp75.000", "royalcanin.jpg", "Ayam", "Komposisi: Ayam, kalsium, vitamin D. Berat: 2 kg. Khusus anak kucing 2–12 bulan."],
    ["Felibite Ocean Fish", "Kaya protein & anti hairball", "Rp35.000", "felibite.jpg", "Ikan Laut", "Komposisi: Ikan laut, serat, probiotik. Berat: 1.2 kg. Mengurangi hairball."],
    ["Bolt Adult", "Pilihan hemat dengan nutrisi seimbang", "Rp32.000", "bolt.jpg", "Ayam & Ikan", "Komposisi: Ayam, ikan, vitamin. Berat: 1 kg. Ekonomis dan bergizi."],
    ["Purina One", "Khusus untuk kucing indoor", "Rp68.000", "purina.jpg", "Daging Sapi", "Komposisi: Daging sapi, serat, vitamin. Berat: 1.5 kg. Mendukung kesehatan ginjal."],
    ["Whiskas Pouch Tuna", "Makanan basah rasa tuna dalam pouch", "Rp10.000", "whiskas-pouch.jpg", "Tuna", "Komposisi: Tuna, gravy, vitamin. Berat: 85g per pouch. Praktis dan lezat."],
    ["Me-O Pouch Salmon", "Makanan basah salmon untuk kucing", "Rp12.000", "meo-pouch.jpg", "Salmon", "Komposisi: Salmon, omega-3. Berat: 80g per pouch. Kaya nutrisi."],
    ["Sheba Chicken Fillet", "Makanan basah premium untuk kucing", "Rp18.000", "sheba.jpg", "Ayam", "Daging ayam fillet lembut. Berat: 70g. Aroma menggugah selera."],
    ["Kit Cat Gravy Tuna", "Pouch tuna untuk bulu halus", "Rp14.000", "kitcat.jpg", "Tuna", "Mengandung vitamin E & omega-3. Berat: 85g. Tekstur lembut."],
    ["SmartHeart Dry Adult", "Nutrisi lengkap untuk kucing dewasa", "Rp40.000", "smartheart.jpg", "Ayam", "Berat 1.1 kg. Mengandung antioksidan dan serat alami."],
    ["Cat Choize", "Pilihan ekonomis dengan protein tinggi", "Rp28.000", "catchoize.jpg", "Ikan", "Berat: 900g. Cocok untuk kucing kampung dan rumahan."],
    ["OriCat Tuna", "Khusus kucing dengan kulit sensitif", "Rp42.000", "oricat.jpg", "Tuna", "Mengandung zinc & biotin. Berat: 1 kg. Baik untuk kulit sehat."],
    ["Cleo Adult Cat Food", "Nutrisi seimbang untuk dewasa", "Rp37.000", "cleo.jpg", "Ikan Laut", "Berat: 1.2 kg. Mendukung sistem imun dan pencernaan."],
    ["Equilibrio Kitten", "Super premium untuk anak kucing", "Rp120.000", "equilibrio.jpg", "Ayam", "Berat: 1.5 kg. Mendukung pertumbuhan tulang & otak."],
    ["Oricat Salmon", "Kaya protein ikan salmon", "Rp45.000", "oricat-salmon.jpg", "Salmon", "Berat: 1 kg. Cocok untuk kucing bulu panjang."],
    ["Me-O Gold", "Varian premium dari Me-O", "Rp80.000", "meo-gold.jpg", "Ayam", "Berat: 2 kg. Mengandung probiotik & vitamin B kompleks."],
    ["Royal Canin Hairball", "Khusus untuk kucing dengan hairball", "Rp92.000", "royalcanin-hairball.jpg", "Ayam", "Berat: 1.5 kg. Mengurangi bulu tertelan."],
    ["Whiskas Junior", "Untuk anak kucing usia 2–12 bulan", "Rp48.000", "whiskas-junior.jpg", "Ikan", "Berat: 1.1 kg. Mendukung pertumbuhan optimal."],
    ["Pro Plan Sterilised", "Makanan kucing steril", "Rp130.000", "proplan.jpg", "Salmon", "Berat: 1.5 kg. Menjaga berat badan ideal."],
    // Vitamin & Suplemen
    ["VitaCat Multivitamin", "Vitamin lengkap untuk kucing aktif", "Rp25.000", "vitacat.jpg", "Vitamin", "Mengandung vitamin A, D, E, dan B kompleks. 60ml botol."],
    ["NutriCat Paste", "Suplemen nafsu makan & bulu", "Rp45.000", "nutricat.jpg", "Vitamin", "Mengandung taurin, zinc, dan omega-6. 100g tube."],
    ["Imboost Cat", "Meningkatkan imun alami", "Rp35.000", "imboostcat.jpg", "Vitamin", "Dosis: 2ml/hari. Cocok saat pergantian musim."],
    ["Lactol Milk", "Susu pengganti anak kucing", "Rp55.000", "lactol.jpg", "Susu", "Berat: 250g. Kaya protein dan kalsium."],
    ["PetVitamin Liquid", "Vitamin cair campuran minum", "Rp28.000", "petvitamin.jpg", "Vitamin", "Isi 100ml. Dapat dicampur air minum harian."],
    // Aksesoris
    ["Mainan Bola Kucing", "Bola interaktif untuk kucing", "Rp25.000", "bola-kucing.jpg", "Aksesoris", "Bahan plastik tahan lama. Diameter 5cm."],
    ["Tempat Tidur Kucing", "Tempat tidur empuk & nyaman", "Rp150.000", "tempat-tidur.jpg", "Aksesoris", "Ukuran 50x40cm. Busa tebal & mudah dicuci."],
    ["Sisir Kucing", "Sisir anti kusut", "Rp30.000", "sisir-kucing.jpg", "Aksesoris", "Gigi halus logam. Mengurangi kusut & bulu rontok."],
    ["Kandang Lipat", "Kandang portable baja ringan", "Rp280.000", "kandang.jpg", "Aksesoris", "Ukuran 60x40x50cm. Mudah dilipat & dibersihkan."],
    ["Tempat Makan Otomatis", "Otomatis isi makanan", "Rp220.000", "feeder.jpg", "Aksesoris", "Sensor otomatis. Kapasitas 3L. USB powered."],
    ["Pasir Wangi Lavender", "Pasir kucing wangi lembut", "Rp40.000", "pasir.jpg", "Kebutuhan", "5 liter, wangi lavender. Menggumpal cepat."],
    ["Pasir Kristal Silika", "Anti bau & higienis", "Rp55.000", "silica.jpg", "Kebutuhan", "4 liter, tahan lama & cepat menyerap."],
    ["Shampoo Cat Fresh", "Shampo khusus bulu lembut", "Rp35.000", "shampo.jpg", "Perawatan", "Isi 250ml, wangi segar & anti kutu."],
    ["Towel Cat Dry", "Handuk cepat kering", "Rp28.000", "towel.jpg", "Perawatan", "Bahan microfiber halus, ukuran 60x30cm."],
    ["Carrier Box", "Kotak transportasi kucing", "Rp180.000", "carrier.jpg", "Aksesoris", "Plastik keras, ventilasi udara & pegangan kuat."]
];

// ========== Ambil parameter produk dari URL (bisa ?produk= atau ?product=) ==========
$selectedName = '';
if (isset($_GET['produk'])) $selectedName = trim($_GET['produk']);
elseif (isset($_GET['product'])) $selectedName = trim($_GET['product']);
$selectedName = urldecode($selectedName);

// Cari produk di daftar (case-insensitive)
$product = null;
if ($selectedName !== '') {
    foreach ($products as $p) {
        if (strcasecmp($p[0], $selectedName) === 0) {
            $product = $p;
            break;
        }
    }
}

// Jika tidak ada parameter tapi ada checkout dari keranjang (opsional),
if (!$product && isset($_GET['checkout']) && isset($_SESSION['cart']) && count($_SESSION['cart'])>0) {
    $first = $_SESSION['cart'][0];
    foreach ($products as $p) {
        if (strcasecmp($p[0], $first['name']) === 0) {
            $product = $p;
            break;
        }
    }
}

// helper: escape
function e($s){ return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }

// Path default gambar placeholder jika file tidak ada
function product_image_path($filename){
    $path = 'assets/images/' . $filename;
    if (file_exists($path)) return $path;
    return 'assets/images/placeholder.png';
}

// WhatsApp number (user-provided). Internasional format for wa.me
$wa_number_raw = '085184711276';
$wa_number_int = preg_replace('/^0/', '62', $wa_number_raw, 1); // 085... -> 6285...
$wa_number_int = preg_replace('/\D/', '', $wa_number_int);
$wa_link_base = 'https://wa.me/' . $wa_number_int;
?>

<!-- ======= STYLE: keep your elegant UI, add modal styling ======= -->
<link rel="stylesheet" href="assets/css/order.css">

<div class="order-wrapper">
<?php if (!$product): ?>
    <div class="card" style="grid-template-columns:1fr;">
        <div style="padding:30px;">
            <p class="error">Produk tidak ditemukan atau parameter <code>?produk=</code> tidak dikirim. <a href="products.php">Kembali ke katalog</a></p>
            <!-- Tampilkan form manual (tetap tersedia agar pengguna bisa memesan tanpa param) -->
            <div class="form-block">
                <h3>Pesan Tanpa Parameter</h3>
                <form action="cart.php" method="post" id="manualForm">
                    <div class="form-row">
                        <label>Produk (pilih manual)</label>
                        <select name="produk" required>
                            <option value="">-- Pilih Produk --</option>
                            <?php foreach($products as $p): ?>
                                <option value="<?= e($p[0]).'|'.$p[2].'|'.$p[3] ?>"><?= e($p[0]) . " — " . e($p[2]) ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="small-muted">Jika kamu datang tanpa link produk, silakan pilih di sini.</div>
                    </div>

                    <div class="form-row">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" required>
                    </div>
                    <div class="form-row">
                        <label>Alamat Pengiriman</label>
                        <textarea name="alamat" required></textarea>
                    </div>

                    <div class="form-row qty-row">
                        <label style="min-width:110px;">Jumlah</label>
                        <button type="button" class="qty-btn" onclick="this.nextElementSibling.stepDown(); calculateTotalManual()">−</button>
                        <input class="qty-input" type="number" name="jumlah" value="1" min="1" onchange="calculateTotalManual()">
                        <div class="small-muted">Jumlah item</div>
                    </div>

                    <div class="form-row">
                        <label>Metode Pembayaran</label>
                        <select name="pembayaran" required>
                            <option>Transfer Bank</option>
                            <option>COD</option>
                            <option>E-Wallet</option>
                        </select>
                    </div>

                    <div class="order-summary">
                        <div class="total-label">Estimasi Total</div>
                        <div class="total-value" id="manualTotal">Rp0</div>
                    </div>

                    <div style="margin-top:12px;">
                        <button class="btn-primary" type="submit">Tambahkan ke Keranjang</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php else: ?>
    <!-- Jika produk ditemukan via ?produk=NamaProduk -->
    <div class="card">
        <!-- LEFT: gambar -->
        <div class="product-visual">
            <img id="productImage" src="<?= e(product_image_path($product[3])) ?>" alt="<?= e($product[0]) ?>">
            <div class="small-muted" style="margin-top:12px;">Gambar produk sesuai pilihan. File: <?= e($product[3]) ?></div>
        </div>

        <!-- RIGHT: detail + form -->
        <div class="product-meta">
            <h1><?= e($product[0]) ?></h1>
            <div class="price"><?= e($product[2]) ?></div>
            <div class="variant"><strong>Varian:</strong> <?= e($product[4]) ?></div>
            <p class="desc"><?= e($product[5]) ?></p>

            <form action="cart.php" method="post" class="order-form" id="orderForm">
                <!-- Sembunyikan input produk agar cart.php menerima nama produk. -->
                <input type="hidden" name="produk" value="<?= e($product[0]) ?>">
                <!-- Untuk kompatibilitas lama, juga kirim harga numeric tanpa Rp -->
                <?php
                    $price_num = preg_replace('/\D/', '', $product[2]);
                ?>
                <input type="hidden" name="harga" value="<?= e($price_num) ?>">

                <div class="form-block">
                    <h3>Detail Pemesan</h3>
                    <div class="form-row">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" required>
                    </div>
                    <div class="form-row">
                        <label>Alamat Pengiriman</label>
                        <textarea name="alamat" required></textarea>
                    </div>
                </div>

                <div class="form-block">
                    <h3>Rincian Pesanan</h3>
                    <div class="form-row qty-row">
                        <label style="min-width:110px;">Jumlah</label>
                        <button type="button" class="qty-btn" onclick="changeQty(-1)">−</button>
                        <input id="qty" class="qty-input" type="number" name="jumlah" value="1" min="1" required>
                        <div style="margin-left:10px; color:#666;">pcs</div>
                    </div>

                    <div class="form-row">
                        <label>Pilih Pengiriman</label>
                        <select id="shipping" name="pengiriman" required>
                            <option value="Reguler - Rp10.000">Reguler (3–5 hari) - Rp10.000</option>
                            <option value="Express - Rp20.000">Express (1–2 hari) - Rp20.000</option>
                            <option value="Instant - Rp30.000">Instant (Same Day) - Rp30.000</option>
                        </select>
                    </div>

                    <div class="form-row">
                        <label>Metode Pembayaran</label>
                        <select name="pembayaran" required>
                            <option>Transfer Bank</option>
                            <option>COD (Bayar di Tempat)</option>
                            <option>E-Wallet (Dana/OVO/Gopay)</option>
                        </select>
                    </div>

                    <div class="form-row">
                        <label>Catatan (opsional)</label>
                        <textarea name="catatan" placeholder="Contoh: Tolong antar sore hari"></textarea>
                    </div>

                    <div class="order-summary">
                        <div class="total-label">Total</div>
                        <div class="total-value" id="totalPrice">Rp0</div>
                    </div>
                </div>

                <!-- TOMBOL UBAH: sekarang memicu modal struk -->
                <button type="button" id="pesanNowBtn" class="btn-primary">Pesan Sekarang</button>
            </form>
        </div>
    </div>
<?php endif; ?>
</div>

<!-- ====== MODAL STRUK ====== -->
<div class="modal-backdrop" id="modalBackdrop" aria-hidden="true">
  <div class="modal" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
    <div class="modal-header">
      <h3 id="modalTitle">Struk Pesanan</h3>
      <button id="closeModal" style="background:none;border:none;font-size:20px;cursor:pointer;">✕</button>
    </div>
    <div class="modal-body" id="modalBody">
      <div id="strukContent"></div>
      <!-- Ganti QR dengan ucapan -->
      <div style="margin-top:18px; text-align:center; color:#444; font-weight:600; font-size:15px;">
        Terima kasih sudah berbelanja di <span style="color:#e74c3c;">Toko Kami</span> 🐾<br>
        Semoga hari Anda menyenangkan!
      </div>
    </div>
    <div class="modal-footer" style="justify-content:center;">
      <a id="waLink" class="btn-wa" href="#" target="_blank" rel="noopener">Hubungi via WhatsApp</a>
    </div>
  </div>
</div>

<script>
// Utilities
function parsePriceRp(str){
    if(!str) return 0;
    const m = str.match(/(\d[\d.]*)/);
    if(!m) return 0;
    return parseInt(m[1].replace(/\./g,''), 10);
}

// Kalkulasi total (produk ditemukan)
(function(){
    const qtyInput = document.getElementById('qty');
    const shipSelect = document.getElementById('shipping');
    const totalEl = document.getElementById('totalPrice');

    if(qtyInput && totalEl && shipSelect){
        const hargaInput = document.querySelector('input[name=harga]');
        const basePrice = hargaInput ? parseInt(hargaInput.value,10) : 0;

        function recalc(){
            const qty = Math.max(1, parseInt(qtyInput.value || 1, 10));
            const shipVal = shipSelect.value || '';
            const ship = parsePriceRp(shipVal);
            const total = (basePrice * qty) + ship;
            totalEl.textContent = 'Rp' + total.toLocaleString('id-ID');
        }

        qtyInput.addEventListener('change', recalc);
        shipSelect.addEventListener('change', recalc);

        window.changeQty = function(delta){
            let v = Math.max(1, parseInt(qtyInput.value || 1,10) + delta);
            qtyInput.value = v;
            recalc();
        };

        recalc();
    }
})();

// Kalkulasi manual form (tanpa param)
(function(){
    const manualForm = document.querySelector('.card form[action="cart.php"]');
    if(manualForm){
        const prodSelect = manualForm.querySelector('select[name="produk"]');
        const qInput = manualForm.querySelector('input[name="jumlah"]');
        const totalEl = document.getElementById('manualTotal');
        function calcManual(){
            if(!prodSelect || !qInput || !totalEl) return;
            const selected = prodSelect.value;
            let price = 0;
            if(selected.includes('|')) {
                const parts = selected.split('|');
                price = parseInt(parts[1].replace(/\D/g,''),10) || 0;
            }
            const qty = Math.max(1, parseInt(qInput.value||1,10));
            const total = price * qty;
            totalEl.textContent = 'Rp' + total.toLocaleString('id-ID');
        }
        prodSelect && prodSelect.addEventListener('change', calcManual);
        qInput && qInput.addEventListener('change', calcManual);
        calcManual();
        window.calculateTotalManual = calcManual;
    }
})();

// ---------------------- Modal & flow "Pesan Sekarang" ----------------------
const pesanBtn = document.getElementById('pesanNowBtn');
const modalBackdrop = document.getElementById('modalBackdrop');
const modal = modalBackdrop.querySelector('.modal');
const closeModal = document.getElementById('closeModal');
const strukContent = document.getElementById('strukContent');
const waLink = document.getElementById('waLink');

if(pesanBtn){
    pesanBtn.addEventListener('click', function(e){
        // Ambil data form saat ini
        const form = document.getElementById('orderForm');
        // ambil fields (nama mungkin kosong - itu ok)
        const nama = form.querySelector('input[name="nama"]').value || '-';
        const alamat = form.querySelector('textarea[name="alamat"]').value || '-';
        const produk = form.querySelector('input[name="produk"]').value || '-';
        const hargaHidden = form.querySelector('input[name="harga"]').value || '0';
        const jumlah = form.querySelector('input[name="jumlah"]').value || '1';
        const pengiriman = form.querySelector('select[name="pengiriman"]').value || '-';
        const pembayaran = form.querySelector('select[name="pembayaran"]').value || '-';
        const catatan = form.querySelector('textarea[name="catatan"]').value || '-';

        // Hitung total (numeric)
        const base = parseInt(hargaHidden,10) || 0;
        const ship = parsePriceRp(pengiriman);
        const total = (base * parseInt(jumlah,10)) + ship;

        // Buat konten struk (HTML)
        const html = `
            <p style="margin:0 0 8px;"><strong>Nama:</strong> ${escapeHtml(nama)}</p>
            <p style="margin:0 0 8px;"><strong>Alamat:</strong> ${escapeHtml(alamat)}</p>
            <hr>
            <p style="margin:0 0 8px;"><strong>Produk:</strong> ${escapeHtml(produk)}</p>
            <p style="margin:0 0 8px;"><strong>Jumlah:</strong> ${escapeHtml(jumlah)} pcs</p>
            <p style="margin:0 0 8px;"><strong>Pengiriman:</strong> ${escapeHtml(pengiriman)}</p>
            <p style="margin:0 0 8px;"><strong>Pembayaran:</strong> ${escapeHtml(pembayaran)}</p>
            <p style="margin:0 0 8px;"><strong>Catatan:</strong> ${escapeHtml(catatan)}</p>
            <hr>
            <p style="margin:0 0 4px; font-size:18px;"><strong>Total:</strong> <span style="color:#e74c3c;">Rp${total.toLocaleString('id-ID')}</span></p>
        `;
        strukContent.innerHTML = html;

        // Set QR code & wa link (pesan ter-encode)
        const wa_number = '<?= $wa_number_int ?>';
        const wa_text = encodeURIComponent(`Halo, saya sudah melakukan pemesanan:
Produk: ${produk}
Jumlah: ${jumlah} pcs
Total: Rp${total.toLocaleString('id-ID')}
Nama: ${nama}
Alamat: ${alamat}
Mohon info selanjutnya.`);
        const wa_url = `https://wa.me/${wa_number}?text=${wa_text}`;
        waLink.href = wa_url;


        // Show modal
        modalBackdrop.style.display = 'flex';
        setTimeout(()=> modal.classList.add('show'), 10);

        // focus: allow esc to close
        document.addEventListener('keydown', escClose);
    });
}

// close modal handlers
function closeModalFn(){
    modal.classList.remove('show');
    setTimeout(()=> modalBackdrop.style.display = 'none', 200);
    document.removeEventListener('keydown', escClose);
}
closeModal.addEventListener('click', closeModalFn);
modalBackdrop.addEventListener('click', function(e){
    if(e.target === modalBackdrop) closeModalFn();
});
function escClose(e){
    if(e.key === 'Escape') closeModalFn();
}


// escape helper for innerHTML safety (small)
function escapeHtml(unsafe) {
    return String(unsafe)
         .replace(/&/g, '&amp;')
         .replace(/</g, '&lt;')
         .replace(/>/g, '&gt;')
         .replace(/"/g, '&quot;')
         .replace(/'/g, '&#039;');
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

<?php include 'includes/footer.php'; ?>
