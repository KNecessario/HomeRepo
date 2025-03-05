<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lhike ERP</title>
  <link rel="icon" type="image/x-icon" href="/image/icon/logoWithoutName.png">

  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="css/style.css" />
  <!--Font import Roboto Slab-->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://fontawesome.com/icons/location-dot?f=classic&s=solid" />
</head>

<body>
  <!--nav bar-->
  <nav class="navbar navbar-expand-lg d-flex justify-content-between">
    <a class="navbar-brand" href="#">
      <img src="image/logo.png" alt="logo" />
    </a>

    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse w-100" id="navbarNav">
      <div class="mx-auto d-flex justify-content-center">
        <ul class="nav nav-pills nav-fill">
          <li class="nav-item">
            <a class="nav-link" href="#containerfluid1">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#containerfluid3">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="releasenote.php">Release Note</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="documentation.php">Documentation</a>
          </li>
        </ul>
      </div>
    </div>

    <button class="btnContact">Contact Us</button>
  </nav>

  <!--Main Content-->
  <section class="container-fluid" id="containerfluid1" id="section1">
    <div class="container" id="layout1">
      <div class="container" id="title1">
        <h1>Grow Your Business with Unified IT Solutions</h1>
      </div>
      <div class="container" id="description1">
        <h2>
          A software system that combines the functionalities of Logistics,
          Human Resource, Inventory, Kanban, and E- commerce into a single
          platform.
        </h2>
      </div>
      <button id="btnLearnMore">Learn More</button>
    </div>
  </section>

  <!--Our Services-->
  <section class="container-fluid" id="containerfluid2" id="section2">
    <div class="container" id="layout2">
      <div class="container" id="title2">
        <h1>Our Services</h1>
      </div>

      <!-- Services Container -->
      <div class="container" id="grid-services">
        <!--Card-->
        <div class="card">
          <img
            src="image/BusinessIntegration.png"
            class="card-img-top"
            alt="Business Integration" />
          <div class="card-body">
            <h5 class="card-title">Business Integration</h5>
            <p class="card-text">
              Seamlessly unify logistics, human resources, inventory
              management, kanban workflows, and e-commerce into one
              comprehensive platform with LHIKE ERP.
            </p>
          </div>
        </div>

        <div class="card" class="card1">
          <img
            src="image/EnterpriseManagement.png"
            class="card-img-top"
            alt="Enterprise Management" />
          <div class="card-body">
            <h5 class="card-title">Enterprise Management</h5>
            <p class="card-text">
              Optimize and streamline your business operations with our
              comprehensive Enterprise Management solutions.
            </p>
          </div>
        </div>

        <div class="card" class="card1">
          <img
            src="image/CentralizedData.png"
            class="card-img-top"
            alt="Centralized Data" />
          <div class="card-body">
            <h5 class="card-title">Centralized Data</h5>
            <p class="card-text">
              Experience the power of centralized data management with LHIKE
              ERP.
            </p>
          </div>
        </div>

        <div class="card">
          <img
            src="image/streamlinedOperations.png"
            class="card-img-top"
            alt="Streamlined Operations"
            class="cardImg1" />
          <div class="card-body">
            <h5 class="card-title">Streamlined Operations</h5>
            <p class="card-text">
              Achieve greater efficiency and productivity with LHIKE ERP's
              streamlined operations.
            </p>
          </div>
        </div>

        <div class="card">
          <img
            src="image/ProcessAutomations.png"
            class="card-img-top"
            alt="Process Automations" />
          <div class="card-body">
            <h5 class="card-title">Process Automations</h5>
            <p class="card-text">
              Enhance your business efficiency with LHIKE ERP's process
              automation capabilities.
            </p>
          </div>
        </div>

        <div class="card" class="card1">
          <img
            src="image/OperationalEfficiency.png"
            class="card-img-top"
            alt="Operational Efficiency" />
          <div class="card-body">
            <h5 class="card-title">Operational Efficiency</h5>
            <p class="card-text">
              Maximize your business's performance with LHIKE ERP's
              operational efficiency solutions.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
 <!-- Who we are -->
 <section class="container-fluid px-0 " id="containerfluid3">
  <div class="container-fluid text-center  p-0" id="layout3">
    <div class="container mb-4 text-center" id="containerTitle">
      <h5>What we believe</h5>
      <h3>
        At the heart of our mission is the belief that businesses, regardless of their size, should have access to 
        efficient and integrated solutions.
      </h3>
    </div>
    <div class="row align-items-center" id="wrapper1">
      <div class="col-lg-7 text-lg-start text-center px-4" id="leftWrap">
        <h1>Who we are?</h1>
        <h5>
          Valenin IT Services is your dedicated partner for comprehensive IT software solutions, committed to
          transforming your business through technology. We specialize in providing tailored services to meet the
          unique needs of each business, from small enterprises to large corporations. Our team of experts ensures
          seamless operations, offering innovative solutions designed to drive your success and keep you ahead in a
          competitive market.
        </h5>
      </div>
      <div class="col-lg-5 text-center" id="rightWrap">
        <img src="image/whoweare.png" alt="Who we are" class="img-fluid" id="imgWho" />
      </div>
    </div>
  </div>
</section>


  <!-- Our Mission -->
  <section class="container-fluid px-0" id="containerfluid4" id="section4">
    <div class="container-fluid px-0" id="layout4">
      <div class="containe px-0r" id="wrapper2">
        <div class="container" id="leftWrapMission">
          <img src="image/OurMission.png" alt="Our Mission" />
        </div>
        <div class="container" id="rightWrapMission">
          <h1>Our Mission</h1>
          <p>
            Our mission is to empower businesses through innovative and
            reliable IT solutions. We are committed to providing exceptional
            service and support, tailored to the unique needs of each client.
            Our goal is to enhance operational efficiency, foster growth, and
            drive success by leveraging the latest technologies and best
            practices in the industry. We strive to build long-lasting
            partnerships with our clients, helping them navigate the
            complexities of the digital landscape with confidence and ease.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Vision -->
  <!-- Our Vision -->
  <section class="container-fluid px-0" id="containerfluid5" id="section5">
    <div class="container-fluid px-0" id="layout5">
      <div class="container-fluid px-0" id="wrapper3">
        <div class="container" id="leftWrapVision">
          <h1>Our Vision</h1>
          <p>
            At Valenin IT Services, we envision a world where businesses,
            regardless of size, have access to smart, scalable, and intuitive
            IT solutions. We are dedicated to leveraging technology to
            streamline business processes, drive growth, and unlock new
            opportunities for success.
          </p>
        </div>
        <div class="container" id="rightWrapVision">
          <img src="image/ourvision.png" alt="Our Vision" />
        </div>
      </div>
    </div>
  </section>

  <!--Valenin Position-->
  <div class="container-fluid" id="section6">
    <h1>We believe that <span>people</span> are everything</h1>
  </div>

  <div class="bodyContainer">
    <div class="member">
      <div class="card">
        <img src="image/Valenin/MaychellAlcorin.png" alt="Maam Maychell" />
        <div class="info">
          <p>
            Leads the vision, strategy, and growth of Company IT Services.
          </p>
        </div>
      </div>
      <p class="name">Maychell Alcorin</p>
    </div>

    <div class="member">
      <div class="card">
        <img src="image/Valenin/AinaMae.png" alt="Maam Maychell" />
        <div class="info">
          <p>
            ensures product quality by conducting thorough testing and
            identifying issues while also providing direct customer support,
            troubleshooting, and resolving inquiries.
          </p>
        </div>
      </div>
      <p class="name">Aina Mae Arroyo</p>
    </div>

    <div class="member">
      <div class="card">
        <img src="image/Valenin/JenealleMae.png" alt="Jenealle Mae" />
        <div class="info">
          <p>Manages executive tasks and crafts user-friendly designs.</p>
        </div>
      </div>
      <p class="name">Jenealle Mae Jimena</p>
    </div>

    <div class="member">
      <div class="card">
        <img src="image/Valenin/JenealleMae.png" alt="" />
        <div class="info">
          <p>
            responsible for designing, coding, and maintaining websites and
            web applications.
          </p>
        </div>
      </div>
      <p class="name">Karlo Estano</p>
    </div>

    <div class="member">
      <div class="card">
        <img src="image/Valenin/JenealleMae.png" alt="" />
        <div class="info">
          <p>
            responsible for designing, coding, and maintaining websites and
            web applications.
          </p>
        </div>
      </div>
      <p class="name">Paolo Vien Ker Patton</p>
    </div>

    <div class="member">
      <div class="card">
        <img src="image/Valenin/JenealleMae.png" alt="" />
        <div class="info">
          <p>
            focuses on automating and streamlining the development,
            deployment, and operations processes.
          </p>
        </div>
      </div>
      <p class="name">Mary Dorothy Joy Taala</p>
    </div>

    <div class="member">
      <div class="card">
        <img src="image/Valenin/JenealleMae.png" alt="" />
        <div class="info">
          <p>
            focuses on automating and streamlining the development,
            deployment, and operations processes.
          </p>
        </div>
      </div>
      <p class="name">Jennifer Sabado</p>
    </div>

    <div class="member">
      <div class="card">
        <img src="image/Valenin/JenealleMae.png" alt="" />
        <div class="info">
          <p>
            focuses on automating and streamlining the development,
            deployment, and operations processes.
          </p>
        </div>
      </div>
      <p class="name">Jose Phernando Lamud</p>
    </div>

    <div class="member">
      <div class="card">
        <img src="image/Valenin/JenealleMae.png" alt="" />
        <div class="info">
          <p>
            focuses on automating and streamlining the development,
            deployment, and operations processes.
          </p>
        </div>
      </div>
      <p class="name">Vesanie Marie Bernal</p>
    </div>
  </div>
  <!--Footer-->
  <div class="container-fluid" id="containerfluid6">
    <div class="container" id="layout6">
      <div class="container" id="leftFooter">
        <p>
          <img src="image/icon/map.png" alt=""> 3rd floor Plazuela de Molino, 9006 Molino Blvrd., Bacoor City, Cavite
        </p>
        <p>
          <img src="image/icon/gmail.png" alt=""> jeneallemae.valenin@gmail.com
        </p>
        <p>
          <img src="image/icon/phone.png" alt=""> +63 945 832 4620
        </p>
      </div>

      <div class="container m-0 p-0" id="rightFooter">
        <div class="container m-0 p-0" id="logoLayout">
          <img src="image/icon/valeninLogo.png" alt="Valenin Logo">
          <img src="image/icon/GencysLogo.png" alt="Gencys Logo">
        </div>

        <div class="newsletter-section">
          <h3>Subscribe to Our Newsletter</h3>
          <div class="container-fluid" id="newsDiv">
            <input type="email" placeholder="Enter your email" required>
            <button>Subscribe</button>
          </div>
          
        </div>
      </div>

    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const homeSections = [
        document.getElementById("containerfluid1"),
        document.getElementById("containerfluid2"),
      ];
      const aboutSections = [
        document.getElementById("containerfluid3"),
        document.getElementById("containerfluid4"),
        document.getElementById("containerfluid5"),
      ];

      const homeLink = document.querySelector(
        ".nav-link[href='#containerfluid1']"
      );
      const aboutLink = document.querySelector(
        ".nav-link[href='#containerfluid3']"
      );

      function updateActiveLink() {
        let scrollPosition = window.scrollY + window.innerHeight / 3;

        let isInHome = homeSections.some((section) => {
          let top = section.offsetTop;
          let bottom = top + section.clientHeight;
          return scrollPosition >= top && scrollPosition < bottom;
        });

        let isInAbout = aboutSections.some((section) => {
          let top = section.offsetTop;
          let bottom = top + section.clientHeight;
          return scrollPosition >= top && scrollPosition < bottom;
        });

        if (isInHome) {
          homeLink.classList.add("active");
          aboutLink.classList.remove("active");
        } else if (isInAbout) {
          aboutLink.classList.add("active");
          homeLink.classList.remove("active");
        } else {
          homeLink.classList.remove("active");
          aboutLink.classList.remove("active");
        }
      }

      window.addEventListener("scroll", updateActiveLink);
      updateActiveLink();
    });
  </script>
</body>

</html>