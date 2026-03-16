<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>SAM Visa Services — London, UK</title>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500;1,600&family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
<style>
    :root{
    --blue:#1a4aab;--blue-dark:#0f2f7a;--blue-mid:#1e5bc6;--blue-light:#4a7fd4;
    --blue-pale:#e8f0fb;--blue-faint:#f0f5ff;
    --gray-dark:#2c3a4a;--gray-mid:#5a6a7a;--gray-light:#8a9aaa;
    --gray-border:#d4dce6;--gray-bg:#f4f6f9;--gray-bg2:#edf0f5;
    --white:#ffffff;--white-soft:#fafbfd;
    --shadow-sm:0 2px 12px rgba(26,74,171,0.08);
    --shadow-md:0 8px 32px rgba(26,74,171,0.14);
    --shadow-lg:0 20px 60px rgba(26,74,171,0.18);
    --shadow-blue:0 8px 32px rgba(26,74,171,0.3);
    --font-d:'Cormorant Garamond',serif;--font-b:'Jost',sans-serif;
    --expo:cubic-bezier(0.16,1,0.3,1);--bounce:cubic-bezier(0.34,1.56,0.64,1);
    }
    *,*::before,*::after{margin:0;padding:0;box-sizing:border-box;}
    html{scroll-behavior:smooth;}
    body{font-family:var(--font-b);background:var(--white);color:var(--gray-dark);overflow-x:hidden;}
    ::-webkit-scrollbar{width:5px;}
    ::-webkit-scrollbar-track{background:var(--gray-bg);}
    ::-webkit-scrollbar-thumb{background:var(--blue);border-radius:4px;}

    /* KEYFRAMES */
    @keyframes fadeUp{from{opacity:0;transform:translateY(40px);}to{opacity:1;transform:translateY(0);}}
    @keyframes fadeIn{from{opacity:0;}to{opacity:1;}}
    @keyframes fadeRight{from{opacity:0;transform:translateX(50px);}to{opacity:1;transform:translateX(0);}}
    @keyframes float{0%,100%{transform:translateY(0);}50%{transform:translateY(-12px);}}
    @keyframes rotateSlow{from{transform:rotate(0deg);}to{transform:rotate(360deg);}}
    @keyframes pulseDot{0%,100%{box-shadow:0 0 0 0 rgba(26,74,171,0.4);}50%{box-shadow:0 0 0 10px rgba(26,74,171,0);}}
    @keyframes shimmer{0%{background-position:-200% center;}100%{background-position:200% center;}}
    @keyframes bgSlide{0%{background-position:0% 50%;}50%{background-position:100% 50%;}100%{background-position:0% 50%;}}
    @keyframes orbDrift{0%,100%{transform:translate(0,0);}33%{transform:translate(30px,-20px);}66%{transform:translate(-20px,25px);}}
    @keyframes particleRise{0%{transform:translateY(0) rotate(0deg);opacity:.5;}100%{transform:translateY(-100vh) rotate(540deg);opacity:0;}}
    @keyframes ripple{to{transform:scale(3);opacity:0;}}
    @keyframes lineGrow{from{transform:scaleX(0);}to{transform:scaleX(1);}}
    @keyframes popIn{from{transform:scale(0.88) translateY(-28px);opacity:0;}to{transform:scale(1) translateY(0);opacity:1;}}
    @keyframes checkDraw{from{stroke-dashoffset:30;}to{stroke-dashoffset:0;}}

    /* SCROLL REVEAL */
    .reveal{opacity:0;transform:translateY(44px);transition:opacity .75s var(--expo),transform .75s var(--expo);}
    .reveal.from-left{transform:translateX(-60px);}
    .reveal.from-right{transform:translateX(60px);}
    .reveal.scale-up{transform:scale(.88);}
    .reveal.visible{opacity:1!important;transform:none!important;}
    .reveal-d1{transition-delay:.1s;}.reveal-d2{transition-delay:.2s;}.reveal-d3{transition-delay:.3s;}
    .reveal-d4{transition-delay:.4s;}.reveal-d5{transition-delay:.5s;}.reveal-d6{transition-delay:.6s;}

    /* PARTICLES */
    .particles{position:fixed;inset:0;pointer-events:none;z-index:0;overflow:hidden;}
    .particle{position:absolute;border-radius:50%;background:rgba(26,74,171,.3);animation:particleRise linear infinite;opacity:0;}
    .particle:nth-child(1){left:8%;width:4px;height:4px;animation-duration:20s;}
    .particle:nth-child(2){left:22%;width:3px;height:3px;animation-duration:26s;animation-delay:3s;}
    .particle:nth-child(3){left:38%;width:5px;height:5px;animation-duration:18s;animation-delay:7s;}
    .particle:nth-child(4){left:52%;width:3px;height:3px;animation-duration:22s;animation-delay:1s;}
    .particle:nth-child(5){left:67%;width:4px;height:4px;animation-duration:24s;animation-delay:5s;}
    .particle:nth-child(6){left:80%;width:3px;height:3px;animation-duration:19s;animation-delay:9s;}
    .particle:nth-child(7){left:14%;width:4px;height:4px;animation-duration:28s;animation-delay:2s;}
    .particle:nth-child(8){left:45%;width:3px;height:3px;animation-duration:21s;animation-delay:6s;}
    .particle:nth-child(9){left:75%;width:5px;height:5px;animation-duration:23s;animation-delay:11s;}
    .particle:nth-child(10){left:92%;width:3px;height:3px;animation-duration:17s;animation-delay:4s;}

    /* NAVBAR */
    #navbar{position:fixed;top:0;left:0;right:0;z-index:100;padding:0 48px;transition:background .4s,box-shadow .4s;}
    #navbar.scrolled{background:rgba(255,255,255,.97);backdrop-filter:blur(16px);box-shadow:0 1px 0 var(--gray-border),var(--shadow-sm);}
    .nav-inner{max-width:1280px;margin:0 auto;height:80px;display:flex;align-items:center;justify-content:space-between;}
    .nav-logo{display:flex;align-items:center;gap:12px;text-decoration:none;}
    .nav-logo-icon{width:46px;height:46px;border-radius:12px;background:linear-gradient(135deg,var(--blue-mid),var(--blue-dark));display:flex;align-items:center;justify-content:center;font-family:var(--font-d);font-weight:700;color:var(--white);font-size:20px;box-shadow:var(--shadow-blue);transition:transform .3s var(--bounce),box-shadow .3s;}
    .nav-logo:hover .nav-logo-icon{transform:scale(1.08) rotate(-3deg);box-shadow:0 10px 30px rgba(26,74,171,.4);}
    .nav-logo-title{font-family:var(--font-d);font-weight:700;font-size:18px;color:var(--blue-dark);letter-spacing:1px;line-height:1;}
    .nav-logo-sub{font-size:9px;letter-spacing:4px;color:var(--blue-light);text-transform:uppercase;font-weight:500;}
    .nav-links{display:flex;align-items:center;gap:34px;list-style:none;}
    .nav-links a{color:var(--gray-mid);text-decoration:none;font-size:13px;font-weight:500;position:relative;transition:color .3s;}
    .nav-links a::after{content:'';position:absolute;bottom:-3px;left:0;width:0;height:2px;background:var(--blue);border-radius:2px;transition:width .35s var(--expo);}
    .nav-links a:hover{color:var(--blue);}
    .nav-links a:hover::after{width:100%;}
    .nav-phone{display:flex!important;align-items:center;gap:7px;color:var(--blue)!important;font-weight:600!important;}
    .nav-phone::after{display:none!important;}
    .nav-cta{background:linear-gradient(135deg,var(--blue-mid),var(--blue-dark))!important;color:var(--white)!important;font-weight:600!important;padding:10px 24px;border-radius:8px!important;box-shadow:var(--shadow-blue);transition:transform .25s var(--bounce),box-shadow .25s!important;}
    .nav-cta:hover{transform:translateY(-2px)!important;box-shadow:0 12px 32px rgba(26,74,171,.4)!important;}
    .nav-cta::after{display:none!important;}
    .hamburger{display:none;flex-direction:column;gap:5px;background:none;border:none;cursor:pointer;padding:4px;}
    .hamburger span{display:block;width:24px;height:2px;background:var(--gray-dark);border-radius:2px;transition:all .3s;}
    .mobile-menu{display:none;flex-direction:column;background:var(--white);border-top:1px solid var(--gray-border);padding:16px 48px 24px;gap:14px;box-shadow:var(--shadow-md);}
    .mobile-menu.open{display:flex;}
    .mobile-menu a{color:var(--gray-mid);text-decoration:none;font-size:14px;font-weight:500;padding:8px 0;border-bottom:1px solid var(--gray-border);transition:color .3s;}
    .mobile-menu a:hover{color:var(--blue);}
    .mob-cta{margin-top:8px;background:var(--blue);color:var(--white);border:none;padding:14px;border-radius:8px;font-family:var(--font-b);font-weight:600;font-size:14px;cursor:pointer;}
    .mob-cta:hover{background:var(--blue-dark);}

    /* POPUP */
    #popup-overlay{position:fixed;inset:0;z-index:200;background:rgba(15,47,122,.5);backdrop-filter:blur(10px);display:flex;align-items:center;justify-content:center;padding:20px;opacity:0;visibility:hidden;transition:opacity .4s,visibility .4s;}
    #popup-overlay.active{opacity:1;visibility:visible;}
    .popup-modal{position:relative;width:100%;max-width:680px;background:var(--white);border-radius:20px;box-shadow:0 30px 80px rgba(15,47,122,.25),0 0 0 1px rgba(26,74,171,.1);overflow:hidden;max-height:92vh;overflow-y:auto;transform:scale(.88) translateY(-28px);opacity:0;transition:transform .5s var(--expo),opacity .5s;}
    #popup-overlay.active .popup-modal{transform:scale(1) translateY(0);opacity:1;}
    .popup-bar{height:4px;background:linear-gradient(90deg,var(--blue-dark),var(--blue-mid),var(--blue-light),var(--blue-mid),var(--blue-dark));background-size:200% auto;animation:shimmer 3s linear infinite;}
    .popup-close{position:absolute;top:16px;right:16px;width:36px;height:36px;border-radius:50%;background:var(--gray-bg);border:1px solid var(--gray-border);color:var(--gray-light);font-size:18px;line-height:1;display:flex;align-items:center;justify-content:center;cursor:pointer;transition:background .3s,color .3s,transform .35s var(--bounce);}
    .popup-close:hover{background:var(--blue-pale);color:var(--blue);transform:rotate(90deg) scale(1.1);}
    .popup-body{padding:40px 48px 48px;}
    .popup-badge{display:inline-flex;align-items:center;gap:8px;background:var(--blue-pale);border:1px solid rgba(26,74,171,.2);border-radius:40px;padding:6px 16px;font-size:10px;font-weight:600;letter-spacing:3px;color:var(--blue);text-transform:uppercase;margin-bottom:16px;}
    .badge-dot{width:6px;height:6px;background:var(--blue);border-radius:50%;animation:pulseDot 2s infinite;}
    .popup-title{font-family:var(--font-d);font-size:36px;font-weight:700;color:var(--blue-dark);line-height:1.1;margin-bottom:10px;}
    .popup-title em{font-style:italic;color:var(--blue-mid);}
    .popup-desc{font-size:13px;color:var(--gray-mid);margin-bottom:28px;line-height:1.7;}
    .fg{display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-bottom:16px;}
    .fg.full{grid-template-columns:1fr;}
    .fl{display:flex;flex-direction:column;gap:6px;}
    .fl-lbl{font-size:10px;font-weight:600;letter-spacing:3px;color:var(--blue);text-transform:uppercase;}
    .fl-lbl span{color:#ef4444;}
    .fi,.fs,.ft{background:var(--white-soft);border:1.5px solid var(--gray-border);border-radius:10px;padding:12px 16px;color:var(--gray-dark);font-family:var(--font-b);font-size:13px;outline:none;width:100%;transition:border-color .3s,box-shadow .3s,background .3s;}
    .fi::placeholder,.ft::placeholder{color:var(--gray-light);}
    .fi:focus,.fs:focus,.ft:focus{border-color:var(--blue);box-shadow:0 0 0 4px rgba(26,74,171,.1);background:var(--white);}
    .fs{appearance:none;cursor:pointer;background-color:var(--white-soft);}
    .ft{resize:none;height:90px;line-height:1.6;}
    .skip-lbl{display:flex;align-items:flex-start;gap:14px;cursor:pointer;padding:16px 18px;border-radius:12px;border:1.5px solid var(--gray-border);background:var(--white-soft);transition:border-color .3s,background .3s;user-select:none;margin-bottom:20px;margin-top:4px;}
    .skip-lbl:hover{border-color:rgba(26,74,171,.35);background:var(--blue-faint);}
    .skip-lbl input[type="checkbox"]{display:none;}
    .cb{width:22px;height:22px;min-width:22px;border:2px solid var(--gray-border);border-radius:6px;background:var(--white);display:flex;align-items:center;justify-content:center;transition:border-color .3s,background .3s;margin-top:2px;}
    .cb svg{width:13px;height:13px;stroke:var(--blue);stroke-width:2.5;stroke-linecap:round;stroke-linejoin:round;fill:none;stroke-dasharray:30;stroke-dashoffset:30;transition:stroke-dashoffset .35s ease;}
    .skip-lbl:has(input:checked) .cb{border-color:var(--blue);background:var(--blue-pale);}
    .skip-lbl:has(input:checked) .cb svg{stroke-dashoffset:0;}
    .skip-lbl:has(input:checked){border-color:rgba(26,74,171,.4);background:var(--blue-faint);}
    .skip-title{font-size:13px;font-weight:600;color:var(--gray-dark);}
    .skip-sub{font-size:11px;color:var(--gray-light);margin-top:3px;line-height:1.5;}
    .sub-btn{width:100%;background:linear-gradient(135deg,var(--blue-mid),var(--blue-dark));color:var(--white);font-family:var(--font-b);font-weight:700;font-size:13px;letter-spacing:2px;text-transform:uppercase;padding:16px 32px;border:none;border-radius:12px;cursor:pointer;position:relative;overflow:hidden;box-shadow:var(--shadow-blue);transition:transform .25s var(--bounce),box-shadow .25s;}
    .sub-btn::before{content:'';position:absolute;top:0;left:-100%;width:100%;height:100%;background:linear-gradient(90deg,transparent,rgba(255,255,255,.18),transparent);transition:left .5s;}
    .sub-btn:hover{transform:translateY(-2px);box-shadow:0 12px 40px rgba(26,74,171,.45);}
    .sub-btn:hover::before{left:100%;}
    .popup-sec{text-align:center;font-size:11px;color:var(--gray-light);margin-top:12px;}

    /* HERO */
    #hero{position:relative;min-height:100vh;display:flex;align-items:center;overflow:hidden;background:linear-gradient(150deg,#f0f5ff 0%,#e8f0fb 30%,#dce8f8 60%,#f4f8ff 100%);}
    .h-orbs{position:absolute;inset:0;pointer-events:none;overflow:hidden;}
    .orb{position:absolute;border-radius:50%;filter:blur(70px);animation:orbDrift ease-in-out infinite;}
    .orb-1{width:600px;height:600px;top:-200px;right:-100px;background:radial-gradient(circle,rgba(26,74,171,.12) 0%,transparent 70%);animation-duration:14s;}
    .orb-2{width:400px;height:400px;bottom:50px;left:-100px;background:radial-gradient(circle,rgba(74,127,212,.1) 0%,transparent 70%);animation-duration:18s;animation-delay:3s;}
    .orb-3{width:300px;height:300px;top:40%;right:30%;background:radial-gradient(circle,rgba(26,74,171,.06) 0%,transparent 70%);animation-duration:22s;animation-delay:7s;}
    .h-grid{position:absolute;inset:0;pointer-events:none;background-image:linear-gradient(rgba(26,74,171,.04) 1px,transparent 1px),linear-gradient(90deg,rgba(26,74,171,.04) 1px,transparent 1px);background-size:64px 64px;}
    .h-globe{position:absolute;right:-40px;top:50%;transform:translateY(-50%);width:640px;height:640px;opacity:.07;animation:rotateSlow 90s linear infinite;pointer-events:none;}
    .h-content{position:relative;z-index:10;max-width:1280px;width:100%;padding:140px 48px 100px;margin:0 auto;}
    .h-split{display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center;}
    .h-badge{display:inline-flex;align-items:center;gap:8px;background:rgba(26,74,171,.08);border:1px solid rgba(26,74,171,.2);border-radius:40px;padding:7px 18px;font-size:10px;font-weight:600;letter-spacing:3px;color:var(--blue);text-transform:uppercase;margin-bottom:28px;animation:fadeUp .8s var(--expo) .2s both;}
    .badge-dot{width:7px;height:7px;background:var(--blue);border-radius:50%;animation:pulseDot 2s infinite;}
    .h-title{font-family:var(--font-d);font-size:clamp(52px,6vw,80px);font-weight:700;color:var(--blue-dark);line-height:1.06;margin-bottom:24px;animation:fadeUp .9s var(--expo) .3s both;}
    .h-title em{font-style:italic;color:var(--blue-mid);display:block;}
    .h-sub{font-size:16px;font-weight:300;color:var(--gray-mid);line-height:1.8;max-width:480px;margin-bottom:44px;animation:fadeUp .9s var(--expo) .45s both;}
    .h-btns{display:flex;gap:16px;flex-wrap:wrap;animation:fadeUp .9s var(--expo) .6s both;}
    .btn-p{display:inline-flex;align-items:center;gap:10px;background:linear-gradient(135deg,var(--blue-mid),var(--blue-dark));color:var(--white);font-weight:700;font-size:13px;letter-spacing:.5px;padding:16px 34px;border-radius:12px;border:none;cursor:pointer;font-family:var(--font-b);text-decoration:none;position:relative;overflow:hidden;box-shadow:var(--shadow-blue);transition:transform .3s var(--bounce),box-shadow .3s;}
    .btn-p::before{content:'';position:absolute;inset:0;background:linear-gradient(135deg,var(--blue-light),var(--blue-mid));opacity:0;transition:opacity .3s;}
    .btn-p span,.btn-p svg{position:relative;z-index:1;}
    .btn-p:hover{transform:translateY(-3px);box-shadow:0 16px 44px rgba(26,74,171,.4);}
    .btn-p:hover::before{opacity:1;}
    .btn-p svg{transition:transform .3s;}
    .btn-p:hover svg{transform:translateX(4px);}
    .btn-o{display:inline-flex;align-items:center;gap:10px;background:var(--white);color:var(--blue);font-weight:600;font-size:13px;padding:16px 32px;border-radius:12px;border:1.5px solid rgba(26,74,171,.25);cursor:pointer;font-family:var(--font-b);text-decoration:none;transition:border-color .3s,background .3s,box-shadow .3s,transform .3s var(--bounce);box-shadow:var(--shadow-sm);}
    .btn-o:hover{border-color:var(--blue);background:var(--blue-faint);transform:translateY(-2px);box-shadow:var(--shadow-md);}

    /* Hero right card */
    .h-card{background:var(--white);border-radius:20px;box-shadow:var(--shadow-lg);padding:36px;border:1px solid var(--gray-border);position:relative;z-index:2;animation:fadeRight 1s var(--expo) .4s both;}
    .h-card-title{font-family:var(--font-d);font-size:22px;font-weight:600;color:var(--blue-dark);margin-bottom:24px;}
    .pill-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:10px;margin-bottom:24px;}
    .pill{display:flex;align-items:center;gap:10px;background:var(--blue-faint);border:1px solid var(--blue-pale);border-radius:10px;padding:11px 14px;transition:background .3s,border-color .3s,transform .3s var(--bounce);}
    .pill:hover{background:var(--blue-pale);border-color:rgba(26,74,171,.3);transform:translateY(-2px);}
    .pill-flag{font-size:22px;}
    .pill-name{font-size:12px;font-weight:600;color:var(--blue-dark);}
    .h-card-cta{background:linear-gradient(135deg,var(--blue-mid),var(--blue-dark));color:var(--white);border:none;border-radius:12px;padding:14px;width:100%;font-family:var(--font-b);font-weight:700;font-size:13px;cursor:pointer;letter-spacing:1px;transition:transform .3s var(--bounce),box-shadow .3s;box-shadow:var(--shadow-blue);}
    .h-card-cta:hover{transform:translateY(-2px);box-shadow:0 12px 36px rgba(26,74,171,.45);}

    /* Float tags */
    .ftag{position:absolute;background:var(--white);border:1px solid var(--gray-border);border-radius:12px;padding:12px 18px;display:flex;align-items:center;gap:10px;font-size:12px;font-weight:600;color:var(--gray-dark);box-shadow:var(--shadow-md);white-space:nowrap;z-index:3;}
    .ftag svg{color:var(--blue);}
    .ft1{top:-20px;left:-40px;animation:float 4s ease-in-out infinite;}
    .ft2{bottom:-16px;right:-24px;animation:float 4s ease-in-out infinite 1.5s;}
    .ft3{bottom:60px;left:-50px;animation:float 4s ease-in-out infinite 3s;}

    /* Trust strip */
    .h-trust{display:flex;align-items:center;gap:24px;margin-top:48px;padding-top:30px;border-top:1px solid var(--gray-border);animation:fadeUp .9s var(--expo) .75s both;flex-wrap:wrap;}
    .t-avs{display:flex;align-items:center;}
    .t-av{width:34px;height:34px;border-radius:50%;border:2.5px solid var(--white);margin-left:-8px;font-size:13px;display:flex;align-items:center;justify-content:center;font-weight:700;color:var(--white);box-shadow:0 2px 8px rgba(26,74,171,.2);}
    .t-av:first-child{margin-left:0;}
    .ta1{background:linear-gradient(135deg,#3b82f6,#1d4ed8);}
    .ta2{background:linear-gradient(135deg,#0ea5e9,#0369a1);}
    .ta3{background:linear-gradient(135deg,#60a5fa,#2563eb);}
    .t-info p{font-size:12px;font-weight:600;color:var(--gray-dark);}
    .t-info small{font-size:11px;color:var(--blue);}
    .t-div{width:1px;height:36px;background:var(--gray-border);}
    .t-ico{display:flex;align-items:center;gap:6px;font-size:12px;color:var(--gray-mid);}
    .t-ico svg{color:var(--blue);}

    .scroll-hint{position:absolute;bottom:32px;left:50%;transform:translateX(-50%);display:flex;flex-direction:column;align-items:center;gap:8px;color:var(--gray-light);font-size:9px;letter-spacing:3px;text-transform:uppercase;animation:fadeIn 1s 1.5s both;}
    .s-mouse{width:22px;height:34px;border:1.5px solid var(--gray-border);border-radius:12px;display:flex;justify-content:center;padding-top:6px;}
    .s-dot{width:3px;height:7px;background:var(--blue);border-radius:2px;animation:float 2s ease-in-out infinite;}

    /* STATS */
    #stats{background:linear-gradient(135deg,var(--blue-dark),var(--blue-mid),var(--blue-light));background-size:200% auto;animation:bgSlide 6s ease infinite;position:relative;overflow:hidden;}
    #stats::before{content:'';position:absolute;inset:0;background:url("data:image/svg+xml,%3Csvg width='20' height='20' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='1' cy='1' r='1' fill='%23fff' fill-opacity='0.06'/%3E%3C/svg%3E") repeat;}
    .stats-in{position:relative;max-width:1280px;margin:0 auto;padding:52px 48px;display:grid;grid-template-columns:repeat(4,1fr);}
    .s-item{text-align:center;padding:16px 24px;position:relative;}
    .s-item::after{content:'';position:absolute;right:0;top:20%;bottom:20%;width:1px;background:rgba(255,255,255,.18);}
    .s-item:last-child::after{display:none;}
    .s-num{font-family:var(--font-d);font-size:54px;font-weight:700;color:var(--white);line-height:1;margin-bottom:4px;}
    .s-lbl{font-size:11px;font-weight:600;letter-spacing:2px;color:rgba(255,255,255,.7);text-transform:uppercase;}

    /* COMMONS */
    section{position:relative;overflow:hidden;}
    .cnt{max-width:1280px;margin:0 auto;padding:100px 48px;}
    .sec-lbl{font-size:10px;font-weight:700;letter-spacing:4px;color:var(--blue);text-transform:uppercase;margin-bottom:12px;}
    .sec-title{font-family:var(--font-d);font-size:clamp(34px,4vw,50px);font-weight:700;color:var(--blue-dark);line-height:1.12;margin-bottom:16px;}
    .sec-title em{font-style:italic;color:var(--blue-mid);}
    .sec-sub{font-size:15px;font-weight:300;color:var(--gray-mid);line-height:1.8;max-width:520px;}
    .sec-hc{text-align:center;}.sec-hc .sec-sub{margin:0 auto;}
    .b-line{display:block;width:48px;height:3px;background:linear-gradient(90deg,var(--blue),var(--blue-light));border-radius:3px;margin-bottom:18px;transform-origin:left;animation:lineGrow .8s var(--expo) both;}
    .b-line.c{margin:0 auto 18px;background:linear-gradient(90deg,var(--blue-light),var(--blue),var(--blue-light));}

    /* SERVICES */
    #services{background:var(--white-soft);}
    .svc-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px;margin-top:64px;}
    .svc-card{background:var(--white);border:1.5px solid var(--gray-border);border-radius:18px;padding:40px 36px;position:relative;overflow:hidden;transition:border-color .4s,transform .4s var(--bounce),box-shadow .4s;cursor:default;}
    .svc-card::before{content:'';position:absolute;top:0;left:0;right:0;height:3px;background:linear-gradient(90deg,var(--blue-mid),var(--blue-light));transform:scaleX(0);transform-origin:left;transition:transform .5s var(--expo);}
    .svc-card::after{content:'';position:absolute;bottom:-60px;right:-60px;width:150px;height:150px;border-radius:50%;background:radial-gradient(circle,var(--blue-faint) 0%,transparent 70%);opacity:0;transition:opacity .5s,transform .5s;}
    .svc-card:hover{border-color:rgba(26,74,171,.3);transform:translateY(-8px);box-shadow:var(--shadow-lg);}
    .svc-card:hover::before{transform:scaleX(1);}
    .svc-card:hover::after{opacity:1;transform:scale(1.4);}
    .svc-card.feat{border-color:rgba(26,74,171,.25);background:linear-gradient(145deg,var(--blue-faint),var(--white));}
    .svc-card.feat::before{transform:scaleX(1);}
    .svc-badge{position:absolute;top:20px;right:20px;background:var(--blue);color:var(--white);font-size:9px;font-weight:700;letter-spacing:2px;text-transform:uppercase;padding:4px 12px;border-radius:20px;}
    .svc-icon{width:60px;height:60px;border-radius:16px;background:var(--blue-pale);display:flex;align-items:center;justify-content:center;margin-bottom:28px;transition:background .3s,transform .4s var(--bounce);}
    .svc-card:hover .svc-icon{background:rgba(26,74,171,.15);transform:scale(1.1) rotate(-5deg);}
    .svc-icon svg{color:var(--blue);}
    .svc-title{font-family:var(--font-d);font-size:22px;font-weight:600;color:var(--blue-dark);margin-bottom:14px;}
    .svc-desc{font-size:13px;color:var(--gray-mid);line-height:1.8;}
    .svc-link{display:inline-flex;align-items:center;gap:6px;color:var(--blue);font-size:12px;font-weight:600;letter-spacing:1px;text-decoration:none;margin-top:24px;opacity:0;transform:translateX(-10px);transition:opacity .3s,transform .3s,gap .3s;}
    .svc-card:hover .svc-link{opacity:1;transform:translateX(0);}
    .svc-link:hover{gap:12px;}

    /* PROCESS */
    #process{background:linear-gradient(180deg,var(--gray-bg) 0%,var(--white-soft) 100%);}
    .proc-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:48px;margin-top:72px;position:relative;}
    .proc-grid::before{content:'';position:absolute;top:44px;left:calc(16.67% + 20px);right:calc(16.67% + 20px);height:1.5px;background:linear-gradient(90deg,var(--blue),rgba(26,74,171,.2),var(--blue));}
    .proc-step{text-align:center;}
    .step-circ{width:90px;height:90px;border-radius:50%;border:2px solid rgba(26,74,171,.25);background:var(--white);display:flex;align-items:center;justify-content:center;margin:0 auto 28px;position:relative;z-index:1;box-shadow:var(--shadow-sm);transition:border-color .4s,box-shadow .4s,transform .4s var(--bounce),background .4s;}
    .proc-step:hover .step-circ{border-color:var(--blue);background:var(--blue-faint);box-shadow:0 0 0 10px rgba(26,74,171,.06),var(--shadow-md);transform:scale(1.1);}
    .step-n{font-family:var(--font-d);font-size:36px;font-weight:700;color:var(--blue);}
    .step-title{font-family:var(--font-d);font-size:22px;font-weight:600;color:var(--blue-dark);margin-bottom:12px;}
    .step-desc{font-size:13px;color:var(--gray-mid);line-height:1.8;max-width:240px;margin:0 auto;}
    .proc-cta{text-align:center;margin-top:60px;}
    .btn-ghost{display:inline-flex;align-items:center;gap:10px;background:var(--white);color:var(--blue);font-family:var(--font-b);font-weight:600;font-size:12px;letter-spacing:2px;text-transform:uppercase;padding:15px 36px;border-radius:10px;border:1.5px solid rgba(26,74,171,.25);cursor:pointer;text-decoration:none;box-shadow:var(--shadow-sm);transition:background .3s,color .3s,box-shadow .3s,transform .3s var(--bounce),border-color .3s;}
    .btn-ghost:hover{background:var(--blue);color:var(--white);border-color:var(--blue);transform:translateY(-2px);box-shadow:var(--shadow-blue);}

    /* COUNTRIES */
    #countries{background:var(--white);}
    .cty-grid{display:grid;grid-template-columns:repeat(5,1fr);gap:16px;margin-top:64px;}
    .cty-card{background:var(--white-soft);border:1.5px solid var(--gray-border);border-radius:16px;padding:28px 20px;text-align:center;cursor:pointer;position:relative;overflow:hidden;transition:border-color .35s,transform .35s var(--bounce),box-shadow .35s,background .35s;}
    .cty-card::before{content:'';position:absolute;inset:0;background:linear-gradient(145deg,var(--blue-faint),transparent);opacity:0;transition:opacity .35s;}
    .cty-card:hover{border-color:rgba(26,74,171,.35);transform:translateY(-6px) scale(1.02);box-shadow:var(--shadow-md);background:var(--white);}
    .cty-card:hover::before{opacity:1;}
    .cty-flag{font-size:40px;margin-bottom:14px;display:block;position:relative;z-index:1;transition:transform .4s var(--bounce);}
    .cty-card:hover .cty-flag{transform:scale(1.15) translateY(-3px);}
    .cty-name{font-size:12px;font-weight:600;color:var(--gray-mid);position:relative;z-index:1;transition:color .3s;}
    .cty-card:hover .cty-name{color:var(--blue-dark);}

    /* WHY */
    #why{background:var(--gray-bg);}
    .why-grid{display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center;}
    .why-feats{display:flex;flex-direction:column;gap:20px;margin-top:36px;}
    .why-feat{display:flex;align-items:flex-start;gap:18px;padding:22px 24px;border-radius:14px;border:1.5px solid var(--gray-border);background:var(--white);transition:border-color .35s,background .35s,transform .35s var(--bounce),box-shadow .35s;box-shadow:var(--shadow-sm);}
    .why-feat:hover{border-color:rgba(26,74,171,.3);background:var(--blue-faint);transform:translateX(8px);box-shadow:var(--shadow-md);}
    .why-icon{width:48px;height:48px;min-width:48px;border-radius:12px;background:var(--blue-pale);display:flex;align-items:center;justify-content:center;transition:background .3s;}
    .why-feat:hover .why-icon{background:rgba(26,74,171,.15);}
    .why-ft{font-family:var(--font-d);font-size:17px;font-weight:600;color:var(--blue-dark);margin-bottom:6px;}
    .why-fd{font-size:12px;color:var(--gray-mid);line-height:1.7;}
    .why-vis{position:relative;display:flex;align-items:center;justify-content:center;height:420px;}
    .w-ring{position:absolute;border-radius:50%;border:1px solid rgba(26,74,171,.12);animation:rotateSlow linear infinite;}
    .wr1{width:380px;height:380px;animation-duration:22s;}
    .wr2{width:280px;height:280px;animation-duration:16s;animation-direction:reverse;}
    .wr3{width:180px;height:180px;border-color:rgba(26,74,171,.2);animation-duration:10s;}
    .w-center{position:relative;z-index:10;width:120px;height:120px;border-radius:50%;background:linear-gradient(135deg,var(--blue-mid),var(--blue-dark));display:flex;flex-direction:column;align-items:center;justify-content:center;box-shadow:0 0 0 16px rgba(26,74,171,.08),var(--shadow-blue);}
    .w-center span:first-child{font-family:var(--font-d);font-size:38px;font-weight:700;color:var(--white);line-height:1;}
    .w-center span:last-child{font-size:9px;font-weight:700;letter-spacing:1px;color:rgba(255,255,255,.7);text-transform:uppercase;}
    .w-float{position:absolute;background:var(--white);border:1.5px solid var(--gray-border);border-radius:12px;padding:12px 18px;display:flex;align-items:center;gap:10px;font-size:12px;font-weight:600;color:var(--gray-dark);box-shadow:var(--shadow-md);white-space:nowrap;}
    .w-float svg{color:var(--blue);}
    .wf1{top:40px;right:-20px;animation:float 4s ease-in-out infinite;}
    .wf2{bottom:50px;left:-30px;animation:float 4s ease-in-out infinite 1.5s;}
    .wf3{bottom:8px;right:20px;animation:float 4s ease-in-out infinite 3s;}

    /* TOURS */
    #tours{background:var(--white-soft);}
    .tour-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:20px;margin-top:64px;}
    .tour-card{background:var(--white);border:1.5px solid var(--gray-border);border-radius:18px;overflow:hidden;transition:transform .4s var(--bounce),box-shadow .4s,border-color .4s;cursor:pointer;}
    .tour-card:hover{transform:translateY(-10px);box-shadow:var(--shadow-lg);border-color:rgba(26,74,171,.25);}
    .tour-img{height:160px;position:relative;display:flex;align-items:center;justify-content:center;font-size:56px;transition:transform .5s var(--expo);}
    .tour-card:hover .tour-img{transform:scale(1.1);}
    .ti1{background:linear-gradient(135deg,var(--blue-pale),#c8daf5);}
    .ti2{background:linear-gradient(135deg,#d0e8f5,#b8d5ee);}
    .ti3{background:linear-gradient(135deg,#d8eaf4,#c0d8ec);}
    .ti4{background:linear-gradient(135deg,#e0edf8,#c8ddf0);}
    .tour-badge{position:absolute;top:12px;left:12px;background:var(--blue);color:var(--white);font-size:9px;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;padding:3px 10px;border-radius:20px;}
    .tour-body{padding:22px 22px 28px;}
    .tour-loc{font-size:10px;font-weight:600;letter-spacing:3px;color:var(--blue);text-transform:uppercase;margin-bottom:8px;}
    .tour-name{font-family:var(--font-d);font-size:17px;font-weight:600;color:var(--blue-dark);line-height:1.3;margin-bottom:14px;}
    .tour-meta{display:flex;align-items:center;justify-content:space-between;padding-top:14px;border-top:1px solid var(--gray-border);}
    .tour-dur{font-size:11px;color:var(--gray-light);}
    .tour-price{font-family:var(--font-d);font-size:24px;font-weight:700;color:var(--blue-mid);}

    /* TESTIMONIALS */
    #testimonials{background:linear-gradient(180deg,var(--gray-bg2) 0%,var(--white) 100%);}
    .testi-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:20px;margin-top:64px;}
    .testi-card{background:var(--white);border:1.5px solid var(--gray-border);border-radius:18px;padding:34px 30px;position:relative;overflow:hidden;transition:border-color .4s,transform .4s var(--bounce),box-shadow .4s;box-shadow:var(--shadow-sm);}
    .testi-card::before{content:'"';position:absolute;top:16px;right:24px;font-family:var(--font-d);font-size:80px;color:var(--blue-faint);line-height:1;font-style:italic;pointer-events:none;}
    .testi-card:hover{border-color:rgba(26,74,171,.3);transform:translateY(-6px);box-shadow:var(--shadow-md);}
    .testi-stars{color:var(--blue-mid);font-size:14px;letter-spacing:2px;margin-bottom:18px;}
    .testi-text{font-size:13px;color:var(--gray-mid);line-height:1.85;margin-bottom:24px;font-style:italic;}
    .testi-auth{display:flex;align-items:center;gap:14px;}
    .testi-av{width:44px;height:44px;border-radius:50%;background:linear-gradient(135deg,var(--blue-mid),var(--blue-dark));display:flex;align-items:center;justify-content:center;font-family:var(--font-d);font-weight:700;font-size:17px;color:var(--white);flex-shrink:0;}
    .testi-name{font-size:13px;font-weight:600;color:var(--blue-dark);}
    .testi-role{font-size:11px;color:var(--gray-light);margin-top:2px;}

    /* CTA BAND */
    #cta-band{background:linear-gradient(135deg,var(--blue-dark) 0%,var(--blue-mid) 50%,var(--blue) 100%);background-size:200% auto;animation:bgSlide 8s ease infinite;position:relative;overflow:hidden;}
    #cta-band::before{content:'';position:absolute;inset:0;background-image:radial-gradient(circle at 2px 2px,rgba(255,255,255,.08) 1px,transparent 0);background-size:36px 36px;}
    .cta-orb{position:absolute;border-radius:50%;filter:blur(60px);pointer-events:none;}
    .co1{width:500px;height:500px;top:-200px;left:-100px;background:radial-gradient(circle,rgba(255,255,255,.1) 0%,transparent 65%);}
    .co2{width:400px;height:400px;bottom:-150px;right:-100px;background:radial-gradient(circle,rgba(255,255,255,.08) 0%,transparent 65%);animation:orbDrift 16s ease-in-out infinite 4s;}
    .cta-cnt{position:relative;z-index:2;text-align:center;max-width:700px;margin:0 auto;padding:100px 48px;}
    .cta-lbl{font-size:10px;font-weight:600;letter-spacing:4px;color:rgba(255,255,255,.7);text-transform:uppercase;margin-bottom:20px;}
    .cta-title{font-family:var(--font-d);font-size:clamp(36px,5vw,60px);font-weight:700;color:var(--white);line-height:1.1;margin-bottom:20px;}
    .cta-title em{font-style:italic;color:rgba(255,255,255,.8);}
    .cta-desc{font-size:15px;color:rgba(255,255,255,.65);margin-bottom:48px;line-height:1.7;}
    .cta-btns{display:flex;gap:16px;justify-content:center;flex-wrap:wrap;}
    .btn-wh{display:inline-flex;align-items:center;gap:10px;background:var(--white);color:var(--blue-dark);font-family:var(--font-b);font-weight:700;font-size:13px;padding:16px 34px;border-radius:12px;border:none;cursor:pointer;text-decoration:none;box-shadow:0 8px 28px rgba(0,0,0,.2);transition:transform .3s var(--bounce),box-shadow .3s;}
    .btn-wh:hover{transform:translateY(-3px);box-shadow:0 14px 40px rgba(0,0,0,.25);}
    .btn-wh svg{transition:transform .3s;}
    .btn-wh:hover svg{transform:translateX(4px);}
    .btn-wa{display:inline-flex;align-items:center;gap:10px;background:rgba(255,255,255,.12);color:var(--white);font-family:var(--font-b);font-weight:600;font-size:13px;padding:16px 32px;border-radius:12px;border:1.5px solid rgba(255,255,255,.3);text-decoration:none;transition:background .3s,border-color .3s,transform .3s var(--bounce);}
    .btn-wa:hover{background:rgba(255,255,255,.22);border-color:rgba(255,255,255,.6);transform:translateY(-3px);}

    /* FOOTER */
    footer{background:var(--blue-dark);}
    .foot-in{max-width:1280px;margin:0 auto;padding:80px 48px 40px;}
    .foot-grid{display:grid;grid-template-columns:2fr 1fr 1fr 1fr;gap:60px;margin-bottom:60px;}
    .foot-logo-row{display:flex;align-items:center;gap:12px;margin-bottom:20px; width:200px; height:150px; border-radius: 50%; background: #fff;}
    .foot-logo-ico{width:44px;height:44px;border-radius:10px;background:rgba(255,255,255,.15);display:flex;align-items:center;justify-content:center;font-family:var(--font-d);font-weight:700;color:var(--white);font-size:18px;}
    .foot-brand-name{font-family:var(--font-d);font-weight:700;font-size:17px;color:var(--white);letter-spacing:1px;}
    .foot-brand-sub{font-size:9px;letter-spacing:4px;color:rgba(255,255,255,.5);text-transform:uppercase;}
    .foot-desc{font-size:13px;color:rgba(255,255,255,.45);line-height:1.8;margin-bottom:24px;}
    .foot-phone{display:flex;align-items:center;gap:8px;color:rgba(255,255,255,.7);font-size:14px;font-weight:600;text-decoration:none;transition:color .3s;}
    .foot-phone:hover{color:var(--white);}
    .foot-col h4{font-size:10px;font-weight:700;letter-spacing:3px;color:rgba(255,255,255,.5);text-transform:uppercase;margin-bottom:20px;}
    .foot-col ul{list-style:none;display:flex;flex-direction:column;gap:10px;}
    .foot-col ul a{color:rgba(255,255,255,.4);text-decoration:none;font-size:13px;transition:color .3s,padding-left .3s;display:inline-block;}
    .foot-col ul a:hover{color:var(--white);padding-left:6px;}
    .foot-bot{border-top:1px solid rgba(255,255,255,.08);padding-top:28px;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:12px;}
    .foot-copy{font-size:12px;color:rgba(255,255,255,.25);}
    .foot-links{display:flex;gap:24px;}
    .foot-links a{font-size:12px;color:rgba(255,255,255,.25);text-decoration:none;transition:color .3s;}
    .foot-links a:hover{color:rgba(255,255,255,.7);}

    /* RESPONSIVE */
    @media(max-width:1100px){
    .h-split{grid-template-columns:1fr;}.h-card{display:none;}
    .svc-grid{grid-template-columns:1fr 1fr;}.tour-grid{grid-template-columns:1fr 1fr;}
    .cty-grid{grid-template-columns:repeat(4,1fr);}.foot-grid{grid-template-columns:1fr 1fr;gap:40px;}
    .why-grid{grid-template-columns:1fr;}.why-vis{display:none;}
    }
    @media(max-width:860px){
    .nav-links{display:none;}.hamburger{display:flex;}
    .cnt{padding:70px 24px;}#navbar{padding:0 24px;}
    .mobile-menu{padding:16px 24px 24px;}
    .stats-in{grid-template-columns:repeat(2,1fr);}
    .s-item:nth-child(2)::after{display:none;}
    .svc-grid{grid-template-columns:1fr;}.proc-grid{grid-template-columns:1fr;}
    .proc-grid::before{display:none;}
    .cty-grid{grid-template-columns:repeat(3,1fr);}.testi-grid{grid-template-columns:1fr;}
    .tour-grid{grid-template-columns:1fr;}.foot-grid{grid-template-columns:1fr;gap:32px;}
    .h-content{padding:120px 24px 80px;}.popup-body{padding:28px 24px 36px;}.fg{grid-template-columns:1fr;}
    }
    @media(max-width:540px){
    .cty-grid{grid-template-columns:repeat(2,1fr);}.h-btns{flex-direction:column;}.cta-btns{flex-direction:column;align-items:center;}
    }
</style>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>

    @if(session('success'))
        <script>
        document.addEventListener("DOMContentLoaded", function () {
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: "{{ session('success') }}",
                confirmButtonColor: '#2563eb'
            });
        });
        </script>
        @endif

<div class="particles" aria-hidden="true">
  <div class="particle"></div><div class="particle"></div><div class="particle"></div>
  <div class="particle"></div><div class="particle"></div><div class="particle"></div>
  <div class="particle"></div><div class="particle"></div><div class="particle"></div><div class="particle"></div>
</div>

<!-- POPUP -->
<div id="popup-overlay" role="dialog" aria-modal="true">
  <div class="popup-modal">
    <div class="popup-bar"></div>
    <button class="popup-close" onclick="closePopup()" aria-label="Close">✕</button>
    <div class="popup-body">
      {{-- <div class="popup-badge"><span class="badge-dot"></span> Free Consultation</div> --}}
      <h2 class="popup-title">Apply for Your <em>Visa</em></h2>
      <p class="popup-desc">Fill in your details — our expert agents will contact you within 24 hours to guide you through every step of the process.</p>
      <form 
      action="{{ route('visa.request') }}" 
      method="POST">
        @csrf
        <div class="fg">
          <div class="fl"><label class="fl-lbl">Full Name <span>*</span></label><input type="text" name="name" class="fi" placeholder="John Smith" required/></div>
          <div class="fl"><label class="fl-lbl">Email Address <span>*</span></label><input type="email" name="email" class="fi" placeholder="john@example.com" required/></div>
          <div class="fl"><label class="fl-lbl">Phone Number <span>*</span></label><input type="tel" name="phone" class="fi" placeholder="+44 7000 000000" required/></div>
          <div class="fl"><label class="fl-lbl">Nationality <span>*</span></label><input type="text" name="nationality" class="fi" placeholder="British" required/></div>
        </div>
        <div class="fg full">
          <div class="fl">
            <label class="fl-lbl">Destination <span>*</span></label>
            <select name="destination" class="fs" required>
              <option value="" disabled selected>Select destination…</option>
              <option>Australia</option><option>Canada</option><option>China</option>
              <option>Europe (Schengen)</option><option>Ireland</option><option>Morocco</option>
              <option>Turkey</option><option>United Arab Emirates</option>
              <option>United Kingdom</option><option>United States of America</option>
            </select>
          </div>
        </div>
        <div class="fg full" style="margin-bottom:0">
          <div class="fl"><label class="fl-lbl">Message</label><textarea name="message" class="ft" placeholder="Tell us about your travel plans or any questions…"></textarea></div>
        </div>
        <label class="skip-lbl">
          <input type="checkbox" name="skip_payment" id="skip_payment"/>
          <div class="cb"><svg viewBox="0 0 14 14"><polyline points="2,7 6,11 12,3"/></svg></div>
          <div><p class="skip-title">Skip Payment — Consult First</p><p class="skip-sub">Request a free consultation before any payment is required. All fees explained upfront.</p></div>
        </label>
        <button type="submit" class="sub-btn">Submit Visa Request →</button>
        <p class="popup-sec"><i class="fa fa-lock"></i> Your information is fully secure and never shared with third parties.</p>
      </form>
    </div>
  </div>
</div>

<!-- NAVBAR -->
<nav id="navbar">
  <div class="nav-inner">
    <a href="#" class="nav-logo">
      {{-- <div class="nav-logo-icon">S</div>
      <div><p class="nav-logo-title">SAM VISA</p><p class="nav-logo-sub">Services · London</p></div> --}}
      <img src="https://samvisauk.com/wp-content/uploads/2023/11/fulllogo_transparent_nobuffer-removebg-preview_200x100px.png" alt="">
    </a>
    <ul class="nav-links">
      <li><a href="#services">Services</a></li>
      <li><a href="#process">How It Works</a></li>
      <li><a href="#countries">Countries</a></li>
      <li><a href="#tours">Tours</a></li>
      <li><a href="#testimonials">Reviews</a></li>
      <li><a href="tel:+447879175585" class="nav-phone"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8z"/></svg>+44 7879 175585</a></li>
      <li><a href="#" onclick="openPopup();return false;" class="nav-cta">Apply Now</a></li>
    </ul>
    <button class="hamburger" onclick="toggleMobile()" aria-label="Menu"><span></span><span></span><span></span></button>
  </div>
  <div class="mobile-menu" id="mobile-menu">
    <a href="#services" onclick="toggleMobile()">Services</a>
    <a href="#process" onclick="toggleMobile()">How It Works</a>
    <a href="#countries" onclick="toggleMobile()">Countries</a>
    <a href="#tours" onclick="toggleMobile()">Tours</a>
    <a href="#testimonials" onclick="toggleMobile()">Reviews</a>
    <a href="tel:+447879175585">📞 +44 7879 175585</a>
    <button class="mob-cta" onclick="openPopup();toggleMobile();">Apply for Visa Now</button>
  </div>
</nav>

<!-- HERO -->
<section id="hero">
  <div class="h-orbs" aria-hidden="true"><div class="orb orb-1"></div><div class="orb orb-2"></div><div class="orb orb-3"></div></div>
  <div class="h-grid" aria-hidden="true"></div>
  <svg class="h-globe" viewBox="0 0 200 200" fill="none" aria-hidden="true">
    <circle cx="100" cy="100" r="92" stroke="#1a4aab" stroke-width=".7"/>
    <ellipse cx="100" cy="100" rx="52" ry="92" stroke="#1a4aab" stroke-width=".7"/>
    <ellipse cx="100" cy="100" rx="92" ry="42" stroke="#1a4aab" stroke-width=".7"/>
    <ellipse cx="100" cy="100" rx="92" ry="68" stroke="#1a4aab" stroke-width=".7"/>
    <line x1="8" y1="100" x2="192" y2="100" stroke="#1a4aab" stroke-width=".7"/>
    <line x1="100" y1="8" x2="100" y2="192" stroke="#1a4aab" stroke-width=".7"/>
  </svg>
  <div class="h-content">
    <div class="h-split">
      <div>
        <div class="h-badge"><span class="badge-dot"></span>London UK · Est. 2010</div>
        <h1 class="h-title">Your Visa,<em>Simplified.</em></h1>
        <p class="h-sub">Professional visa &amp; travel services from the heart of London. Trusted by over 5,000 clients — fast, reliable, and completely stress-free.</p>
        <div class="h-btns">
          <button class="btn-p" onclick="openPopup()"><span>Apply for Visa</span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></button>
          <a href="#process" class="btn-o"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>How It Works</a>
        </div>
        <div class="h-trust">
          <div style="display:flex;align-items:center;gap:14px;">
            <div class="t-avs"><div class="t-av ta1">J</div><div class="t-av ta2">M</div><div class="t-av ta3">S</div></div>
            <div class="t-info"><p>5,000+ Happy Clients</p><small>★★★★★ Trusted since 2010</small></div>
          </div>
          <div class="t-div"></div>
          <div class="t-ico"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>ICO Registered</div>
          <div class="t-ico"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>98% Success Rate</div>
        </div>
      </div>
      <div style="position:relative;">
        <div class="h-card">
          <p class="h-card-title">Popular Destinations</p>
          <div class="pill-grid">
            <div class="pill"><span class="pill-flag">🇬🇧</span><span class="pill-name">United Kingdom</span></div>
            <div class="pill"><span class="pill-flag">🇺🇸</span><span class="pill-name">United States</span></div>
            <div class="pill"><span class="pill-flag">🇦🇪</span><span class="pill-name">UAE / Dubai</span></div>
            <div class="pill"><span class="pill-flag">🇦🇺</span><span class="pill-name">Australia</span></div>
            <div class="pill"><span class="pill-flag">🇨🇦</span><span class="pill-name">Canada</span></div>
            <div class="pill"><span class="pill-flag">🇪🇺</span><span class="pill-name">Europe</span></div>
          </div>
          <button class="h-card-cta" onclick="openPopup()">Apply for Your Visa →</button>
        </div>
        <div class="ftag ft1"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ICO Registered</div>
        <div class="ftag ft2"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>24hr Response</div>
        <div class="ftag ft3"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>98% Success</div>
      </div>
    </div>
  </div>
  <div class="scroll-hint" aria-hidden="true"><div class="s-mouse"><div class="s-dot"></div></div><span>Scroll</span></div>
</section>

<!-- STATS -->
<div id="stats">
  <div class="stats-in">
    <div class="s-item reveal reveal-d1"><div class="s-num">5K+</div><div class="s-lbl">Visas Approved</div></div>
    <div class="s-item reveal reveal-d2"><div class="s-num">20+</div><div class="s-lbl">Years Experience</div></div>
    <div class="s-item reveal reveal-d3"><div class="s-num">50+</div><div class="s-lbl">Destinations</div></div>
    <div class="s-item reveal reveal-d4"><div class="s-num">98%</div><div class="s-lbl">Success Rate</div></div>
  </div>
</div>

<!-- SERVICES -->
<section id="services">
  <div class="cnt">
    <div class="sec-hc reveal"><span class="b-line c"></span><p class="sec-lbl">What We Offer</p><h2 class="sec-title">Expert Visa <em>Services</em></h2><p class="sec-sub">From document preparation to embassy submission, we manage every step of your visa journey with precision and care.</p></div>
    <div class="svc-grid">
      <div class="svc-card reveal reveal-d1">
        <div class="svc-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg></div>
        <h3 class="svc-title">Tourist Visas</h3>
        <p class="svc-desc">Fast-tracked tourist visa applications for all major destinations. We handle all the paperwork while you focus on planning your perfect trip.</p>
        <a href="#" class="svc-link" onclick="openPopup();return false;">Apply Now →</a>
      </div>
      <div class="svc-card feat reveal reveal-d2">
        <span class="svc-badge">Popular</span>
        <div class="svc-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg></div>
        <h3 class="svc-title">Global Consultation</h3>
        <p class="svc-desc">Personalised guidance on visa requirements, document checklists, and embassy appointments tailored to your specific case and nationality.</p>
        <a href="#" class="svc-link" onclick="openPopup();return false;">Book Consult →</a>
      </div>
      <div class="svc-card reveal reveal-d3">
        <div class="svc-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
        <h3 class="svc-title">Tour Packages</h3>
        <p class="svc-desc">Curated holiday packages to Turkey, Dubai, Majorca, Malta and beyond — with full visa assistance seamlessly included in every package.</p>
        <a href="#tours" class="svc-link">Explore Tours →</a>
      </div>
    </div>
  </div>
</section>

<!-- PROCESS -->
<section id="process">
  <div class="cnt">
    <div class="sec-hc reveal"><span class="b-line c"></span><p class="sec-lbl">Simple Process</p><h2 class="sec-title">Visa Approved in <em>3 Steps</em></h2><p class="sec-sub">We've streamlined the complex visa process into three effortless steps so you're never left guessing.</p></div>
    <div class="proc-grid">
      <div class="proc-step reveal from-left reveal-d1"><div class="step-circ"><span class="step-n">1</span></div><h3 class="step-title">Apply Online</h3><p class="step-desc">Fill out our quick visa request form. Tell us your destination and travel plans — takes under 3 minutes.</p></div>
      <div class="proc-step reveal reveal-d2"><div class="step-circ"><span class="step-n">2</span></div><h3 class="step-title">Expert Review</h3><p class="step-desc">Our specialist agents review your case and prepare a personalised document checklist tailored to you.</p></div>
      <div class="proc-step reveal from-right reveal-d3"><div class="step-circ"><span class="step-n">3</span></div><h3 class="step-title">Visa Approved</h3><p class="step-desc">We submit your application and keep you updated at every stage until your visa is stamped and ready.</p></div>
    </div>
    <div class="proc-cta reveal"><button class="btn-ghost" onclick="openPopup()"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>Start Your Application</button></div>
  </div>
</section>

<!-- COUNTRIES -->
<section id="countries">
  <div class="cnt">
    <div class="sec-hc reveal"><span class="b-line c"></span><p class="sec-lbl">Destinations</p><h2 class="sec-title">Countries We <em>Cover</em></h2><p class="sec-sub">Expert visa assistance for over 50 destinations, with deep specialist knowledge in these key markets.</p></div>
    <div class="cty-grid">
      <div class="cty-card reveal reveal-d1"><span class="cty-flag">🇬🇧</span><p class="cty-name">United Kingdom</p></div>
      <div class="cty-card reveal reveal-d2"><span class="cty-flag">🇺🇸</span><p class="cty-name">United States</p></div>
      <div class="cty-card reveal reveal-d3"><span class="cty-flag">🇨🇦</span><p class="cty-name">Canada</p></div>
      <div class="cty-card reveal reveal-d4"><span class="cty-flag">🇦🇺</span><p class="cty-name">Australia</p></div>
      <div class="cty-card reveal reveal-d5"><span class="cty-flag">🇪🇺</span><p class="cty-name">Europe</p></div>
      <div class="cty-card reveal reveal-d1"><span class="cty-flag">🇦🇪</span><p class="cty-name">UAE / Dubai</p></div>
      <div class="cty-card reveal reveal-d2"><span class="cty-flag">🇹🇷</span><p class="cty-name">Turkey</p></div>
      <div class="cty-card reveal reveal-d3"><span class="cty-flag">🇮🇪</span><p class="cty-name">Ireland</p></div>
      <div class="cty-card reveal reveal-d4"><span class="cty-flag">🇨🇳</span><p class="cty-name">China</p></div>
      <div class="cty-card reveal reveal-d5"><span class="cty-flag">🇲🇦</span><p class="cty-name">Morocco</p></div>
    </div>
  </div>
</section>

<!-- WHY US -->
<section id="why">
  <div class="cnt">
    <div class="why-grid">
      <div>
        <span class="b-line reveal"></span>
        <p class="sec-lbl reveal">Why Choose Us</p>
        <h2 class="sec-title reveal">Visa Services From <em>Expert Agents</em></h2>
        <p class="sec-sub reveal">Registered with the ICO, we've successfully assisted thousands of applications for personal visitors, travel agents, and holiday companies since 2010.</p>
        <div class="why-feats">
          <div class="why-feat reveal reveal-d1"><div class="why-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--blue)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg></div><div><p class="why-ft">Complex Visa Paperwork</p><p class="why-fd">We facilitate all complex paperwork to secure your visit visa for sightseeing or visiting family and friends abroad.</p></div></div>
          <div class="why-feat reveal reveal-d2"><div class="why-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--blue)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div><div><p class="why-ft">Document Support</p><p class="why-fd">We guide you through every document required by the embassy or visa centre of your destination country.</p></div></div>
          <div class="why-feat reveal reveal-d3"><div class="why-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--blue)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.67A2 2 0 012 .82h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L6.09 8.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg></div><div><p class="why-ft">24/7 WhatsApp Support</p><p class="why-fd">Our team is available anytime on WhatsApp to answer queries and provide real-time updates on your application.</p></div></div>
        </div>
      </div>
      <div class="why-vis reveal from-right">
        <div class="w-ring wr1"></div><div class="w-ring wr2"></div><div class="w-ring wr3"></div>
        <div class="w-center"><span>20+</span><span>Years</span></div>
        <div class="w-float wf1"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ICO Registered</div>
        <div class="w-float wf2"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>5,000+ Approved</div>
        <div class="w-float wf3"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>24hr Response</div>
      </div>
    </div>
  </div>
</section>

<!-- TOURS -->
<section id="tours">
  <div class="cnt">
    <div class="sec-hc reveal"><span class="b-line c"></span><p class="sec-lbl">Featured Tours</p><h2 class="sec-title">Our <em>Holiday Packages</em></h2><p class="sec-sub">Fully curated travel experiences with visa assistance included. Simply pack your bags and let us handle the rest.</p></div>
    <div class="tour-grid">
      <div class="tour-card reveal reveal-d1"><div class="tour-img ti1">🕌<span class="tour-badge">Featured</span></div><div class="tour-body"><p class="tour-loc">Turkey · Istanbul</p><h3 class="tour-name">Explore Turkey — 5N / 6D</h3><div class="tour-meta"><span class="tour-dur">✈ 6 Days · 5 Nights</span><span class="tour-price">£350</span></div></div></div>
      <div class="tour-card reveal reveal-d2"><div class="tour-img ti2">🏙️<span class="tour-badge">Featured</span></div><div class="tour-body"><p class="tour-loc">UAE · Dubai</p><h3 class="tour-name">Discover Dubai Delights — 5N / 6D</h3><div class="tour-meta"><span class="tour-dur">✈ 6 Days · 5 Nights</span><span class="tour-price">£599</span></div></div></div>
      <div class="tour-card reveal reveal-d3"><div class="tour-img ti3">🏖️<span class="tour-badge">Featured</span></div><div class="tour-body"><p class="tour-loc">Spain · Mallorca</p><h3 class="tour-name">Majestic Majorca — 5N / 6D</h3><div class="tour-meta"><span class="tour-dur">✈ 6 Days · 5 Nights</span><span class="tour-price">£249</span></div></div></div>
      <div class="tour-card reveal reveal-d4"><div class="tour-img ti4">⛵<span class="tour-badge">Featured</span></div><div class="tour-body"><p class="tour-loc">Europe · Malta</p><h3 class="tour-name">Mystical Malta — 5N / 6D</h3><div class="tour-meta"><span class="tour-dur">✈ 6 Days · 5 Nights</span><span class="tour-price">£249</span></div></div></div>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section id="testimonials">
  <div class="cnt">
    <div class="sec-hc reveal"><span class="b-line c"></span><p class="sec-lbl">Real Reviews</p><h2 class="sec-title">Trusted by <em>Thousands</em></h2><p class="sec-sub">Don't just take our word for it — hear from our thousands of satisfied clients who've travelled the world with us.</p></div>
    <div class="testi-grid">
      <div class="testi-card reveal reveal-d1"><div class="testi-stars">★★★★★</div><p class="testi-text">"Tiny ticket office but the most reliable ticket agent operating since 9 years in Brixton, UK. Absolutely brilliant and professional."</p><div class="testi-auth"><div class="testi-av">K</div><div><p class="testi-name">Kimberley Appleby</p><p class="testi-role">Verified Client</p></div></div></div>
      <div class="testi-card reveal reveal-d2"><div class="testi-stars">★★★★★</div><p class="testi-text">"Thank you for sorting my flight back from Africa. Covid cancelled everything and you managed to bring me back safely. Thank you again."</p><div class="testi-auth"><div class="testi-av">B</div><div><p class="testi-name">B. Chucks</p><p class="testi-role">Verified Client</p></div></div></div>
      <div class="testi-card reveal reveal-d3"><div class="testi-stars">★★★★★</div><p class="testi-text">"I received my Cyprus visa today. Thank you for your outstanding service and continuous support throughout the entire process."</p><div class="testi-auth"><div class="testi-av">C</div><div><p class="testi-name">Cirile Gbeke</p><p class="testi-role">Verified Client</p></div></div></div>
      <div class="testi-card reveal reveal-d1"><div class="testi-stars">★★★★★</div><p class="testi-text">"We arrived safely and visited amazing places. Going on a cruise this evening. Best travel agency we've ever used!"</p><div class="testi-auth"><div class="testi-av">A</div><div><p class="testi-name">Augustine</p><p class="testi-role">Verified Client</p></div></div></div>
      <div class="testi-card reveal reveal-d2"><div class="testi-stars">★★★★★</div><p class="testi-text">"Best agency! Professional, fast, and reliable. They guided us through every step without any stress. Highly recommend."</p><div class="testi-auth"><div class="testi-av">B</div><div><p class="testi-name">Beatrice Nsona</p><p class="testi-role">Verified Client</p></div></div></div>
      <div class="testi-card reveal reveal-d3"><div class="testi-stars">★★★★★</div><p class="testi-text">"Applied for Schengen visa and the team handled everything flawlessly. Got approved in under two weeks. Brilliant service."</p><div class="testi-auth"><div class="testi-av">S</div><div><p class="testi-name">Sarah Mitchell</p><p class="testi-role">Verified Client</p></div></div></div>
    </div>
  </div>
</section>

<!-- CTA BAND -->
<section id="cta-band">
  <div class="cta-orb co1"></div><div class="cta-orb co2"></div>
  <div class="cta-cnt">
    <p class="cta-lbl reveal">Get Started Today</p>
    <h2 class="cta-title reveal">Ready to <em>Travel the World?</em></h2>
    <p class="cta-desc reveal">Let our expert team handle your visa application. Fast, reliable, and trusted by thousands of travellers across the UK and beyond.</p>
    <div class="cta-btns reveal">
      <button class="btn-wh" onclick="openPopup()">Apply for Visa Now<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></button>
      <a href="https://wa.me/+4477879175585" target="_blank" rel="noopener" class="btn-wa"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>WhatsApp Us</a>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="foot-in">
    <div class="foot-grid">
      <div class="reveal from-left">
        <div class="foot-logo-row">
          <img src="https://samvisauk.com/wp-content/uploads/2023/11/fulllogo_transparent_nobuffer-removebg-preview_200x100px.png" alt="SAM VISA SERVICES">
        </div>
        <p class="foot-desc">A professional travel service provider based in London, offering visa and travel services since 2010. Registered with the ICO.</p>
        <a href="tel:+447879175585" class="foot-phone"><svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8z"/></svg>+44 77879 175585</a>
      </div>
      <div class="foot-col reveal reveal-d1"><h4>Visas</h4><ul><li><a href="#">Tourist Visa</a></li><li><a href="#">Business Visa</a></li><li><a href="#">Family Visit</a></li><li><a href="#">Student Visa</a></li><li><a href="#">Transit Visa</a></li></ul></div>
      <div class="foot-col reveal reveal-d2"><h4>Countries</h4><ul><li><a href="#">United Kingdom</a></li><li><a href="#">United States</a></li><li><a href="#">Canada</a></li><li><a href="#">Australia</a></li><li><a href="#">UAE / Dubai</a></li><li><a href="#">Turkey</a></li></ul></div>
      <div class="foot-col reveal reveal-d3"><h4>Quick Links</h4><ul><li><a href="#">About Us</a></li><li><a href="#">Our Tours</a></li><li><a href="#">Contact</a></li><li><a href="#">Privacy Policy</a></li><li><a href="#">Terms &amp; Conditions</a></li></ul></div>
    </div>
    <div class="foot-bot">
      <p class="foot-copy">© {{ date('Y') }} SAM Visa Services. All rights reserved. Designed with ♥ in London.</p>
      <div class="foot-links"><a href="#">Privacy Policy</a><a href="#">Terms &amp; Conditions</a><a href="#">ICO Registration</a></div>
    </div>
  </div>
</footer>

<script>
function openPopup(){document.getElementById('popup-overlay').classList.add('active');document.body.style.overflow='hidden';}
function closePopup(){document.getElementById('popup-overlay').classList.remove('active');document.body.style.overflow='';}
document.getElementById('popup-overlay').addEventListener('click',function(e){if(e.target===this)closePopup();});
document.addEventListener('keydown',e=>{if(e.key==='Escape')closePopup();});
window.addEventListener('DOMContentLoaded',()=>{setTimeout(openPopup,900);});
window.addEventListener('scroll',()=>{document.getElementById('navbar').classList.toggle('scrolled',window.scrollY>60);},{passive:true});
function toggleMobile(){document.getElementById('mobile-menu').classList.toggle('open');}
const obs=new IntersectionObserver(entries=>{entries.forEach(e=>{if(e.isIntersecting){e.target.classList.add('visible');obs.unobserve(e.target);}});},{threshold:.12,rootMargin:'0px 0px -40px 0px'});
document.querySelectorAll('.reveal').forEach(el=>obs.observe(el));
document.querySelectorAll('.svc-grid,.cty-grid,.testi-grid,.tour-grid,.proc-grid').forEach(g=>{g.querySelectorAll(':scope>*:not(.reveal)').forEach((c,i)=>{c.classList.add('reveal');c.style.transitionDelay=(i*.1)+'s';obs.observe(c);});});
const so=new IntersectionObserver(en=>{en.forEach(e=>{if(!e.isIntersecting)return;const t=[{v:5,s:'K+'},{v:20,s:'+'},{v:50,s:'+'},{v:98,s:'%'}];e.target.querySelectorAll('.s-num').forEach((el,i)=>{const{v,s}=t[i];const st=performance.now();(function tick(now){const p=Math.min((now-st)/1800,1);const ease=1-Math.pow(1-p,3);el.textContent=Math.floor(v*ease)+(p>=1?s:'');if(p<1)requestAnimationFrame(tick);else el.textContent=v+s;})(st);});so.unobserve(e.target);});},{threshold:.5});
const se=document.getElementById('stats');if(se)so.observe(se);
const rs=document.createElement('style');rs.textContent='@keyframes ripple{to{transform:scale(3);opacity:0;}}';document.head.appendChild(rs);
document.querySelectorAll('.btn-p,.sub-btn,.btn-wh,.h-card-cta').forEach(btn=>{btn.addEventListener('click',function(e){const r=document.createElement('span');const rect=this.getBoundingClientRect();const sz=Math.max(rect.width,rect.height);r.style.cssText=`position:absolute;width:${sz}px;height:${sz}px;left:${e.clientX-rect.left-sz/2}px;top:${e.clientY-rect.top-sz/2}px;background:rgba(255,255,255,.25);border-radius:50%;transform:scale(0);animation:ripple .6s ease-out forwards;pointer-events:none;`;this.style.position='relative';this.appendChild(r);setTimeout(()=>r.remove(),700);});});
document.querySelectorAll('.tour-card,.svc-card,.testi-card,.cty-card').forEach(c=>{c.addEventListener('mousemove',function(e){const r=this.getBoundingClientRect();const x=((e.clientX-r.left)/r.width-.5)*7;const y=((e.clientY-r.top)/r.height-.5)*-7;this.style.transform=`translateY(-8px) perspective(600px) rotateX(${y}deg) rotateY(${x}deg)`;});c.addEventListener('mouseleave',function(){this.style.transform='';this.style.transition='transform .5s ease';});});
</script>
</body>
</html>