<link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />


<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #27293d;">
    <div class="container-fluid">
      <!-- Navbar brand/logo -->
      <a class="navbar-brand" href="#">Earthquake Early Warning System</a>
      
      <!-- Navbar toggler for responsive design -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <!-- Navbar links -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <!-- Home -->
          <li class="nav-item">
            <a class="nav-link" href="/" style="color: white;">Home</a>
          </li>
          <!-- About -->
          <li class="nav-item">
            <a class="nav-link" href="{{ route('about') }}" style="color: white;">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  

  <!-- Product Section -->
  <div class="container-fluid product-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <h2>Our Featured Product</h2>
                <img src="https://via.placeholder.com/300" alt="Featured Product">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vitae purus sit amet ligula
                    aliquam faucibus. Duis quis ex eu augue fermentum dignissim. Nulla facilisi.</p>
            </div>
        </div>
    </div>
</div>

<!-- About Section -->
<div class="container-fluid about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <h2>About Us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vitae purus sit amet
                    ligula aliquam faucibus. Duis quis ex eu augue fermentum dignissim. Nulla facilisi.</p>
            </div>
        </div>
    </div>
</div>

<div class="container team-section">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2>Our Team</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="team-member">
                <img src="https://via.placeholder.com/200" alt="Team Member">
                <h4>John Doe</h4>
                <p>CEO</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="team-member">
                <img src="https://via.placeholder.com/200" alt="Team Member">
                <h4>Jane Smith</h4>
                <p>COO</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="team-member">
                <img src="https://via.placeholder.com/200" alt="Team Member">
                <h4>Michael Johnson</h4>
                <p>CTO</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
    </div>
</div>
