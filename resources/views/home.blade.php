@extends('layouts.app')

@section('content')
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <h3 class="hero-subtitle">Welcome to agricultural products rural entrepreneurship management system</h3>
            <h1 class="hero-title">AGRICONNECT HUB</h1>
            <p class="hero-description">Empowering Rural Dreams, Nurturing Agricultural Growth - AgriConnect Hub cultivates prosperity from the roots up.</p>
            <div class="cta-buttons">
                <a href="#" class="cta-btn primary">SELL HERE</a>
                <a href="#" class="cta-btn secondary">BUY HERE</a>
            </div>
        </div>
    </div>
    
    <div class="hero-decoration">
        <div class="decoration-item"></div>
        <div class="decoration-item"></div>
        <div class="decoration-item"></div>
    </div>
</section>

<section class="features">
    <div class="container">
        <div class="section-header">
            <h2>How AgriConnect Works</h2>
            <p>Bridging the gap between farmers and markets through innovation</p>
        </div>
        
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#2A5D3C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 6V12L16 14" stroke="#2A5D3C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3>Real-Time Market Access</h3>
                <p>Connect directly with buyers and access live market prices to make informed decisions.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 4H18C18.5304 4 19.0391 4.21071 19.4142 4.58579C19.7893 4.96086 20 5.46957 20 6V20C20 20.5304 19.7893 21.0391 19.4142 21.4142C19.0391 21.7893 18.5304 22 18 22H6C5.46957 22 4.96086 21.7893 4.58579 21.4142C4.21071 21.0391 4 20.5304 4 20V6C4 5.46957 4.21071 4.96086 4.58579 4.58579C4.96086 4.21071 5.46957 4 6 4H8" stroke="#2A5D3C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15 2H9C8.44772 2 8 2.44772 8 3V5C8 5.55228 8.44772 6 9 6H15C15.5523 6 16 5.55228 16 5V3C16 2.44772 15.5523 2 15 2Z" stroke="#2A5D3C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3>Inventory Management</h3>
                <p>Easily track your produce, manage storage, and plan harvests with our intuitive tools.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#2A5D3C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M8 14C8 14 9.5 16 12 16C14.5 16 16 14 16 14" stroke="#2A5D3C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M9 9H9.01" stroke="#2A5D3C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15 9H15.01" stroke="#2A5D3C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3>Community Support</h3>
                <p>Join a network of like-minded farmers, share knowledge, and solve problems together.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 8V16" stroke="#2A5D3C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M8 12H16" stroke="#2A5D3C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M3 6H21C21.5523 6 22 6.44772 22 7V17C22 17.5523 21.5523 18 21 18H3C2.44772 18 2 17.5523 2 17V7C2 6.44772 2.44772 6 3 6Z" stroke="#2A5D3C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3>Secure Payments</h3>
                <p>Receive payments quickly and securely through our trusted payment system.</p>
            </div>
        </div>
    </div>
</section>

<section class="products-preview">
    <div class="container">
        <div class="section-header">
            <h2>Featured Products</h2>
            <p>Discover quality agricultural products from trusted farmers</p>
        </div>
        
        <div class="products-grid">
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.pexels.com/photos/2255935/pexels-photo-2255935.jpeg" alt="Organic Rice">
                    <div class="product-badge">Featured</div>
                </div>
                <div class="product-info">
                    <h3>Organic Rice</h3>
                    <p class="product-description">Premium quality organic rice grown without chemicals.</p>
                    <div class="product-meta">
                        <span class="product-price">$4.99/kg</span>
                        <button class="product-cart-btn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 22C9.55228 22 10 21.5523 10 21C10 20.4477 9.55228 20 9 20C8.44772 20 8 20.4477 8 21C8 21.5523 8.44772 22 9 22Z" stroke="#2A5D3C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20 22C20.5523 22 21 21.5523 21 21C21 20.4477 20.5523 20 20 20C19.4477 20 19 20.4477 19 21C19 21.5523 19.4477 22 20 22Z" stroke="#2A5D3C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M1 1H5L7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6" stroke="#2A5D3C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.pexels.com/photos/144248/potatoes-vegetables-erdfrucht-bio-144248.jpeg" alt="Fresh Potatoes">
                </div>
                <div class="product-info">
                    <h3>Fresh Potatoes</h3>
                    <p class="product-description">Locally grown potatoes, perfect for any dish.</p>
                    <div class="product-meta">
                        <span class="product-price">$2.49/kg</span>
                        <button class="product-cart-btn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 22C9.55228 22 10 21.5523 10 21C10 20.4477 9.55228 20 9 20C8.44772 20 8 20.4477 8 21C8 21.5523 8.44772 22 9 22Z" stroke="#2A5D3C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20 22C20.5523 22 21 21.5523 21 21C21 20.4477 20.5523 20 20 20C19.4477 20 19 20.4477 19 21C19 21.5523 19.4477 22 20 22Z" stroke="#2A5D3C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M1 1H5L7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6" stroke="#2A5D3C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.pexels.com/photos/2116020/pexels-photo-2116020.jpeg" alt="Organic Tomatoes">
                    <div class="product-badge">Sale</div>
                </div>
                <div class="product-info">
                    <h3>Organic Tomatoes</h3>
                    <p class="product-description">Vine-ripened tomatoes grown using organic practices.</p>
                    <div class="product-meta">
                        <span class="product-price">$3.29/kg</span>
                        <button class="product-cart-btn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 22C9.55228 22 10 21.5523 10 21C10 20.4477 9.55228 20 9 20C8.44772 20 8 20.4477 8 21C8 21.5523 8.44772 22 9 22Z" stroke="#2A5D3C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20 22C20.5523 22 21 21.5523 21 21C21 20.4477 20.5523 20 20 20C19.4477 20 19 20.4477 19 21C19 21.5523 19.4477 22 20 22Z" stroke="#2A5D3C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M1 1H5L7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6" stroke="#2A5D3C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.pexels.com/photos/39350/vegetables-basket-vegetable-basket-healthy-39350.jpeg" alt="Fresh Vegetables">
                </div>
                <div class="product-info">
                    <h3>Fresh Vegetables Mix</h3>
                    <p class="product-description">Seasonal mix of fresh vegetables from local farms.</p>
                    <div class="product-meta">
                        <span class="product-price">$12.99/box</span>
                        <button class="product-cart-btn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 22C9.55228 22 10 21.5523 10 21C10 20.4477 9.55228 20 9 20C8.44772 20 8 20.4477 8 21C8 21.5523 8.44772 22 9 22Z" stroke="#2A5D3C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20 22C20.5523 22 21 21.5523 21 21C21 20.4477 20.5523 20 20 20C19.4477 20 19 20.4477 19 21C19 21.5523 19.4477 22 20 22Z" stroke="#2A5D3C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M1 1H5L7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6" stroke="#2A5D3C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="view-more">
            <a href="/products" class="btn-view-more">View All Products</a>
        </div>
    </div>
</section>

<section class="testimonials">
    <div class="container">
        <div class="section-header">
            <h2>What Farmers Say</h2>
            <p>Success stories from our growing community</p>
        </div>
        
        <div class="testimonials-slider">
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <svg class="quote-icon" width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 11H6C5.46957 11 4.96086 10.7893 4.58579 10.4142C4.21071 10.0391 4 9.53043 4 9V7C4 6.46957 4.21071 5.96086 4.58579 5.58579C4.96086 5.21071 5.46957 5 6 5H8C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7V16C10 16.5304 9.78929 17.0391 9.41421 17.4142C9.03914 17.7893 8.53043 18 8 18H6" stroke="#F2C94C" stroke-opacity="0.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M20 11H16C15.4696 11 14.9609 10.7893 14.5858 10.4142C14.2107 10.0391 14 9.53043 14 9V7C14 6.46957 14.2107 5.96086 14.5858 5.58579C14.9609 5.21071 15.4696 5 16 5H18C18.5304 5 19.0391 5.21071 19.4142 5.58579C19.7893 5.96086 20 6.46957 20 7V16C20 16.5304 19.7893 17.0391 19.4142 17.4142C19.0391 17.7893 18.5304 18 18 18H16" stroke="#F2C94C" stroke-opacity="0.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <p>AgriConnect Hub has completely changed how I sell my produce. I've expanded my customer base and increased my profits by 30% in just six months!</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg" alt="John Doe">
                        </div>
                        <div class="author-info">
                            <h4>John Doe</h4>
                            <p>Rice Farmer, Central Region</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <svg class="quote-icon" width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 11H6C5.46957 11 4.96086 10.7893 4.58579 10.4142C4.21071 10.0391 4 9.53043 4 9V7C4 6.46957 4.21071 5.96086 4.58579 5.58579C4.96086 5.21071 5.46957 5 6 5H8C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7V16C10 16.5304 9.78929 17.0391 9.41421 17.4142C9.03914 17.7893 8.53043 18 8 18H6" stroke="#F2C94C" stroke-opacity="0.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M20 11H16C15.4696 11 14.9609 10.7893 14.5858 10.4142C14.2107 10.0391 14 9.53043 14 9V7C14 6.46957 14.2107 5.96086 14.5858 5.58579C14.9609 5.21071 15.4696 5 16 5H18C18.5304 5 19.0391 5.21071 19.4142 5.58579C19.7893 5.96086 20 6.46957 20 7V16C20 16.5304 19.7893 17.0391 19.4142 17.4142C19.0391 17.7893 18.5304 18 18 18H16" stroke="#F2C94C" stroke-opacity="0.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <p>The platform is incredibly user-friendly. I can manage all my produce listings, track sales, and communicate with buyers from my phone. It's a game-changer for small farmers like me.</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg" alt="Maria Garcia">
                        </div>
                        <div class="author-info">
                            <h4>Maria Garcia</h4>
                            <p>Vegetable Grower, Western Farms</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Ready to Transform Your Agricultural Business?</h2>
            <p>Join thousands of farmers who are already growing their businesses with AgriConnect Hub.</p>
            <div class="cta-buttons">
                <a href="#" class="btn-primary">Join Now - It's Free</a>
                <a href="#" class="btn-secondary">Schedule a Demo</a>
            </div>
        </div>
    </div>
</section>

<style>
    /* Features Section */
    .features {
        padding: 6rem 0;
    }
    
    .section-header {
        text-align: center;
        margin-bottom: 4rem;
    }
    
    .section-header h2 {
        font-size: 2.5rem;
        margin-bottom: 1rem;
        color: var(--color-primary);
        position: relative;
        display: inline-block;
    }
    
    .section-header h2::after {
        content: '';
        position: absolute;
        width: 60px;
        height: 3px;
        background-color: var(--color-accent);
        bottom: -0.75rem;
        left: 50%;
        transform: translateX(-50%);
    }
    
    .section-header p {
        font-size: 1.125rem;
        color: var(--color-text-muted);
        max-width: 600px;
        margin: 0 auto;
    }
    
    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 2rem;
    }
    
    .feature-card {
        background-color: #FFFFFF;
        padding: 2rem;
        border-radius: 8px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
        text-align: center;
    }
    
    .feature-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }
    
    .feature-icon {
        margin-bottom: 1.5rem;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background-color: #F8F9FA;
    }
    
    .feature-card h3 {
        font-size: 1.25rem;
        margin-bottom: 1rem;
        color: var(--color-primary);
    }
    
    .feature-card p {
        color: var(--color-text-muted);
        line-height: 1.6;
    }
    
    /* Products Section */
    .products-preview {
        padding: 6rem 0;
        background-color: var(--color-bg-light);
    }
    
    .products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 2rem;
    }
    
    .product-card {
        background-color: #FFFFFF;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }
    
    .product-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }
    
    .product-image {
        position: relative;
        height: 200px;
        overflow: hidden;
    }
    
    .product-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .product-card:hover .product-image img {
        transform: scale(1.05);
    }
    
    .product-badge {
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: var(--color-accent);
        color: var(--color-text-dark);
        padding: 0.25rem 0.75rem;
        border-radius: 4px;
        font-size: 0.75rem;
        font-weight: 500;
    }
    
    .product-info {
        padding: 1.5rem;
    }
    
    .product-info h3 {
        margin-bottom: 0.5rem;
        font-size: 1.25rem;
        color: var(--color-primary);
    }
    
    .product-description {
        color: var(--color-text-muted);
        margin-bottom: 1rem;
        font-size: 0.875rem;
        line-height: 1.6;
    }
    
    .product-meta {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .product-price {
        font-weight: 700;
        color: var(--color-primary);
        font-size: 1.125rem;
    }
    
    .product-cart-btn {
        background-color: transparent;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .product-cart-btn:hover {
        transform: translateY(-3px);
    }
    
    .view-more {
        text-align: center;
        margin-top: 3rem;
    }
    
    .btn-view-more {
        display: inline-block;
        padding: 0.75rem 2rem;
        background-color: transparent;
        color: var(--color-primary);
        border: 2px solid var(--color-primary);
        border-radius: 4px;
        font-weight: 500;
        transition: all 0.3s ease;
    }
    
    .btn-view-more:hover {
        background-color: var(--color-primary);
        color: #FFFFFF;
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }
    
    /* Testimonials Section */
    .testimonials {
        padding: 6rem 0;
    }
    
    .testimonials-slider {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(400px, 1fr));
        gap: 2rem;
    }
    
    .testimonial-card {
        background-color: #FFFFFF;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }
    
    .testimonial-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }
    
    .testimonial-content {
        padding: 2rem;
        position: relative;
    }
    
    .quote-icon {
        margin-bottom: 1rem;
    }
    
    .testimonial-content p {
        color: var(--color-text-dark);
        line-height: 1.6;
        margin-bottom: 1.5rem;
        font-size: 1rem;
    }
    
    .testimonial-author {
        display: flex;
        align-items: center;
    }
    
    .author-avatar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        overflow: hidden;
        margin-right: 1rem;
    }
    
    .author-avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .author-info h4 {
        margin: 0;
        font-size: 1rem;
        color: var(--color-primary);
    }
    
    .author-info p {
        margin: 0;
        font-size: 0.875rem;
        color: var(--color-text-muted);
    }
    
    /* CTA Section */
    .cta-section {
        padding: 6rem 0;
        background-color: var(--color-primary);
        color: #FFFFFF;
    }
    
    .cta-content {
        text-align: center;
        max-width: 800px;
        margin: 0 auto;
    }
    
    .cta-content h2 {
        font-size: 2.5rem;
        margin-bottom: 1.5rem;
    }
    
    .cta-content p {
        font-size: 1.125rem;
        margin-bottom: 2rem;
        opacity: 0.9;
    }
    
    .cta-buttons {
        display: flex;
        justify-content: center;
        gap: 1.5rem;
    }
    
    .btn-primary {
        padding: 1rem 2rem;
        background-color: var(--color-accent);
        color: var(--color-text-dark);
        border-radius: 4px;
        font-weight: 500;
        transition: all 0.3s ease;
    }
    
    .btn-secondary {
        padding: 1rem 2rem;
        background-color: transparent;
        color: #FFFFFF;
        border: 2px solid #FFFFFF;
        border-radius: 4px;
        font-weight: 500;
        transition: all 0.3s ease;
    }
    
    .btn-primary:hover, .btn-secondary:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }
    
    .btn-primary:hover {
        background-color: var(--color-accent-hover);
    }
    
    .btn-secondary:hover {
        background-color: rgba(255, 255, 255, 0.1);
    }
    
    /* Responsive Styles */
    @media (max-width: 768px) {
        .features-grid, .products-grid, .testimonials-slider {
            grid-template-columns: 1fr;
        }
        
        .section-header h2 {
            font-size: 2rem;
        }
        
        .cta-content h2 {
            font-size: 2rem;
        }
        
        .cta-buttons {
            flex-direction: column;
            gap: 1rem;
        }
    }
</style>
@endsection