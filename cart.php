<?php
session_start();
include 'includes/header.php';

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
?>

<!-- ============== THEME INLINE (SAMA PERSIS DENGAN PRODUCTS.PHP) ============== -->
<style>
    :root {
        --bg: #0f1724;
        --card: #0b1220;
        --muted: #94a3b8;
        --accent: #ff6b3a;
        --accent-2: #ffb86b;
        --glass: rgba(255, 255, 255, 0.04);
        --glass-2: rgba(255, 255, 255, 0.02);
        --white: #f8fafc;
        --radius-lg: 18px;
        --radius-md: 12px;
        --shadow-1: 0 10px 30px rgba(2, 6, 23, 0.6);
        --shadow-2: 0 6px 20px rgba(2, 6, 23, 0.45);
        --glass-border: rgba(255, 255, 255, 0.06);
        --glass-border-2: rgba(255, 255, 255, 0.03);
        --max-width: 1220px;
        --card-height: 320px;
    }

    /* Reset */
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0
    }

    html, body {
        height: 100%
    }

    body {
        font-family: Inter, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        background: linear-gradient(180deg, #061021 0%, #071426 35%, #0b1524 100%);
        color: var(--white);
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        line-height: 1.45;
        -webkit-tap-highlight-color: transparent;
        padding-bottom: 40px;
    }

    /* Header override (makes header look like index) */
    header {
        background: linear-gradient(180deg, rgba(255, 255, 255, 0.01), rgba(255, 255, 255, 0.00));
        border-bottom: 1px solid rgba(255, 255, 255, 0.02);
        position: sticky;
        top: 0;
        z-index: 9999;
        backdrop-filter: blur(6px);
    }

    .header-top {
        max-width: var(--max-width);
        margin: 6px auto;
        padding: 10px 24px;
        display: flex;
        gap: 16px;
        align-items: center;
    }

    .logo {
        font-size: 1.4rem;
        font-weight: 800;
        color: var(--white);
        text-decoration: none;
        display: flex;
        gap: 8px;
        align-items: center;
    }

    .search-bar {
        flex: 1;
        display: flex;
        gap: 8px;
        align-items: center;
        padding: 8px;
        border-radius: 12px;
        background: linear-gradient(180deg, rgba(255, 255, 255, 0.01), rgba(255, 255, 255, 0.02));
        border: 1px solid var(--glass-border-2);
        box-shadow: var(--shadow-2);
    }

    .search-bar input {
        flex: 1;
        background: transparent;
        border: none;
        color: var(--white);
        padding: 10px;
        font-size: 14px;
    }

    .search-bar button {
        background: linear-gradient(90deg, var(--accent), var(--accent-2));
        border: none;
        padding: 10px 14px;
        border-radius: 10px;
        color: #071018;
        font-weight: 800;
        cursor: pointer;
    }

    nav {
        display: flex;
        gap: 12px;
        align-items: center;
    }

    nav a {
        color: var(--white);
        text-decoration: none;
        padding: 8px 12px;
        border-radius: 10px;
        font-weight: 600;
        font-size: 14px;
    }

    nav a:hover {
        background: rgba(255, 255, 255, 0.03);
    }

    /* categories (same look as index) */
    .categories {
        background: transparent;
        padding: 8px 24px 18px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.02);
    }

    .categories ul {
        list-style: none;
        display: flex;
        gap: 18px;
        max-width: var(--max-width);
        margin: 0 auto;
        padding: 0;
    }

    .categories a {
        color: var(--muted);
        text-decoration: none;
        padding: 6px 10px;
        border-radius: 8px;
        font-weight: 600;
    }

    .categories a:hover {
        color: var(--accent-2);
        background: rgba(255, 255, 255, 0.02);
    }

    /* Layout container */
    .container {
        max-width: var(--max-width);
        margin: 22px auto;
        padding: 0 24px 40px;
    }

    /* Page title */
    .page-head {
        display: flex;
        align-items: center;
        gap: 18px;
        justify-content: center;
        margin-bottom: 18px;
    }

    .page-head h2 {
        font-size: 24px;
        font-weight: 800;
        color: var(--white);
    }

    /* Cart wrapper */
    .cart-wrapper {
        background: linear-gradient(180deg, rgba(255, 255, 255, 0.015), rgba(255, 255, 255, 0.01));
        border: 1px solid rgba(255, 255, 255, 0.02);
        border-radius: 14px;
        box-shadow: var(--shadow-2);
        overflow: hidden;
    }

    .cart-header {
        display: grid;
        grid-template-columns: 1fr 150px 120px 150px 100px;
        background: linear-gradient(180deg, rgba(255, 255, 255, 0.01), rgba(255, 255, 255, 0.02));
        border-bottom: 1px solid rgba(255, 255, 255, 0.03);
        padding: 15px 25px;
        font-weight: 600;
        color: var(--white);
    }

    .cart-item {
        display: grid;
        grid-template-columns: 1fr 150px 120px 150px 100px;
        align-items: center;
        padding: 15px 25px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.02);
    }

    .cart-item:hover {
        background: rgba(255, 255, 255, 0.02);
        transition: 0.3s;
    }

    .cart-product {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .cart-product img {
        width: 70px;
        height: 70px;
        object-fit: cover;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.45);
    }

    .cart-product h4 {
        margin: 0;
        font-size: 1rem;
        color: var(--white);
    }

    .cart-product p {
        margin: 4px 0 0;
        font-size: 0.85rem;
        color: var(--muted);
    }

    .cart-qty {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

    .cart-qty button {
        background: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.04);
        width: 28px;
        height: 28px;
        border-radius: 8px;
        font-weight: bold;
        font-size: 16px;
        cursor: pointer;
        color: var(--white);
        transition: 0.2s;
    }

    .cart-qty button:hover {
        background: var(--accent);
        color: #071018;
    }

    .cart-remove {
        color: #ff4c4c;
        cursor: pointer;
        font-weight: 500;
        transition: 0.2s;
        text-align: center;
    }

    .cart-remove:hover {
        text-decoration: underline;
    }

    .cart-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 25px;
        background: linear-gradient(180deg, rgba(255, 255, 255, 0.01), rgba(255, 255, 255, 0.02));
        border-top: 1px solid rgba(255, 255, 255, 0.03);
    }

    .cart-footer h3 {
        margin: 0;
        font-size: 1.2rem;
        color: var(--white);
    }

    .cart-footer .checkout-btn {
        background: linear-gradient(90deg, var(--accent), var(--accent-2));
        color: #071018;
        padding: 12px 28px;
        border-radius: 12px;
        font-weight: 600;
        text-decoration: none;
        transition: 0.3s;
    }

    .cart-footer .checkout-btn:hover {
        box-shadow: 0 5px 20px rgba(255, 110, 58, 0.4);
    }

    .empty-cart {
        text-align: center;
        padding: 80px 30px;
        background: linear-gradient(180deg, rgba(255, 255, 255, 0.015), rgba(255, 255, 255, 0.01));
        border-radius: 14px;
        border: 1px solid rgba(255, 255, 255, 0.02);
        box-shadow: var(--shadow-2);
        margin: 50px auto;
        max-width: 700px;
    }

    .empty-cart h3 {
        color: var(--white);
        margin-bottom: 10px;
    }

    .empty-cart p {
        color: var(--muted);
    }

    .empty-cart a {
        color: var(--accent-2);
        font-weight: 600;
        text-decoration: none;
    }

    .empty-cart a:hover {
        text-decoration: underline;
    }
</style>

<!-- ============== PAGE CONTENT ============== -->
<div class="container">
    <div class="page-head">
        <h2>🛒 Keranjang Belanja</h2>
    </div>

    <?php if (empty($_SESSION['cart'])): ?>
        <div class="empty-cart">
            <h3>Keranjang Anda masih kosong</h3>
            <p><a href="products.php">Belanja Sekarang</a></p>
        </div>
    <?php else: ?>
        <div class="cart-wrapper">
            <div class="cart-header">
                <div>Produk</div>
                <div>Harga Satuan</div>
                <div>Kuantitas</div>
                <div>Total Harga</div>
                <div>Aksi</div>
            </div>

            <?php
            $total = 0;
            foreach ($_SESSION['cart'] as $key => $item):
                $name = $item['name'] ?? 'Produk Tidak Diketahui';
                $price = (int)($item['price'] ?? 0);
                $quantity = (int)($item['quantity'] ?? 1);
                $subtotal = $price * $quantity;
                $total += $subtotal;
            ?>
            <div class="cart-item">
                <div class="cart-product">
                    <img src="assets/img/sample.jpg" alt="produk">
                    <div>
                        <h4><?php echo $name; ?></h4>
                        <p>Variasi: Default</p>
                    </div>
                </div>
                <div>Rp<?php echo number_format($price, 0, ',', '.'); ?></div>
                <div class="cart-qty">
                    <button onclick="updateQuantity('<?php echo $key; ?>', -1)">−</button>
                    <span><?php echo $quantity; ?></span>
                    <button onclick="updateQuantity('<?php echo $key; ?>', 1)">+</button>
                </div>
                <div><strong>Rp<?php echo number_format($subtotal, 0, ',', '.'); ?></strong></div>
                <div class="cart-remove" onclick="removeItem('<?php echo $key; ?>')">Hapus</div>
            </div>
            <?php endforeach; ?>

            <div class="cart-footer">
                <h3>Total: Rp<?php echo number_format($total, 0, ',', '.'); ?></h3>
                <a href="order.php?checkout=1" class="checkout-btn">Checkout</a>
            </div>
        </div>
    <?php endif; ?>
</div>

<script>
function updateQuantity(key, delta) {
    window.location.href = `cart.php?action=update&key=${key}&delta=${delta}`;
}
function removeItem(key) {
    window.location.href = `cart.php?action=remove&key=${key}`;
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

<?php
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'update' && isset($_GET['key'], $_GET['delta'])) {
        $key = (int)$_GET['key'];
        $delta = (int)$_GET['delta'];
        if (isset($_SESSION['cart'][$key])) {
            $_SESSION['cart'][$key]['quantity'] = max(1, $_SESSION['cart'][$key]['quantity'] + $delta);
        }
    } elseif ($_GET['action'] == 'remove' && isset($_GET['key'])) {
        $key = (int)$_GET['key'];
        unset($_SESSION['cart'][$key]);
        $_SESSION['cart'] = array_values($_SESSION['cart']);
    }
    header('Location: cart.php');
    exit;
}

include 'includes/footer.php';
?>