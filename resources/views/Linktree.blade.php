<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SZA Linktree Clone</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    body {
      background-color: #033336;
      color: white;
      font-size: 1.4rem;
      font-family: Arial, sans-serif;
      padding: 40px 0;
    }
    .custom-card {
      max-width: 800px;
      margin: 0 auto;
    }
    .rounded-deep {
      border-radius: 30px;
    }
    .link-button {
      background-color: #C25C2D;
      border: none;
      color: white;
      padding: 22px 32px;
      margin-bottom: 24px;
      width: 100%;
      text-align: left;
      display: flex;
      align-items: center;
      justify-content: space-between;
      font-weight: bold;
      font-size: 1.3rem;
      box-shadow: 8px 8px 16px rgba(0,0,0,0.5);
      border-radius: 48px;
      outline: none;
      transition: all 0.2s ease;
    }
    .link-button:hover {
      background-color: #C25C2D;
      transform: translateY(-2px);
      box-shadow: 10px 10px 20px rgba(0,0,0,0.6);
    }
    .link-button:focus {
      outline: none;
      box-shadow: none;
    }
    .link-button img {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      margin-right: 18px;
    }
    .link-left {
      display: flex;
      align-items: center;
    }
    .social-icons a {
      color: white;
      margin: 0 14px;
      font-size: 1.8rem;
    }
    .btn-toggle-group {
      display: flex;
      justify-content: center;
      border-radius: 50px;
      overflow: hidden;
      box-shadow: 6px 6px 14px rgba(0,0,0,0.5);
      margin-top: 20px;
      max-width: 800px;
      margin-left: auto;
      margin-right: auto;
    }
    .btn-toggle {
      flex: 1;
      padding: 22px 0;
      border: none;
      font-weight: bold;
      font-size: 1.3rem;
      color: white;
      background-color: #5a5a5a;
      transition: background-color 0.3s ease;
      text-align: center;
      cursor: pointer;
    }
    .btn-toggle.active {
      background-color: #1d1d1d;
    }
    .btn-toggle:hover {
      background-color: #2c2c2c;
    }
    .merch-container {
      max-width: 800px;
      margin: auto;
      background-color: #C25C2D;
      padding: 30px;
      border-radius: 30px;
      box-shadow: 8px 8px 16px rgba(0, 0, 0, 0.5);
      text-align: center;
    }
    .merch-scroll {
      overflow-x: auto;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }
    .merch-scroll::-webkit-scrollbar {
      display: none;
    }
    .merch-item {
      display: inline-block;
      background-color: #C25C2D;
      width: 240px;
      margin-right: 24px;
      box-shadow: 8px 8px 16px rgba(0,0,0,0.5);
    }

    .merch-title {
      font-size: 1.7rem;
      font-weight: bold;
      margin-bottom: 10px;
    }
    .merch-subtitle {
      font-size: 1rem;
      opacity: 0.85;
      margin-bottom: 30px;
    }
    .product-row {
      display: flex;
      justify-content: center;
      gap: 24px;
      flex-wrap: nowrap;
      overflow-x: auto;
    }
    .product-box {
      background: white;
      border-radius: 20px;
      padding: 12px;
      min-width: 200px;
      height: 200px;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 8px 8px 16px rgba(0,0,0,0.5);
    }
    .product-box img {
      max-width: 100%;
      max-height: 100%;
      border-radius: 12px;
      background: white;
      padding: 4px;
    }
    #links-section, #shop-section {
      display: none;
    }
    #links-section.active, #shop-section.active {
      display: block;
    }
  </style>
</head>
<body>
  <div class="custom-card">
    <img src="https://ugc.production.linktr.ee/329f0015-2667-4d25-9469-e9e10287e0e5_SaveClip.App-470740868-460482286821793-912111144789360142-n.jpeg" class="img-fluid rounded mb-4 shadow" alt="Header">
    <p class="mb-3 font-weight-bold text-center" style="font-size: 1.6rem;">@SZA</p>
    <div class="text-center social-icons mb-3">
      <a href="https://www.instagram.com/sza"><i class="fab fa-instagram"></i></a>
      <a href="https://x.com/sza"><i class="fab fa-twitter"></i></a>
      <a href="https://www.youtube.com/@sza"><i class="fab fa-youtube"></i></a>
      <a href="https://www.facebook.com/sza/"><i class="fab fa-facebook"></i></a>
    </div>
    <div class="btn-toggle-group">
      <button class="btn-toggle active" onclick="toggleSection('links')">Links</button>
      <button class="btn-toggle" onclick="toggleSection('shop')">Shop</button>
    </div>

    <div id="links-section" class="merch-container active">
      <a href="https://sza.lnk.to/Lana" target="_blank" class="link-button">
        <div class="link-left">
          <img src="https://ugc.production.linktr.ee/329f0015-2667-4d25-9469-e9e10287e0e5_SaveClip.App-470740868-460482286821793-912111144789360142-n.jpeg">
          LANA | Out Now
        </div>
        <i class="fas fa-ellipsis-h"></i>
      </a>
      <a href="https://www.bandsintown.com/a/4042462" target="_blank" class="link-button">
        <div class="link-left">
          <img src="https://ugc.production.linktr.ee/6e8c0dee-ca48-477a-ad16-151be951783f_13827022.jpeg">
          Tour Dates
        </div>
        <i class="fas fa-ellipsis-h"></i>
      </a>
      <div class="bg-dark rounded-deep p-3 mb-4 shadow">
        <iframe class="w-100 rounded-deep" height="350" src="https://youtu.be/JzursQOZ2Yg?si=b3_ndww_3c-RbTle" frameborder="0" allowfullscreen></iframe>
        <p class="mt-3 font-weight-bold">Drive (Official Video)</p>
      </div>
      <div class="bg-warning text-dark rounded-deep p-4 mb-4 shadow">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <span class="font-weight-bold">Official Merch</span>
          <i class="fas fa-ellipsis-h"></i>
        </div>
        <div class="merch-scroll pb-2">
          <div class="merch-item bg-dark rounded p-3 d-inline-block text-center">
            <a href="https://ukshop.szasos.com/" target="_blank">
              <img src="https://shop.szasos.com/cdn/shop/files/SZA-BEETLE-HOODIE-GRID_f91a36e5-cb39-429e-a028-733a8a5a2bbf.png?v=1734716257" class="img-fluid rounded mb-3">
              <p class="mb-0 text-white small">SOS Deluxe Beetle Hoodie</p>
              <small class="text-light">$75</small>
            </a>
          </div>
          <div class="merch-item bg-dark rounded p-3 d-inline-block text-center">
            <a href="https://ukshop.szasos.com/" target="_blank">
              <img src="https://shop.szasos.com/cdn/shop/files/SZA-BUGS-CREWNECK-GRID_46c799cf-c2c1-411f-94f5-7fd62b6ff5c6.png?v=1734716308" class="img-fluid rounded mb-3">
              <p class="mb-0 text-white small">SOS Caterpillar Hoodie</p>
              <small class="text-light">$75</small>
            </a>
          </div>
          <div class="merch-item bg-dark rounded p-3 d-inline-block text-center">
            <a href="https://ukshop.szasos.com/" target="_blank">
              <img src="https://shop.szasos.com/cdn/shop/files/SZA-HOODIE1-GRID_33feb297-2baf-4852-bed1-aaf7205a8919.png?v=1734726052" class="img-fluid rounded mb-3">
              <p class="mb-0 text-white small">Crewneck Sweatshirt</p>
              <small class="text-light">$65</small>
            </a>
          </div>
          <div class="merch-item bg-dark rounded p-3 d-inline-block text-center">
            <a href="https://ukshop.szasos.com/" target="_blank">
              <img src="https://shop.szasos.com/cdn/shop/files/SZA-SOSDELUX-RINGER-TEE-GRID_ce3fbec1-3b91-4016-84af-d6d00dfced61.png?v=1734716376" class="img-fluid rounded mb-3">
              <p class="mb-0 text-white small">90S Collection</p>
              <small class="text-light">$80</small>
            </a>
          </div>
        </div>
      </div>
      <a href="https://www.szasos.com/" target="_blank" class="link-button">
        <div class="link-left">
          <img src="https://ugc.production.linktr.ee/f21ed73b-ba6c-4ce0-b665-76d36a4a3860_Frame-2-22-1-th7uyc.png">
          Official Website
        </div>
        <i class="fas fa-ellipsis-h"></i>
      </a>
    </div>

    <div id="shop-section" class="merch-container">
      <div class="merch-title">LANA Merch</div>
      <div class="merch-subtitle">10 Products</div>
      <div class="product-row">
        <div class="product-box">
          <img src="https://ugc.production.linktr.ee/79ed7a3e-e667-4b0d-87f3-6433da1aa588_sos-dd-2000x.png?io=true&size=square-fit" alt="Merch 1">
        </div>
        <div class="product-box">
          <img src="https://ugc.production.linktr.ee/827eae95-8543-4456-a67f-f3acf77d5b20_SZASOSLANADLXCT-2000x.png?io=true&size=square-fit" alt="Merch 2">
        </div>
        <div class="product-box">
          <img src="https://ugc.production.linktr.ee/d35df264-9de6-44cb-bb49-e45d3cce54cd_SOSDLX-CD-2-2000x.png?io=true&size=square-fit" alt="Merch 3">
        </div>
      </div>
    </div>
  </div>

  <script>
    function toggleSection(section) {
      const linksBtn = document.querySelectorAll('.btn-toggle')[0];
      const shopBtn = document.querySelectorAll('.btn-toggle')[1];
      const linksSection = document.getElementById('links-section');
      const shopSection = document.getElementById('shop-section');

      if (section === 'links') {
        linksBtn.classList.add('active');
        shopBtn.classList.remove('active');
        linksSection.classList.add('active');
        shopSection.classList.remove('active');
      } else {
        linksBtn.classList.remove('active');
        shopBtn.classList.add('active');
        linksSection.classList.remove('active');
        shopSection.classList.add('active');
      }
    }
  </script>
</body>
</html>