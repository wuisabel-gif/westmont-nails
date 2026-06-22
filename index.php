<?php require_once('includes/head.php') ?>
<?php require_once('includes/header.php') ?>
<main>
    <section class="hero">
        <div id="hero-canvas" class="hero-canvas" aria-hidden="true"></div>
        <div class="wrap hero-inner">
            <div class="hero-copy">
                <p class="eyebrow">Westmont Village · est. 2021</p>
                <h1>Colour, <span class="serif-it">considered.</span></h1>
                <p class="lead">A small nail &amp; makeup studio in Westmont Village. Manicures, pedicures, gel, nail art, and makeup &mdash; unhurried, by appointment.</p>
                <div class="hero-actions">
                    <a class="btn-lux" href="contact.php">Book an appointment</a>
                    <a class="btn-ghost" href="index.php#services">See services &amp; prices</a>
                </div>
                <p class="hero-badge">
                    <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true">
                        <path d="M12 21c0-6 3-11 9-12-1 6-4 11-9 12Z"/><path d="M12 21C8 17 4 15 3 9c5 1 8 5 9 9Z"/>
                    </svg>
                    100% Vegan &amp; cruelty-free polish &mdash; always
                </p>
            </div>

            <div class="hero-art" aria-hidden="true">
                <div class="glow"></div>
                <img class="hero-bottle-img" src="images/nail/westmond_nail-web.webp"
                     alt="Westmont Nails luxury nail polish bottle" width="540" height="1210">
            </div>
        </div>
    </section>

    <!-- Liquid Lacquer: seeded generative polish-swirl behind the hero -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.7.0/p5.min.js"></script>
    <script>
    (function () {
      var host = document.getElementById('hero-canvas');
      if (!host || typeof p5 === 'undefined') return;
      var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
      // Studio lacquers: wine, rose, gold, blush, mauve
      var PALETTE = [[110,43,67],[201,138,160],[188,154,106],[231,188,200],[140,90,110]];
      var SEED = 7, NUM = 150;

      new p5(function (p) {
        var w, h, pts = [];
        var CREAM = [251, 245, 241];

        function spawn() {
          var c = PALETTE[(p.random(PALETTE.length)) | 0];
          return { x: p.random(w), y: p.random(h), col: c,
                   life: p.random(60, 220), o: p.random(7, 20) };
        }
        function step() {
          for (var i = 0; i < pts.length; i++) {
            var pt = pts[i];
            var a = p.noise(pt.x * 0.0016, pt.y * 0.0016, p.frameCount * 0.0006) * p.TWO_PI * 2.2;
            var nx = pt.x + Math.cos(a) * 1.5, ny = pt.y + Math.sin(a) * 1.5;
            p.stroke(pt.col[0], pt.col[1], pt.col[2], pt.o);
            p.line(pt.x, pt.y, nx, ny);
            pt.x = nx; pt.y = ny; pt.life--;
            if (pt.life < 0 || pt.x < -5 || pt.x > w + 5 || pt.y < -5 || pt.y > h + 5) pts[i] = spawn();
          }
        }
        p.setup = function () {
          w = host.clientWidth; h = host.clientHeight || 480;
          p.createCanvas(w, h).parent(host);
          p.randomSeed(SEED); p.noiseSeed(SEED);
          p.background(CREAM[0], CREAM[1], CREAM[2]);
          p.strokeWeight(1.15);
          for (var i = 0; i < NUM; i++) pts.push(spawn());
          if (reduce) { for (var k = 0; k < 360; k++) step(); p.noLoop(); }
        };
        p.draw = function () {
          p.noStroke(); p.fill(CREAM[0], CREAM[1], CREAM[2], 6); p.rect(0, 0, w, h);
          step();
        };
        p.windowResized = function () {
          w = host.clientWidth; h = host.clientHeight || 480;
          p.resizeCanvas(w, h);
          p.background(CREAM[0], CREAM[1], CREAM[2]);
          if (reduce) { for (var k = 0; k < 360; k++) step(); p.redraw(); }
        };
      });
    })();
    </script>
    <section class="section" id="film">
        <div class="wrap">
            <div class="section-head">
                <p class="eyebrow" style="justify-content:center">A little film</p>
                <h2>Inside the studio</h2>
                <p class="lead">Ten quiet seconds of colour, gloss, and gold &mdash; the feeling you can expect from the chair.</p>
            </div>
            <div class="video-frame">
                <video src="images/WESTMOND_NAILS_promo.mp4" autoplay muted loop playsinline controls
                       preload="metadata" aria-label="Westmont Nails promotional film"></video>
            </div>
        </div>
    </section>

    <?php require('includes/products.php') ?>
</main>
<?php require_once('includes/footer.php') ?>
