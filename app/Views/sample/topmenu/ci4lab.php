<li class="nav-item <?= ($location == 'tutorial' ? 'active' : '') ?> dropdown">
    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" role="button" aria-expanded="false" >
      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/>
          <line x1="9" y1="3" x2="15" y2="3" /><line x1="10" y1="9" x2="14" y2="9" /><path d="M10 3v6l-4 11a0.7 .7 0 0 0 .5 1h11a0.7 .7 0 0 0 .5 -1l-4 -11v-6" />
      </svg>
      <span class="nav-link-title">
        연구실
      </span>
    </a>
    <div class="dropdown-menu">
      <div class="dropdown-menu-columns">
        <div class="dropdown-menu-column">
          <!-- Tutorial -->
          <a class="dropdown-item <?= (isset($menu) && $menu == 'lab1' ? 'active' : '') ?>" href="/ci4lab/lab1" >연구실1</a>
        </div>
      </div>
    </div>
</li>