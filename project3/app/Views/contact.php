<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajisa PyLog | Contact</title>

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
        }

        body { 
            background-color: var(--bg-dark); 
            color: #e0e0e0; 
            font-family: 'Inter', sans-serif;
            padding-top: 60px;
        }

        .code-font { font-family: 'JetBrains Mono', monospace; }

        .contact-header {
            background: linear-gradient(135deg, #1e1e1e 0%, #121212 100%);
            border-bottom: 2px solid var(--py-blue);
            padding: 60px 0;
            margin-bottom: 40px;
        }

        .card-contact {
            background-color: var(--card-bg);
            border: 1px solid #222;
            border-radius: 12px;
            transition: 0.3s;
        }

        .card-contact:hover {
            border-color: var(--py-blue);
            transform: translateY(-5px);
        }

        .contact-icon {
            font-size: 1.5rem;
            color: var(--py-yellow);
            margin-bottom: 10px;
        }

        .text-info-custom { color: #9cdcfe; }
        .text-string { color: #ce9178; }

        footer { font-family: 'JetBrains Mono', monospace; }
    </style>
</head>

<body>

    <?= $this->include('layouts/navbar'); ?>

    <div class="contact-header">
      <div class="container text-center">
        <h1 class="display-5 fw-bold code-font">
            <span style="color: #569cd6;">get_in_touch</span>()
        </h1>
        <p class="code-font text-comment mt-3"># Silakan hubungi saya untuk kolaborasi atau sekadar bertanya.</p>
      </div>
    </div>

    <div class="container">
        <div class="row g-4 justify-content-center">
            
            <!-- Alamat -->
            <div class="col-md-4">
                <div class="card card-contact h-100 p-4 text-center">
                    <div class="contact-icon">📍</div>
                    <h5 class="fw-bold code-font mb-3">Location</h5>
                    <p class="code-font small">
                        <span class="text-info-custom">address</span> = <span class="text-string">"Jakarta, Indonesia"</span>
                    </p>
                    <p class="text-secondary small">Tersedia untuk pertemuan langsung atau diskusi proyek secara remote.</p>
                </div>
            </div>

            <!-- Email -->
            <div class="col-md-4">
                <div class="card card-contact h-100 p-4 text-center">
                    <div class="contact-icon">📧</div>
                    <h5 class="fw-bold code-font mb-3">Email</h5>
                    <p class="code-font small">
                        <span class="text-info-custom">email</span> = <span class="text-string">"ajisakatirtaal@gmail.com"</span>
                    </p>
                    <p class="text-secondary small">Kirimkan pesan Anda kapan saja, saya akan membalas dalam waktu 24 jam.</p>
                </div>
            </div>

            <!-- WhatsApp / HP -->
            <div class="col-md-4">
                <div class="card card-contact h-100 p-4 text-center">
                    <div class="contact-icon">📱</div>
                    <h5 class="fw-bold code-font mb-3">Direct Contact</h5>
                    <p class="code-font small">
                        <span class="text-info-custom">phone</span> = <span class="text-string">"+62-822-5937-0698"</span>
                    </p>
                    <p class="text-secondary small">Hubungi saya melalui WhatsApp untuk respon yang lebih cepat.</p>
                </div>
            </div>

        </div>

        <!-- Social Media Section -->
        <div class="row mt-5">
            <div class="col-12 text-center">
                <div class="p-4 rounded-3 shadow-sm" style="background-color: #1a1a1a; border: 1px dashed #333;">
                    <h6 class="code-font text-secondary mb-3">connect_with_me = [ "GitHub", "Instagram" ]</h6>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="https://github.com/Ajisa123" target="_blank" class="btn btn-outline-light btn-sm rounded-pill px-3">GitHub</a>

                        <a href="https://www.instagram.com/ajjj2005_____?igsh=dTZhd2llZ3htY2lk&utm_source=qr" class="btn btn-outline-light btn-sm rounded-pill px-3">Instagram</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5 text-center">
        <footer class="pt-3 mt-4 text-muted border-top">
            <div class="container">
                <span class="code-font" style="color: var(--py-blue);">return</span> <span class="text-string">"Thank you!"</span>
                <br>
                <small class="mt-2 d-block">&copy; <?= Date('Y') ?> Ajisa PyLog</small>
            </div>
        </footer>
    </div>

    <!-- Jquery dan Bootsrap JS -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>

