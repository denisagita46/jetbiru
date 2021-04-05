<li class="nav-item <?php if ($this->uri->segment(1) == 'dashboard') { ?> active <?php } ?>">
    <a class="nav-link" href="<?php echo site_url("dashboard"); ?>">
        <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <polyline points="5 12 3 12 12 3 21 12 19 12" />
                <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
            </svg>
        </span>
        <span class="nav-link-title">
            Dashboard
        </span>
    </a>
</li>
<li class="nav-item <?php if ($this->uri->segment(1) == 'satuan' || $this->uri->segment(1) == 'addSatuan' || $this->uri->segment(1) == 'updateSatuan' || $this->uri->segment(1) == 'jenisBarang' || $this->uri->segment(1) == 'addjenisBarang' || $this->uri->segment(1) == 'updatejenisBarang' || $this->uri->segment(1) == 'barang' || $this->uri->segment(1) == 'addBarang' || $this->uri->segment(1) == 'updateBarang' || $this->uri->segment(1) == 'pembeli' || $this->uri->segment(1) == 'agen' || $this->uri->segment(1) == 'reselerMarketer') { ?> active <?php } ?>" dropdown">
    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" role="button" aria-expanded="false">
        <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3" />
                <line x1="12" y1="12" x2="20" y2="7.5" />
                <line x1="12" y1="12" x2="12" y2="21" />
                <line x1="12" y1="12" x2="4" y2="7.5" />
                <line x1="16" y1="5.25" x2="8" y2="9.75" />
            </svg>
        </span>
        <span class="nav-link-title">
            Data Master
        </span>
    </a>
    <div class="dropdown-menu ">
        <div class="dropdown-menu-columns">
            <div class="dropdown-menu-column">
                <a class="dropdown-item" href="<?php echo site_url("satuan"); ?>">
                    Satuan
                </a>
                <a class="dropdown-item" href="<?php echo site_url("jenisBarang"); ?>">
                    Jenis Barang
                </a>
                <a class="dropdown-item" href="<?php echo site_url("barang"); ?>">
                    Barang
                </a>
                <a class="dropdown-item" href="<?php echo site_url("pembeli"); ?>">
                    Pembeli
                </a>
                <a class="dropdown-item" href="<?php echo site_url("agen"); ?>">
                    Agen
                </a>
                <a class="dropdown-item" href="<?php echo site_url("reselerMarketer"); ?>">
                    Reseler & Marketer
                </a>
            </div>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link js-sweetalert" href="#" data-type="doLogout">
        <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                <path d="M7 12h14l-3 -3m0 6l3 -3" />
            </svg>
        </span>
        <span class="nav-link-title">
            Logout
        </span>
    </a>
</li>