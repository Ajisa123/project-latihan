<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post | Ajisa PyLog Admin</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=JetBrains+Mono:wght@500&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg-dark: #0a0a0a;
            --editor-bg: #161616;
            --py-blue: #3776ab;
            --py-yellow: #ffd43b;
            --py-green: #4584b6;
        }

        body { 
            background-color: var(--bg-dark); 
            color: #e0e0e0; 
            font-family: 'Inter', sans-serif;
            padding-top: 80px;
        }

        .code-font { font-family: 'JetBrains Mono', monospace; }

        .navbar-custom {
            background-color: rgba(15, 15, 15, 0.95) !important;
            border-bottom: 1px solid #333;
            backdrop-filter: blur(10px);
        }

        /* Update Header */
        .admin-header {
            border-left: 4px solid var(--py-yellow); /* Kuning untuk mode Edit */
            padding-left: 20px;
            margin-bottom: 30px;
        }

        .editor-container {
            background-color: var(--editor-bg);
            border: 1px solid #333;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }

        .form-label {
            color: var(--py-blue);
            font-family: 'JetBrains Mono', monospace;
            font-weight: bold;
            font-size: 0.85rem;
        }

        .form-control-custom {
            background-color: #1e1e1e !important;
            border: 1px solid #444 !important;
            color: #fff !important;
            border-radius: 8px;
            padding: 12px;
        }

        .form-control-custom:focus {
            border-color: var(--py-blue) !important;
            box-shadow: 0 0 0 0.25rem rgba(55, 118, 171, 0.15);
        }

        textarea.form-control-custom {
            font-family: 'JetBrains Mono', monospace;
            font-size: 0.95rem;
            line-height: 1.6;
            color: #a5d6ff !important; /* Warna teks isi sedikit berbeda di mode edit */
        }

        /* Badge Status */
        .status-badge {
            font-size: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 4px 10px;
            border-radius: 4px;
            background: #333;
            color: var(--py-yellow);
            vertical-align: middle;
            margin-left: 10px;
        }

        .btn-update {
            background-color: var(--py-yellow);
            border: none;
            color: #000;
            font-family: 'JetBrains Mono', monospace;
            font-weight: bold;
            padding: 10px 25px;
            border-radius: 8px;
            transition: 0.3s;
        }

        .btn-update:hover {
            background-color: #e5be33;
            transform: translateY(-2px);
        }

        .btn-draft {
            background-color: transparent;
            border: 1px solid #555;
            color: #aaa;
            font-family: 'JetBrains Mono', monospace;
            padding: 10px 25px;
            border-radius: 8px;
            transition: 0.3s;
        }

        footer { color: #444; font-family: 'JetBrains Mono', monospace; }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top navbar-custom">
        <div class="container">
            <a class="navbar-brand fw-bold code-font" href="<?= base_url() ?>">
                <span style="color: var(--py-blue);">Ajisa</span><span style="color: var(--py-yellow);">.admin</span>
            </a>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/post') ?>">~/all_posts</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link text-danger" href="<?= base_url('auth/logout') ?>">sys.exit()</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="admin-header">
            <h2 class="fw-bold code-font">update_log<span class="text-white">(</span>id=<?= $post['id'] ?><span class="text-white">)</span> <span class="status-badge">Editing_Mode</span></h2>
            <p class="text-secondary small"># Anda sedang memodifikasi arsip data yang sudah ada.</p>
        </div>

        <div class="editor-container">
            <form action="" method="post" id="text-editor">
                <input type="hidden" name="id" value="<?= $post['id'] ?>" />
                
                <div class="mb-4">
                    <label for="title" class="form-label">@property: title</label>
                    <input type="text" name="title" class="form-control form-control-custom"
                        placeholder="Post title" value="<?= $post['title'] ?>" required>
                </div>

                <div class="mb-4">
                    <label for="content" class="form-label">@property: content</label>
                    <textarea name="content" class="form-control form-control-custom" cols="30" rows="12"
                        placeholder="Write a great post!"><?= $post['content'] ?></textarea>
                </div>

                <div class="d-flex gap-3 mt-5">
                    <button type="submit" name="status" value="published" class="btn-update">
                        update_and_publish()
                    </button>
                    <button type="submit" name="status" value="draft" class="btn-draft">
                        save_to_draft()
                    </button>
                    <a href="<?= base_url('admin/post') ?>" class="btn btn-link text-secondary code-font text-decoration-none ms-auto">cancel()</a>
                </div>
            </form>
        </div>
    </div>

    <div class="container py-5 mt-5">
        <footer class="border-top pt-4 text-center small">
            <div class="container">
                <span class="text-info">print</span>(<span style="color: #ce9178;">"Database connection stable..."</span>) 
                <br>
                &copy; <?= Date('Y') ?> Ajisa PyLog
            </div>
        </footer>
    </div>

    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>

</body>
</html>