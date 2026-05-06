<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #0f0f0f; border-bottom: 1px solid #333; backdrop-filter: blur(10px); background: rgba(15, 15, 15, 0.9);">
  <div class="container">
    <a class="navbar-brand fw-bold" href="<?= base_url() ?>" style="font-family: 'JetBrains Mono', monospace; color: #ffd43b;">
      <span style="color: #3776ab;">&lt;</span>Ajisa PyLog<span style="color: #3776ab;"> /&gt;</span>
    </a>
    
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-family: 'Inter', sans-serif; font-size: 0.9rem;">
        <li class="nav-item"><a class="nav-link px-3" href="<?= base_url() ?>">Home</a></li>
        <li class="nav-item"><a class="nav-link px-3" href="<?= base_url('about') ?>">About</a></li>
        <li class="nav-item"><a class="nav-link px-3" href="<?= base_url('post') ?>">Blog</a></li>
        <li class="nav-item"><a class="nav-link px-3" href="<?= base_url('contact') ?>">Contact</a></li>
        <li class="nav-item"><a class="nav-link px-3" href="<?= base_url('faqs') ?>">FAQ</a></li>
      </ul>

      <!-- Form Pencarian Global -->
      <div class="d-flex me-3">
        <div class="input-group">
          <input class="form-control form-control-sm bg-transparent text-white border-secondary py-1" 
                 type="search" id="globalSearch" placeholder="Cari judul artikel..." 
                 list="postSuggestions" autocomplete="off" 
                 style="font-family: 'Inter', sans-serif; font-size: 0.85rem; width: 200px; border-radius: 20px;">
          <datalist id="postSuggestions">
            <?php if(!empty($all_posts)): foreach($all_posts as $p): ?>
              <option value="<?= $p['title'] ?>" data-slug="<?= $p['slug'] ?>">
            <?php endforeach; endif; ?>
          </datalist>
        </div>
      </div>

      <div class="d-flex align-items-center">
        <?php if (function_exists('logged_in') && logged_in()) : ?>
            <a class="btn btn-sm btn-outline-danger px-4 rounded-pill code-font" href="<?= base_url('logout') ?>">Logout</a>
        <?php else: ?>
            <a class="btn btn-sm btn-info px-4 rounded-pill code-font fw-bold" href="<?= base_url('login') ?>" style="background-color: #3776ab; border: none; color: white;">Login _</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</nav>

<script>
  // Script Redirect Pencarian
  document.getElementById('globalSearch').addEventListener('input', function(e) {
    const val = e.target.value;
    const opts = document.getElementById('postSuggestions').options;
    for (let i = 0; i < opts.length; i++) {
      if (opts[i].value === val) {
        // Langsung arahkan ke halaman detail blog
        window.location.href = "<?= base_url('post') ?>/" + opts[i].getAttribute('data-slug');
        break;
      }
    }
  });
</script>