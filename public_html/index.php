<?php session_start(); $_SESSION['csrf_token'] = $_SESSION['csrf_token'] ?? bin2hex(random_bytes(32)); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Optimum Auto Care — Mobile Vehicle Repair | Brighton</title>
    <meta name="description" content="Professional mobile vehicle repair services in Brighton. Fast, reliable, affordable. We come to you — covering 25 miles from Brighton, Littlehampton to Eastbourne.">
    <meta property="og:title" content="Optimum Auto Care — Mobile Vehicle Repair">
    <meta property="og:description" content="Professional fully mobile repair services. Fast. Reliable. Affordable.">
    <meta property="og:type" content="website">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preload" as="image" href="images/MaybeMainImage.webp">
</head>
<body>

<!-- ========== NAVIGATION ========== -->
<header class="nav" id="nav">
    <div class="nav__inner container">
        <a href="#home" class="nav__logo">
            <span class="nav__logo-text">Optimum</span> Auto Care
        </a>
        <nav class="nav__links" id="navLinks">
            <a href="#home" class="nav__link">Home</a>
            <a href="#services" class="nav__link">Services</a>
            <a href="#reviews" class="nav__link">Reviews</a>
            <a href="#about" class="nav__link">About Us</a>
            <a href="#contact" class="nav__link">Contact</a>
            <a href="tel:+447933853640" class="nav__link nav__link--phone-mobile">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                Call Now
            </a>
        </nav>
        <a href="tel:+447933853640" class="nav__phone">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
            07933 853 640
        </a>
        <button class="nav__hamburger" id="hamburger" aria-label="Toggle menu">
            <span></span><span></span><span></span>
        </button>
    </div>
</header>

<!-- ========== HERO ========== -->
<section class="hero" id="home">
    <div class="hero__bg">
        <img src="images/MaybeMainImage.webp" alt="Optimum Auto Care" width="1440" height="810" fetchpriority="high">
    </div>
    <div class="hero__overlay"></div>
    <div class="hero__content container">
        <p class="hero__subtitle">Automotive Specialists</p>
        <h1 class="hero__title">Optimum<br>Auto Care</h1>
        <p class="hero__tagline">Fast. <span>Reliable.</span> Affordable.</p>
        <p class="hero__desc">Professional fully mobile repair services.</p>
        <div class="hero__cta">
            <a href="tel:+447933853640" class="btn btn--primary">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                Call Us Now
            </a>
            <a href="#contact" class="btn btn--outline">Book Now</a>
        </div>
    </div>
</section>

<!-- ========== WHY CHOOSE US ========== -->
<section class="features" id="features">
    <div class="container">
        <div class="features__grid">
            <div class="feature-card">
                <div class="feature-card__icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14.7 6.3a1 1 0 000 1.4l1.6 1.6a1 1 0 001.4 0l3.77-3.77a6 6 0 01-7.94 7.94l-6.91 6.91a2.12 2.12 0 01-3-3l6.91-6.91a6 6 0 017.94-7.94l-3.76 3.76z"/></svg>
                </div>
                <h3 class="feature-card__title">All Car Makes</h3>
                <p class="feature-card__text">Our expertise spans across the entire range of automotive solutions, catering to every make and model of cars.</p>
            </div>
            <div class="feature-card">
                <div class="feature-card__icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="1" y="3" width="15" height="13" rx="2"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
                </div>
                <h3 class="feature-card__title">Mobile Vehicle Repair</h3>
                <p class="feature-card__text">Can't come to us? Don't worry, we'll come to you. Our foremost goal is to provide car repair services tailored to your convenience.</p>
            </div>
            <div class="feature-card">
                <div class="feature-card__icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
                </div>
                <h3 class="feature-card__title">Assured Assistance</h3>
                <p class="feature-card__text">We streamline the process, eliminating the burden of choice. Reliable and stress-free service from start to finish.</p>
            </div>
        </div>
    </div>
</section>

<!-- ========== OUR SERVICES ========== -->
<section class="services" id="services">
    <div class="container">
        <h2 class="section-title">Our Services</h2>
        <p class="section-subtitle">Comprehensive mobile vehicle repair — we cover almost everything you can think of.</p>

        <div class="services__cards">
            <div class="service-card">
                <div class="service-card__img">
                    <img src="images/photo-1606577924006-27d39b132ae2.avif" alt="Breakdown Recovery Services" loading="lazy" width="400" height="260">
                </div>
                <div class="service-card__body">
                    <h3>Breakdown Recovery Services</h3>
                    <p>If you have any issues on the roadside or you are struggling to bring your vehicle home, we are here for you.</p>
                    <a href="#contact" class="btn btn--sm">Book Now</a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-card__img">
                    <img src="images/photo-1632733711679-529326f6db12.avif" alt="Pre Purchase Checks" loading="lazy" width="400" height="260">
                </div>
                <div class="service-card__body">
                    <h3>Pre Purchase Checks</h3>
                    <p>Vehicle inspections before you buy. We'll make sure you're not buying a lemon — thorough, honest assessments.</p>
                    <a href="#contact" class="btn btn--sm">Book Now</a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-card__img">
                    <img src="images/muscular-car-service-worker-repairing-vehicle-mk35GlozQofxv8L8.avif" alt="Mobile Mechanic Services" loading="lazy" width="400" height="260">
                </div>
                <div class="service-card__body">
                    <h3>Mobile Mechanic Services</h3>
                    <p>We also offer roadside assistance, regular car services, diagnostics and much more — all at your location.</p>
                    <a href="#contact" class="btn btn--sm">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Full services list -->
        <div class="services__full">
            <h3 class="services__full-title">Repair Services That We Offer</h3>
            <ul class="services__list">
                <li>Brake Repair &amp; Replacement</li>
                <li>Computer Diagnostic Testing</li>
                <li>CV Axles</li>
                <li>Electrical Diagnostics</li>
                <li>Engine Cooling System Maintenance</li>
                <li>Engine Rebuilds</li>
                <li>Exhaust System Repair</li>
                <li>Fuel System Repair</li>
                <li>General Auto Repair &amp; Maintenance</li>
                <li>Head Gaskets</li>
                <li>Oil Change</li>
                <li>Starting &amp; Charging Repair</li>
                <li>Steering &amp; Suspension Work</li>
                <li>Transmission Repair</li>
                <li>Transmission Replacement</li>
                <li>Turbo Replacement</li>
                <li>Preventative Maintenance</li>
                <li>Valeting</li>
                <li>Batteries Fitted &amp; Registered</li>
            </ul>
            <p class="services__more">And much more...</p>
        </div>
    </div>
</section>

<!-- ========== REVIEWS ========== -->
<section class="reviews" id="reviews">
    <div class="container">
        <h2 class="section-title">Customer Reviews</h2>
        <p class="section-subtitle">Don't just take our word for it — hear from our customers.</p>

        <div class="reviews__grid">
            <div class="review-card">
                <div class="review-card__stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p class="review-card__text">"Amazing service! They fixed my car quickly and at a reasonable price."</p>
                <div class="review-card__author">
                    <div class="review-card__avatar">JM</div>
                    <span class="review-card__name">James M.</span>
                </div>
            </div>
            <div class="review-card">
                <div class="review-card__stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p class="review-card__text">"I highly recommend Optimum Auto Care for their professionalism and expertise. They saved me from buying a lemon!"</p>
                <div class="review-card__author">
                    <div class="review-card__avatar">SR</div>
                    <span class="review-card__name">Sarah R.</span>
                </div>
            </div>
            <div class="review-card">
                <div class="review-card__stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p class="review-card__text">"Prompt and efficient service. I'm glad I found these guys for all my car repair needs."</p>
                <div class="review-card__author">
                    <div class="review-card__avatar">DT</div>
                    <span class="review-card__name">David T.</span>
                </div>
            </div>
            <div class="review-card">
                <div class="review-card__stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p class="review-card__text">"Great customer service and skilled mechanics. They treat your car as if it were their own."</p>
                <div class="review-card__author">
                    <div class="review-card__avatar">LK</div>
                    <span class="review-card__name">Laura K.</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== ABOUT US ========== -->
<section class="about" id="about">
    <div class="container">
        <div class="about__grid">
            <div class="about__text">
                <h2 class="section-title section-title--left">About Us</h2>
                <p class="about__lead">Our commitment to you is honesty, reliability and affordability.</p>
                <p>We're a family business — two brothers based in Brighton — that takes great pride in our work. We provide experienced mechanics who will keep you on the road and your vehicle safe.</p>
                <p>We offer a reliable and stress-free service from start to finish. From basic servicing, brakes, and clutch replacements to engine reconditioning, air conditioning, ECU programming and much more.</p>
                <p>We will always explain everything in a clear way and give honest advice about your vehicle. We appreciate all of our customers and repair each car as if it were our own.</p>
                <div class="about__coverage">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    <span>Based in Brighton — covering 25 miles: Littlehampton to Eastbourne</span>
                </div>
            </div>
            <div class="about__image">
                <img src="images/photo-1625047509248-ec889cbff17f.jpg" alt="Mechanic working on engine" loading="lazy" width="600" height="400">
            </div>
        </div>
    </div>
</section>

<!-- ========== CONTACT ========== -->
<section class="contact" id="contact">
    <div class="container">
        <h2 class="section-title">Contact Us</h2>
        <p class="section-subtitle">Have a question or need assistance? Get in touch with our team.</p>

        <div class="contact__grid">
            <form class="contact__form" id="contactForm" action="send-mail.php" method="POST" novalidate>
                <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token']) ?>">
                <div class="form-group">
                    <label for="name">Your Name *</label>
                    <input type="text" id="name" name="name" required placeholder="John Smith" autocomplete="name">
                </div>
                <div class="form-group">
                    <label for="email">Your Email *</label>
                    <input type="email" id="email" name="email" required placeholder="john@example.com" autocomplete="email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number *</label>
                    <input type="tel" id="phone" name="phone" required placeholder="07XXX XXX XXX" autocomplete="tel">
                </div>
                <div class="form-group">
                    <label for="message">Message *</label>
                    <textarea id="message" name="message" rows="5" required placeholder="Tell us about your vehicle issue..."></textarea>
                </div>
                <button type="submit" class="btn btn--primary btn--full">Send Message</button>
                <div class="form-status" id="formStatus"></div>
            </form>

            <div class="contact__info">
                <div class="contact__details">
                    <div class="contact__detail">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                        <div>
                            <strong>Phone</strong>
                            <a href="tel:+447933853640">(+44) 7933 853 640</a>
                        </div>
                    </div>
                    <div class="contact__detail">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        <div>
                            <strong>Email</strong>
                            <a href="mailto:info@optimumautocare.co.uk">info@optimumautocare.co.uk</a>
                        </div>
                    </div>
                    <div class="contact__detail">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        <div>
                            <strong>Availability</strong>
                            <span>Always Open</span>
                        </div>
                    </div>
                </div>

                <!-- Coverage Map -->
                <div class="coverage-map">
                    <h4 class="coverage-map__title">Our Coverage Area</h4>
                    <div class="coverage-map__visual">
                        <svg viewBox="0 0 480 300" class="coverage-map__svg" aria-label="Coverage map showing Brighton area, 25 miles from Littlehampton to Eastbourne">
                            <defs>
                                <!-- Glow effect for coverage area -->
                                <radialGradient id="coverageGlow" cx="50%" cy="45%" r="50%">
                                    <stop offset="0%" stop-color="#d4a017" stop-opacity="0.12"/>
                                    <stop offset="60%" stop-color="#d4a017" stop-opacity="0.04"/>
                                    <stop offset="100%" stop-color="#d4a017" stop-opacity="0"/>
                                </radialGradient>
                                <!-- Pulse animation for Brighton marker -->
                                <radialGradient id="pulseGlow" cx="50%" cy="50%" r="50%">
                                    <stop offset="0%" stop-color="#d4a017" stop-opacity="0.6"/>
                                    <stop offset="100%" stop-color="#d4a017" stop-opacity="0"/>
                                </radialGradient>
                                <!-- Sea gradient -->
                                <linearGradient id="seaGrad" x1="0" y1="0" x2="0" y2="1">
                                    <stop offset="0%" stop-color="#0a1628" stop-opacity="0.9"/>
                                    <stop offset="100%" stop-color="#060e1a" stop-opacity="1"/>
                                </linearGradient>
                                <!-- Land gradient -->
                                <linearGradient id="landGrad" x1="0" y1="0" x2="0" y2="1">
                                    <stop offset="0%" stop-color="#151d2e"/>
                                    <stop offset="100%" stop-color="#111827"/>
                                </linearGradient>
                            </defs>

                            <!-- Background / land -->
                            <rect width="480" height="300" fill="url(#landGrad)" rx="8"/>

                            <!-- Subtle grid lines for terrain feel -->
                            <g opacity="0.06" stroke="#4a5568" stroke-width="0.5">
                                <line x1="0" y1="50" x2="480" y2="50"/>
                                <line x1="0" y1="100" x2="480" y2="100"/>
                                <line x1="0" y1="150" x2="480" y2="150"/>
                                <line x1="80" y1="0" x2="80" y2="300"/>
                                <line x1="160" y1="0" x2="160" y2="300"/>
                                <line x1="240" y1="0" x2="240" y2="300"/>
                                <line x1="320" y1="0" x2="320" y2="300"/>
                                <line x1="400" y1="0" x2="400" y2="300"/>
                            </g>

                            <!-- Sea area with detailed coastline -->
                            <path d="M0,195 C30,192 55,188 80,186 C110,183 130,182 155,180 C180,178 200,177 220,178 C240,179 255,181 275,183 C300,186 320,188 345,191 C370,194 400,198 430,202 C450,205 465,208 480,210 L480,300 L0,300 Z" fill="url(#seaGrad)"/>
                            <!-- Coastline edge -->
                            <path d="M0,195 C30,192 55,188 80,186 C110,183 130,182 155,180 C180,178 200,177 220,178 C240,179 255,181 275,183 C300,186 320,188 345,191 C370,194 400,198 430,202 C450,205 465,208 480,210" fill="none" stroke="#2a3a52" stroke-width="1.5"/>
                            <!-- Beach/shore highlight -->
                            <path d="M0,195 C30,192 55,188 80,186 C110,183 130,182 155,180 C180,178 200,177 220,178 C240,179 255,181 275,183 C300,186 320,188 345,191 C370,194 400,198 430,202 C450,205 465,208 480,210" fill="none" stroke="#3a4a62" stroke-width="0.5" stroke-dasharray="3,6" opacity="0.5"/>
                            <!-- Sea text -->
                            <text x="240" y="262" text-anchor="middle" fill="#263044" font-size="14" font-style="italic" font-weight="300" letter-spacing="6">ENGLISH CHANNEL</text>

                            <!-- Major roads -->
                            <g stroke="#2a3548" stroke-width="1.5" fill="none" opacity="0.6">
                                <!-- A27 coastal road -->
                                <path d="M10,170 C40,168 70,165 100,163 C140,160 170,158 200,157 C230,156 260,158 290,161 C330,165 370,172 410,178 C440,183 460,186 480,190" stroke-dasharray="8,4"/>
                                <!-- A23 north-south through Brighton -->
                                <path d="M215,0 C215,40 218,80 220,120 C222,145 222,160 222,178" stroke-dasharray="8,4"/>
                                <!-- A259 coast road -->
                                <path d="M160,175 C180,174 200,174 220,175 C245,176 265,178 290,180" stroke-dasharray="4,4"/>
                            </g>

                            <!-- Coverage radius - glowing ellipse -->
                            <ellipse cx="222" cy="145" rx="185" ry="85" fill="url(#coverageGlow)"/>
                            <ellipse cx="222" cy="145" rx="185" ry="85" fill="none" stroke="#d4a017" stroke-width="1" stroke-dasharray="8,6" opacity="0.35"/>
                            <!-- Inner coverage glow ring -->
                            <ellipse cx="222" cy="145" rx="120" ry="55" fill="none" stroke="#d4a017" stroke-width="0.5" stroke-dasharray="4,8" opacity="0.15"/>

                            <!-- Town markers - secondary -->
                            <g>
                                <!-- Littlehampton -->
                                <circle cx="72" cy="179" r="4" fill="#1a2438" stroke="#4a6080" stroke-width="1"/>
                                <circle cx="72" cy="179" r="1.5" fill="#6a8aab"/>
                                <text x="72" y="170" text-anchor="middle" fill="#6a8aab" font-size="10" font-weight="500">Littlehampton</text>

                                <!-- Worthing -->
                                <circle cx="135" cy="174" r="4" fill="#1a2438" stroke="#4a6080" stroke-width="1"/>
                                <circle cx="135" cy="174" r="1.5" fill="#6a8aab"/>
                                <text x="135" y="164" text-anchor="middle" fill="#6a8aab" font-size="10" font-weight="500">Worthing</text>

                                <!-- Shoreham -->
                                <circle cx="175" cy="173" r="3" fill="#1a2438" stroke="#3a5070" stroke-width="0.8"/>
                                <circle cx="175" cy="173" r="1" fill="#5a7a9b"/>
                                <text x="175" y="165" text-anchor="middle" fill="#5a7a9b" font-size="9">Shoreham</text>

                                <!-- Newhaven -->
                                <circle cx="270" cy="178" r="3.5" fill="#1a2438" stroke="#4a6080" stroke-width="0.8"/>
                                <circle cx="270" cy="178" r="1.2" fill="#5a7a9b"/>
                                <text x="270" y="170" text-anchor="middle" fill="#6a8aab" font-size="9.5">Newhaven</text>

                                <!-- Lewes -->
                                <circle cx="280" cy="148" r="3.5" fill="#1a2438" stroke="#4a6080" stroke-width="0.8"/>
                                <circle cx="280" cy="148" r="1.2" fill="#5a7a9b"/>
                                <text x="292" y="144" fill="#6a8aab" font-size="9.5">Lewes</text>

                                <!-- Seaford -->
                                <circle cx="310" cy="181" r="3" fill="#1a2438" stroke="#3a5070" stroke-width="0.8"/>
                                <circle cx="310" cy="181" r="1" fill="#5a7a9b"/>
                                <text x="310" y="195" text-anchor="middle" fill="#5a7a9b" font-size="9">Seaford</text>

                                <!-- Eastbourne -->
                                <circle cx="382" cy="188" r="4" fill="#1a2438" stroke="#4a6080" stroke-width="1"/>
                                <circle cx="382" cy="188" r="1.5" fill="#6a8aab"/>
                                <text x="382" y="178" text-anchor="middle" fill="#6a8aab" font-size="10" font-weight="500">Eastbourne</text>

                                <!-- Haywards Heath (inland) -->
                                <circle cx="210" cy="105" r="3" fill="#1a2438" stroke="#3a5070" stroke-width="0.8"/>
                                <circle cx="210" cy="105" r="1" fill="#5a7a9b"/>
                                <text x="210" y="97" text-anchor="middle" fill="#5a7a9b" font-size="9">Haywards Heath</text>

                                <!-- Burgess Hill -->
                                <circle cx="195" cy="128" r="2.5" fill="#1a2438" stroke="#3a5070" stroke-width="0.7"/>
                                <circle cx="195" cy="128" r="0.8" fill="#5a7a9b"/>
                                <text x="170" y="126" fill="#4a6a8b" font-size="8.5">Burgess Hill</text>
                            </g>

                            <!-- Brighton - main marker with pulse -->
                            <circle cx="222" cy="170" r="20" fill="url(#pulseGlow)" opacity="0.4">
                                <animate attributeName="r" values="15;25;15" dur="3s" repeatCount="indefinite"/>
                                <animate attributeName="opacity" values="0.4;0.15;0.4" dur="3s" repeatCount="indefinite"/>
                            </circle>
                            <circle cx="222" cy="170" r="8" fill="#d4a017" opacity="0.2"/>
                            <circle cx="222" cy="170" r="5" fill="#d4a017"/>
                            <circle cx="222" cy="170" r="2" fill="#fff"/>
                            <text x="222" y="155" text-anchor="middle" fill="#f5f5f5" font-size="14" font-weight="700" letter-spacing="1">BRIGHTON</text>

                            <!-- Distance measurement bar -->
                            <g opacity="0.7">
                                <line x1="72" y1="230" x2="382" y2="230" stroke="#d4a017" stroke-width="0.8"/>
                                <line x1="72" y1="225" x2="72" y2="235" stroke="#d4a017" stroke-width="0.8"/>
                                <line x1="382" y1="225" x2="382" y2="235" stroke="#d4a017" stroke-width="0.8"/>
                                <line x1="222" y1="227" x2="222" y2="233" stroke="#d4a017" stroke-width="0.5"/>
                                <!-- Arrow heads -->
                                <polygon points="76,230 82,227 82,233" fill="#d4a017"/>
                                <polygon points="378,230 372,227 372,233" fill="#d4a017"/>
                                <rect x="172" y="222" width="100" height="16" rx="3" fill="#111827"/>
                                <text x="222" y="234" text-anchor="middle" fill="#d4a017" font-size="10.5" font-weight="600" letter-spacing="0.5">25 MILE RADIUS</text>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== FOOTER ========== -->
<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <div class="footer__brand">
                <span class="nav__logo"><span class="nav__logo-text">Optimum</span> Auto Care</span>
                <p>Professional mobile vehicle repair services in Brighton and the surrounding area.</p>
            </div>
            <div class="footer__links">
                <h4>Quick Links</h4>
                <a href="#home">Home</a>
                <a href="#services">Services</a>
                <a href="#reviews">Reviews</a>
                <a href="#about">About Us</a>
                <a href="#contact">Contact</a>
            </div>
            <div class="footer__contact-info">
                <h4>Get In Touch</h4>
                <a href="tel:+447933853640">(+44) 7933 853 640</a>
                <a href="mailto:info@optimumautocare.co.uk">info@optimumautocare.co.uk</a>
                <span>Brighton, East Sussex</span>
            </div>
        </div>
        <div class="footer__bottom">
            <p>&copy; <?= date('Y') ?> Optimum Auto Care. All rights reserved.</p>
        </div>
    </div>
</footer>

<script src="js/main.js"></script>
</body>
</html>
