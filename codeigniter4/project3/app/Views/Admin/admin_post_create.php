<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Ajisa PyLog</title>

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
            --sidebar-dark: #0f0f0f;
        }

        body { 
            background-color: var(--bg-dark); 
            color: #e0e0e0; 
            font-family: 'Inter', sans-serif;
            padding-top: 80px;
        }

        .code-font { font-family: 'JetBrains Mono', monospace; }

        /* Navbar Custom */
        .navbar-custom {
            background-color: rgba(15, 15, 15, 0.95) !important;
            border-bottom: 1px solid #333;
            backdrop-filter: blur(10px);
        }

        /* Admin Header */
        .admin-header {
            border-left: 4px solid var(--py-blue);
            padding-left: 20px;
            margin-bottom: 30px;
        }

        /* Editor Card */
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
            font-size: 0.9rem;
        }

        .form-control-custom {
            background-color: #1e1e1e !important;
            border: 1px solid #444 !important;
            color: #fff !important;
            border-radius: 8px;
            padding: 12px;
        }

        .form-control-custom:focus {
            border-color: var(--py-yellow) !important;
            box-shadow: 0 0 0 0.25rem rgba(255, 212, 59, 0.15);
        }

        textarea.form-control-custom {
            font-family: 'JetBrains Mono', monospace;
            font-size: 0.95rem;
            line-height: 1.6;
        }

        /* Buttons */
        .btn-publish {
            background-color: var(--py-blue);
            border: none;
            color: white;
            font-family: 'JetBrains Mono', monospace;
            padding: 10px 25px;
            border-radius: 8px;
            transition: 0.3s;
        }

        .btn-publish:hover {
            background-color: #2b5d87;
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

        .btn-draft:hover {
            border-color: #888;
            color: #fff;
        }

        .footer-text {
            color: #555;
            font-family: 'JetBrains Mono', monospace;
            font-size: 0.85rem;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top navbar-custom">
        <div class="container">
            <a class="navbar-brand fw-bold code-font" href="<?= base_url() ?>">
                <span style="color: var(--py-blue);">Ajisa</span><span style="color: var(--py-yellow);">.admin</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/post') ?>">~/all_posts</a>
                    </li>
                </ul>
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item">
                        <a class="nav-link text-info" href="<?= base_url('admin/setting') ?>">settings.py</a>
                    </li>
                    <li class="nav-item ms-md-3">
                        <a class="nav-link text-danger" href="<?= base_url('auth/logout') ?>">sys.exit()</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="admin-header">
            <h2 class="fw-bold code-font">write_new_log<span class="text-white">( )</span></h2>
            <p class="text-secondary small"># Pastikan konten menggunakan Markdown atau HTML yang valid.</p>
        </div>

        <div class="editor-container">
            <form action="" method="post" id="text-editor">
                <!-- Title Input -->
                <div class="mb-4">
                    <label for="title" class="form-label">variable: post_title</label>
                    <input type="text" name="title" class="form-control form-control-custom"
                        placeholder='e.g., "Deep Learning with Python"' required>
                </div>

                <!-- Content Textarea -->
                <div class="mb-4">
                    <label for="content" class="form-label">variable: post_content</label>
                    <textarea name="content" class="form-control form-control-custom" cols="30" rows="12"
                        placeholder="''' Tuliskan isi artikel Anda di sini... '''"></textarea>
                </div>

                <!-- Action Buttons -->
                <div class="d-flex gap-3 mt-5">
                    <button type="submit" name="status" value="published" class="btn-publish">
                        commit_and_publish()
                    </button>
                    <button type="submit" name="status" value="draft" class="btn-draft">
                        save_as_draft()
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="container py-5 mt-5">
        <footer class="footer-text border-top pt-4 text-center">
            <div class="container">
                <span class="text-info">print</span>(<span style="color: #ce9178;">"Admin Session Active"</span>) 
                <br>
                &copy; <?= Date('Y') ?> Ajisa PyLog
            </div>
        </footer>
    </div>

    <!-- jQuery dan Bootstrap JS -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>

</body>
</html>