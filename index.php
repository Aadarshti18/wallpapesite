<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Wallpaper Site</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>

  <!-- Header Section -->
  <header>
    <div class="logo">Pexels</div>
    <!-- Navbar -->
    <nav class="navbar">
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#categories">Categories</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#prices">Prices</a></li>
        <li><a href="Admin/Login/login-check.php" class="login-btn">Login</a></li>
      </ul>
    </nav>
    <!-- Search Bar -->
    <div class="search-container">
      <input type="text" id="search-bar" placeholder="Search for photos..." />
      <button onclick="searchPhotos()">Search</button>
    </div>
  </header>

  <!-- Home Section -->
  <section id="home" class="home-section">
    <h2>Welcome to Pexels Clone</h2>
    <p>This is a clone of the Pexels website, featuring a collection of beautiful free stock photos.</p>
  </section>

  <!-- Categories Section -->
  <section id="categories" class="categories-section">
    <h2>Categories</h2>
    <p>Explore different categories of photos.</p>
  </section>

  <!-- Image Grid Section -->
  <section id="image-grid" class="image-grid">
    <div class="image-card">
      <img src="pexel6.jpg" alt="Sample Image" />
      <div class="download-btn">Download</div>
      <div class="image-info">Photographer: John Doe</div>
    </div>
    <div class="image-card">
      <img src="pexel8.jpg" alt="Sample Image" />
      <div class="download-btn">Download</div>
      <div class="image-info">Photographer: Jane Smith</div>
    </div>
    <div class="image-card">
      <img src="pexel9.jpg" alt="Sample Image" />
      <div class="download-btn">Download</div>
      <div class="image-info">Photographer: Alice Brown</div>
    </div>
    <div class="image-card">
      <img src="pexel10.jpg" alt="Sample Image" />
      <div class="download-btn">Download</div>
      <div class="image-info">Photographer: Michael Lee</div>
    </div>
    <div class="image-card">
      <img src="pexel13.jpg" alt="Sample Image" />
      <div class="download-btn">Download</div>
      <div class="image-info">Photographer: Michael Lee</div>
    </div>
    <div class="image-card">
      <img src="pexel5.jpg" alt="Sample Image" />
      <div class="download-btn">Download</div>
      <div class="image-info">Photographer: Michael Lee</div>
    </div>
    <div class="image-card">
      <img src="pexel11.jpg" alt="Sample Image" />
      <div class="download-btn">Download</div>
      <div class="image-info">Photographer: Michael Lee</div>
    </div>
    <div class="image-card">
      <img src="pexel7.jpg" alt="Sample Image" />
      <div class="download-btn">Download</div>
      <div class="image-info">Photographer: Michael Lee</div>
    </div>
  </section>

  <!-- Prices Section -->
  <section id="prices" class="prices-section">
    <h2>Product Prices</h2>
    <div class="price-card">
      <h3>Product 1</h3>
      <img src="pexel10.jpg" alt="Wallpaper 1">
      <p>Free</p>
    </div>
    <div class="price-card">
      <h3>Product 2</h3>
      <img src="pexel11.jpg" alt="Wallpaper 2">
      <p>$29.99</p>
    </div>
    <div class="price-card">
      <h3>Product 3</h3>
      <img src="pexel12.jpg" alt="Wallpaper 3">
      <p>$39.99</p>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="about-section">
    <h2>About Us</h2>
    <p>This project is a clone of Pexels, a platform offering free stock photos. This clone was built using HTML, CSS, and JavaScript.</p>
  </section>

  <!-- Footer Section -->
  <footer>
    <p>&copy; 2025 Pexels Clone made by AADARSH TIWARI</p>
  </footer>

  <script src="script.js"></script>
</body>
</html>
