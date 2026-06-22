# Westmont Nails

A boutique website concept for a small nail & makeup studio — built as a **showcase of the kind of work I can deliver for clients looking to upgrade their website**.

> *Westmont Nails is a fictional studio — inspired by the television show* **Your Friends & Neighbors**. *The site is a portfolio/demo piece — feel free to use it as a reference for what a refreshed, modern site could look like for your own business.*

---

## What this demonstrates

This is an example of a full small-business site upgrade: clean design, clear service information, real imagery, video, and an easy path to booking — the things that actually help a local business win customers online.

- **Elegant, on-brand design** — a custom wine / rose / champagne-gold palette, refined serif + sans-serif typography, and a consistent visual identity (custom logo + favicon).
- **Animated hero** — a hand-built polish-bottle graphic floating over a seeded generative "liquid lacquer" canvas animation.
- **Clear service menu** — every treatment laid out as a readable price list, grouped by category (Nails · Makeup · Lashes, Brows & Extras) with durations and plain-language descriptions.
- **Photo gallery** — a uniform, grid-aligned showcase split into Nails, Face & Makeup, and Lashes & Brows.
- **Promotional video** — embedded studio films on the home and about pages.
- **Booking flow** — a structured enquiry form with grouped service options.
- **Responsive & accessible** — works across desktop, tablet, and mobile, with reduced-motion support and semantic markup.

## Pages

| Page | Purpose |
|------|---------|
| `index.php` | Home — hero, promo video, full service menu |
| `gallery.php` | Work gallery (nails, makeup, lashes & brows) |
| `about.php` | Studio story + "a morning in the studio" photos & video |
| `contact.php` | Booking enquiry form + studio details |

## Built with

- **PHP** (lightweight templating via shared `includes/` for head, header, footer, and content)
- **Vanilla HTML & CSS** (custom properties / design tokens — no heavy framework)
- **p5.js** for the generative hero animation
- A touch of **Bootstrap** for base layout utilities

## Run it locally

**Easiest way (Mac):** double-click **`launch.command`** in Finder — it starts the site and opens it in your browser automatically. Close the Terminal window to stop it.

**Or from the command line** (no build step — just PHP's built-in server):

```bash
php -S localhost:8000
```

Then open <http://localhost:8000> in your browser.

## Project structure

```
├── index.php / about.php / gallery.php / contact.php
├── includes/        # head, header, footer, services menu
├── images/          # optimized site images + logo
│   └── photo/       # original high-res source images
└── docs/            # notes (e.g. the liquid-lacquer animation)
```

---

### Want something like this for your business?

This site shows the baseline of what a modern small-business web presence can look like — design, content structure, imagery, and booking, all working together. Reach out if you'd like a refreshed site for your studio, shop, or service.
