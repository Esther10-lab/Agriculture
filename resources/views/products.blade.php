@extends('layouts.app')

@section('content')
<section class="page-header">
    <div class="container">
        <h1>Products</h1>
        <p>Discover quality agricultural products from trusted farmers</p>
    </div>
</section>

<section class="products-section">
    <div class="container">
        <div class="products-filters">
            <div class="search-filter">
                <input type="text" placeholder="Search products..." class="search-input">
                <button class="search-btn">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M21 21L16.65 16.65" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
            <div class="filter-group">
                <select class="filter-select">
                    <option value="">All Categories</option>
                    <option value="grains">Grains</option>
                    <option value="vegetables">Vegetables</option>
                    <option value="fruits">Fruits</option>
                    <option value="dairy">Dairy</option>
                    <option value="spices">Spices</option>
                </select>
                <select class="filter-select">
                    <option value="">Sort By</option>
                    <option value="price-low">Price: Low to High</option>
                    <option value="price-high">Price: High to Low</option>
                    <option value="newest">Newest First</option>
                    <option value="rating">Highest Rated</option>
                </select>
            </div>
        </div>
        
        <div class="products-grid">
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.pexels.com/photos/2255935/pexels-photo-2255935.jpeg" alt="Organic Rice">
                    <div class="product-badge">Featured</div>
                    <div class="product-actions">
                        <button class="product-action-btn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 22C9.55228 22 10 21.5523 10 21C10 20.4477 9.55228 20 9 20C8.44772 20 8 20.4477 8 21C8 21.5523 8.44772 22 9 22Z" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20 22C20.5523 22 21 21.5523 21 21C21 20.4477 20.5523 20 20 20C19.4477 20 19 20.4477 19 21C19 21.5523 19.4477 22 20 22Z" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M1 1H5L7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <button class="product-action-btn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 20.25C12 20.25 2.625 15 2.625 8.62501C2.625 7.49803 3.01546 6.40585 3.72996 5.53431C4.44445 4.66277 5.43884 4.06657 6.54909 3.84864C7.65933 3.6307 8.81628 3.80683 9.82139 4.35001C10.8265 4.89318 11.5996 5.76567 12 6.80626L12 6.80626C12.4004 5.76567 13.1735 4.89318 14.1786 4.35001C15.1837 3.80683 16.3407 3.6307 17.4509 3.84864C18.5612 4.06657 19.5555 4.66277 20.27 5.53431C20.9845 6.40585 21.375 7.49803 21.375 8.62501C21.375 15 12 20.25 12 20.25Z" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="product-info">
                    <div class="product-category">Grains</div>
                    <h3>Organic Rice</h3>
                    <div class="product-rating">
                        <div class="stars">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="#F2C94C" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="#F2C94C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="#F2C94C" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="#F2C94C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="#F2C94C" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="#F2C94C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="#F2C94C" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="#F2C94C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="#F2C94C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="rating-count">(24)</span>
                    </div>
                    <p class="product-description">Premium quality organic rice grown without chemicals.</p>
                    <div class="product-meta">
                        <span class="product-price">$4.99/kg</span>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
            </div>
            
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.pexels.com/photos/144248/potatoes-vegetables-erdfrucht-bio-144248.jpeg" alt="Fresh Potatoes">
                    <div class="product-actions">
                        <button class="product-action-btn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 22C9.55228 22 10 21.5523 10 21C10 20.4477 9.55228 20 9 20C8.44772 20 8 20.4477 8 21C8 21.5523 8.44772 22 9 22Z" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20 22C20.5523 22 21 21.5523 21 21C21 20.4477 20.5523 20 20 20C19.4477 20 19 20.4477 19 21C19 21.5523 19.4477 22 20 22Z" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M1 1H5L7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <button class="product-action-btn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 20.25C12 20.25 2.625 15 2.625 8.62501C2.625 7.49803 3.01546 6.40585 3.72996 5.53431C4.44445 4.66277 5.43884 4.06657 6.54909 3.84864C7.65933 3.6307 8.81628 3.80683 9.82139 4.35001C10.8265 4.89318 11.5996 5.76567 12 6.80626L12 6.80626C12.4004 5.76567 13.1735 4.89318 14.1786 4.35001C15.1837 3.80683 16.3407 3.6307 17.4509 3.84864C18.5612 4.06657 19.5555 4.66277 20.27 5.53431C20.9845 6.40585 21.375 7.49803 21.375 8.62501C21.375 15 12 20.25 12 20.25Z" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="product-info">
                    <div class="product-category">Vegetables</div>
                    <h3>Fresh Potatoes</h3>
                    <div class="product-rating">
                        <div class="stars">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="#F2C94C" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="#F2C94C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="#F2C94C" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="#F2C94C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="#F2C94C" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="#F2C94C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="#F2C94C" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="#F2C94C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="#F2C94C" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="#F2C94C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="rating-count">(42)</span>
                    </div>
                    <p class="product-description">Locally grown potatoes, perfect for any dish.</p>
                    <div class="product-meta">
                        <span class="product-price">$2.49/kg</span>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
            </div>
            
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.pexels.com/photos/2116020/pexels-photo-2116020.jpeg" alt="Organic Tomatoes">
                    <div class="product-badge">Sale</div>
                    <div class="product-actions">
                        <button class="product-action-btn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 22C9.55228 22 10 21.5523 10 21C10 20.4477 9.55228 20 9 20C8.44772 20 8 20.4477 8 21C8 21.5523 8.44772 22 9 22Z" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20 22C20.5523 22 21 21.5523 21 21C21 20.4477 20.5523 20 20 20C19.4477 20 19 20.4477 19 21C19 21.5523 19.4477 22 20 22Z" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M1 1H5L7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <button class="product-action-btn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 20.25C12 20.25 2.625 15 2.625 8.62501C2.625 7.49803 3.01546 6.40585 3.72996 5.53431C4.44445 4.66277 5.43884 4.06657 6.54909 3.84864C7.65933 3.6307 8.81628 3.80683 9.82139 4.35001C10.8265 4.89318 11.5996 5.76567 12 6.80626L12 6.80626C12.4004 5.76567 13.1735 4.89318 14.1786 4.35001C15.1837 3.80683 16.3407 3.6307 17.4509 3.84864C18.5612 4.06657 19.5555 4.66277 20.27 5.53431C20.9845 6.40585 21.375 7.49803 21.375 8.62501C21.375 15 12 20.25 12 20.25Z" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="product-info">
                    <div class="product-category">Vegetables</div>
                    <h3>Organic Tomatoes</h3>
                    <div class="product-rating">
                        <div class="stars">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="#F2C94C" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="#F2C94C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="#F2C94C" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="#F2C94C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="#F2C94C" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="#F2C94C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="#F2C94C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="#F2C94C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="rating-count">(18)</span>
                    </div>
                    <p class="product-description">Vine-ripened tomatoes grown using organic practices.</p>
                    <div class="product-meta">
                        <span class="product-price">$3.29/kg</span>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
            </div>
            
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.pexels.com/photos/39350/vegetables-basket-vegetable-basket-healthy-39350.jpeg" alt="Fresh Vegetables">
                    <div class="product-actions">
                        <button class="product-action-btn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 22C9.55228 22 10 21.5523 10 21C10 20.4477 9.55228 20 9 20C8.44772 20 8 20.4477 8 21C8 21.5523 8.44772 22 9 22Z" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20 22C20.5523 22 21 21.5523 21 21C21 20.4477 20.5523 20 20 20C19.4477 20 19 20.4477 19 21C19 21.5523 19.4477 22 20 22Z" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M1 1H5L7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <button class="product-action-btn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 20.25C12 20.25 2.625 15 2.625 8.62501C2.625 7.49803 3.01546 6.40585 3.72996 5.53431C4.44445 4.66277 5.43884 4.06657 6.54909 3.84864C7.65933 3.6307 8.81628 3.80683 9.82139 4.35001C10.8265 4.89318 11.5996 5.76567 12 6.80626L12 6.80626C12.4004 5.76567 13.1735 4.89318 14.1786 4.35001C15.1837 3.80683 16.3407 3.6307 17.4509 3.84864C18.5612 4.06657 19.5555 4.66277 20.27 5.53431C20.9845 6.40585 21.375 7.49803 21.375 8.62501C21.375 15 12 20.25 12 20.25Z" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="product-info">
                    <div class="product-category">Vegetables</div>
                    <h3>Fresh Vegetables Mix</h3>
                    <div class="product-rating">
                        <div class="stars">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="#F2C94C" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="#F2C94C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="#F2C94C" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="#F2C94C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="#F2C94C" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="#F2C94C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="#F2C94C" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="#F2C94C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="#F2C94C" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="#F2C94C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="rating-count">(36)</span>
                    </div>
                    <p class="product-description">Seasonal mix of fresh vegetables from local farms.</p>
                    <div class="product-meta">
                        <span class="product-price">$12.99/box</span>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
            </div>
            
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.pexels.com/photos/952474/pexels-photo-952474.jpeg" alt="Fresh Corn">
                    <div class="product-actions">
                        <button class="product-action-btn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 22C9.55228 22 10 21.5523 10 21C10 20.4477 9.55228 20 9 20C8.44772 20 8 20.4477 8 21C8 21.5523 8.44772 22 9 22Z" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20 22C20.5523 22 21 21.5523 21 21C21 20.4477 20.5523 20 20 20C19.4477 20 19 20.4477 19 21C19 21.5523 19.4477 22 20 22Z" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M1 1H5L7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <button class="product-action-btn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 20.25C12 20.25 2.625 15 2.625 8.62501C2.625 7.49803 3.01546 6.40585 3.72996 5.53431C4.44445 4.66277 5.43884 4.06657 6.54909 3.84864C7.65933 3.6307 8.81628 3.80683 9.82139 4.35001C10.8265 4.89318 11.5996 5.76567 12 6.80626L12 6.80626C12.4004 5.76567 13.1735 4.89318 14.1786 4.35001C15.1837 3.80683 16.3407 3.6307 17.4509 3.84864C18.5612 4.06657 19.5555 4.66277 20.27 5.53431C20.9845 6.40585 21.375 7.49803 21.375 8.62501C21.375 15 12 20.25 12 20.25Z" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="product-info">
                    <div class="product-category">Vegetables</div>
                    <h3>Fresh Sweet Corn</h3>
                    <div class="product-rating">
                        <div class="stars">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="#F2C94C" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="#F2C94C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="#F2C94C" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="#F2C94C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="#F2C94C" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="#F2C94C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="#F2C94C" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="#F2C94C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="#F2C94C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="rating-count">(29)</span>
                    </div>
                    <p class="product-description">Sweet corn grown on local farms, harvested at peak ripeness.</p>
                    <div class="product-meta">
                        <span class="product-price">$0.99/ear</span>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
            </div>
            
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.pexels.com/photos/533342/pexels-photo-533342.jpeg" alt="Organic Kale">
                    <div class="product-badge">New</div>
                    <div class="product-actions">
                        <button class="product-action-btn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 22C9.55228 22 10 21.5523 10 21C10 20.4477 9.55228 20 9 20C8.44772 20 8 20.4477 8 21C8 21.5523 8.44772 22 9 22Z" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20 22C20.5523 22 21 21.5523 21 21C21 20.4477 20.5523 20 20 20C19.4477 20 19 20.4477 19 21C19 21.5523 19.4477 22 20 22Z" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M1 1H5L7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <button class="product-action-btn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 20.25C12 20.25 2.625 15 2.625 8.62501C2.625 7.49803 3.01546 6.40585 3.72996 5.53431C4.44445 4.66277 5.43884 4.06657 6.54909 3.84864C7.65933 3.6307 8.81628 3.80683 9.82139 4.35001C10.8265 4.89318 11.5996 5.76567 12 6.80626L12 6.80626C12.4004 5.76567 13.1735 4.89318 14.1786 4.35001C15.1837 3.80683 16.3407 3.6307 17.4509 3.84864C18.5612 4.06657 19.5555 4.66277 20.27 5.53431C20.9845 6.40585 21.375 7.49803 21.375 8.62501C21.375 15 12 20.25 12 20.25Z" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="product-info">
                    <div class="product-category">Vegetables</div>
                    <h3>Organic Kale</h3>
                    <div class="product-rating">
                        <div class="stars">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="#F2C94C" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="#F2C94C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="#F2C94C" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="#F2C94C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="#F2C94C" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="#F2C94C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="#F2C94C" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="#F2C94C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="#F2C94C" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="#F2C94C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="rating-count">(17)</span>
                    </div>
                    <p class="product-description">Nutrient-dense kale grown with organic farming practices.</p>
                    <div class="product-meta">
                        <span class="product-price">$3.49/bunch</span>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="pagination">
            <button class="pagination-btn active">1</button>
            <button class="pagination-btn">2</button>
            <button class="pagination-btn">3</button>
            <button class="pagination-btn">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 18L15 12L9 6" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
    </div>
</section>

<section class="featured-sellers">
    <div class="container">
        <div class="section-header">
            <h2>Featured Farmers</h2>
            <p>Meet the people behind your favorite products</p>
        </div>
        
        <div class="sellers-grid">
            <div class="seller-card">
                <div class="seller-image">
                    <img src="https://images.pexels.com/photos/2381069/pexels-photo-2381069.jpeg" alt="John Wilson">
                </div>
                <div class="seller-info">
                    <h3>John Wilson</h3>
                    <p class="seller-location">Central Valley Farms</p>
                    <p class="seller-description">Growing organic vegetables and grains for over 20 years using sustainable practices.</p>
                    <a href="#" class="seller-link">View Products</a>
                </div>
            </div>
            
            <div class="seller-card">
                <div class="seller-image">
                    <img src="https://images.pexels.com/photos/3764013/pexels-photo-3764013.jpeg" alt="Maria Rodriguez">
                </div>
                <div class="seller-info">
                    <h3>Maria Rodriguez</h3>
                    <p class="seller-location">Sunshine Orchards</p>
                    <p class="seller-description">Specializing in heirloom tomatoes and peppers grown with love and traditional methods.</p>
                    <a href="#" class="seller-link">View Products</a>
                </div>
            </div>
            
            <div class="seller-card">
                <div class="seller-image">
                    <img src="https://images.pexels.com/photos/1139957/pexels-photo-1139957.jpeg" alt="Samuel Chen">
                </div>
                <div class="seller-info">
                    <h3>Samuel Chen</h3>
                    <p class="seller-location">Green Acres Farm</p>
                    <p class="seller-description">Fourth-generation rice farmer using innovative, water-conserving techniques.</p>
                    <a href="#" class="seller-link">View Products</a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Page Header */
    .page-header {
        background-color: var(--color-primary);
        color: #FFFFFF;
        padding: 8rem 0 4rem;
        text-align: center;
    }
    
    .page-header h1 {
        font-size: 3rem;
        margin-bottom: 1rem;
    }
    
    .page-header p {
        font-size: 1.25rem;
        max-width: 700px;
        margin: 0 auto;
        opacity: 0.9;
    }
    
    /* Products Section */
    .products-section {
        padding: 4rem 0;
    }
    
    /* Filters */
    .products-filters {
        margin-bottom: 2.5rem;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
        gap: 1rem;
    }
    
    .search-filter {
        display: flex;
        max-width: 500px;
        width: 100%;
    }
    
    .search-input {
        flex: 1;
        padding: 0.75rem 1rem;
        border: 1px solid #E2E8F0;
        border-radius: 4px 0 0 4px;
        font-size: 1rem;
        transition: all 0.3s ease;
    }
    
    .search-input:focus {
        outline: none;
        border-color: var(--color-primary);
        box-shadow: 0 0 0 2px rgba(42, 93, 60, 0.1);
    }
    
    .search-btn {
        background-color: var(--color-primary);
        border: none;
        padding: 0.75rem 1.25rem;
        border-radius: 0 4px 4px 0;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .search-btn:hover {
        background-color: var(--color-primary-dark);
    }
    
    .filter-group {
        display: flex;
        gap: 1rem;
    }
    
    .filter-select {
        padding: 0.75rem 1rem;
        border: 1px solid #E2E8F0;
        border-radius: 4px;
        background-color: #FFFFFF;
        font-size: 0.9375rem;
        min-width: 160px;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .filter-select:focus {
        outline: none;
        border-color: var(--color-primary);
        box-shadow: 0 0 0 2px rgba(42, 93, 60, 0.1);
    }
    
    /* Products Grid */
    .products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 2rem;
        margin-bottom: 3rem;
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
        height: 220px;
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
        z-index: 1;
    }
    
    .product-actions {
        position: absolute;
        top: 10px;
        left: 10px;
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
        opacity: 0;
        transform: translateX(-10px);
        transition: all 0.3s ease;
        z-index: 1;
    }
    
    .product-card:hover .product-actions {
        opacity: 1;
        transform: translateX(0);
    }
    
    .product-action-btn {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background-color: var(--color-primary);
        border: none;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .product-action-btn:hover {
        background-color: var(--color-accent);
        transform: scale(1.1);
    }
    
    .product-info {
        padding: 1.5rem;
    }
    
    .product-category {
        text-transform: uppercase;
        font-size: 0.75rem;
        letter-spacing: 1px;
        color: var(--color-text-muted);
        margin-bottom: 0.5rem;
    }
    
    .product-info h3 {
        margin-bottom: 0.5rem;
        font-size: 1.25rem;
        color: var(--color-primary);
    }
    
    .product-rating {
        display: flex;
        align-items: center;
        margin-bottom: 0.75rem;
    }
    
    .stars {
        display: flex;
        margin-right: 0.5rem;
    }
    
    .rating-count {
        font-size: 0.875rem;
        color: var(--color-text-muted);
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
    
    .add-to-cart-btn {
        background-color: var(--color-primary);
        color: #FFFFFF;
        border: none;
        padding: 0.5rem 1rem;
        border-radius: 4px;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .add-to-cart-btn:hover {
        background-color: var(--color-primary-dark);
        transform: translateY(-2px);
    }
    
    /* Pagination */
    .pagination {
        display: flex;
        justify-content: center;
        gap: 0.5rem;
    }
    
    .pagination-btn {
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #E2E8F0;
        background-color: #FFFFFF;
        border-radius: 4px;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .pagination-btn.active, .pagination-btn:hover {
        background-color: var(--color-primary);
        color: #FFFFFF;
        border-color: var(--color-primary);
    }
    
    .pagination-btn.active:hover {
        cursor: default;
        transform: none;
    }
    
    .pagination-btn:hover {
        transform: translateY(-2px);
    }
    
    /* Featured Sellers */
    .featured-sellers {
        padding: 6rem 0;
        background-color: var(--color-bg-light);
    }
    
    .sellers-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 2rem;
    }
    
    .seller-card {
        background-color: #FFFFFF;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }
    
    .seller-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }
    
    .seller-image {
        height: 200px;
        overflow: hidden;
    }
    
    .seller-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .seller-card:hover .seller-image img {
        transform: scale(1.05);
    }
    
    .seller-info {
        padding: 1.5rem;
    }
    
    .seller-info h3 {
        margin-bottom: 0.25rem;
        font-size: 1.25rem;
        color: var(--color-primary);
    }
    
    .seller-location {
        color: var(--color-text-muted);
        margin-bottom: 1rem;
        font-size: 0.875rem;
    }
    
    .seller-description {
        color: var(--color-text-dark);
        margin-bottom: 1.5rem;
        line-height: 1.6;
        font-size: 0.9375rem;
    }
    
    .seller-link {
        display: inline-block;
        padding: 0.5rem 1rem;
        background-color: transparent;
        color: var(--color-primary);
        border: 1px solid var(--color-primary);
        border-radius: 4px;
        font-weight: 500;
        transition: all 0.3s ease;
    }
    
    .seller-link:hover {
        background-color: var(--color-primary);
        color: #FFFFFF;
        transform: translateY(-2px);
    }
    
    /* Responsive Styles */
    @media (max-width: 768px) {
        .products-filters {
            flex-direction: column;
            align-items: stretch;
        }
        
        .filter-group {
            flex-direction: column;
        }
        
        .page-header h1 {
            font-size: 2.5rem;
        }
    }
</style>
@endsection