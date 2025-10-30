<?php include 'includes/header.php'; ?>

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

    /* About section styling to match theme */
    .about-section {
        background: linear-gradient(180deg, rgba(255, 255, 255, 0.015), rgba(255, 255, 255, 0.01));
        border: 1px solid rgba(255, 255, 255, 0.02);
        border-radius: 14px;
        padding: 40px;
        box-shadow: var(--shadow-2);
        text-align: center;
    }

    .about-section h2 {
        font-size: 24px;
        font-weight: 800;
        color: var(--white);
        margin-bottom: 20px;
    }

    .about-section p {
        color: var(--muted);
        font-size: 16px;
        line-height: 1.6;
        margin-bottom: 15px;
    }
</style>

<!-- ============== PAGE CONTENT ============== -->
<div class="container">
    <section class="about-section">
        <h2>Tentang CatLicious+</h2>
        <p>CatLicious+ adalah toko online terpercaya untuk makanan kucing berkualitas tinggi. Kami berkomitmen memberikan nutrisi terbaik untuk kucing Anda.</p>
        <p>Didirikan sejak 2020, kami telah melayani ribuan pelanggan dengan pengiriman cepat dan produk asli.</p>
    </section>
    
</div>
<script>
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