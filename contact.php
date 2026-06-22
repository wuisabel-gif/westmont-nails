<?php require_once('includes/head.php') ?>
<?php require_once('includes/header.php') ?>
<main>
    <section class="band">
        <div class="wrap">
            <p class="eyebrow" style="justify-content:center">Bookings</p>
            <h1>Reserve <span class="serif-it">your chair.</span></h1>
            <p class="lead">Tell us when you&rsquo;d like to come in and which treatment you have in mind.</p>
        </div>
    </section>

    <section class="section">
        <div class="wrap contact-grid">
            <form action="#" method="post" novalidate>
                <div class="field">
                    <label for="name">Your name</label>
                    <input type="text" id="name" name="name" placeholder="Jane Rose">
                </div>
                <div class="field">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="jane@example.com">
                </div>
                <div class="field">
                    <label for="service">Treatment</label>
                    <select id="service" name="service">
                        <optgroup label="Nails">
                            <option>Classic Manicure</option>
                            <option>Gel Manicure</option>
                            <option>Spa Pedicure</option>
                            <option>Gel Extensions</option>
                            <option>Acrylic Extensions</option>
                            <option>Nail Art &amp; Design</option>
                            <option>French Finish</option>
                            <option>Polish Change</option>
                            <option>Soak-Off &amp; Removal</option>
                            <option>Kids&rsquo; Manicure</option>
                        </optgroup>
                        <optgroup label="Makeup">
                            <option>Everyday Makeup</option>
                            <option>Evening &amp; Event Makeup</option>
                            <option>Bridal Makeup</option>
                        </optgroup>
                        <optgroup label="Lashes, Brows &amp; Extras">
                            <option>Lash &amp; Brow</option>
                            <option>Lash Extensions</option>
                            <option>Bridal &amp; Group Bookings</option>
                            <option>Not sure yet &mdash; please advise</option>
                        </optgroup>
                    </select>
                </div>
                <div class="field">
                    <label for="date">Preferred date</label>
                    <input type="date" id="date" name="date">
                </div>
                <div class="field">
                    <label for="note">Anything we should know?</label>
                    <textarea id="note" name="note" rows="3" placeholder="A colour you love, an allergy, an occasion&hellip;"></textarea>
                </div>
                <button type="submit" class="btn-lux">Request booking</button>
            </form>

            <aside class="info-card">
                <h3>Find us</h3>
                <div class="info-row"><span>Studio</span> 214 Rosewood Lane, Westmont Village, CA</div>
                <div class="info-row"><span>Call</span> (310) 555-0199</div>
                <div class="info-row"><span>Email</span> hello@westmontnails.studio</div>
                <div class="info-row"><span>Tue&ndash;Fri</span> 10am &ndash; 7pm</div>
                <div class="info-row"><span>Saturday</span> 9am &ndash; 5pm</div>
                <div class="info-row"><span>Sun&ndash;Mon</span> Resting</div>
            </aside>
        </div>
    </section>
</main>
<?php require_once('includes/footer.php') ?>
