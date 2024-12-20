<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FreshFarm - Revolutionizing Agriculture</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <!-- Add Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@400;500;600&display=swap"
      rel="stylesheet"
    />
    <!-- Add Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      body {
        font-family: "Inter", "Poppins", sans-serif;
      }

      /* Hero Section Overlay */
      .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
      }

      .hero-content {
        z-index: 10;
        position: relative;
      }

      .animate-bounce {
        animation: bounce 2s infinite;
      }

      @keyframes bounce {
        0%,
        100% {
          transform: translateY(0);
        }
        50% {
          transform: translateY(-15px);
        }
      }

      /* Scroll Animations */
      .reveal {
        opacity: 0;
        transform: translateY(50px);
        transition: opacity 0.6s ease-out, transform 0.6s ease-out;
      }

      .reveal.visible {
        opacity: 1;
        transform: translateY(0);
      }

      /* Section Dividers */
      .custom-shape-divider-top-1626888901 {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        overflow: hidden;
        line-height: 0;
      }

      .custom-shape-divider-top-1626888901 svg {
        position: relative;
        display: block;
        width: calc(100% + 1.3px);
        height: 150px;
      }

      .custom-shape-divider-bottom-1626888901 {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        overflow: hidden;
        line-height: 0;
      }

      .custom-shape-divider-bottom-1626888901 svg {
        position: relative;
        display: block;
        width: calc(100% + 1.3px);
        height: 150px;
      }

      /* Button Hover Animation */
      button:hover {
        transform: scale(1.05);
        transition: transform 0.2s;
      }

      /* Responsive adjustments */
      @media (max-width: 768px) {
        h1 {
          font-size: 3rem;
        }

        p {
          font-size: 1.2rem;
        }

        .bg-cover {
          background-position: center;
          background-size: cover;
        }
      }
    </style>
  </head>
  <body class="bg-gray-300 font-sans">
    <!-- Hero Section -->
    <section
      class="relative h-screen text-white flex flex-col justify-center items-center bg-cover"
      style="background: linear-gradient(to bottom, #367ec9, white)"
    >
      <div class="hero-overlay"></div>
      <div class="hero-content text-center flex flex-col items-center">
        <!-- Add the FreshFarm image centered -->
        <img src="hero.png" alt="FreshFarm Logo" class="mb-6 mx-auto" />

        <!-- Main headline -->
        <h1 class="text-6xl font-bold mb-6">
          Fresh Connections. Sustainable Sources.
        </h1>
        <p class="text-2xl mb-8">
          Empowering Local Farmers. Elevating Your Business.
        </p>
        <a
          href="#features"
          class="bg-blue-700 hover:bg-blue-900 text-white font-bold py-3 px-8 rounded-full transition animate-bounce"
          >Explore Fresh Sources</a
        >
      </div>
      <!-- Adding clouds as background elements -->
      <div class="absolute top-0 left-0 right-0">
        <img
          src="cloud2.png"
          alt="Cloud"
          class="absolute right-1 opacity-50 w-96"
        />
      </div>
    </section>

    <!-- About Section -->
    <section
      id="about"
      class="py-20 bg-gradient-to-r from-green-100 to-green-50"
    >
      <div class="container mx-auto text-center px-6">
        <!-- Adding a farm-related SVG icon below the text -->
        <div class="relative w-full flex justify-center mt-2">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 256 256"
            width="256"
            height="256"
          >
            <image
              href="corn.png"
              width="256"
              height="256"
              preserveAspectRatio="xMidYMid meet"
            />
          </svg>
        </div>
        <h2
          class="text-5xl font-bold text-gray-800 mb-6 font-poppins tracking-wide"
        >
          About FreshFarm
        </h2>
        <p
          class="text-xl max-w-3xl mx-auto text-gray-700 leading-relaxed font-inter mb-2"
        >
          FreshFarm connects cooperatives and intermediaries to companies,
          bringing the best of local produce to sustainable supply chains and
          bridging the gap with seamless, reliable connections.
        </p>

        <!-- Button (optional CTA) -->
        <div class="mt-10">
          <a
            href="#learn-more"
            class="bg-blue-700 hover:bg-blue-900 text-white font-bold py-3 px-6 rounded-full transition-transform transform hover:scale-105 duration-300 shadow-lg hover:shadow-2xl"
          >
            Learn More
          </a>
        </div>
      </div>
    </section>

    <!-- Key Features Section -->
    <section id="features" class="bg-green-100 py-20 relative z-20">
      <h2 class="text-4xl font-semibold text-center mb-10 relative z-30">
        Key Features of FreshFarm
      </h2>

      <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-10 relative z-30">
        <div class="bg-white p-8 rounded-lg shadow-lg">
          <h3 class="text-2xl font-semibold mb-4">
            Katalog Produk & Pencarian
          </h3>
          <p>
            FreshFarm provides a structured product catalog making it easy to
            find fresh agricultural products and logistics services according to
            your needs.
          </p>
        </div>
        <div class="bg-white p-8 rounded-lg shadow-lg">
          <h3 class="text-2xl font-semibold mb-4">
            Transaksi Aman & Transparan
          </h3>
          <p>
            With an integrated payment system, FreshFarm guarantees secure
            transactions and displays transparent pricing, including all
            additional fees.
          </p>
        </div>
        <div class="bg-white p-8 rounded-lg shadow-lg">
          <h3 class="text-2xl font-semibold mb-4">
            Notifikasi & Update Produk
          </h3>
          <p>
            FreshFarm provides real-time notifications for new products and
            special promotions, helping users to stay updated with important
            offers.
          </p>
        </div>
        <div class="bg-white p-8 rounded-lg shadow-lg">
          <h3 class="text-2xl font-semibold mb-4">Logistik Terintegrasi</h3>
          <p>
            Users can choose shipping methods and get estimates thanks to
            integration with local logistics providers.
          </p>
        </div>
      </div>

      <!-- Space for the mobile app screenshot -->
      <div class="text-center mt-16 relative z-30">
        <img src="prototype.png" alt="Mobile App Screenshot" class="mx-auto" />
      </div>

      <!-- Enlarged Bottom Triangle Divider -->
      <div class="custom-shape-divider-bottom-1626888901">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 1440 320"
          preserveAspectRatio="none"
        >
          <path
            fill="#f0fff4"
            fill-opacity="1"
            d="M0,0L1440,96L1440,320L0,320Z"
          ></path>
        </svg>
      </div>
    </section>

    <!-- How It Works Section -->
    <section id="how-it-works" class="py-20 bg-white">
      <h2 class="text-4xl font-semibold text-center mb-10">
        How FreshFarm Works
      </h2>
      <div class="max-w-5xl mx-auto grid md:grid-cols-3 gap-10">
        <div
          class="text-center hover:scale-105 transition-transform duration-300"
        >
          <i class="fas fa-search fa-2x mb-2 text-blue-500"></i>
          <h3 class="text-2xl font-semibold mb-2">Step 1: Browse & Discover</h3>
          <p class="text-gray-600">
            Companies can browse and find the best local resources.
          </p>
        </div>
        <div
          class="text-center hover:scale-105 transition-transform duration-300"
        >
          <i class="fas fa-shopping-cart fa-2x mb-2 text-blue-500"></i>
          <h3 class="text-2xl font-semibold mb-2">
            Step 2: Order & Pay Securely
          </h3>
          <p class="text-gray-600">
            All transactions take place quickly and securely on the platform.
          </p>
        </div>
        <div
          class="text-center hover:scale-105 transition-transform duration-300"
        >
          <i class="fas fa-truck fa-2x mb-2 text-blue-500"></i>
          <h3 class="text-2xl font-semibold mb-2">Step 3: Reliable Delivery</h3>
          <p class="text-gray-600">
            Products are delivered on time and with expected quality.
          </p>
        </div>
      </div>
    </section>

    <!-- Final Call to Action -->
    <section
  id="cta"
  class="bg-gradient-to-r from-blue-500 to-blue-700 text-white py-20 text-center"
>
  <h2 class="text-4xl font-bold mb-6">
    Ready to Revolutionize Agriculture?
  </h2>
  <p class="text-lg mb-8">
    Join FreshFarm in connecting local producers and sustainable businesses.
  </p>
  <div class="flex flex-col sm:flex-row justify-center gap-4">
    <a
      href="/homepage"
      class="bg-white text-blue-700 font-semibold py-3 px-8 rounded-full hover:bg-gray-100 transition"
    >
      Get Started
    </a>
    <a
      href="/admin/products"
      class="bg-gray-800 text-white font-semibold py-3 px-8 rounded-full hover:bg-gray-700 transition"
    >
      Supplier Pages
    </a>
  </div>
</section>

    <!-- Footer -->
    <footer class="py-6 bg-gray-800 text-white text-center">
      <p class="text-sm">&copy; 2024 FreshFarm. All Rights Reserved.</p>
    </footer>

    <!-- Scroll Reveal JS -->
    <script>
      // Scroll reveal functionality
      const revealElements = document.querySelectorAll(".reveal");

      const handleScroll = () => {
        for (const element of revealElements) {
          const bounding = element.getBoundingClientRect();
          if (bounding.top < window.innerHeight - 100) {
            element.classList.add("visible");
          }
        }
      };

      window.addEventListener("scroll", handleScroll);
    </script>
    <script>
      window.va =
        window.va ||
        function () {
          (window.vaq = window.vaq || []).push(arguments);
        };
    </script>
    <script defer src="/_vercel/insights/script.js"></script>
  </body>
</html>
