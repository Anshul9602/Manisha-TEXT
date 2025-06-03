  <style>
      .wh {
          border-bottom: 2px solid #343c55;
      }

      /* Section Container */
      .services-section {
          background: #ffffff;
          padding: 50px 20px;
          text-align: center;
      }

      /* Section Header */
      .services-section h2 {
          font-size: 2.5rem;
          font-weight: bold;
          color: #1d3557;
          margin-bottom: 10px;
      }

      .services-section p {
          font-size: 1.1rem;
          color: #555555;
          margin-bottom: 40px;
      }

      /* Service Cards Container */
      .services-container {
          display: flex;
          flex-wrap: wrap;
          justify-content: center;
          gap: 20px;
      }

      /* Individual Service Card */
      .service-card {
          background: #ffffff;
          border-radius: 10px;
          box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
          overflow: hidden;
          transition: transform 0.3s ease, box-shadow 0.3s ease;
          width: 300px;
          text-align: left;
      }

      .service-card:hover {
          transform: translateY(-10px);
          box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
      }

      /* Card Image */
      .service-card img {
          width: 100%;
          height: 200px;
          object-fit: cover;
      }

      /* Card Content */
      .service-card .content {
          padding: 20px;
      }

      .service-card h4 {
          font-size: 1.3rem;
          font-weight: bold;
          color: #1d3557;
          margin-bottom: 10px;
      }

      .service-card p {
          font-size: 1rem;
          color: #555555;
          line-height: 1.6;
      }

      /* Responsive Design */
      @media (max-width: 768px) {
          .services-container {
              flex-direction: column;
              align-items: center;
          }

          .service-card {
              width: 100%;
              max-width: 400px;
          }
      }

      /* General Section Styles */
      .why-choose-us {
          background: #fff;
          color: #fff;
          padding: 50px 20px;
          text-align: center;
          position: relative;
      }



      .why-choose-us .container {
          position: relative;
          z-index: 2;
          /* Ensures content is above overlay */
      }

      .section-header {
          font-size: 2.5rem;
          margin-bottom: 10px;
          color: #081D55;
      }

      .section-subtitle {
          font-size: 1.8rem;

          color: #000;
          margin-bottom: 20px;
      }

      .section-description {
          font-size: 1.1rem;
          color: #000;
          margin-bottom: 40px;
          line-height: 1.8;
      }

      /* Features Section */
      .features {
          display: flex;
          flex-wrap: wrap;
          justify-content: center;
          gap: 30px;
      }

      .feature-card {
          background: #1d3557;
          border-radius: 10px;
          box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
          padding: 20px;
          width: 300px;
          text-align: left;
          color: #f1faee;
          transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      .feature-card:hover {
          transform: translateY(-10px);
          box-shadow: 0 12px 20px rgba(0, 0, 0, 0.4);
      }

      .icon-wrapper {
          font-size: 2rem;
          color: #fff;
          margin-bottom: 15px;
      }

      .feature-card h4 {
          font-size: 1.3rem;
          font-weight: bold;
          margin-bottom: 15px;
          color: #fff;
      }

      .feature-card p {
          font-size: 0.9rem;
          line-height: 1.5;

          color: #fff;
      }

      /* CTA Button */

      .service-two {
          padding: 50px 0;
          background-color: #f1f1f1;
      }

      .heading-one-subtitle {
          font-size: 18px;
          color: #091e57;
          font-weight: 500;
          text-transform: uppercase;
      }

      .heading-one-title {
          color: #081D55;
          font-weight: 700;
          margin-bottom: 15px;
      }

      .custom-card-service {

          border-radius: 8px;
          background: #fff;
          box-shadow: none;
          overflow: hidden;
          transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      .custom-card-service:hover {
          transform: translateY(-10px);
          /* box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2); */
          box-shadow: none;
      }

      .image-section-service img {
          width: 100%;
          height: 200px;
          object-fit: cover;
          border-bottom: 1px solid #e0e0e0;
      }

      .content {
          padding: 15px;
          text-align: center;
      }

      .content .title {
          font-size: 20px;
          font-weight: 600;
          margin-bottom: 10px;
          color: #333;
      }

      .content p {
          font-size: 16px;
          color: #666;
          margin: 0;
          min-height: 60px;
      }

      @media (max-width: 768px) {
          .heading-one-title {
              font-size: 28px;
          }

          .section-header {
              font-size: 18px;
          }

          .section-subtitle {
              font-size: 20px;
          }

          .section-description {
              font-size: 14px;
          }

          .custom-card-service {
              margin-bottom: 20px;

          }

          .custom-card-service:hover {

              transform: translateY(-15px);
          }

          .desk {
              display: none;
          }

          .mobmt {
              margin-top: 0px !important;
          }

          h5 {
              font-size: 14px;
          }

          .content p {
              font-size: 14px;
              color: #666;
              margin: 0;
              min-height: 60px;
          }

          .feature-card:hover {
              transform: translateY(-15px);

          }
      }
  </style>
  <!---ABout ---->

  <div class="service-two section-padding-bottom">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <!-- Heading Start -->
                  <div class="pb-4 wow fadeIn mt-md-4 mt-2" data-wow-duration="0.1s" style="animation-name: fadeIn;">
                      <div class="row justify-content-around">
                          <div class="col-md-6" style="    text-align: center;">
                              <span class="heading-one-subtitle text-center">Our Services</span>
                              <h1 class="heading-one-title">What we offer</h1>
                              <h5>Jaguar offers comprehensive and end-to-end market-making & sourcing services. We deal in the following materials.</h5>
                          </div>
                      </div>
                  </div>
                  <!-- Heading End -->
              </div>
          </div>

          <div class="row gy-4 mt-md-5 mt-0 justify-content-center">
              <div class="col-md-4 col-sm-6 mt-md-0 mt-3">
                  <!-- Single Service Start -->
                  <div class="custom-card-service">
                      <div class="image-section-service">
                          <img src="<?php echo base_url(); ?>/images/service/steel.jpg" alt="Steel" class="img-fluid">
                      </div>
                      <div class="content">
                          <h4 class="title">Steel</h4>
                          <p>HMS 1, HMS 2, Shredded steel, Tin can bundle, Bales, Turnings, Clippings</p>
                      </div>
                  </div>
              </div>
              <div class="col-md-1 desk" style="width:15px;"></div>
              <div class="col-md-4 col-sm-6 mt-md-0 mt-3">
                  <div class="custom-card-service">
                      <div class="image-section-service">
                          <img src="<?php echo base_url(); ?>/images/service/alum.jpg" alt="Aluminium" class="img-fluid">
                      </div>
                      <div class="content">
                          <h4 class="title">Aluminium</h4>
                          <p>Zorba, Taint Tabor, Mix Aluminium, Motor scrap</p>
                      </div>
                  </div>
              </div>

          </div>
          <div class="row gy-4  justify-content-center mobmt" style="margin-top:30px;">

              <div class="col-md-4 col-sm-6 mt-md-0 mt-3">
                  <div class="custom-card-service">
                      <div class="image-section-service">
                          <img src="<?php echo base_url(); ?>/images/service/ruber.jpg" alt="Rubber" class="img-fluid">
                      </div>
                      <div class="content">
                          <h4 class="title">Rubber</h4>
                          <p>Personal Car Radials, Shredded rubber scrap, Truck Bus Radials</p>
                      </div>
                  </div>
              </div>
              <div class="col-md-1 desk" style="width:20px;"></div>
              <div class="col-md-4 col-sm-6 mt-md-0 mt-3">
                  <div class="custom-card-service">
                      <div class="image-section-service">
                          <img src="<?php echo base_url(); ?>/images/service/paper.jpg" alt="Paper" class="img-fluid">
                      </div>
                      <div class="content">
                          <h4 class="title">Paper</h4>
                          <p>Old corrugated containers</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <section class="why-choose-us">
      <div class="container">
          <h2 class="section-header">
              <span class="accent">Why Choose Us</span>
          </h2>
          <h3 class="section-subtitle">Reliability, Integrity & Quality Assurance</h3>
          <p class="section-description" style>
              At Jaguar Steel and Coal Pte Ltd., we offer a comprehensive range of high-quality products tailored to meet the diverse needs of the metals and steel industry.
          </p>
          <div class="features">
              <!-- Feature 1 -->
              <div class="feature-card">
                  <div class="icon-wrapper">
                      <i class="fas fa-shield-alt"></i>
                  </div>
                  <h4>Reliability and Integrity</h4>
                  <p>
                      With a focus on responsible trading, we conduct extensive due diligence to ensure the reliability of all transactions. Our in-house inspection teams in Europe, the USA, and Latin America ensure every shipment meets rigorous quality standards.
                  </p>
              </div>
              <!-- Feature 2 -->
              <div class="feature-card">
                  <div class="icon-wrapper">
                      <i class="fas fa-clipboard-check"></i>
                  </div>
                  <h4>Quality Assurance</h4>
                  <p>
                      Given the high value of non-ferrous scrap, we prioritize stringent quality control. Vendors are thoroughly vetted through personal inspections and detailed checks by our in-house team to ensure top-grade materials.
                  </p>
              </div>
              <!-- Feature 3 -->
              <div class="feature-card">
                  <div class="icon-wrapper">
                      <i class="fas fa-chart-line"></i>
                  </div>
                  <h4>Strategic Market Insights</h4>
                  <p>
                      In a rapidly evolving market, our strategic insights help partners navigate fluctuations and seize opportunities. We provide market analysis and adapt to changing conditions for maximum client benefit.
                  </p>
              </div>
          </div>

      </div>
  </section>


  <script>
      function toggleAccordion(header) {
          const body = header.nextElementSibling;
          const isActive = body.style.display === "block";

          // Close all accordion bodies
          document.querySelectorAll(".accordion-body").forEach((body) => {
              body.style.display = "none";
          });

          // Toggle current accordion
          if (!isActive) {
              body.style.display = "block";
          }
      }
  </script>