<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>SAM Visa Services — London, UK</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Outfit:wght@300;400;500;600&display=swap" rel="stylesheet"/>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        display: ['Playfair Display', 'serif'],
                        body: ['Outfit', 'sans-serif'],
                    },
                    colors: {
                        navy:  { DEFAULT: '#0a1628', 50: '#e8edf5', 100: '#c5d1e8', 900: '#060e1a' },
                        gold:  { DEFAULT: '#c9973a', light: '#e6b85a', dark: '#a0761f' },
                        slate: { visa: '#1e2d47' },
                    },
                    animation: {
                        'fade-up':    'fadeUp 0.7s ease forwards',
                        'fade-in':    'fadeIn 0.5s ease forwards',
                        'slide-down': 'slideDown 0.4s cubic-bezier(0.16,1,0.3,1) forwards',
                    },
                    keyframes: {
                        fadeUp:    { '0%': { opacity: '0', transform: 'translateY(30px)' }, '100%': { opacity: '1', transform: 'translateY(0)' } },
                        fadeIn:    { '0%': { opacity: '0' }, '100%': { opacity: '1' } },
                        slideDown: { '0%': { opacity: '0', transform: 'translateY(-20px) scale(0.97)' }, '100%': { opacity: '1', transform: 'translateY(0) scale(1)' } },
                    }
                }
            }
        }
    </script>
    <style>
        * { font-family: 'Outfit', sans-serif; }
        .font-display { font-family: 'Playfair Display', serif; }

        /* Hero gradient mesh */
        .hero-bg {
            background: linear-gradient(135deg, #060e1a 0%, #0a1628 40%, #0d1f3c 70%, #0a1628 100%);
        }
        .hero-glow {
            background: radial-gradient(ellipse 70% 60% at 65% 40%, rgba(201,151,58,0.12) 0%, transparent 70%),
                        radial-gradient(ellipse 40% 50% at 20% 80%, rgba(10,22,40,0.8) 0%, transparent 60%);
        }

        /* Floating passport stamp shapes */
        .stamp { border: 2px solid rgba(201,151,58,0.25); border-radius: 3px; }

        /* Smooth underline hover */
        .nav-link { position: relative; }
        .nav-link::after { content:''; position:absolute; bottom:-2px; left:0; width:0; height:1px; background:#c9973a; transition: width 0.3s ease; }
        .nav-link:hover::after { width:100%; }

        /* Country card hover */
        .country-card { transition: transform 0.35s cubic-bezier(0.34,1.56,0.64,1), box-shadow 0.35s ease; }
        .country-card:hover { transform: translateY(-6px); }

        /* Step connector */
        .step-line::before { content:''; position:absolute; top:24px; left:calc(50% + 40px); width:calc(100% - 80px); height:1px; background: linear-gradient(90deg, #c9973a, rgba(201,151,58,0.2)); }

        /* Scrollbar */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #0a1628; }
        ::-webkit-scrollbar-thumb { background: #c9973a; border-radius: 3px; }

        /* Popup backdrop blur */
        #popup-overlay { backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px); }

        /* Input focus glow */
        .visa-input:focus { border-color: #c9973a; box-shadow: 0 0 0 3px rgba(201,151,58,0.12); }

        /* Testimonial card */
        .testimonial-card { background: linear-gradient(135deg, #0d1a2e, #0f2040); border: 1px solid rgba(201,151,58,0.15); }

        /* Stats counter */
        .stat-card { background: linear-gradient(135deg, rgba(201,151,58,0.08), rgba(201,151,58,0.02)); border: 1px solid rgba(201,151,58,0.2); }
    </style>
</head>
<body class="bg-navy text-white overflow-x-hidden">

<!-- ===================== POPUP OVERLAY ===================== -->
<div id="popup-overlay" class="fixed inset-0 z-50 flex items-center justify-center bg-navy/80 p-4" role="dialog" aria-modal="true" aria-label="Visa Request Form">
    <div id="popup-modal" class="relative w-full max-w-2xl bg-gradient-to-br from-[#0d1a2e] to-[#0a1628] border border-gold/20 rounded-2xl shadow-2xl animate-slide-down overflow-hidden">

        <!-- Gold top accent bar -->
        <div class="h-1 w-full bg-gradient-to-r from-transparent via-gold to-transparent"></div>

        <!-- Close button -->
        <button onclick="closePopup()" class="absolute top-4 right-4 w-9 h-9 flex items-center justify-center rounded-full bg-white/5 hover:bg-gold/20 text-white/50 hover:text-gold transition-all duration-200 text-lg">✕</button>

        <div class="px-8 pt-8 pb-10">
            <!-- Header -->
            <div class="text-center mb-7">
                <p class="text-xs font-semibold tracking-[4px] text-gold uppercase mb-2">Free Consultation</p>
                <h2 class="font-display text-3xl font-bold text-white mb-2">Apply for Your <span class="italic text-gold">Visa</span></h2>
                <p class="text-white/50 text-sm">Fill in your details and our expert agents will contact you within 24 hours.</p>
            </div>

            <!-- Form -->
            <form 
            {{-- action="{{ route('visa.request') }}"  --}}
            method="POST" class="space-y-4">
                @csrf

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <!-- Full Name -->
                    <div>
                        <label class="block text-xs font-medium tracking-widest text-gold/70 uppercase mb-1.5">Full Name <span class="text-red-400">*</span></label>
                        <input type="text" name="name" required placeholder="John Smith"
                            class="visa-input w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 text-white text-sm placeholder-white/20 outline-none transition-all duration-200"/>
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block text-xs font-medium tracking-widest text-gold/70 uppercase mb-1.5">Email Address <span class="text-red-400">*</span></label>
                        <input type="email" name="email" required placeholder="john@example.com"
                            class="visa-input w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 text-white text-sm placeholder-white/20 outline-none transition-all duration-200"/>
                    </div>

                    <!-- Phone -->
                    <div>
                        <label class="block text-xs font-medium tracking-widest text-gold/70 uppercase mb-1.5">Phone Number <span class="text-red-400">*</span></label>
                        <input type="tel" name="phone" required placeholder="+44 7000 000000"
                            class="visa-input w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 text-white text-sm placeholder-white/20 outline-none transition-all duration-200"/>
                    </div>

                    <!-- Nationality -->
                    <div>
                        <label class="block text-xs font-medium tracking-widest text-gold/70 uppercase mb-1.5">Nationality <span class="text-red-400">*</span></label>
                        <input type="text" name="nationality" required placeholder="British"
                            class="visa-input w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 text-white text-sm placeholder-white/20 outline-none transition-all duration-200"/>
                    </div>
                </div>

                <!-- Destination Country -->
                <div>
                    <label class="block text-xs font-medium tracking-widest text-gold/70 uppercase mb-1.5">Destination Country <span class="text-red-400">*</span></label>
                    <select name="destination" required
                        class="visa-input w-full bg-[#0d1a2e] border border-white/10 rounded-lg px-4 py-3 text-white text-sm outline-none transition-all duration-200 appearance-none cursor-pointer">
                        <option value="" disabled selected class="text-white/30">Select a country…</option>
                        <option>Australia</option>
                        <option>Canada</option>
                        <option>China</option>
                        <option>Europe (Schengen)</option>
                        <option>Ireland</option>
                        <option>Morocco</option>
                        <option>Turkey</option>
                        <option>United Arab Emirates</option>
                        <option>United Kingdom</option>
                        <option>United States of America</option>
                    </select>
                </div>

                <!-- Message -->
                <div>
                    <label class="block text-xs font-medium tracking-widest text-gold/70 uppercase mb-1.5">Additional Message</label>
                    <textarea name="message" rows="3" placeholder="Tell us about your travel plans, purpose of visit, or any questions…"
                        class="visa-input w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 text-white text-sm placeholder-white/20 outline-none transition-all duration-200 resize-none"></textarea>
                </div>

                <!-- Skip Payment Checkbox -->
                <label class="flex items-start gap-3 cursor-pointer group select-none">
                    <div class="relative mt-0.5 flex-shrink-0">
                        <input type="checkbox" name="skip_payment" id="skip_payment" class="sr-only peer"/>
                        <div class="w-5 h-5 border-2 border-white/20 rounded peer-checked:border-gold peer-checked:bg-gold/20 transition-all duration-200 flex items-center justify-center">
                            <svg class="w-3 h-3 text-gold hidden peer-checked:block" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2"><polyline points="2,6 5,9 10,3"/></svg>
                        </div>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-white/80 group-hover:text-white transition-colors">Skip Payment — Consult First</p>
                        <p class="text-xs text-white/35 mt-0.5">Request a free consultation before any payment is required.</p>
                    </div>
                </label>

                <!-- Submit -->
                <button type="submit"
                    class="w-full mt-2 bg-gradient-to-r from-gold to-gold-light hover:from-gold-dark hover:to-gold text-navy font-semibold text-sm tracking-[2px] uppercase py-4 rounded-xl transition-all duration-300 shadow-lg hover:shadow-gold/20 hover:shadow-xl active:scale-[0.99]">
                    Submit Visa Request →
                </button>

                <p class="text-center text-xs text-white/25 mt-1">🔒 Your information is fully secure and never shared.</p>
            </form>
        </div>
    </div>
</div>
<!-- ===================== END POPUP ===================== -->


<!-- ===================== NAVBAR ===================== -->
<nav id="navbar" class="fixed top-0 left-0 right-0 z-40 transition-all duration-300" style="background: transparent;">
    <div class="max-w-7xl mx-auto px-6 lg:px-10">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <a href="#" class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-gold to-gold-dark flex items-center justify-center font-display font-bold text-navy text-lg">S</div>
                <div>
                    <p class="font-display font-bold text-white text-lg leading-none">SAM VISA</p>
                    <p class="text-gold text-[9px] tracking-[3px] uppercase font-medium">Services</p>
                </div>
            </a>

            <!-- Desktop Nav -->
            <div class="hidden lg:flex items-center gap-8">
                <a href="#services" class="nav-link text-white/70 hover:text-white text-sm font-medium transition-colors">Services</a>
                <a href="#countries" class="nav-link text-white/70 hover:text-white text-sm font-medium transition-colors">Countries</a>
                <a href="#process" class="nav-link text-white/70 hover:text-white text-sm font-medium transition-colors">How It Works</a>
                <a href="#testimonials" class="nav-link text-white/70 hover:text-white text-sm font-medium transition-colors">Reviews</a>
                <a href="tel:+447908268383" class="text-gold text-sm font-medium flex items-center gap-2 hover:text-gold-light transition-colors">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8z"/></svg>
                    +44 7908 268383
                </a>
                <button onclick="openPopup()" class="bg-gold hover:bg-gold-light text-navy font-semibold text-sm px-6 py-2.5 rounded-lg transition-all duration-200 hover:shadow-lg hover:shadow-gold/20">Apply Now</button>
            </div>

            <!-- Mobile menu btn -->
            <button id="mobile-toggle" onclick="toggleMobile()" class="lg:hidden text-white p-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
        </div>
    </div>

    <!-- Mobile menu -->
    <div id="mobile-menu" class="hidden lg:hidden bg-navy/95 border-t border-white/5 px-6 py-4 space-y-3">
        <a href="#services" onclick="toggleMobile()" class="block text-white/70 text-sm py-2">Services</a>
        <a href="#countries" onclick="toggleMobile()" class="block text-white/70 text-sm py-2">Countries</a>
        <a href="#process" onclick="toggleMobile()" class="block text-white/70 text-sm py-2">How It Works</a>
        <a href="#testimonials" onclick="toggleMobile()" class="block text-white/70 text-sm py-2">Reviews</a>
        <button onclick="openPopup(); toggleMobile();" class="w-full bg-gold text-navy font-semibold text-sm px-6 py-3 rounded-lg mt-2">Apply for Visa</button>
    </div>
</nav>


<!-- ===================== HERO ===================== -->
<section class="hero-bg relative min-h-screen flex items-center overflow-hidden pt-20">
    <div class="hero-glow absolute inset-0 pointer-events-none"></div>

    <!-- Background decorative elements -->
    <div class="absolute top-20 right-10 w-72 h-72 rounded-full border border-gold/5 opacity-60"></div>
    <div class="absolute top-32 right-24 w-48 h-48 rounded-full border border-gold/8"></div>
    <div class="absolute bottom-20 left-10 w-56 h-56 rounded-full border border-gold/5"></div>

    <!-- Passport stamp decorations -->
    <div class="absolute top-40 right-16 stamp w-24 h-24 opacity-10 rotate-12 flex items-center justify-center">
        <span class="text-gold text-xs font-display text-center leading-tight">VISA<br/>APPROVED</span>
    </div>
    <div class="absolute bottom-40 right-40 stamp w-20 h-20 opacity-8 -rotate-6 flex items-center justify-center rounded-full">
        <span class="text-gold text-[10px] font-display text-center">UK<br/>2024</span>
    </div>

    <!-- Globe SVG watermark -->
    <div class="absolute right-0 top-1/2 -translate-y-1/2 w-[600px] h-[600px] opacity-5 pointer-events-none">
        <svg viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="100" cy="100" r="90" stroke="#c9973a" stroke-width="1.5"/>
            <ellipse cx="100" cy="100" rx="50" ry="90" stroke="#c9973a" stroke-width="1.5"/>
            <ellipse cx="100" cy="100" rx="90" ry="40" stroke="#c9973a" stroke-width="1.5"/>
            <line x1="10" y1="100" x2="190" y2="100" stroke="#c9973a" stroke-width="1.5"/>
            <line x1="100" y1="10" x2="100" y2="190" stroke="#c9973a" stroke-width="1.5"/>
        </svg>
    </div>

    <div class="max-w-7xl mx-auto px-6 lg:px-10 w-full py-24">
        <div class="max-w-3xl">
            <!-- Badge -->
            <div class="inline-flex items-center gap-2 bg-gold/10 border border-gold/25 rounded-full px-4 py-1.5 mb-8 animate-fade-up" style="animation-delay:0.1s; opacity:0;">
                <span class="w-2 h-2 rounded-full bg-gold animate-pulse"></span>
                <span class="text-gold text-xs font-semibold tracking-[2px] uppercase">London UK · Est. 2010</span>
            </div>

            <!-- Headline -->
            <h1 class="font-display text-5xl lg:text-7xl font-bold text-white leading-[1.08] mb-6 animate-fade-up" style="animation-delay:0.2s; opacity:0;">
                Your Visa,<br/>
                <span class="italic text-gold">Simplified.</span>
            </h1>

            <p class="text-white/55 text-lg lg:text-xl font-light leading-relaxed mb-10 max-w-xl animate-fade-up" style="animation-delay:0.35s; opacity:0;">
                Professional visa and travel services from London. We've helped thousands of clients secure visas to over 50 destinations worldwide.
            </p>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 animate-fade-up" style="animation-delay:0.5s; opacity:0;">
                <button onclick="openPopup()"
                    class="group bg-gold hover:bg-gold-light text-navy font-semibold px-8 py-4 rounded-xl transition-all duration-300 hover:shadow-xl hover:shadow-gold/25 flex items-center justify-center gap-2 text-sm tracking-wide">
                    Apply for Visa
                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </button>
                <a href="#process"
                    class="border border-white/15 hover:border-gold/40 text-white/70 hover:text-white font-medium px-8 py-4 rounded-xl transition-all duration-300 flex items-center justify-center gap-2 text-sm">
                    How It Works
                </a>
            </div>

            <!-- Trust indicators -->
            <div class="flex flex-wrap items-center gap-6 mt-12 animate-fade-up" style="animation-delay:0.65s; opacity:0;">
                <div class="flex items-center gap-2">
                    <div class="flex -space-x-2">
                        <div class="w-8 h-8 rounded-full bg-gradient-to-br from-blue-400 to-blue-600 border-2 border-navy"></div>
                        <div class="w-8 h-8 rounded-full bg-gradient-to-br from-emerald-400 to-emerald-600 border-2 border-navy"></div>
                        <div class="w-8 h-8 rounded-full bg-gradient-to-br from-amber-400 to-amber-600 border-2 border-navy"></div>
                    </div>
                    <div>
                        <p class="text-white text-sm font-semibold">5,000+ Clients</p>
                        <div class="flex text-gold text-xs">★★★★★</div>
                    </div>
                </div>
                <div class="w-px h-10 bg-white/10"></div>
                <div class="flex items-center gap-2 text-white/50 text-sm">
                    <svg class="w-4 h-4 text-gold" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    ICO Registered
                </div>
                <div class="flex items-center gap-2 text-white/50 text-sm">
                    <svg class="w-4 h-4 text-gold" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    20+ Years Experience
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll indicator -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 text-white/20 animate-bounce">
        <span class="text-[10px] tracking-widest uppercase">Scroll</span>
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
    </div>
</section>


<!-- ===================== STATS BAR ===================== -->
<section class="bg-gradient-to-r from-gold-dark via-gold to-gold-light py-10">
    <div class="max-w-7xl mx-auto px-6 lg:px-10">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 text-center">
            <div>
                <p class="font-display text-4xl font-bold text-navy">5K+</p>
                <p class="text-navy/70 text-sm font-medium mt-1">Visas Approved</p>
            </div>
            <div>
                <p class="font-display text-4xl font-bold text-navy">20+</p>
                <p class="text-navy/70 text-sm font-medium mt-1">Years Experience</p>
            </div>
            <div>
                <p class="font-display text-4xl font-bold text-navy">50+</p>
                <p class="text-navy/70 text-sm font-medium mt-1">Destinations</p>
            </div>
            <div>
                <p class="font-display text-4xl font-bold text-navy">98%</p>
                <p class="text-navy/70 text-sm font-medium mt-1">Success Rate</p>
            </div>
        </div>
    </div>
</section>


<!-- ===================== SERVICES ===================== -->
<section id="services" class="py-24 bg-navy">
    <div class="max-w-7xl mx-auto px-6 lg:px-10">
        <div class="text-center mb-16">
            <p class="text-xs font-semibold tracking-[4px] text-gold uppercase mb-3">What We Offer</p>
            <h2 class="font-display text-4xl lg:text-5xl font-bold text-white">Expert Visa <span class="italic text-gold">Services</span></h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Service 1 -->
            <div class="group p-8 rounded-2xl border border-white/5 bg-gradient-to-br from-white/[0.03] to-transparent hover:border-gold/25 transition-all duration-300 hover:bg-gradient-to-br hover:from-gold/5 hover:to-transparent">
                <div class="w-14 h-14 rounded-xl bg-gold/10 flex items-center justify-center mb-6 group-hover:bg-gold/20 transition-colors">
                    <svg class="w-7 h-7 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                </div>
                <h3 class="font-display text-xl font-semibold text-white mb-3">Tourist Visas</h3>
                <p class="text-white/45 text-sm leading-relaxed">Fast-tracked tourist visa applications for all major destinations. We handle the paperwork so you focus on your journey.</p>
            </div>

            <!-- Service 2 -->
            <div class="group p-8 rounded-2xl border border-gold/20 bg-gradient-to-br from-gold/8 to-transparent relative overflow-hidden">
                <div class="absolute top-4 right-4 bg-gold text-navy text-[10px] font-bold px-2 py-0.5 rounded uppercase tracking-wider">Popular</div>
                <div class="w-14 h-14 rounded-xl bg-gold/15 flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-display text-xl font-semibold text-white mb-3">Global Consultation</h3>
                <p class="text-white/45 text-sm leading-relaxed">Personalised guidance on visa requirements, document checklists, and embassy appointments for any country.</p>
            </div>

            <!-- Service 3 -->
            <div class="group p-8 rounded-2xl border border-white/5 bg-gradient-to-br from-white/[0.03] to-transparent hover:border-gold/25 transition-all duration-300 hover:bg-gradient-to-br hover:from-gold/5 hover:to-transparent">
                <div class="w-14 h-14 rounded-xl bg-gold/10 flex items-center justify-center mb-6 group-hover:bg-gold/20 transition-colors">
                    <svg class="w-7 h-7 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                </div>
                <h3 class="font-display text-xl font-semibold text-white mb-3">Tour Packages</h3>
                <p class="text-white/45 text-sm leading-relaxed">Curated holiday packages to Turkey, Dubai, Majorca, Malta and beyond — visa assistance included.</p>
            </div>
        </div>
    </div>
</section>


<!-- ===================== HOW IT WORKS ===================== -->
<section id="process" class="py-24 bg-[#060e1a]">
    <div class="max-w-7xl mx-auto px-6 lg:px-10">
        <div class="text-center mb-16">
            <p class="text-xs font-semibold tracking-[4px] text-gold uppercase mb-3">Simple Process</p>
            <h2 class="font-display text-4xl lg:text-5xl font-bold text-white">Visa Approved in <span class="italic text-gold">3 Steps</span></h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative">
            <!-- Connector line (desktop) -->
            <div class="hidden md:block absolute top-10 left-[calc(16.67%+20px)] right-[calc(16.67%+20px)] h-px bg-gradient-to-r from-gold/60 via-gold/20 to-gold/60"></div>

            <!-- Step 1 -->
            <div class="text-center relative">
                <div class="w-20 h-20 rounded-full border-2 border-gold bg-navy flex items-center justify-center mx-auto mb-6 relative z-10">
                    <span class="font-display text-3xl font-bold text-gold">1</span>
                </div>
                <h3 class="font-display text-xl font-semibold text-white mb-3">Apply Online</h3>
                <p class="text-white/45 text-sm leading-relaxed">Fill out our quick visa request form. Tell us your destination and travel plans — it takes under 3 minutes.</p>
            </div>

            <!-- Step 2 -->
            <div class="text-center relative">
                <div class="w-20 h-20 rounded-full border-2 border-gold bg-gold/10 flex items-center justify-center mx-auto mb-6 relative z-10">
                    <span class="font-display text-3xl font-bold text-gold">2</span>
                </div>
                <h3 class="font-display text-xl font-semibold text-white mb-3">Expert Review</h3>
                <p class="text-white/45 text-sm leading-relaxed">Our specialist agents review your application and prepare a complete document checklist tailored to your case.</p>
            </div>

            <!-- Step 3 -->
            <div class="text-center relative">
                <div class="w-20 h-20 rounded-full border-2 border-gold bg-navy flex items-center justify-center mx-auto mb-6 relative z-10">
                    <span class="font-display text-3xl font-bold text-gold">3</span>
                </div>
                <h3 class="font-display text-xl font-semibold text-white mb-3">Visa Approved</h3>
                <p class="text-white/45 text-sm leading-relaxed">We submit your application to the embassy and keep you updated until your visa is stamped and ready.</p>
            </div>
        </div>

        <div class="text-center mt-12">
            <button onclick="openPopup()" class="bg-gold/10 hover:bg-gold text-gold hover:text-navy border border-gold/30 hover:border-gold font-semibold text-sm tracking-wider uppercase px-8 py-4 rounded-xl transition-all duration-300">
                Start Your Application
            </button>
        </div>
    </div>
</section>


<!-- ===================== COUNTRIES ===================== -->
<section id="countries" class="py-24 bg-navy">
    <div class="max-w-7xl mx-auto px-6 lg:px-10">
        <div class="text-center mb-16">
            <p class="text-xs font-semibold tracking-[4px] text-gold uppercase mb-3">Destinations</p>
            <h2 class="font-display text-4xl lg:text-5xl font-bold text-white">Countries We <span class="italic text-gold">Cover</span></h2>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4">
            @php
            $countries = [
                ['name' => 'United Kingdom', 'flag' => '🇬🇧', 'color' => 'from-blue-900/40'],
                ['name' => 'United States',  'flag' => '🇺🇸', 'color' => 'from-red-900/40'],
                ['name' => 'Canada',         'flag' => '🇨🇦', 'color' => 'from-red-900/40'],
                ['name' => 'Australia',      'flag' => '🇦🇺', 'color' => 'from-blue-900/40'],
                ['name' => 'Europe',         'flag' => '🇪🇺', 'color' => 'from-blue-800/40'],
                ['name' => 'UAE / Dubai',    'flag' => '🇦🇪', 'color' => 'from-green-900/40'],
                ['name' => 'Turkey',         'flag' => '🇹🇷', 'color' => 'from-red-900/40'],
                ['name' => 'Ireland',        'flag' => '🇮🇪', 'color' => 'from-green-900/40'],
                ['name' => 'China',          'flag' => '🇨🇳', 'color' => 'from-red-900/40'],
                ['name' => 'Morocco',        'flag' => '🇲🇦', 'color' => 'from-red-900/40'],
            ];
            @endphp

            @foreach($countries as $c)
            <div class="country-card bg-gradient-to-br {{ $c['color'] }} to-transparent border border-white/5 hover:border-gold/30 rounded-xl p-5 text-center cursor-pointer group">
                <div class="text-4xl mb-3">{{ $c['flag'] }}</div>
                <p class="text-white/70 group-hover:text-white text-sm font-medium transition-colors">{{ $c['name'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>


<!-- ===================== TESTIMONIALS ===================== -->
<section id="testimonials" class="py-24 bg-[#060e1a]">
    <div class="max-w-7xl mx-auto px-6 lg:px-10">
        <div class="text-center mb-16">
            <p class="text-xs font-semibold tracking-[4px] text-gold uppercase mb-3">Real Reviews</p>
            <h2 class="font-display text-4xl lg:text-5xl font-bold text-white">Trusted by <span class="italic text-gold">Thousands</span></h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @php
            $testimonials = [
                ['name' => 'Kimberley Appleby', 'text' => 'Tiny ticket office but the most reliable ticket agent operating since 9 years in Brixton, UK. Absolutely professional service.', 'stars' => 5],
                ['name' => 'B Chucks',           'text' => 'Thank you for sorting my flight back from Africa. Due to Covid19 flights were cancelled and you managed to bring me back — thank you again.', 'stars' => 5],
                ['name' => 'Cirile Gbeke',       'text' => 'I received my Cyprus visa today. Thank you so much for your outstanding service and continuous support throughout the process.', 'stars' => 5],
                ['name' => 'Augustine',          'text' => 'We arrived safely and have visited amazing places. This evening we\'re going on a cruise. Best travel agency we\'ve used!', 'stars' => 5],
                ['name' => 'Beatrice Nsona',     'text' => 'Best agency! Professional, fast, and reliable. They guided us through every step. Highly recommend SAM Visa Services.', 'stars' => 5],
                ['name' => 'Sarah Mitchell',     'text' => 'Applied for a Schengen visa — the team handled everything flawlessly. Got approved in under 2 weeks. Brilliant service.', 'stars' => 5],
            ];
            @endphp

            @foreach($testimonials as $t)
            <div class="testimonial-card rounded-2xl p-7">
                <div class="flex text-gold text-sm mb-4">
                    @for($i = 0; $i < $t['stars']; $i++) ★ @endfor
                </div>
                <p class="text-white/60 text-sm leading-relaxed mb-5 italic">"{{ $t['text'] }}"</p>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-gradient-to-br from-gold to-gold-dark flex items-center justify-center font-display font-bold text-navy text-sm">
                        {{ substr($t['name'], 0, 1) }}
                    </div>
                    <div>
                        <p class="text-white text-sm font-semibold">{{ $t['name'] }}</p>
                        <p class="text-white/35 text-xs">Verified Client</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


<!-- ===================== CTA BAND ===================== -->
<section class="py-20 bg-gradient-to-br from-[#1a1208] via-[#2c1f0a] to-[#1a1208] relative overflow-hidden">
    <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 2px 2px, rgba(201,151,58,0.4) 1px, transparent 0); background-size: 32px 32px;"></div>
    <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
        <p class="text-xs font-semibold tracking-[4px] text-gold uppercase mb-4">Get Started Today</p>
        <h2 class="font-display text-4xl lg:text-5xl font-bold text-white mb-6">Ready to <span class="italic text-gold">Travel the World?</span></h2>
        <p class="text-white/50 text-lg mb-10 max-w-xl mx-auto">Let our expert team handle your visa application. Fast, reliable, and trusted by thousands of travellers.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <button onclick="openPopup()" class="bg-gold hover:bg-gold-light text-navy font-semibold px-10 py-4 rounded-xl transition-all duration-300 hover:shadow-xl hover:shadow-gold/25 text-sm tracking-wide">
                Apply for Visa Now
            </button>
            <a href="https://wa.me/447908268383" target="_blank"
                class="flex items-center justify-center gap-2 border border-white/20 hover:border-gold/50 text-white/70 hover:text-white px-10 py-4 rounded-xl transition-all duration-300 text-sm">
                <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                WhatsApp Us
            </a>
        </div>
    </div>
</section>


<!-- ===================== FOOTER ===================== -->
<footer class="bg-navy border-t border-white/5 pt-16 pb-8">
    <div class="max-w-7xl mx-auto px-6 lg:px-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">
            <!-- Brand -->
            <div class="lg:col-span-2">
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-gold to-gold-dark flex items-center justify-center font-display font-bold text-navy text-lg">S</div>
                    <div>
                        <p class="font-display font-bold text-white text-lg leading-none">SAM VISA SERVICES</p>
                        <p class="text-gold text-[9px] tracking-[3px] uppercase font-medium">London, UK</p>
                    </div>
                </div>
                <p class="text-white/40 text-sm leading-relaxed max-w-sm mb-5">We are a travel service provider based in London, UK, offering visa and travel services since 2010. Registered with the Information Commissioner's Office (ICO).</p>
                <a href="tel:+447908268383" class="flex items-center gap-2 text-gold hover:text-gold-light transition-colors text-sm font-medium">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8z"/></svg>
                    +44 7908 268383
                </a>
            </div>

            <!-- Visas -->
            <div>
                <h4 class="text-white font-semibold text-sm tracking-widest uppercase mb-4">Visas</h4>
                <ul class="space-y-2">
                    @foreach(['Tourist Visa', 'Business Visa', 'Family Visit', 'Student Visa', 'Transit Visa'] as $v)
                    <li><a href="#" class="text-white/40 hover:text-gold text-sm transition-colors">{{ $v }}</a></li>
                    @endforeach
                </ul>
            </div>

            <!-- Countries -->
            <div>
                <h4 class="text-white font-semibold text-sm tracking-widest uppercase mb-4">Countries</h4>
                <ul class="space-y-2">
                    @foreach(['United Kingdom', 'United States', 'Canada', 'Australia', 'Europe', 'UAE'] as $c)
                    <li><a href="#" class="text-white/40 hover:text-gold text-sm transition-colors">{{ $c }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="border-t border-white/5 pt-8 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="text-white/25 text-xs">© {{ date('Y') }} SAM Visa Services. All rights reserved.</p>
            <div class="flex gap-6">
                <a href="#" class="text-white/25 hover:text-gold text-xs transition-colors">Privacy Policy</a>
                <a href="#" class="text-white/25 hover:text-gold text-xs transition-colors">Terms & Conditions</a>
            </div>
        </div>
    </div>
</footer>


<!-- ===================== SCRIPTS ===================== -->
<script>
    // Auto-open popup on page load
    window.addEventListener('DOMContentLoaded', () => {
        setTimeout(() => {
            document.getElementById('popup-overlay').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }, 800);
    });

    function openPopup() {
        document.getElementById('popup-overlay').classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closePopup() {
        document.getElementById('popup-overlay').classList.add('hidden');
        document.body.style.overflow = '';
    }

    // Close on backdrop click
    document.getElementById('popup-overlay').addEventListener('click', function(e) {
        if (e.target === this) closePopup();
    });

    // Close on Escape key
    document.addEventListener('keydown', e => {
        if (e.key === 'Escape') closePopup();
    });

    // Navbar scroll effect
    window.addEventListener('scroll', () => {
        const nav = document.getElementById('navbar');
        if (window.scrollY > 50) {
            nav.style.background = 'rgba(6,14,26,0.95)';
            nav.style.backdropFilter = 'blur(12px)';
            nav.style.borderBottom = '1px solid rgba(201,151,58,0.1)';
        } else {
            nav.style.background = 'transparent';
            nav.style.backdropFilter = 'none';
            nav.style.borderBottom = 'none';
        }
    });

    // Mobile menu toggle
    function toggleMobile() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    }

    // Animate elements on scroll
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('[data-animate]').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(24px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });

    // Custom checkbox visual sync
    const cb = document.getElementById('skip_payment');
    if (cb) {
        cb.addEventListener('change', function() {
            const box = this.nextElementSibling;
            const check = box.querySelector('svg');
            if (this.checked) {
                box.classList.add('border-gold', 'bg-gold/20');
                if (check) check.classList.remove('hidden');
            } else {
                box.classList.remove('border-gold', 'bg-gold/20');
                if (check) check.classList.add('hidden');
            }
        });
    }
</script>

</body>
</html>