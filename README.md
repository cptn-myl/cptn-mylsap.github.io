
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Whiskers &amp; Walnut — Mid-Century Cat Life</title>
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
            padding: 2rem 5%;
            text-align: center;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 3.5rem;
            color: var(--mustard);
            margin-bottom: 0.5rem;
        }

        .tagline {
            letter-spacing: 3px;
            opacity: 0.9;
            font-size: 1.1rem;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 1.5rem;
            font-weight: 500;
        }

        nav a:hover { color: var(--mustard); }

        .hero {
            background: linear-gradient(rgba(0,0,0,0.45), rgba(0,0,0,0.45)), url('https://picsum.photos/id/1015/2000/800') center/cover no-repeat;
            height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .hero-content h1 {
            font-family: 'Playfair Display', serif;
            font-size: 4.2rem;
            margin-bottom: 1rem;
        }

        .container {
            max-width: 1100px;
            margin: 4rem auto;
            padding: 0 5%;
        }

        .posts {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2.5rem;
        }

        .post-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .post-card:hover { transform: translateY(-12px); }

        .post-img {
            height: 260px;
            background-size: cover;
            background-position: center;
        }

        .post-content { padding: 1.8rem; }

        .post-content h2 {
            font-family: 'Playfair Display', serif;
            color: var(--terracotta);
            margin-bottom: 0.8rem;
        }

        .meta { 
            color: var(--olive); 
            font-size: 0.95rem; 
            margin-bottom: 1rem; 
        }

        .read-more { 
            color: var(--teal); 
            text-decoration: none; 
            font-weight: 500; 
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
    </style>
</head>
<body>
    <header>
        <div class="logo">Cardboard &amp; Trash</div>
        <p class="tagline">Piece of shit Cat Life • EST. 2020</p>
        <nav>
            <a href="#">Home</a>
            
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Captain</h1>
            <p>Living his best cat life</p>
        </div>
    </section>

    <div class="container">
        <h2 style="text-align:center; font-family:'Playfair Display',serif; font-size:2.8rem; margin-bottom:3rem; color:var(--terracotta);">Latest Purr-spectives</h2>
        
        <div class="posts">
            <div class="post-card">
                <div class="post-img" style="background-image:url('https://picsum.photos/id/1015/800/600')"></div>
                <div class="post-content">
                    <div class="meta">July 20, 2026 • Lifestyle</div>
                    <h2>Sunbeams &amp; Eames Chairs</h2>
                    <p>The perfect afternoon involves golden hour sunbeams, a vintage Eames lounge chair, and strategic napping.</p>
                    <a href="#" class="read-more">Read more →</a>
                </div>
            </div>

            <div class="post-card">
                <div class="post-img" style="background-image:url('https://picsum.photos/id/201/800/600')"></div>
                <div class="post-content">
                    <div class="meta">July 18, 2026 • Adventures</div>
                    <h2>Exploring the Atomic Age</h2>
                    <p>Today I discovered a mysterious cardboard box. It had excellent proportions. 10/10 would sit in again.</p>
                    <a href="#" class="read-more">Read more →</a>
                </div>
            </div>

            <div class="post-card">
                <div class="post-img" style="background-image:url('https://picsum.photos/id/237/800/600')"></div>
                <div class="post-content">
                    <div class="meta">July 15, 2026 • Food &amp; Drink</div>
                    <h2>Whisker-Approved Treats</h2>
                    <p>A review of the finest salmon pâté served in a vintage Pyrex dish. The presentation was impeccable.</p>
                    <a href="#" class="read-more">Read more →</a>
                </div>
            </div>
        </div>
    </div>

    <div class="about">
        <h2 style="font-family:'Playfair Display',serif; font-size:2.8rem; margin-bottom:1rem;">Meet Milo</h2>
        <p style="max-width:700px; margin:0 auto; font-size:1.25rem;">
            A sophisticated floofy gentleman with impeccable taste in furniture, sunlight, and cardboard architecture. 
            Living his best life on the South Side.
        </p>
    </div>

    <footer>
        <p>&copy; 2026 Whiskers &amp; Walnut • Cat Blog</p>
        <p style="margin-top:1rem; opacity:0.7;">Made with piss n' love (and cat puke)</p>
    </footer>
</body>
</html>
