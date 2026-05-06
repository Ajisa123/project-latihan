<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajisa PyLog | About Project</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=JetBrains+Mono:wght@500&display=swap" rel="stylesheet">

    <style>
        :root {
            --py-blue: #3776ab;
            --py-yellow: #ffd43b;
            --bg-dark: #0f0f0f;
            --card-bg: #1e1e1e;
            --terminal-red: #ff5f56;
            --terminal-yellow: #ffbd2e;
            --terminal-green: #27c93f;
        }

        body { 
            background-color: var(--bg-dark); 
            color: #e0e0e0; 
            font-family: 'Inter', sans-serif;
        }

        .jumbotron-about {
            background: linear-gradient(135deg, #1e1e1e 0%, #252526 100%);
            border-bottom: 2px solid var(--py-blue);
            position: relative;
            overflow: hidden;
        }

        /* Dekorasi Terminal di Jumbotron */
        .jumbotron-about::after {
            content: "/>";
            position: absolute;
            right: 5%;
            bottom: -20px;
            font-size: 15rem;
            color: rgba(255, 255, 255, 0.03);
            font-family: 'JetBrains Mono', monospace;
        }

        .code-font { font-family: 'JetBrains Mono', monospace; }

        .card {
            background-color: var(--card-bg);
            border: 1px solid #333;
            border-radius: 12px;
            margin-bottom: 25px;
            transition: all 0.3s ease;
        }

        .card:hover {
            border-color: var(--py-blue);
            transform: scale(1.01);
        }

        /* Dekorasi Titik Terminal */
        .terminal-dots {
            display: flex;
            gap: 6px;
            margin-bottom: 15px;
        }
        .dot { width: 12px; height: 12px; border-radius: 50%; }
        .red { background: var(--terminal-red); }
        .yellow { background: var(--terminal-yellow); }
        .green { background: var(--terminal-green); }

        .h5 { 
            color: var(--py-yellow); 
            font-family: 'JetBrains Mono', monospace;
            font-weight: 700;
        }

        .status-badge {
            background: rgba(39, 201, 63, 0.1);
            color: var(--terminal-green);
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            border: 1px solid var(--terminal-green);
        }

        p { line-height: 1.8; color: #b0b0b0; font-size: 1.05rem; }

        footer { font-family: 'JetBrains Mono', monospace; font-size: 0.85rem; }
        
        .text-info-custom { color: #4ec9b0; }
    </style>
</head>

<body>

    <?= $this->include('layouts/navbar'); ?>

    <div class="p-5 mb-4 jumbotron-about rounded-0">
      <div class="container py-5">
        <div class="d-flex align-items-center gap-3 mb-2">
            <span class="status-badge code-font">● System Online</span>
        </div>
        <h1 class="display-5 fw-bold code-font text-white">project.<span class="text-info-custom">initialize</span>()</h1>
        <p class="col-md-8 fs-5" style="color: #6a9955;"># Mengenal struktur dan teknologi di balik layar Ajisa PyLog.</p>
      </div>
    </div>

    <div class="container">
        <div class="row">
            
            <!-- Card 1: Identitas -->
            <div class="col-md-12 my-2 card shadow-lg">
                <div class="card-body p-4">
                    <div class="terminal-dots">
                        <div class="dot red"></div>
                        <div class="dot yellow"></div>
                        <div class="dot green"></div>
                    </div>
                    <h5 class="h5">def <span class="text-info-custom">overview</span>():</h5>
                    <p class="mt-3">
                        <b>Ajisa PyLog</b> adalah sebuah <i>technical blog</i> yang dirancang sebagai pusat dokumentasi digital. Platform ini berfokus pada eksplorasi ekosistem Python, pengembangan sistem informasi, dan implementasi kecerdasan buatan. Kami percaya bahwa setiap baris kode memiliki cerita, dan setiap cerita layak untuk dibagikan secara mendalam.
                    </p>
                </div>
            </div>

            <!-- Card 2: Stack -->
            <div class="col-md-12 my-2 card shadow-lg">
                <div class="card-body p-4">
                    <div class="terminal-dots">
                        <div class="dot red"></div>
                        <div class="dot yellow"></div>
                        <div class="dot green"></div>
                    </div>
                    <h5 class="h5">def <span class="text-info-custom">tech_stack</span>():</h5>
                    <p class="mt-3">
                        Dibangun di atas fondasi yang kokoh menggunakan <b>CodeIgniter 4</b>, platform ini memanfaatkan arsitektur MVC untuk memastikan kode yang bersih dan terstruktur. Kami menggunakan database <b>MySQL/Postgres</b> untuk manajemen konten yang dinamis, serta mengintegrasikan elemen visual yang terinspirasi dari editor kode profesional agar nyaman di mata para pengembang.
                    </p>
                </div>
            </div>

            <!-- Card 3: Visi -->
            <div class="col-md-12 my-2 card shadow-lg">
                <div class="card-body p-4">
                    <div class="terminal-dots">
                        <div class="dot red"></div>
                        <div class="dot yellow"></div>
                        <div class="dot green"></div>
                    </div>
                    <h5 class="h5">def <span class="text-info-custom">vision_mission</span>():</h5>
                    <p class="mt-3">
                        Visi utama kami adalah menjadi perpustakaan digital bagi para pengembang sistem informasi di lingkungan akademik maupun profesional. Dengan menghadirkan studi kasus nyata, arsitektur microservices, dan tutorial pemrograman yang komprehensif, kami bertujuan untuk menjembatani kesenjangan antara teori kampus dan kebutuhan nyata di industri teknologi informasi.
                    </p>
                </div>
            </div>
            
        </div>
    </div>

    <div class="container py-4 text-center">
        <footer class="pt-3 mt-4 text-muted border-top">
            <div class="container">
                <span style="color: #569cd6;">return</span> <span style="color: #ce9178;">"&copy; <?= Date('Y') ?> Ajisa123 | Dev Mode"</span>
            </div>
        </footer>
    </div>

    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>
