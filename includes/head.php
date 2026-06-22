<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap (kept for layout utilities + your existing markup) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Type: Cormorant Garamond (display) + Jost (body) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">

    <title>Westmont Nails — Westmont Village</title>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/logo-web.png">

    <style>
      :root{
        --ink:#2a151f;        /* deep aubergine, near-black text */
        --wine:#6e2b43;       /* deep wine — headings, primary */
        --rose:#c98aa0;       /* dusty rose */
        --rose-soft:#e7bcc8;  /* lighter rose */
        --blush:#f6e7eb;      /* blush panel */
        --cream:#fbf5f1;      /* warm ivory page bg */
        --gold:#bc9a6a;       /* champagne gold accent */
        --line:rgba(42,21,31,.14);
        --shadow:0 24px 60px -28px rgba(110,43,67,.45);
      }

      *{box-sizing:border-box}
      html{scroll-behavior:smooth}
      body{
        margin:0;
        background:var(--cream);
        background-image:
          radial-gradient(1100px 700px at 88% -8%, rgba(201,138,160,.22), transparent 60%),
          radial-gradient(900px 600px at -10% 12%, rgba(231,188,200,.20), transparent 58%),
          radial-gradient(800px 800px at 50% 118%, rgba(188,154,106,.15), transparent 60%);
        background-attachment:fixed;
        color:var(--ink);
        font-family:'Jost',system-ui,sans-serif;
        font-weight:300;
        font-size:1.05rem;
        line-height:1.75;
        -webkit-font-smoothing:antialiased;
      }
      main{display:block}
      a{color:inherit;text-decoration:none}
      img{max-width:100%;display:block}

      .wrap{max-width:1180px;margin:0 auto;padding:0 1.5rem}

      /* ---- type ---- */
      h1,h2,h3{font-family:'Cormorant Garamond',serif;font-weight:500;color:var(--wine);margin:0;line-height:1.06}
      h1{font-size:clamp(2.9rem,6.4vw,5.4rem);letter-spacing:-.5px}
      h2{font-size:clamp(2rem,4vw,3.1rem)}
      h3{font-size:1.7rem}
      .serif-it{font-style:italic;color:var(--gold)}
      p{margin:0 0 1rem}
      .lead{font-size:1.18rem;color:rgba(42,21,31,.78);max-width:46ch}

      .eyebrow{
        font-family:'Jost',sans-serif;font-weight:500;
        text-transform:uppercase;letter-spacing:.42em;
        font-size:.72rem;color:var(--gold);margin:0 0 1rem;
        display:inline-flex;align-items:center;gap:.7rem;
      }
      .eyebrow::before{content:"";width:30px;height:1px;background:var(--gold);display:inline-block}

      /* ---- lacquer swatch (signature motif) ---- */
      .swatch{
        width:18px;height:18px;border-radius:50%;
        background:var(--rose);position:relative;flex:0 0 auto;
        box-shadow:inset 0 -3px 6px rgba(0,0,0,.18);
      }
      .swatch::after{
        content:"";position:absolute;top:3px;left:4px;
        width:6px;height:5px;border-radius:50%;
        background:rgba(255,255,255,.75);filter:blur(.4px);
      }

      /* ---- buttons ---- */
      .btn-lux,.btn-ghost{
        display:inline-flex;align-items:center;gap:.6rem;
        font-family:'Jost',sans-serif;font-weight:400;
        letter-spacing:.16em;text-transform:uppercase;font-size:.78rem;
        padding:.95rem 2.1rem;border-radius:999px;cursor:pointer;
        transition:transform .25s ease, box-shadow .25s ease, background .25s ease, color .25s ease;
        border:1px solid transparent;
      }
      .btn-lux{background:var(--wine);color:var(--cream);box-shadow:0 14px 30px -16px rgba(110,43,67,.7)}
      .btn-lux:hover{transform:translateY(-2px);background:var(--ink);box-shadow:0 20px 38px -16px rgba(110,43,67,.8)}
      .btn-ghost{background:transparent;color:var(--wine);border-color:var(--line)}
      .btn-ghost:hover{transform:translateY(-2px);border-color:var(--gold);color:var(--gold)}

      /* ---- navbar ---- */
      .site-nav{position:sticky;top:0;z-index:50;background:rgba(251,245,241,.82);backdrop-filter:blur(10px);border-bottom:1px solid var(--line)}
      .nav-inner{display:flex;align-items:center;justify-content:space-between;gap:1.5rem;padding:1.1rem 1.5rem;max-width:1180px;margin:0 auto}
      .brand{display:flex;align-items:center;gap:.65rem;font-family:'Cormorant Garamond',serif;font-size:1.65rem;font-weight:600;color:var(--wine);letter-spacing:.5px}
      .brand .swatch{width:14px;height:14px}
      .brand-logo{width:42px;height:42px;object-fit:contain;flex:0 0 auto}
      .nav-links{display:flex;align-items:center;gap:2.1rem;list-style:none;margin:0;padding:0}
      .nav-links a{font-family:'Jost',sans-serif;font-size:.82rem;letter-spacing:.18em;text-transform:uppercase;color:var(--ink);position:relative;padding:.2rem 0}
      .nav-links a::after{content:"";position:absolute;left:0;bottom:-3px;height:1px;width:0;background:var(--gold);transition:width .3s ease}
      .nav-links a:hover::after,.nav-links a.current::after{width:100%}
      .nav-links a.current{color:var(--wine)}
      .nav-cta{margin-left:.4rem}
      /* book-now button: white pill, wine text, properly padded */
      .nav-cta a{
        background:#fff;color:var(--wine);border:1px solid var(--line);
        padding:.7rem 1.7rem;line-height:1;border-radius:999px;
        box-shadow:0 10px 24px -16px rgba(110,43,67,.5);
      }
      .nav-cta a::after{display:none}
      .nav-cta a:hover{background:var(--wine);color:#fff;border-color:var(--wine);transform:translateY(-2px)}

      .nav-toggle{display:none}
      .nav-burger{display:none;cursor:pointer;flex-direction:column;gap:5px;padding:.4rem}
      .nav-burger span{width:24px;height:1.6px;background:var(--wine);transition:.3s}

      @media (max-width:860px){
        .nav-burger{display:flex}
        .nav-links{
          position:absolute;top:100%;left:0;right:0;
          flex-direction:column;gap:1.4rem;align-items:flex-start;
          background:var(--cream);border-bottom:1px solid var(--line);
          padding:1.6rem 1.5rem;transform:translateY(-12px);
          opacity:0;pointer-events:none;transition:.3s ease;
        }
        .nav-toggle:checked ~ .nav-links{opacity:1;transform:none;pointer-events:auto}
        .nav-cta{margin-left:0}
      }

      /* ---- hero ---- */
      .hero{position:relative;overflow:hidden}
      .hero-inner{display:grid;grid-template-columns:1.1fr .9fr;gap:3rem;align-items:center;padding:5.5rem 0 5rem;position:relative;z-index:1}
      .hero-canvas{position:absolute;inset:0;z-index:0;opacity:.62;pointer-events:none;
        -webkit-mask-image:linear-gradient(100deg,transparent 0%,rgba(0,0,0,.10) 22%,#000 54%);
                mask-image:linear-gradient(100deg,transparent 0%,rgba(0,0,0,.10) 22%,#000 54%)}
      .hero-copy{max-width:34ch;animation:rise .9s ease both}
      .hero-copy .lead{margin:1.6rem 0 2.2rem}
      .hero-actions{display:flex;gap:1rem;flex-wrap:wrap}
      .hero-badge{display:inline-flex;align-items:center;gap:.55rem;margin-top:1.7rem;
        font-size:.82rem;letter-spacing:.04em;color:var(--wine);
        background:rgba(255,255,255,.55);border:1px solid var(--line);
        padding:.5rem 1rem;border-radius:999px;backdrop-filter:blur(4px)}
      .hero-badge svg{color:var(--gold);flex:0 0 auto}

      .hero-art{position:relative;height:430px;display:flex;align-items:center;justify-content:center;animation:rise 1s .15s ease both}
      .glow{position:absolute;width:430px;height:430px;border-radius:50%;
        background:radial-gradient(circle at 38% 34%, var(--rose-soft), var(--blush) 55%, transparent 72%);
        filter:blur(6px);z-index:0}
      .bottle{position:relative;z-index:2;width:148px;animation:bob 5.5s ease-in-out infinite}
      .hero-photo{position:relative;z-index:2;width:100%;max-width:420px;height:430px;object-fit:cover;border-radius:26px;box-shadow:var(--shadow)}
      .hero-bottle{position:relative;z-index:2;width:clamp(170px,20vw,224px);height:auto;filter:drop-shadow(0 26px 40px rgba(110,43,67,.34));animation:bob 6s ease-in-out infinite}
      .hero-bottle-img{position:relative;z-index:2;width:clamp(200px,24vw,300px);height:auto;
        filter:drop-shadow(0 28px 42px rgba(110,43,67,.34));animation:bob 6s ease-in-out infinite}
      .bottle .cap{height:64px;width:62px;margin:0 auto;border-radius:14px 14px 6px 6px;
        background:linear-gradient(120deg,#d8b87f,var(--gold) 45%,#9c7c4d);
        box-shadow:inset 0 -6px 10px rgba(0,0,0,.18), inset 6px 4px 8px rgba(255,255,255,.4)}
      .bottle .neck{height:12px;width:40px;margin:0 auto;background:linear-gradient(#caa6b3,#b98fa1)}
      .bottle .body{height:150px;width:128px;margin:0 auto;border-radius:20px 20px 26px 26px;position:relative;overflow:hidden;
        background:linear-gradient(135deg,var(--rose) 0%,var(--wine) 78%);
        box-shadow:var(--shadow), inset -10px -12px 22px rgba(0,0,0,.22)}
      .bottle .body::before{content:"";position:absolute;top:12px;left:16px;width:26px;height:96px;border-radius:40px;
        background:linear-gradient(rgba(255,255,255,.6),rgba(255,255,255,0));filter:blur(1px)}
      .bottle .label{position:absolute;left:50%;top:54%;transform:translate(-50%,-50%);text-align:center;color:var(--cream)}
      .bottle .label small{font-family:'Jost',sans-serif;font-size:.5rem;letter-spacing:.32em;text-transform:uppercase;opacity:.85}
      .bottle .label b{font-family:'Cormorant Garamond',serif;font-size:1.1rem;font-weight:600;display:block;letter-spacing:1px}

      .float-swatch{position:absolute;border-radius:50%;z-index:1;box-shadow:inset 0 -4px 8px rgba(0,0,0,.2)}
      .float-swatch::after{content:"";position:absolute;top:18%;left:22%;width:24%;height:18%;border-radius:50%;background:rgba(255,255,255,.7)}
      .fs1{width:52px;height:52px;background:var(--gold);top:34px;left:24px;animation:bob 6s ease-in-out infinite}
      .fs2{width:38px;height:38px;background:var(--rose);bottom:46px;left:8px;animation:bob 5s .4s ease-in-out infinite}
      .fs3{width:46px;height:46px;background:var(--wine);top:30px;right:30px;animation:bob 6.5s .2s ease-in-out infinite}
      .fs4{width:30px;height:30px;background:var(--rose-soft);bottom:60px;right:40px;animation:bob 4.6s .6s ease-in-out infinite}

      /* ---- promo video ---- */
      .video-grid{display:grid;grid-template-columns:1fr 1fr;gap:1.4rem;max-width:1100px;margin:0 auto}
      .video-frame{position:relative;max-width:960px;margin-inline:auto;border-radius:22px;overflow:hidden;
        box-shadow:var(--shadow);border:1px solid var(--line);aspect-ratio:16/9;background:#1a0d13}
      .video-frame video{width:100%;height:100%;display:block;object-fit:cover}
      @media (max-width:860px){.video-grid{grid-template-columns:1fr}}

      /* ---- "not sure what to book" band ---- */
      .help-band{display:flex;align-items:center;justify-content:space-between;gap:2rem;flex-wrap:wrap;
        background:var(--blush);border:1px solid var(--line);border-radius:22px;padding:2.4rem 2.6rem}
      .help-band h3{margin:.2rem 0 .4rem}
      .help-band p{margin:0;color:rgba(42,21,31,.74);max-width:48ch}
      .help-band .btn-lux{flex:0 0 auto}

      /* ---- generic section ---- */
      .section{padding:5rem 0}
      .section-head{text-align:center;max-width:50ch;margin:0 auto 3rem}
      .section-head .lead{margin-inline:auto}

      /* ---- page band (about / contact heroes) ---- */
      .band{background:var(--blush);text-align:center;padding:5.5rem 1.5rem;position:relative;overflow:hidden}
      .band h1{margin-bottom:1rem}
      .band .lead{margin:0 auto}
      .band-dots{display:flex;gap:.6rem;justify-content:center;margin-top:1.8rem}

      /* ---- services menu list (products.php) ---- */
      .menu-list{max-width:760px;margin:0 auto}
      .menu-item{display:flex;justify-content:space-between;align-items:baseline;gap:1.5rem;
        padding:1.15rem 0;border-bottom:1px dashed var(--line)}
      .menu-item:last-child{border-bottom:0}
      .menu-item .mi-text{flex:1;min-width:0}
      .menu-item h4{font-family:'Cormorant Garamond',serif;font-weight:600;font-size:1.35rem;
        color:var(--wine);margin:0 0 .25rem;line-height:1.2}
      .menu-item .mi-dur{font-family:'Jost',sans-serif;font-weight:400;font-size:.66rem;
        letter-spacing:.14em;text-transform:uppercase;color:rgba(42,21,31,.45);margin-left:.55rem;white-space:nowrap}
      .menu-item p{margin:0;font-size:.96rem;color:rgba(42,21,31,.7);max-width:54ch}
      .menu-item .mi-price{font-family:'Cormorant Garamond',serif;font-style:italic;
        font-size:1.3rem;color:var(--gold);white-space:nowrap}

      /* ---- services grid (products.php) ---- */
      .svc-cat{grid-column:1/-1;display:flex;align-items:center;gap:1.1rem;margin:1.4rem 0 .2rem}
      .svc-cat:first-child{margin-top:0}
      .svc-cat h3{font-size:1.55rem;color:var(--wine);white-space:nowrap}
      .svc-cat .rule{flex:1;height:1px;background:var(--line)}
      .svc-note{grid-column:1/-1;text-align:center;font-size:.92rem;color:rgba(42,21,31,.6);margin:.4rem 0 1.6rem}
      .svc-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.6rem}
      .svc-card{
        background:#fff;border:1px solid var(--line);border-radius:22px;padding:2.2rem 1.9rem;
        position:relative;overflow:hidden;transition:transform .3s ease, box-shadow .3s ease;
      }
      .svc-card:hover{transform:translateY(-6px);box-shadow:var(--shadow)}
      .svc-card .dot{width:42px;height:42px;border-radius:50%;margin-bottom:1.3rem;position:relative;box-shadow:inset 0 -5px 9px rgba(0,0,0,.18)}
      .svc-card .dot::after{content:"";position:absolute;top:8px;left:10px;width:12px;height:9px;border-radius:50%;background:rgba(255,255,255,.7)}
      .svc-card h3{margin-bottom:.5rem}
      .svc-card p{font-size:.98rem;color:rgba(42,21,31,.72);margin-bottom:1.2rem}
      .svc-card .meta{display:flex;align-items:baseline;justify-content:space-between;gap:1rem}
      .svc-card .price{font-family:'Cormorant Garamond',serif;font-style:italic;font-size:1.35rem;color:var(--gold)}
      .svc-card .dur{font-size:.72rem;letter-spacing:.14em;text-transform:uppercase;color:rgba(42,21,31,.5)}

      /* ---- studio pair (about) ---- */
      .studio-pair{display:grid;grid-template-columns:repeat(3,1fr);gap:1.6rem;max-width:1000px;margin:0 auto}
      @media (max-width:760px){.studio-pair{grid-template-columns:1fr 1fr}}
      @media (max-width:480px){.studio-pair{grid-template-columns:1fr}}

      /* ---- story / quote (about) ---- */
      .story-grid{display:grid;grid-template-columns:1fr 1fr;gap:3.5rem;align-items:center}
      .pull{font-family:'Cormorant Garamond',serif;font-style:italic;font-size:clamp(1.7rem,3vw,2.4rem);line-height:1.4;color:var(--wine);border-left:2px solid var(--gold);padding-left:1.6rem}
      .stat-row{display:flex;gap:2.5rem;margin-top:2rem;flex-wrap:wrap}
      .stat b{font-family:'Cormorant Garamond',serif;font-size:2.6rem;color:var(--wine);display:block;line-height:1}
      .stat span{font-size:.8rem;letter-spacing:.16em;text-transform:uppercase;color:var(--gold)}

      /* ---- contact ---- */
      .contact-grid{display:grid;grid-template-columns:1fr 1fr;gap:3rem;align-items:start}
      .field{margin-bottom:1.3rem}
      .field label{display:block;font-size:.74rem;letter-spacing:.18em;text-transform:uppercase;color:var(--wine);margin-bottom:.5rem}
      .field input,.field select,.field textarea{
        width:100%;padding:.85rem 1rem;border:1px solid var(--line);border-radius:12px;
        background:#fff;font-family:'Jost',sans-serif;font-size:1rem;color:var(--ink);transition:border .25s ease;
      }
      .field input:focus,.field select:focus,.field textarea:focus{outline:none;border-color:var(--gold)}
      .info-card{background:var(--blush);border-radius:22px;padding:2.4rem}
      .info-card h3{margin-bottom:1.3rem}
      .info-row{display:flex;gap:.9rem;padding:.7rem 0;border-bottom:1px dashed var(--line);align-items:baseline}
      .info-row:last-child{border-bottom:0}
      .info-row span{font-size:.74rem;letter-spacing:.16em;text-transform:uppercase;color:var(--gold);min-width:78px}

      /* ---- gallery ---- */
      .gallery-cat{display:flex;align-items:center;gap:1.1rem;margin:0 0 1.6rem}
      .gallery-cat:not(:first-child){margin-top:3.5rem}
      .gallery-cat h2{white-space:nowrap}
      .gallery-cat .rule{flex:1;height:1px;background:var(--line)}
      .gallery-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.4rem;align-items:stretch}
      .tile{
        display:flex;flex-direction:column;border-radius:18px;overflow:hidden;
        background:#fff;border:1px solid var(--line);
        box-shadow:0 14px 34px -26px rgba(110,43,67,.5);
        transition:transform .3s ease, box-shadow .3s ease;
      }
      .tile:hover{transform:translateY(-5px);box-shadow:var(--shadow)}
      .tile .ph{position:relative;aspect-ratio:4/5;background:linear-gradient(135deg,var(--c1,#c98aa0),var(--c2,#6e2b43))}
      .tile .ph::after{content:"";position:absolute;inset:0;background:radial-gradient(circle at 28% 22%,rgba(255,255,255,.35),transparent 46%)}
      .tile .ph .ph-tag{position:absolute;left:14px;bottom:12px;z-index:2;font-family:'Jost',sans-serif;font-size:.62rem;letter-spacing:.26em;text-transform:uppercase;color:rgba(255,255,255,.85)}
      .tile img{width:100%;aspect-ratio:4/5;object-fit:cover;display:block}
      .tile figcaption{display:flex;justify-content:space-between;align-items:baseline;gap:1rem;padding:.95rem 1.1rem;margin-top:auto}
      .tile figcaption b{font-family:'Cormorant Garamond',serif;font-weight:600;font-size:1.28rem;color:var(--wine)}
      .tile figcaption span{font-size:.64rem;letter-spacing:.2em;text-transform:uppercase;color:var(--gold);white-space:nowrap}
      @media (max-width:860px){.gallery-grid{grid-template-columns:repeat(2,1fr)}}
      @media (max-width:560px){.gallery-grid{grid-template-columns:1fr}}

      /* ---- footer ---- */
      .site-foot{background:var(--ink);color:var(--cream);padding:4rem 0 2rem;margin-top:4rem}
      .foot-grid{display:grid;grid-template-columns:1.4fr 1fr 1fr;gap:2.5rem}
      .foot-brand{font-family:'Cormorant Garamond',serif;font-size:1.9rem;color:#fff;display:flex;align-items:center;gap:.6rem}
      .site-foot p{color:rgba(251,245,241,.6);font-size:.95rem}
      .foot-col h4{font-family:'Jost',sans-serif;font-size:.74rem;letter-spacing:.22em;text-transform:uppercase;color:var(--gold);margin:0 0 1rem}
      .foot-col a{display:block;color:rgba(251,245,241,.78);font-size:.95rem;padding:.25rem 0;transition:color .25s ease}
      .foot-col a:hover{color:#fff}
      .foot-base{border-top:1px solid rgba(251,245,241,.14);margin-top:2.5rem;padding-top:1.5rem;text-align:center;font-size:.82rem;color:rgba(251,245,241,.5);letter-spacing:.05em}

      /* ---- animations ---- */
      @keyframes rise{from{opacity:0;transform:translateY(22px)}to{opacity:1;transform:none}}
      @keyframes bob{0%,100%{transform:translateY(0)}50%{transform:translateY(-12px)}}

      @media (max-width:860px){
        .hero-inner,.story-grid,.contact-grid{grid-template-columns:1fr}
        .hero-art{height:340px;order:-1}
        .hero-photo{height:340px}
        .svc-grid{grid-template-columns:1fr 1fr}
        .foot-grid{grid-template-columns:1fr 1fr}
      }
      @media (max-width:560px){
        .svc-grid,.foot-grid{grid-template-columns:1fr}
      }
      @media (prefers-reduced-motion:reduce){
        *{animation:none!important;transition:none!important;scroll-behavior:auto!important}
      }
    </style>
  </head>
  <body>
