<div class="position-relative p-0 bg-dark" >
  <nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary">
      

      <div class="container">
        <a class="navbar-brand" href="/">Inventoris KPH</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($title === "Inventoris") ? 'active' : '' }}" href="/inventoris">Inventoris</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($title === "History") ? 'active' : '' }} " href="/history">History</a>
            </li>
          </ul>
        </div>
          <div class="d-flex">
            <a class="btn" href="#">Log out</a>
          </div>
          {{-- <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form> --}}
        </div>
      </div>
    </nav>
</div>
