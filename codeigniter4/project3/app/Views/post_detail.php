<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $post['title'] ?> | Ajisa PyLog</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=JetBrains+Mono:wght@500&display=swap" rel="stylesheet">

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
            line-height: 1.8;
            padding-top: 60px;
        }

        .code-font { font-family: 'JetBrains Mono', monospace; }

        /* Header Detail */
        .detail-header {
            background: linear-gradient(135deg, #1e1e1e 0%, #121212 100%);
            border-bottom: 1px solid #333;
            padding: 50px 0;
            margin-bottom: 40px;
        }

        .post-title {
            color: var(--py-yellow);
            font-weight: 700;
            font-family: 'JetBrains Mono', monospace;
        }

        .post-meta {
            color: var(--text-comment);
            font-size: 0.9rem;
            font-family: 'JetBrains Mono', monospace;
        }

        /* Content Area */
        .article-content {
            background-color: var(--card-bg);
            border: 1px solid #222;
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }

        .article-body {
            font-size: 1.1rem;
            color: #d1d1d1;
        }

        /* Styling untuk elemen dalam konten (jika ada tag HTML) */
        .article-body h2, .article-body h3 { color: var(--py-blue); margin-top: 30px; font-family: 'JetBrains Mono'; }
        .article-body blockquote {
            border-left: 4px solid var(--py-yellow);
            padding-left: 20px;
            font-style: italic;
            color: #aaa;
        }

        .btn-back {
            color: var(--py-blue);
            text-decoration: none;
            font-family: 'JetBrains Mono', monospace;
            transition: 0.3s;
        }

        .btn-back:hover { color: var(--py-yellow); }

        footer { font-family: 'JetBrains Mono', monospace; }
    </style>
</head>

<body>

    <?= $this->include('layouts/navbar'); ?>

    <!-- Header Artikel -->
    <div class="detail-header">
      <div class="container py-3">
        <a href="<?= base_url('post') ?>" class="btn-back mb-3 d-inline-block">&larr; ../back_to_list</a>
        <h1 class="display-5 post-title"><?= $post['title'] ?></h1>
        <div class="post-meta mt-3">
            <span># Author: <?= $post['author'] ?></span> <br>
            <span># Created_at: <?= date('d M Y', strtotime($post['created_at'])) ?></span>
        </div>
      </div>
    </div>

    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <article class="article-content">
                    <div class="article-body">
                        <!-- Menampilkan isi konten secara utuh -->
                        <?= $post['content'] ?>
                    </div>
                    
                    <hr class="mt-5" style="border-color: #333;">
                    
                    <div class="mt-4 code-font">
                        <p class="text-secondary small">
                            <span class="text-info">print</span>(<span style="color: #ce9178;">"End of Documentation."</span>)
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </div>

    <div class="container py-4 text-center">
        <footer class="pt-3 mt-4 text-muted border-top">
            <div class="container">
                <span class="code-font" style="color: var(--py-blue);">sys.exit</span>(0)
                <br>
                <small>&copy; <?= Date('Y') ?> Ajisa PyLog</small>
            </div>
        </footer>
    </div>

    <!-- Jquery dan Bootsrap JS -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>
