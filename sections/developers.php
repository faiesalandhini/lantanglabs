<?php
// developers.php
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tim Pengembang - Lantang Labs</title>

<style>

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: 'Segoe UI', system-ui, sans-serif;
}

body {
    background: #0a2540;
    color: #0a2540;
}

.container {
    width: 90%;
    max-width: 1200px;
    margin: auto;
    position: relative;
    z-index: 2;
}


.developers {
    position: relative;
    padding: 90px 0;
    overflow: hidden;
    background: linear-gradient(
        160deg,
        #0a2540 0%,
        #0d2e57 35%,
        #f3f7ff 100%
    );
}

/* BACKGROUND FLOATING LIGHT */
.developers::before,
.developers::after {
    content: "";
    position: absolute;
    width: 500px;
    height: 500px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(77,163,255,0.35), transparent 70%);
    animation: floatGlow 16s linear infinite;
    z-index: 1;
}

.developers::before {
    top: -150px;
    left: -150px;
}

.developers::after {
    bottom: -200px;
    right: -150px;
    animation-delay: -8s;
}

@keyframes floatGlow {
    0% { transform: translate(0,0); }
    50% { transform: translate(30px,-40px); }
    100% { transform: translate(0,0); }
}


.dev-header {
    text-align: center;
    margin-bottom: 55px;
}

/* JUDUL KEREN */
.dev-header h2 {
    font-size: 40px;
    font-weight: 800;
    letter-spacing: 1px;
    margin-bottom: 14px;

    /* GRADIENT TEXT */
    background: linear-gradient(90deg, #ffffff, #cfe6ff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;

    /* GLOW HALUS */
    text-shadow: 0 6px 25px rgba(77,163,255,0.35);
    position: relative;
}

/* UNDERLINE ANIMASI */
.dev-header h2::after {
    content: "";
    display: block;
    width: 80px;
    height: 4px;
    margin: 14px auto 0;
    border-radius: 99px;
    background: linear-gradient(90deg, #4da3ff, #00d4ff);
    animation: underlinePulse 3s ease-in-out infinite;
}

@keyframes underlinePulse {
    0%,100% { opacity: 0.5; width: 60px; }
    50% { opacity: 1; width: 100px; }
}

/* SUBTITLE */
.subtitle {
    font-size: 17px;
    color: rgba(255,255,255,0.85);
    max-width: 620px;
    margin: auto;
}


.dev-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 28px;
}


.dev-card {
    position: relative;
    background: rgba(255,255,255,0.96);
    border-radius: 22px;
    padding: 32px 18px;
    text-align: center;
    box-shadow: 0 16px 40px rgba(0,0,0,0.15);
    transition: all 0.4s ease;
    overflow: hidden;
}

.dev-card:hover {
    transform: translateY(-12px) scale(1.03);
    box-shadow: 0 30px 70px rgba(0,0,0,0.25);
}

/* CARD GLOW */
.dev-card::before {
    content: "";
    position: absolute;
    inset: -2px;
    background: linear-gradient(120deg, #4da3ff, #0077ff, #4da3ff);
    border-radius: 24px;
    opacity: 0;
    transition: opacity 0.4s ease;
    z-index: 0;
}

.dev-card:hover::before {
    opacity: 0.45;
}

.dev-card > * {
    position: relative;
    z-index: 1;
}

/* AVATAR */
.avatar {
    width: 120px;
    height: 120px;
    margin: 0 auto 16px;
    border-radius: 50%;
    background: linear-gradient(135deg, #4da3ff, #0077ff);
    padding: 4px;
}

.avatar img {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    object-fit: cover;
    background: #ffffff;
}

/* TEXT */
.dev-card h3 {
    font-size: 17px;
    margin-bottom: 6px;
    color: #0a2540;
}

.role {
    display: inline-block;
    font-size: 13px;
    font-weight: 600;
    color: #0077ff;
    background: rgba(0,119,255,0.12);
    padding: 6px 14px;
    border-radius: 999px;
}


.animate {
    opacity: 0;
    transform: translateY(25px) scale(0.96);
}

.animate.show {
    opacity: 1;
    transform: translateY(0) scale(1);
    transition: all 0.6s ease;
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .developers {
        padding: 70px 0;
    }

    .dev-header h2 {
        font-size: 32px;
    }
}
</style>
</head>

<body>

<section id="developers" class="developers">
    <div class="container">

        <div class="dev-header animate">
            <h2>Tim Pengembang</h2>
            <p class="subtitle">
                Orang-orang di balik solusi digital Lantang Labs
            </p>
        </div>

        <div class="dev-grid">
            <?php
            $developers = [
                ["nama" => "Muhammad Haikal Firdaur", "role" => "Frontend Developer", "foto" => "haikal.jpg"],
                ["nama" => "Muhammad Iqbal Algantis", "role" => "System Architect", "foto" => "iqbal.jpg"],
                ["nama" => "Muhammad Faeisal Andhini", "role" => "Backend Developer", "foto" => "faisal.jpg"],
                ["nama" => "Fenroy Yedithia", "role" => "UI/UX Designer", "foto" => "fenroy.jpg"],
                ["nama" => "Zulfan Hadi", "role" => "Mobile & Integration Engineer", "foto" => "zulfan.jpg"],
            ];

            foreach ($developers as $index => $dev) :
            ?>
            <div class="dev-card animate" style="transition-delay: <?= $index * 0.08 ?>s">
                <div class="avatar">
                    <img src="assets/img/developers/<?= $dev['foto']; ?>" alt="<?= $dev['nama']; ?>">
                </div>
                <h3><?= $dev['nama']; ?></h3>
                <span class="role"><?= $dev['role']; ?></span>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<script>

const animatedElements = document.querySelectorAll('.animate');

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
            observer.unobserve(entry.target);
        }
    });
}, {
    threshold: 0.05,
    rootMargin: "0px 0px -60px 0px"
});

animatedElements.forEach(el => observer.observe(el));
</script>

</body>
</html>
