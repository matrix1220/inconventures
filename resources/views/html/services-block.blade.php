<section class="services-block">
  <div class="container">
    <h2 class="section-title">{{ $title }}</h2>
    <p class="section-description">{{ $description }}</p>
    <h5 class="fancy-title">
      <span>
        Services We Offer
      </span>
    </h5>

    <div class="services-wrapper">
      @include('html.service-item', [
        "icon" => "marketing-i.svg",
        "name" => "Marketing Solutions",
        "description" => "We create digital marketing strategy across digital channels that help our clients grow and stay ahead of the competition.",
        "steps" => ["Social Media Marketing (SMM)", "eCommerce", "Search Engine Optimisation", "Search Engine Marketing"]
      ])
      @include('html.service-item', [
        "icon" => "software-i.svg",
        "name" => "Software Design & Development",
        "description" => "We believe content, brand and design are the key aspects that communicate your business values to your customers and we help you make a lasting impact.",
        "steps" => ["Branding", "UI/UX Design", "Custom Web Development", "Content Creation"]
      ])
      @include('html.service-item', [
        "icon" => "mobileapp-i.svg",
        "name" => "Mobile App Development",
        "description" => "Our team of talented developers work with all major digital platforms to create a robust omni-channel digital customer experience.",
        "steps" => ["Plan", "Develop", "Test", "Launch"]
      ])
      @include('html.service-item', [
        "icon" => "business-i.svg",
        "name" => "Business Support & HR Solutions",
        "description" => "We will help the clients to develop their business, we will study their business to promote it, and to develop it.",
        "steps" => ["Automation", "Optimisation", "Analysis & Insights", "Reporting"]
      ])
      @include('html.service-item', [
        "icon" => "consulting-i.svg",
        "name" => "International Consulting & Project Management",
        "description" => "It covers bringing foreign companies to collaboration, and import export solutions.",
        "steps" => ["Identifying new partner", "Develop strategic plans", "Launch or Execution", "Monitor & Control"]
      ])
      @include('html.service-item', [
        "icon" => "estate-i.svg",
        "name" => "Real Estate & Property Management",
        "description" => "We provide the service for people to buy and sell their properties. We will help people to find their right properties",
        "steps" => ["Tenant Screening", "Maintenance & Repair", "Rent Collection", "Management Agreement"]
      ])
    </div>
  </div>
</section>