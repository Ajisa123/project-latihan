<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Management | Ajisa PyLog Admin</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=JetBrains+Mono:wght@500&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg-dark: #0a0a0a;
            --card-bg: #111111;
            --py-blue: #3776ab;
            --py-yellow: #ffd43b;
            --py-green: #4ade80;
            --border-color: #262626;
        }

        body { 
            background-color: var(--bg-dark); 
            color: #e0e0e0; 
            font-family: 'Inter', sans-serif;
            padding-top: 90px;
        }

        .code-font { font-family: 'JetBrains Mono', monospace; }

        /* Navbar Custom */
        .navbar-custom {
            background-color: rgba(10, 10, 10, 0.9) !important;
            border-bottom: 1px solid var(--border-color);
            backdrop-filter: blur(12px);
        }

        /* Header Section */
        .page-title {
            border-left: 4px solid var(--py-blue);
            padding-left: 15px;
            margin-bottom: 40px;
        }

        /* Table Dashboard */
        .table-container {
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0,0,0,0.4);
        }

        .table {
            margin-bottom: 0;
            color: #ccc;
            border-color: var(--border-color);
        }

        .table thead {
            background-color: #1a1a1a;
            color: var(--py-blue);
            font-family: 'JetBrains Mono', monospace;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 1px;
        }

        .table tbody tr {
            transition: 0.2s;
            border-bottom: 1px solid var(--border-color);
        }

        .table tbody tr:hover {
            background-color: #161616;
            color: #fff;
        }

        .table td {
            padding: 15px;
            vertical-align: middle;
            border-color: var(--border-color);
        }

        /* Status Badges */
        .badge-pub { color: var(--py-green); border: 1px solid var(--py-green); padding: 2px 8px; border-radius: 4px; font-size: 0.75rem; }
        .badge-draft { color: #888; border: 1px solid #444; padding: 2px 8px; border-radius: 4px; font-size: 0.75rem; }

        /* Action Buttons */
        .btn-action {
            font-family: 'JetBrains Mono', monospace;
            font-size: 0.75rem;
            text-transform: lowercase;
            margin-right: 5px;
            border-radius: 6px;
            transition: 0.3s;
        }

        .btn-new {
            background-color: var(--py-blue);
            color: white;
            border: none;
            padding: 8px 18px;
            border-radius: 8px;
            font-family: 'JetBrains Mono', monospace;
        }

        .btn-new:hover { background-color: #2b5d87; color: white; transform: translateY(-2px); }

        /* Custom Modal */
        .modal-content {
            background-color: #161616;
            border: 1px solid var(--py-yellow);
            color: #fff;
        }
        .modal-footer { border-top: 1px solid var(--border-color); }
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
                        <a class="nav-link active fw-bold" href="<?= base_url('admin/post') ?>">[ posts_list ]</a>
                    </li>
                </ul>
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item me-3">
                        <a href="<?= base_url('admin/post/new') ?>" class="btn-new text-decoration-none">
                            + create_new()
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-info" href="<?= base_url('admin/setting') ?>">settings.py</a>
                    </li>
                    <li class="nav-item">
                        <?php if (logged_in()) : ?>
                            <a class="nav-link text-danger ms-md-3" href="<?= base_url('logout') ?>">sys.exit()</a>
                        <?php else: ?>
                            <a class="nav-link" href="<?= base_url('login') ?>">user.auth()</a>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="page-title">
            <h2 class="fw-bold code-font">database.fetch_all<span class="text-white">(</span>posts<span class="text-white">)</span></h2>
            <p class="text-secondary small"># Ditemukan <?= count($posts) ?> entri dalam direktori utama.</p>
        </div>

        <div class="table-container shadow-lg">
            <table class="table">
                <thead>
                    <tr>
                        <th width="5%">ID</th>
                        <th width="50%">Post Content / Info</th>
                        <th width="15%">Status</th>
                        <th width="30%" class="text-end">Operations</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($posts as $post): ?>
                    <tr>
                        <td class="code-font" style="color: #555;">#<?= $post['id'] ?></td>
                        <td>
                            <div class="fw-bold mb-1" style="color: #1a1717;"><?= $post['title'] ?></div>
                            <div class="code-font" style="font-size: 0.75rem; color: #666;">
                                timestamp: <span style="color: var(--py-blue);"><?= $post['created_at'] ?></span>
                            </div>
                        </td>
                        <td>
                            <?php if($post['status'] === 'published'): ?>
                                <span class="badge-pub code-font">published</span>
                            <?php else: ?>
                                <span class="badge-draft code-font">draft_mode</span>
                            <?php endif ?>
                        </td>
                        <td class="text-end">
                            <div class="btn-group">
                                <a href="<?= base_url('admin/post/'.$post['id'].'/preview') ?>"
                                   class="btn btn-sm btn-outline-info btn-action" target="_blank">view()</a>
                                <a href="<?= base_url('admin/post/'.$post['id'].'/edit') ?>"
                                   class="btn btn-sm btn-outline-warning btn-action">edit()</a>
                                <button data-href="<?= base_url('admin/post/'.$post['id'].'/delete') ?>"
                                   onclick="confirmToDelete(this)"
                                   class="btn btn-sm btn-outline-danger btn-action">drop()</button>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>

        <!-- Modal Konfirmasi Delete (Dark Version) -->
        <div id="confirm-dialog" class="modal fade" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content shadow-lg">
                    <div class="modal-body p-4 text-center">
                        <div class="mb-3 text-warning">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                                <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                                <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                            </svg>
                        </div>
                        <h4 class="code-font fw-bold">Critical Action!</h4>
                        <p class="text-secondary">Apakah Anda yakin ingin menjalankan perintah <span class="text-danger">drop_entry</span>? Data ini akan terhapus secara permanen dari server.</p>
                    </div>
                    <div class="modal-footer justify-content-center p-3">
                        <button type="button" class="btn btn-secondary btn-sm code-font px-4" data-bs-dismiss="modal">abort()</button>
                        <a href="#" id="delete-button" class="btn btn-danger btn-sm code-font px-4">confirm_delete()</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container py-5 mt-5">
        <footer class="border-top pt-4 text-center code-font small text-secondary">
            <span class="text-info">print</span>(<span style="color: #ce9178;">"Admin environment ready."</span>) 
            <br>
            &copy; <?= Date('Y') ?> Ajisa PyLog
        </footer>
    </div>

    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>

    <script>
        function confirmToDelete(el) {
            document.getElementById("delete-button").setAttribute("href", el.dataset.href);
            var myModal = new bootstrap.Modal(document.getElementById('confirm-dialog'));
            myModal.show();
        }
    </script>

</body>
</html>