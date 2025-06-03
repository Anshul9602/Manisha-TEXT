 <!-- Breadcrumb Section Start -->
 <div class="section-padding breadcrumb" data-bg-image="/images/header.png">
        <div class="container">
            <div class="row">
                <div class="col-12 align-items-center text-center">
                    <!-- Breadcrumb Wrapper Start -->
                    <div class="breadcrumb-wrapper">
                        <h1 class="title">Erection and Commissioning</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="/">Home</a></li>
                            <li><span>Offerings</span></li>
                            <li><span>Erection and Commissioning</span></li>
                        </ul>
                    </div>
                    <!-- Breadcrumb Wrapper End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

     <!-----------main section----------------->

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 sm-12 culture">
            <img src="/images/offering/erection.png">
        </div>
        <div class="col-md-6 sm-12">
            <h2 class="marg">Erection and Commissioning</h2>
            <p>We are Turnkey contractors for Design, Construction, Erection and Commissioning of water and waste treatment plants, Supply, Erection & Commissioning of Onshore and Offshore Large Diameter Piping’s. We are undertaking Turnkey contracts for Water Supply projects, etc.</p>
        </div>
    </div>
</div>
<div class="container mt-5 mb-5">
    <div class="row">
        <p>We are Turnkey contractors for Design, Construction, Erection and Commissioning of water and waste treatment plants, Supply, Erection & Commissioning of Onshore and Offshore Large Diameter Piping’s.</p>
        <p>We are undertaking Turnkey contracts for Water Supply projects, Fire Fighting Projects etc. We are undertaking supply erection and commissioning of pressure sand filters. We undertake Civil Constructions. We can also lay Under Water Pipe lines like High Density Polyethylene Pipes of large Diameters.</p>
        <p>We undertake Construction and Commissioning of CIVIL Structures Like Sewage Treatment Plant Tanks, Swimming Pools, MS Fabricated Containerized Units, MS Fabrication Structures etc. Water being the fundamental requirement of human being we have specialists and we can offer an unique design and construction solution.</p>
        <p>By adopting competitive bidding method following all the technical standards in construction and use of premier products in construction, we strive for continual improvement in quality and provide it beyond the expectation of our customer’s. We have been involved in preparation of layout plans, detailed engineering design, estimation and prequalification of contractors, preparing tender documents, bid evaluation, supervision of construction and quality assurance certification.</p>
        </div>
    </div>
    <!-- sliders -->
<style>
    .slider-container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        .slider {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }
        .slide {
            min-width: 33.33%;
            transition: 0.5s;
            margin-right:10px;
        }
        .slide img {
            width: 100%;
        }
        .navigation {
            text-align: center;
            margin-top: 10px;
        }
        .navigation button {
            padding: 10px;
            margin: 5px;
            cursor: pointer;
        }
</style>

<div class="slider-container mt-5">
    <div class="slider">
        <!-- Add your images here -->
        <div class="slide"><img src="/images/comison/erect1.png" alt="Image 1"></div>
        <div class="slide"><img src="/images/comison/erect2.png" alt="Image 2"></div>
        <div class="slide"><img src="/images/comison/erect3.png" alt="Image 3"></div>
        <div class="slide"><img src="/images/comison/erect4.png" alt="Image 4"></div>
        <div class="slide"><img src="/images/comison/erect6.png" alt="Image 6"></div>
        <div class="slide"><img src="/images/comison/erect7.png" alt="Image 7"></div>
      
    </div>
</div>

<div class="navigation">
    <button id="prev">Prev</button>
    <button id="next">Next</button>
</div>


<script>
    const slider = document.querySelector('.slider');
    const slides = document.querySelectorAll('.slide');
    const prevBtn = document.getElementById('prev');
    const nextBtn = document.getElementById('next');

    let currentIndex = 0;
    const totalSlides = slides.length;
    const slidesPerView = 3;
    const maxIndex = totalSlides - slidesPerView;

    function updateSliderPosition() {
        slider.style.transform = `translateX(-${currentIndex * (100 / slidesPerView)}%)`;
    }

    prevBtn.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateSliderPosition();
        }
    });

    nextBtn.addEventListener('click', () => {
        if (currentIndex < maxIndex) {
            currentIndex++;
            updateSliderPosition();
        }
    });
</script>



<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-6 sm-12">
            <h2 class="marg">KEY COMPETENCIES:</h2>
            <ol>
                <li>• Use of skilled professionals.</li>
                <li>• Precisely drafted designs.</li>
                <li>• In time completion.</li>
            </ol>
        </div>
        <div class="col-md-6 sm-12 ir">
            <img src="/images/offering/erection2.png">
        </div>
    </div>
</div>

    <!-----------main section end------------->


      