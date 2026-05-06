<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajisa PyLog | Python Core FAQ</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=JetBrains+Mono:wght@500&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg-dark: #0a0a0a;
            --card-bg: #161616;
            --py-blue: #3776ab;
            --py-yellow: #ffd43b;
            --text-comment: #6a9955;
            --terminal-green: #27c93f;
        }

        body { 
            background-color: var(--bg-dark); 
            color: #e0e0e0; 
            font-family: 'Inter', sans-serif;
            padding-top: 60px;
        }

        .code-font { font-family: 'JetBrains Mono', monospace; }

        .faq-header {
            background: linear-gradient(135deg, #1e1e1e 0%, #121212 100%);
            border-bottom: 2px solid var(--py-blue);
            padding: 70px 0;
            margin-bottom: 50px;
        }

        /* Accordion Style */
        .accordion-item {
            background-color: var(--card-bg);
            border: 1px solid #333;
            margin-bottom: 15px;
            border-radius: 12px !important;
            overflow: hidden;
        }

        .accordion-button {
            background-color: var(--card-bg);
            color: #fff;
            font-family: 'JetBrains Mono', monospace;
            padding: 20px;
        }

        .accordion-button:not(.collapsed) {
            background-color: #1a1a1a;
            color: var(--py-yellow);
            box-shadow: none;
        }

        .accordion-button::before {
            content: "in [1]: ";
            color: var(--py-blue);
            margin-right: 10px;
            font-size: 0.8rem;
        }

        .accordion-body {
            background-color: #1a1a1a;
            color: #b0b0b0;
            border-top: 1px solid #333;
            padding: 25px;
            line-height: 1.8;
        }

        .py-keyword { color: #c586c0; font-weight: bold; }
        .py-func { color: #dcdcaa; }
        .py-str { color: #ce9178; }
        
        footer { font-family: 'JetBrains Mono', monospace; }
    </style>
</head>

<body>

    <?= $this->include('layouts/navbar'); ?>

    <div class="faq-header">
      <div class="container text-center">
        <h1 class="display-5 fw-bold code-font">
            python --version <span class="text-secondary">3.12.x</span>
        </h1>
        <p class="code-font text-comment mt-3"># Docstrings: Frequent implementation questions and answers.</p>
      </div>
    </div>

    <div class="container pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                
                <div class="accordion" id="pythonFaq">
                    
                    <!-- Q1: Mengapa Python? -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#q1">
                                Mengapa Python menjadi basis utama di Ajisa PyLog?
                            </button>
                        </h2>
                        <div id="q1" class="accordion-collapse collapse show" data-bs-parent="#pythonFaq">
                            <div class="accordion-body">
                                <span class="py-keyword">import</span> logic <br><br>
                                Python dipilih karena sintaksisnya yang bersih (Pythonic) dan ekosistem library yang sangat luas. Di sini, kami menggunakan Python tidak hanya untuk skrip sederhana, tetapi sebagai alat utama dalam <span class="text-white">Data Analysis</span>, <span class="text-white">Artificial Intelligence</span>, dan pembangunan <span class="text-white">Robust Backend Systems</span>.
                            </div>
                        </div>
                    </div>

                    <!-- Q2: Flask vs FastAPI -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q2">
                                Framework web Python mana yang direkomendasikan di sini?
                            </button>
                        </h2>
                        <div id="q2" class="accordion-collapse collapse" data-bs-parent="#pythonFaq">
                            <div class="accordion-body">
                                Kami membahas dua pendekatan: <br>
                                1. <span class="py-func">Flask:</span> Untuk aplikasi monolitik yang fleksibel dan kontrol penuh pada komponen. <br>
                                2. <span class="py-func">FastAPI:</span> Untuk membangun API modern dengan performa tinggi berbasis asinkron (<span class="py-keyword">async</span>) dan validasi data otomatis menggunakan Pydantic.
                            </div>
                        </div>
                    </div>

                    <!-- Q3: Python & AI -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q3">
                                Bagaimana implementasi Kecerdasan Buatan (AI) dibahas?
                            </button>
                        </h2>
                        <div id="q3" class="accordion-collapse collapse" data-bs-parent="#pythonFaq">
                            <div class="accordion-body">
                                Artikel kami mencakup penggunaan library populer seperti <span class="text-info">NumPy</span>, <span class="text-info">Pandas</span>, dan <span class="text-info">Scikit-Learn</span>. Fokusnya adalah membangun sistem rekomendasi materi pembelajaran berbasis AI, yang merupakan bagian dari riset pengembangan aplikasi mobile learning kami.
                            </div>
                        </div>
                    </div>

                    <!-- Q4: Python Architecture -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q4">
                                Bagaimana Python terintegrasi dengan Arsitektur Microservices?
                            </button>
                        </h2>
                        <div id="q4" class="accordion-collapse collapse" data-bs-parent="#pythonFaq">
                            <div class="accordion-body">
                                <span class="text-comment"># Architecture Blueprint</span> <br>
                                Kami mengimplementasikan pola desain microservices di mana setiap layanan (seperti Autentikasi atau Payment) dikembangkan sebagai container independen menggunakan Python. Kami juga membahas integrasi database <span class="py-str">PostgreSQL</span> menggunakan <span class="py-func">SQLAlchemy</span> sebagai ORM utama.
                            </div>
                        </div>
                    </div>

                </div> <!-- End Accordion -->

            </div>
        </div>
    </div>

    <div class="container py-4 text-center">
        <footer class="pt-3 mt-4 text-muted border-top">
            <div class="container">
                <span class="code-font" style="color: var(--py-blue);">while</span> <span class="py-func">learning</span>: <span class="py-func">grow</span>()
                <br>
                <small class="mt-2 d-block">&copy; <?= Date('Y') ?> Ajisa123 | Python Developer Portfolio</small>
            </div>
        </footer>
    </div>

    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>

