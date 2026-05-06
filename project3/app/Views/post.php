<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajisa PyLog | Posts</title>

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
            padding-top: 70px;
        }

        /* Header Blog bergaya terminal */
        .blog-header {
            background: linear-gradient(135deg, #1e1e1e 0%, #121212 100%);
            border-bottom: 2px solid var(--py-blue);
            padding: 60px 0;
            margin-bottom: 40px;
        }

        .code-font { font-family: 'JetBrains Mono', monospace; }

        /* Card Post bergaya List File */
        .card-post {
            background-color: var(--card-bg);
            border: 1px solid #222;
            border-radius: 10px;
            transition: all 0.3s ease;
            position: relative;
        }

        .card-post:hover {
            border-color: var(--py-yellow);
            transform: translateX(10px); /* Efek geser ke kanan saat hover */
            background-color: #1a1a1a;
        }

        .post-link {
            color: var(--py-blue);
            text-decoration: none;
            font-weight: 700;
            transition: 0.2s;
        }

        .post-link:hover {
            color: var(--py-yellow);
        }

        .line-num {
            color: #444;
            margin-right: 15px;
            font-family: 'JetBrains Mono', monospace;
            font-size: 0.9rem;
        }

        .btn-read {
            color: #888;
            text-decoration: none;
            font-size: 0.85rem;
            font-family: 'JetBrains Mono', monospace;
            border-bottom: 1px dashed #444;
        }

        .btn-read:hover {
            color: var(--py-yellow);
            border-color: var(--py-yellow);
        }

        footer { font-family: 'JetBrains Mono', monospace; color: #555 !important; }
    </style>
</head>

<body>

    <?= $this->include('layouts/navbar'); ?>

    <!-- Jumbotron/Header -->
    <div class="blog-header">
      <div class="container">
        <h1 class="display-5 fw-bold code-font">
            <span style="color: #c586c0;">ls</span> <span class="text-info">./articles/</span>
        </h1>
        <p class="code-font text-comment"># Menampilkan total (<?= count($posts) ?>) file log yang tersedia.</p>
      </div>
    </div>

    <div class="container">
        <div class="row">
            <?php foreach ($posts as $post) : ?>
                <div class="col-md-12 my-2 card card-post border-0 shadow-sm">
                    <div class="card-body p-4 d-flex align-items-start">
                        <!-- Nomor Baris ala Editor -->
                        <span class="line-num d-none d-sm-inline">0<?= array_search($post, $posts) + 1 ?></span>
                        
                        <div>
                            <h5 class="h5 code-font">
                                <a class="post-link" href="/post/<?= $post['slug'] ?>">
                                    <span class="text-white opacity-25">py_</span><?= $post['title'] ?>
                                </a>
                            </h5>
                            
                            <p class="text-secondary mt-2 mb-3" style="font-size: 0.95rem;">
                                <?= substr(strip_tags($post['content']), 0, 150) ?>...
                            </p>
                            
                            <a href="/post/<?= $post['slug'] ?>" class="btn-read">
                                cat file_contents | more
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>

    <!-- Footer -->
    <div class="container py-4">
        <footer class="pt-3 mt-4 text-muted border-top text-center">
            <div class="container">
                <span class="code-font" style="color: var(--py-blue);">exit</span>(0) 
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
