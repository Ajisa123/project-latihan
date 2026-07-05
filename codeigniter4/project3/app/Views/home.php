<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajisa PyLog | Home</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=JetBrains+Mono:wght@500&display=swap" rel="stylesheet">

    <style>
        :root {
            --py-blue: #3776ab;
            --py-yellow: #ffd43b;
            --bg-dark: #121212;
            --card-bg: #1e1e1e;
        }

        body { 
            background-color: var(--bg-dark); 
            color: #e0e0e0; 
            font-family: 'Inter', sans-serif;
        }

        .jumbotron-python {
            background: linear-gradient(135deg, #1e1e1e 0%, #252526 100%);
            border-bottom: 2px solid var(--py-blue);
        }

        .code-font { font-family: 'JetBrains Mono', monospace; }

        .card {
            background-color: var(--card-bg);
            border: 1px solid #333;
            border-radius: 12px;
            transition: 0.3s;
        }

        .card:hover {
            border-color: var(--py-yellow);
            transform: translateY(-5px);
        }

        .card-title { color: var(--py-blue); font-weight: 700; }

        .text-comment { color: #6a9955; font-style: italic; }

        /* Tombol Selengkapnya Tetap di Sini */
        .btn-selengkapnya {
            color: var(--py-yellow);
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            border: 1px solid var(--py-yellow);
            padding: 5px 15px;
            border-radius: 20px;
            transition: 0.3s;
            display: inline-block;
        }

        .btn-selengkapnya:hover {
            background-color: var(--py-yellow);
            color: var(--bg-dark);
        }
        
        footer { font-family: 'JetBrains Mono', monospace; font-size: 0.85rem; }
    </style>
</head>

<body>

    <?= $this->include('layouts/navbar'); ?>

    <div class="p-5 mb-4 jumbotron-python rounded-0">
      <div class="container py-5">
        <h1 class="display-5 fw-bold"><span class="code-font text-warning">print</span>("<span class="text-info"> Welcome to My Blog</span>")</h1>
        <p class="col-md-8 fs-5 text-comment"># Menjelajahi dunia pemrograman Python, AI, dan Pengembangan Sistem.</p>
      </div>
    </div>

    <div class="container">
        <div class="row">
            
            <!-- Mulai Loop Berita -->
            <div class="col-md-12 my-3 card shadow-sm p-4">
                <div class="card-body">
                    <h5 class="card-title h4 code-font">Sejarah Python: Dari Hobi Menjadi Bahasa Raksasa Dunia</h5>
                    <p class="mt-3">
                        Python diciptakan oleh Guido van Rossum dan pertama kali dirilis pada tahun 1991. Terinspirasi dari bahasa pemrograman ABC, Guido ingin menciptakan bahasa yang elegan, mudah dibaca...
                    </p>
                    <div class="mt-3">
                        <!-- LINK TERHUBUNG KE DETAIL -->
                        <a href="<?= base_url('post/codeigniter-starter') ?>" class="btn-selengkapnya">Selengkapnya &rarr;</a>
                    </div>
                </div>
            </div>

            <div class="col-md-12 my-3 card shadow-sm p-4">
                <div class="card-body">
                    <h5 class="card-title h4 code-font">Mengenal Ekosistem Framework Python yang Powerfull</h5>
                    <p class="mt-3">
                        Kekuatan utama Python terletak pada ekosistem framework-nya yang sangat beragam. Bagi pengembang yang menginginkan fitur lengkap, Django menjadi pilihan utama...
                    </p>
                    <div class="mt-3">
                        <!-- LINK TERHUBUNG KE DETAIL -->
                        <a href="<?= base_url('post/hello-world') ?>" class="btn-selengkapnya">Selengkapnya &rarr;</a>
                    </div>
                </div>
            </div>
            <!-- Akhir Loop -->
            
        </div>
    </div>

    <div class="container py-4 text-center">
        <footer class="pt-3 mt-4 text-muted border-top">
            <div class="container">
                <span style="color: #569cd6;">return</span> <span style="color: #ce9178;">"&copy; <?= Date('Y') ?> Ajisa123"</span>
            </div>
        </footer>
    </div>

    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>
