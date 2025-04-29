@extends('layouts.app')

@section('content')
<section class="page-header">
    <div class="container">
        <h1>About Us</h1>
        <p>Learn about our mission to empower agricultural communities</p>
    </div>
</section>

<section class="about-intro">
    <div class="container">
        <div class="about-grid">
            <div class="about-content">
                <h2>Our Story</h2>
                <p>AgriConnect HUB was founded in 2023 with a simple mission: to bridge the gap between rural farmers and global markets. We recognized that talented farmers across rural areas faced significant challenges in accessing fair markets for their products.</p>
                <p>What began as a small initiative connecting 50 local farmers to nearby markets has grown into a comprehensive platform serving thousands of agricultural entrepreneurs nationwide.</p>
                <div class="about-stats">
                    <div class="stat-item">
                        <div class="stat-number">2,500+</div>
                        <div class="stat-label">Farmers</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">150+</div>
                        <div class="stat-label">Communities</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">$3.2M</div>
                        <div class="stat-label">Generated</div>
                    </div>
                </div>
            </div>
            <div class="about-image">
                <img src="https://images.pexels.com/photos/2382904/pexels-photo-2382904.jpeg" alt="Farmers working in rice fields">
            </div>
        </div>
    </div>
</section>

<section class="mission-vision">
    <div class="container">
        <div class="mission-grid">
            <div class="mission-card">
                <div class="card-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 12H2M22 12C22 17.5228 17.5228 22 12 22M22 12C22 6.47715 17.5228 2 12 2M2 12C2 17.5228 6.47715 22 12 22M2 12C2 6.47715 6.47715 2 12 2M12 2V22" stroke="#2A5D3C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3>Our Mission</h3>
                <p>To empower rural agricultural entrepreneurs by providing them with the technology, market access, and support needed to build sustainable businesses and improve their livelihoods.</p>
            </div>
            <div class="mission-card">
                <div class="card-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 12H21M3 12C3 16.9706 7.02944 21 12 21M3 12C3 7.02944 7.02944 3 12 3M21 12C21 16.9706 16.9706 21 12 21M21 12C21 7.02944 16.9706 3 12 3M12 3V21" stroke="#2A5D3C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3>Our Vision</h3>
                <p>To create a world where every farmer, regardless of location or scale, has equal access to markets, fair prices, and the opportunity to thrive in an increasingly connected global economy.</p>
            </div>
            <div class="mission-card">
                <div class="card-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#2A5D3C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18Z" stroke="#2A5D3C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 14C13.1046 14 14 13.1046 14 12C14 10.8954 13.1046 10 12 10C10.8954 10 10 10.8954 10 12C10 13.1046 10.8954 14 12 14Z" stroke="#2A5D3C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3>Our Values</h3>
                <p>Transparency, sustainability, fairness, innovation, and community empowerment guide everything we do at AgriConnect HUB. We believe in creating shared value for all stakeholders in the agricultural ecosystem.</p>
            </div>
        </div>
    </div>
</section>

<section class="team-section">
    <div class="container">
        <div class="section-header">
            <h2>Our Leadership Team</h2>
            <p>Meet the passionate individuals driving our mission forward</p>
        </div>
        <div class="team-grid">
            <div class="team-card">
                <div class="team-image">
                    <img src="https://images.pexels.com/photos/2379005/pexels-photo-2379005.jpeg" alt="Sarah Johnson">
                </div>
                <div class="team-info">
                    <h3>Sarah Johnson</h3>
                    <p class="team-role">Founder & CEO</p>
                    <p class="team-bio">With 15 years of experience in agricultural technology, Sarah founded AgriConnect HUB to address the challenges she witnessed growing up in a farming community.</p>
                </div>
            </div>
            <div class="team-card">
                <div class="team-image">
                    <img src="https://images.pexels.com/photos/2381069/pexels-photo-2381069.jpeg" alt="Michael Chen">
                </div>
                <div class="team-info">
                    <h3>Michael Chen</h3>
                    <p class="team-role">Chief Technology Officer</p>
                    <p class="team-bio">A tech innovator with a background in both software development and sustainable agriculture, Michael leads our engineering team in creating accessible solutions.</p>
                </div>
            </div>
            <div class="team-card">
                <div class="team-image">
                    <img src="https://images.pexels.com/photos/3760778/pexels-photo-3760778.jpeg" alt="Elena Rodriguez">
                </div>
                <div class="team-info">
                    <h3>Elena Rodriguez</h3>
                    <p class="team-role">Director of Farmer Relations</p>
                    <p class="team-bio">Elena's experience working with farming cooperatives in over 20 countries helps ensure our platform truly meets the needs of rural agricultural entrepreneurs.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="impact-section">
    <div class="container">
        <div class="section-header">
            <h2>Our Impact</h2>
            <p>Measured not just in numbers, but in transformed livelihoods</p>
        </div>
        <div class="impact-grid">
            <div class="impact-card">
                <div class="impact-image">
                    <img src="https://images.pexels.com/photos/2886283/pexels-photo-2886283.jpeg" alt="Farmers harvesting crops">
                </div>
                <div class="impact-content">
                    <h3>Economic Growth</h3>
                    <p>Our platform has helped farmers increase their income by an average of 35% by eliminating middlemen and providing direct market access.</p>
                    <ul class="impact-list">
                        <li>$3.2 million in direct farmer revenues facilitated</li>
                        <li>42% average price improvement compared to traditional channels</li>
                        <li>Over 500 new jobs created in rural communities</li>
                    </ul>
                </div>
            </div>
            <div class="impact-card reverse">
                <div class="impact-content">
                    <h3>Community Development</h3>
                    <p>Beyond individual success, we're fostering stronger agricultural communities through knowledge sharing and collective growth.</p>
                    <ul class="impact-list">
                        <li>150+ farming communities connected across the country</li>
                        <li>25 youth agricultural programs supported</li>
                        <li>87% of participating communities report stronger economic resilience</li>
                    </ul>
                </div>
                <div class="impact-image">
                    <img src="https://images.pexels.com/photos/2252584/pexels-photo-2252584.jpeg" alt="Community meeting of farmers">
                </div>
            </div>
            <div class="impact-card">
                <div class="impact-image">
                    <img src="https://images.pexels.com/photos/2495441/pexels-photo-2495441.jpeg" alt="Sustainable farming practices">
                </div>
                <div class="impact-content">
                    <h3>Sustainability</h3>
                    <p>We're promoting environmentally sustainable farming practices while improving economic outcomes.</p>
                    <ul class="impact-list">
                        <li>38% of farmers have adopted more sustainable farming methods</li>
                        <li>Reduced food waste by 22% through improved market efficiency</li>
                        <li>Carbon footprint reduction through localized supply chains</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="partners-section">
    <div class="container">
        <div class="section-header">
            <h2>Our Partners</h2>
            <p>Working together to transform agricultural systems</p>
        </div>
        <div class="partners-grid">
            <div class="partner-logo">
                <svg width="180" height="80" viewBox="0 0 180 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="180" height="80" rx="4" fill="#F8F9FA"/>
                    <path d="M40 40C40 29.5 48.5 21 59 21H121C131.5 21 140 29.5 140 40C140 50.5 131.5 59 121 59H59C48.5 59 40 50.5 40 40Z" fill="#2A5D3C" fill-opacity="0.1"/>
                    <path d="M59 45.5C62.5 45.5 65.5 42.5 65.5 39C65.5 35.5 62.5 32.5 59 32.5C55.5 32.5 52.5 35.5 52.5 39C52.5 42.5 55.5 45.5 59 45.5Z" fill="#2A5D3C"/>
                    <path d="M82 32.5H75.5V45.5H79V41H82C85 41 87.5 39.5 87.5 36.75C87.5 34 85 32.5 82 32.5ZM81.5 38H79V35.5H81.5C82.5 35.5 83.5 36 83.5 36.75C83.5 37.5 82.5 38 81.5 38Z" fill="#2A5D3C"/>
                    <path d="M95.5 32.5H89V45.5H95.5C100 45.5 103.5 42.5 103.5 39C103.5 35.5 100 32.5 95.5 32.5ZM95.5 42H92.5V36H95.5C98 36 100 37.5 100 39C100 40.5 98 42 95.5 42Z" fill="#2A5D3C"/>
                    <path d="M111 36H116V45.5H119.5V36H124.5V32.5H111V36Z" fill="#2A5D3C"/>
                </svg>
            </div>
            <div class="partner-logo">
                <svg width="180" height="80" viewBox="0 0 180 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="180" height="80" rx="4" fill="#F8F9FA"/>
                    <path d="M40 40C40 29.5 48.5 21 59 21H121C131.5 21 140 29.5 140 40C140 50.5 131.5 59 121 59H59C48.5 59 40 50.5 40 40Z" fill="#2A5D3C" fill-opacity="0.1"/>
                    <path d="M60 45.5L65.5 32.5H69.5L75 45.5H71L70 42.5H65L64 45.5H60ZM66 39.5H69L67.5 35L66 39.5Z" fill="#2A5D3C"/>
                    <path d="M82 32.5H75.5V45.5H79V41H82C85 41 87.5 39.5 87.5 36.75C87.5 34 85 32.5 82 32.5ZM81.5 38H79V35.5H81.5C82.5 35.5 83.5 36 83.5 36.75C83.5 37.5 82.5 38 81.5 38Z" fill="#2A5D3C"/>
                    <path d="M95 32.5H89V45.5H92.5V41H95L98.5 45.5H102.5L98.5 40.5C100.5 39.5 101.5 38 101.5 36C101.5 34 99.5 32.5 97 32.5H95ZM94.5 38H92.5V35.5H94.5C95.5 35.5 96.5 36 96.5 36.75C96.5 37.5 95.5 38 94.5 38Z" fill="#2A5D3C"/>
                    <path d="M110 32.5H103.5V45.5H110C114.5 45.5 118 42.5 118 39C118 35.5 114.5 32.5 110 32.5ZM110 42H107V36H110C112.5 36 114.5 37.5 114.5 39C114.5 40.5 112.5 42 110 42Z" fill="#2A5D3C"/>
                </svg>
            </div>
            <div class="partner-logo">
                <svg width="180" height="80" viewBox="0 0 180 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="180" height="80" rx="4" fill="#F8F9FA"/>
                    <path d="M40 40C40 29.5 48.5 21 59 21H121C131.5 21 140 29.5 140 40C140 50.5 131.5 59 121 59H59C48.5 59 40 50.5 40 40Z" fill="#2A5D3C" fill-opacity="0.1"/>
                    <path d="M56 32.5V45.5H59.5V40.5H66V37H59.5V36H67V32.5H56Z" fill="#2A5D3C"/>
                    <path d="M69 32.5V45.5H80V42H72.5V40.5H79V37H72.5V36H80V32.5H69Z" fill="#2A5D3C"/>
                    <path d="M83 32.5V45.5H86.5V40.5H93V37H86.5V36H94V32.5H83Z" fill="#2A5D3C"/>
                    <path d="M100 32.5H96V45.5H100C104.5 45.5 108 42.5 108 39C108 35.5 104.5 32.5 100 32.5ZM100 42H99.5V36H100C102.5 36 104.5 37.5 104.5 39C104.5 40.5 102.5 42 100 42Z" fill="#2A5D3C"/>
                </svg>
            </div>
            <div class="partner-logo">
                <svg width="180" height="80" viewBox="0 0 180 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="180" height="80" rx="4" fill="#F8F9FA"/>
                    <path d="M40 40C40 29.5 48.5 21 59 21H121C131.5 21 140 29.5 140 40C140 50.5 131.5 59 121 59H59C48.5 59 40 50.5 40 40Z" fill="#2A5D3C" fill-opacity="0.1"/>
                    <circle cx="90" cy="40" r="20" stroke="#2A5D3C" stroke-width="2"/>
                    <path d="M82 32L98 48" stroke="#2A5D3C" stroke-width="2"/>
                    <path d="M98 32L82 48" stroke="#2A5D3C" stroke-width="2"/>
                </svg>
            </div>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Join Our Mission</h2>
            <p>Whether you're a farmer looking to grow your business, a buyer seeking quality produce, or an organization interested in partnership, we'd love to connect with you.</p>
            <div class="cta-buttons">
                <a href="#" class="btn-primary">Join as a Farmer</a>
                <a href="#" class="btn-secondary">Become a Partner</a>
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
    
    /* About Intro */
    .about-intro {
        padding: 6rem 0;
    }
    
    .about-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 4rem;
        align-items: center;
    }
    
    .about-content h2 {
        font-size: 2.5rem;
        color: var(--color-primary);
        margin-bottom: 1.5rem;
        position: relative;
    }
    
    .about-content h2::after {
        content: '';
        position: absolute;
        width: 60px;
        height: 3px;
        background-color: var(--color-accent);
        bottom: -0.75rem;
        left: 0;
    }
    
    .about-content p {
        margin-bottom: 1.5rem;
        line-height: 1.8;
        color: var(--color-text-dark);
    }
    
    .about-stats {
        display: flex;
        margin-top: 3rem;
        gap: 2rem;
    }
    
    .stat-item {
        padding: 1.5rem;
        background-color: var(--color-bg-light);
        border-radius: 8px;
        text-align: center;
        flex: 1;
        transition: all 0.3s ease;
    }
    
    .stat-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }
    
    .stat-number {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--color-primary);
        margin-bottom: 0.5rem;
    }
    
    .stat-label {
        color: var(--color-text-muted);
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 0.875rem;
    }
    
    .about-image {
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }
    
    .about-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .about-image:hover img {
        transform: scale(1.05);
    }
    
    /* Mission Vision */
    .mission-vision {
        padding: 6rem 0;
        background-color: var(--color-bg-light);
    }
    
    .mission-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 2rem;
    }
    
    .mission-card {
        background-color: #FFFFFF;
        padding: 2.5rem;
        border-radius: 8px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }
    
    .mission-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }
    
    .card-icon {
        margin-bottom: 1.5rem;
    }
    
    .mission-card h3 {
        font-size: 1.5rem;
        margin-bottom: 1rem;
        color: var(--color-primary);
    }
    
    .mission-card p {
        color: var(--color-text-muted);
        line-height: 1.7;
    }
    
    /* Team Section */
    .team-section {
        padding: 6rem 0;
    }
    
    .team-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 2.5rem;
    }
    
    .team-card {
        background-color: #FFFFFF;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }
    
    .team-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }
    
    .team-image {
        height: 300px;
        overflow: hidden;
    }
    
    .team-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .team-card:hover .team-image img {
        transform: scale(1.05);
    }
    
    .team-info {
        padding: 1.5rem;
    }
    
    .team-info h3 {
        margin-bottom: 0.25rem;
        font-size: 1.25rem;
        color: var(--color-primary);
    }
    
    .team-role {
        color: var(--color-accent);
        margin-bottom: 1rem;
        font-weight: 500;
    }
    
    .team-bio {
        color: var(--color-text-muted);
        line-height: 1.6;
        font-size: 0.9375rem;
    }
    
    /* Impact Section */
    .impact-section {
        padding: 6rem 0;
        background-color: var(--color-bg-light);
    }
    
    .impact-grid {
        display: flex;
        flex-direction: column;
        gap: 4rem;
    }
    
    .impact-card {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 2.5rem;
        align-items: center;
    }
    
    .impact-card.reverse {
        direction: rtl;
    }
    
    .impact-card.reverse .impact-content {
        direction: ltr;
    }
    
    .impact-image {
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        height: 400px;
    }
    
    .impact-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .impact-image:hover img {
        transform: scale(1.05);
    }
    
    .impact-content h3 {
        font-size: 1.75rem;
        margin-bottom: 1rem;
        color: var(--color-primary);
        position: relative;
    }
    
    .impact-content h3::after {
        content: '';
        position: absolute;
        width: 50px;
        height: 3px;
        background-color: var(--color-accent);
        bottom: -0.5rem;
        left: 0;
    }
    
    .impact-content p {
        margin-bottom: 1.5rem;
        line-height: 1.7;
        color: var(--color-text-dark);
    }
    
    .impact-list {
        list-style: none;
    }
    
    .impact-list li {
        padding-left: 1.5rem;
        position: relative;
        margin-bottom: 0.75rem;
        line-height: 1.6;
        color: var(--color-text-muted);
    }
    
    .impact-list li::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0.5rem;
        width: 8px;
        height: 8px;
        background-color: var(--color-accent);
        border-radius: 50%;
    }
    
    /* Partners Section */
    .partners-section {
        padding: 6rem 0;
    }
    
    .partners-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 2rem;
        align-items: center;
    }
    
    .partner-logo {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 1.5rem;
        transition: all 0.3s ease;
    }
    
    .partner-logo:hover {
        transform: scale(1.05);
    }
    
    /* Responsive Styles */
    @media (max-width: 992px) {
        .about-grid, .impact-card {
            grid-template-columns: 1fr;
        }
        
        .impact-card.reverse {
            direction: ltr;
        }
        
        .about-image, .impact-image {
            height: 300px;
        }
    }
    
    @media (max-width: 768px) {
        .about-stats {
            flex-direction: column;
            gap: 1rem;
        }
        
        .page-header {
            padding: 6rem 0 3rem;
        }
        
        .page-header h1 {
            font-size: 2.5rem;
        }
    }
</style>
@endsection