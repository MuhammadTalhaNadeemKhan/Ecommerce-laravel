
@extends('frontend.layouts.app')  

@section('title', 'faq')

@section('content') 

<div class="container-fluid my-5 mt-9 p-4">
          
          {{-- <div class="border rounded p-4 mb-5">
            <h2 class="mb-4 text-center">Furniture and Quality</h2>
        
            <div class="mb-3">
              <h5>What materials are used in your furniture?</h5>
              <p>We use high-quality materials such as solid wood, engineered wood, premium upholstery fabrics, and eco-friendly finishes to ensure durability and style.</p>
            </div>
        
            <div class="mb-3">
              <h5>Is your furniture eco-friendly?</h5>
              <p>Yes, our furniture is crafted using responsibly sourced materials and eco-friendly processes to reduce our environmental footprint while delivering lasting quality.</p>
            </div>
        
            <div class="mb-3">
              <h5>How do I care for my furniture?</h5>
              <p>
                Proper maintenance extends the life of your furniture:
                <ul>
                  <li>Clean with a soft, dry cloth to remove dust.</li>
                  <li>Avoid direct sunlight to prevent fading.</li>
                  <li>Use coasters and mats to protect surfaces.</li>
                </ul>
              </p>
            </div>
        
            <div class="mb-3">
              <h5>Do you offer customizable furniture?</h5>
              <p>Yes, some products can be customized in terms of size, fabric, and finish. Check product details for customization options.</p>
            </div>
        
            <div class="mb-3">
              <h5>Are your products tested for quality?</h5>
              <p>Every product undergoes rigorous quality checks, including material inspection, durability testing, and finish assessment to ensure it meets our high standards.</p>
            </div>
          </div> --}}
          <div class="border rounded p-4 mb-5">
            <h2 class="mb-4 text-center">Frequently Asked Questions</h2>
        
            @forelse ($faqs as $faq)
                <div class="mb-3">
                    <h5>{{ $faq->question }}</h5>
                    <p>{{ $faq->answer }}</p>
                </div>
            @empty
                <div class="mb-3">
                    <p>No FAQs available at the moment. Please check back later.</p>
                </div>
            @endforelse
        </div>
        
        
          
          <hr class="my-5">
        
          
          <div class="border rounded p-4">
            <h2 class="mb-4 text-center">Delivery, Offers, and Support</h2>
        
            <div class="mb-3">
              <h5>How fast is delivery?</h5>
              <p>We offer fast, reliable delivery within 3-7 business days for most locations. Delivery times may vary based on your area.</p>
            </div>
        
            <div class="mb-3">
              <h5>Is furniture assembly included?</h5>
              <p>Yes, free assembly is included for eligible products. Our team will assemble the furniture at your location upon delivery.</p>
            </div>
        
            <div class="mb-3">
              <h5>Do you offer returns and exchanges?</h5>
              <p>Yes, we have a hassle-free return and exchange policy. Returns are accepted within 30 days of delivery for eligible items.</p>
            </div>
        
            <div class="mb-3">
              <h5>What warranty do you offer on products?</h5>
              <p>We provide a 1-year warranty on most products, covering manufacturing defects and ensuring peace of mind with your purchase.</p>
            </div>
        
            <div class="mb-3">
              <h5>Do you provide customer support?</h5>
              <p>Yes, our customer support team is available 24/7 to assist with any inquiries, order tracking, or post-purchase support.</p>
            </div>
        
            <div class="mb-3">
              <h5>Are there ongoing promotions or discounts?</h5>
              <p>We frequently offer discounts and special deals. Subscribe to our newsletter or follow us on social media for updates on promotions.</p>
            </div>
        
            <div class="mb-3">
              <h5>Can I track my order?</h5>
              <p>Yes, once your order ships, you’ll receive a tracking link via email or SMS to monitor your delivery status in real-time.</p>
            </div>
          </div>
        </div>
        
     
@endsection
