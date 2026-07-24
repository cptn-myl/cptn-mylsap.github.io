<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slommy &amp; Cappy — Cat Life</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Inter:wght@400;500&display=swap');

        :root {
            --terracotta: #c56d4a;
            --olive: #5a6b4e;
            --mustard: #d4a017;
            --teal: #2a9d8f;
            --cream: #f4e9d8;
            --dark: #2f2f2f;
        }

        * { margin:0; padding:0; box-sizing:border-box; }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--cream);
            color: var(--dark);
            line-height: 1.7;
        }

        header {
            background: var(--dark);
            color: white;
            padding: 1.8rem 5%;
            text-align: center;
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 2.9rem;
            color: var(--mustard);
        }

        .tagline {
            letter-spacing: 2px;
            opacity: 0.9;
            font-size: 1.05rem;
        }

        .hero {
            background: linear-gradient(rgba(0,0,0,0.45), rgba(0,0,0,0.45)), 
                        url('https://picsum.photos/id/1015/2000/1200') center/cover no-repeat;
            min-height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .hero-content h1 {
            font-family: 'Playfair Display', serif;
            font-size: 3.8rem;
            margin-bottom: 0.8rem;
        }

        .container {
            max-width: 1100px;
            margin: 3rem auto;
            padding: 0 5%;
        }

        .posts {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .post-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .post-card:hover { transform: translateY(-10px); }

        .post-img {
            width: 100%;
            height: 260px;
            object-fit: cover;
        }

        .post-content { padding: 1.6rem; }

        .post-content h2 {
            font-family: 'Playfair Display', serif;
            color: var(--terracotta);
        }

        .meta { 
            color: var(--olive); 
            font-size: 0.95rem; 
            margin: 0.8rem 0; 
        }

        .about {
            background: var(--dark);
            color: white;
            padding: 4rem 5%;
            text-align: center;
            margin: 4rem 0;
        }

        footer {
            background: var(--dark);
            color: #aaa;
            text-align: center;
            padding: 3rem 5%;
        }

        /* Mobile Optimizations */
        @media (max-width: 768px) {
            .hero {
                min-height: 100vh;
            }
            .hero-content h1 {
                font-size: 2.8rem;
            }
            .logo {
                font-size: 2.4rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <div>
            <div class="logo">Slommy &amp; Cappy</div>
            <p class="tagline">Piece of Shit Cat Life • EST. 2020</p>
        </div>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Captain</h1>
            <p>Living his best cat life</p>
        </div>
    </section>

    <div class="container">
        <h2 style="text-align:center; font-family:'Playfair Display',serif; font-size:2.6rem; margin-bottom:3rem; color:var(--terracotta);">Latest Purr-spectives</h2>
        
        <div class="posts">
            <div class="post-card">
                <img src="/attachments/IMG_0572.HEIC" alt="Captain lounging" class="post-img">
                <div class="post-content">
                    <div class="meta">July 2026 • Lounge Life</div>
                    <h2>Chair Kings</h2>
                    <p>Nothing beats claiming the best seat in the house.</p>
                </div>
            </div>

            <div class="post-card">
                <img src="/attachments/IMG_0593.HEIC" alt="Captain on lap" class="post-img">
                <div class="post-content">
                    <div class="meta">July 2026 • Night Vibes</div>
                    <h2>Pink LED Supervisor</h2>
                    <p>Overseeing all late-night activities from the lap throne.</p>
                </div>
            </div>

            <div class="post-card">
                <img src="/attachments/IMG_0600.HEIC" alt="Captain sleeping" class="post-img">
                <div class="post-content">
                    <div class="meta">July 2026 • Recovery Mode</div>
                    <h2>Professional Napper</h2>
                    <p>Expert level sleeping achieved.</p>
                </div>
            </div>

            <div class="post-card">
                <img src="/attachments/IMG_3262.heic" alt="Captain in box" class="post-img">
                <div class="post-content">
                    <div class="meta">July 2026 • Architecture</div>
                    <h2>Cardboard Box Connoisseur</h2>
                    <p>Only the finest Amazon packaging will do.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="about">
        <h2 style="font-family:'Playfair Display',serif; font-size:2.8rem; margin-bottom:1rem;">Meet Captain</h2>
        <p style="max-width:700px; margin:0 auto; font-size:1.25rem;">
            A sophisticated floofy gentleman with impeccable taste in furniture, sunlight, and cardboard architecture. 
            Living his best life on the South Side.
        </p>
    </div>

    <footer>
        <p>&copy; 2026 Cute &amp; Floofy</p>
        <p style="margin-top:1rem; opacity:0.7;">Made with piss n' love (and cat puke)</p>
    </footer>
</body>
</html>
