<!-- Grid Section -->
<section id="grid" class="section">
  <!-- Section Title -->
  <div class="container section-title text-center" data-aos="fade-up">
    <h2>Program Studi</h2>
  </div><!-- End Section Title -->

  <style>
    .grid-container {
      position: relative;
      overflow: hidden;
      transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
      height: 500px;
      transform-origin: center;
    }
    
    .grid-image {
      transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    
    /* Grid yang aktif (di-hover) */
    .grid-container:hover {
      z-index: 2;
      transform: scale(1.2);
    }
    
    /* Grid di sebelah grid yang aktif */
    .grid-container:hover ~ .grid-container {
      transform: scale(0.8);
      opacity: 0.7;
    }
    
    /* Grid sebelum grid yang aktif */
    .grid-container:hover ~ .grid-container:nth-child(2) {
      transform: scale(0.85);
    }
    
    .grid-container:hover ~ .grid-container:nth-child(3) {
      transform: scale(0.9);
    }
    
    .grid-container:hover ~ .grid-container:nth-child(4) {
      transform: scale(0.95);
    }
    
    /* Efek hover yang lebih halus */
    .grid-container:before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: transparent;
      transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
      z-index: 1;
    }

    .grid-container:hover:before {
      background: rgba(0, 0, 0, 0.1);
    }
  </style>

  <div class="container-fluid px-0">
    <div class="row g-0">
      <div class="col">
        <div class="grid-container">
          <img src="assets/img/portfolio/app-1.jpg" class="grid-image" alt="Program Studi 1">
        </div>
      </div>
      <div class="col">
        <div class="grid-container">
          <img src="assets/img/portfolio/app-2.jpg" class="grid-image" alt="Program Studi 2">
        </div>
      </div>
      <div class="col">
        <div class="grid-container">
          <img src="assets/img/portfolio/app-3.jpg" class="grid-image" alt="Program Studi 3">
        </div>
      </div>
      <div class="col">
        <div class="grid-container">
          <img src="assets/img/portfolio/books-1.jpg" class="grid-image" alt="Program Studi 4">
        </div>
      </div>
      <div class="col">
        <div class="grid-container">
          <img src="assets/img/portfolio/books-2.jpg" class="grid-image" alt="Program Studi 5">
        </div>
      </div>
    </div>
  </div>
</section> 