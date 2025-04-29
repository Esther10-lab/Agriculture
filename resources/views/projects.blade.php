@extends('layouts.app')

@section('content')
<section class="page-header">
    <div class="container">
        <h1>Projects</h1>
        <p>Innovative initiatives to strengthen agricultural communities</p>
    </div>
</section>

<section class="projects-section">
    <div class="container">
        <div class="projects-intro">
            <p>At AgriConnect HUB, we're committed to more than just connecting buyers and sellers. We're actively investing in projects that build sustainable agricultural ecosystems, empower rural communities, and drive innovation in farming practices.</p>
        </div>
        
        <div class="projects-grid">
            <div class="project-card">
                <div class="project-image">
                    <img src="https://images.pexels.com/photos/2252584/pexels-photo-2252584.jpeg" alt="Community Training">
                    <div class="project-category">Education</div>
                </div>
                <div class="project-info">
                    <h3>Farmer Training Initiative</h3>
                    <p class="project-description">Providing technical and business skills to small-scale farmers through hands-on workshops and mentorship programs.</p>
                    <div class="project-stats">
                        <div class="stat">
                            <span class="stat-value">1,200+</span>
                            <span class="stat-label">Farmers Trained</span>
                        </div>
                        <div class="stat">
                            <span class="stat-value">28</span>
                            <span class="stat-label">Communities</span>
                        </div>
                        <div class="stat">
                            <span class="stat-value">42%</span>
                            <span class="stat-label">Income Increase</span>
                        </div>
                    </div>
                    <a href="#" class="project-link">Learn More</a>
                </div>
            </div>
            
            <div class="project-card">
                <div class="project-image">
                    <img src="https://images.pexels.com/photos/4207892/pexels-photo-4207892.jpeg" alt="Sustainable Farming">
                    <div class="project-category">Sustainability</div>
                </div>
                <div class="project-info">
                    <h3>Sustainable Farming Practices</h3>
                    <p class="project-description">Promoting and implementing eco-friendly farming techniques that conserve water, enhance soil health, and reduce chemical inputs.</p>
                    <div class="project-stats">
                        <div class="stat">
                            <span class="stat-value">500+</span>
                            <span class="stat-label">Farms Enrolled</span>
                        </div>
                        <div class="stat">
                            <span class="stat-value">35%</span>
                            <span class="stat-label">Water Savings</span>
                        </div>
                        <div class="stat">
                            <span class="stat-value">8,500</span>
                            <span class="stat-label">Acres</span>
                        </div>
                    </div>
                    <a href="#" class="project-link">Learn More</a>
                </div>
            </div>
            
            <div class="project-card">
                <div class="project-image">
                    <img src="https://images.pexels.com/photos/5058372/pexels-photo-5058372.jpeg" alt="Technology Integration">
                    <div class="project-category">Innovation</div>
                </div>
                <div class="project-info">
                    <h3>AgTech for Smallholders</h3>
                    <p class="project-description">Making agricultural technology accessible to small-scale farmers through affordable sensors, mobile apps, and community tech hubs.</p>
                    <div class="project-stats">
                        <div class="stat">
                            <span class="stat-value">15</span>
                            <span class="stat-label">Tech Hubs</span>
                        </div>
                        <div class="stat">
                            <span class="stat-value">3,200</span>
                            <span class="stat-label">Users</span>
                        </div>
                        <div class="stat">
                            <span class="stat-value">18%</span>
                            <span class="stat-label">Yield Increase</span>
                        </div>
                    </div>
                    <a href="#" class="project-link">Learn More</a>
                </div>
            </div>
            
            <div class="project-card">
                <div class="project-image">
                    <img src="https://images.pexels.com/photos/2087391/pexels-photo-2087391.jpeg" alt="School Garden">
                    <div class="project-category">Youth</div>
                </div>
                <div class="project-info">
                    <h3>Next Generation Farmers</h3>
                    <p class="project-description">Engaging young people in agriculture through school gardens, agricultural clubs, and entrepreneurship opportunities.</p>
                    <div class="project-stats">
                        <div class="stat">
                            <span class="stat-value">75</span>
                            <span class="stat-label">Schools</span>
                        </div>
                        <div class="stat">
                            <span class="stat-value">4,500+</span>
                            <span class="stat-label">Students</span>
                        </div>
                        <div class="stat">
                            <span class="stat-value">120</span>
                            <span class="stat-label">Youth Businesses</span>
                        </div>
                    </div>
                    <a href="#" class="project-link">Learn More</a>
                </div>
            </div>
            
            <div class="project-card">
                <div class="project-image">
                    <img src="https://images.pexels.com/photos/9365793/pexels-photo-9365793.jpeg" alt="Market Access">
                    <div class="project-category">Market Access</div>
                </div>
                <div class="project-info">
                    <h3>Rural Market Development</h3>
                    <p class="project-description">Creating and enhancing local markets in underserved areas to provide convenient trading points for farmers and local consumers.</p>
                    <div class="project-stats">
                        <div class="stat">
                            <span class="stat-value">18</span>
                            <span class="stat-label">Markets</span>
                        </div>
                        <div class="stat">
                            <span class="stat-value">1,100+</span>
                            <span class="stat-label">Vendors</span>
                        </div>
                        <div class="stat">
                            <span class="stat-value">$1.2M</span>
                            <span class="stat-label">Annual Trade</span>
                        </div>
                    </div>
                    <a href="#" class="project-link">Learn More</a>
                </div>
            </div>
            
            <div class="project-card">
                <div class="project-image">
                    <img src="https://images.pexels.com/photos/5490235/pexels-photo-5490235.jpeg" alt="Women in Agriculture">
                    <div class="project-category">Empowerment</div>
                </div>
                <div class="project-info">
                    <h3>Women in Agriculture</h3>
                    <p class="project-description">Supporting women farmers through specialized training, access to resources, and leadership development programs.</p>
                    <div class="project-stats">
                        <div class="stat">
                            <span class="stat-value">950+</span>
                            <span class="stat-label">Participants</span>
                        </div>
                        <div class="stat">
                            <span class="stat-value">35</span>
                            <span class="stat-label">Communities</span>
                        </div>
                        <div class="stat">
                            <span class="stat-value">48%</span>
                            <span class="stat-label">Leadership Roles</span>
                        </div>
                    </div>
                    <a href="#" class="project-link">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="impact-stories">
    <div class="container">
        <div class="section-header">
            <h2>Impact Stories</h2>
            <p>Real stories of transformation from our project participants</p>
        </div>
        
        <div class="stories-grid">
            <div class="story-card">
                <div class="story-image">
                    <img src="https://images.pexels.com/photos/2382934/pexels-photo-2382934.jpeg" alt="Maria's Story">
                </div>
                <div class="story-content">
                    <h3>Maria's Journey to Self-Sufficiency</h3>
                    <p class="story-text">After participating in our Women in Agriculture program, Maria tripled her farm's productivity and now leads a cooperative of 15 women farmers in her village.</p>
                    <a href="#" class="story-link">Read Full Story</a>
                </div>
            </div>
            
            <div class="story-card">
                <div class="story-image">
                    <img src="https://images.pexels.com/photos/2886278/pexels-photo-2886278.jpeg" alt="Thomas' Story">
                </div>
                <div class="story-content">
                    <h3>Thomas' Tech Revolution</h3>
                    <p class="story-text">Using soil sensors and weather prediction apps from our AgTech program, Thomas reduced water usage by 40% while increasing his corn yield by 25%.</p>
                    <a href="#" class="story-link">Read Full Story</a>
                </div>
            </div>
            
            <div class="story-card">
                <div class="story-image">
                    <img src="https://images.pexels.com/photos/1417647/pexels-photo-1417647.jpeg" alt="Student Farmers">
                </div>
                <div class="story-content">
                    <h3>New Generation of Farmers</h3>
                    <p class="story-text">Students at Greenfield High School used skills from our youth program to start a thriving market garden that now supplies the school cafeteria and local restaurants.</p>
                    <a href="#" class="story-link">Read Full Story</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="project-partners">
    <div class="container">
        <div class="section-header">
            <h2>Our Project Partners</h2>
            <p>Collaborating to create sustainable agricultural ecosystems</p>
        </div>
        
        <div class="partners-grid">
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
                    <circle cx="90" cy="40" r="20" stroke="#2A5D3C" stroke-width="2"/>
                    <path d="M82 32L98 48" stroke="#2A5D3C" stroke-width="2"/>
                    <path d="M98 32L82 48" stroke="#2A5D3C" stroke-width="2"/>
                </svg>
            </div>
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
                    <circle cx="80" cy="40" r="15" stroke="#2A5D3C" stroke-width="2"/>
                    <circle cx="100" cy="40" r="15" stroke="#2A5D3C" stroke-width="2"/>
                </svg>
            </div>
        </div>
    </div>
</section>

<section class="get-involved">
    <div class="container">
        <div class="get-involved-content">
            <h2>Get Involved</h2>
            <p>Whether you're a farmer, a business, or simply passionate about sustainable agriculture, there are many ways to contribute to our projects and make a difference.</p>
            <div class="involvement-options">
                <div class="involvement-card">
                    <div class="involvement-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12 17H12.01" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M9.09003 9.00001C9.32513 8.33168 9.78918 7.76811 10.4 7.40914C11.0108 7.05016 11.7289 6.91894 12.4272 7.03872C13.1255 7.15851 13.7588 7.52153 14.2151 8.06354C14.6714 8.60555 14.9211 9.29153 14.92 10C14.92 12 11.92 13 11.92 13" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3>Volunteer</h3>
                    <p>Share your skills and time with our projects. We welcome expertise in farming, technology, education, marketing, and more.</p>
                    <a href="#" class="involvement-link">Learn More</a>
                </div>
                
                <div class="involvement-card">
                    <div class="involvement-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 1V23" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M17 5H9.5C8.57174 5 7.6815 5.36875 7.02513 6.02513C6.36875 6.6815 6 7.57174 6 8.5C6 9.42826 6.36875 10.3185 7.02513 10.9749C7.6815 11.6313 8.57174 12 9.5 12H14.5C15.4283 12 16.3185 12.3687 16.9749 13.0251C17.6313 13.6815 18 14.5717 18 15.5C18 16.4283 17.6313 17.3185 16.9749 17.9749C16.3185 18.6313 15.4283 19 14.5 19H6" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3>Donate</h3>
                    <p>Your financial contribution helps us expand our programs and reach more farming communities in need.</p>
                    <a href="#" class="involvement-link">Contribute</a>
                </div>
                
                <div class="involvement-card">
                    <div class="involvement-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 21V19C16 17.9391 15.5786 16.9217 14.8284 16.1716C14.0783 15.4214 13.0609 15 12 15H5C3.93913 15 2.92172 15.4214 2.17157 16.1716C1.42143 16.9217 1 17.9391 1 19V21" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M8.5 11C10.7091 11 12.5 9.20914 12.5 7C12.5 4.79086 10.7091 3 8.5 3C6.29086 3 4.5 4.79086 4.5 7C4.5 9.20914 6.29086 11 8.5 11Z" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M17 11L19 13L23 9" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3>Partner With Us</h3>
                    <p>Organizations and businesses can form strategic partnerships with us to create greater impact and shared value.</p>
                    <a href="#" class="involvement-link">Discuss Partnership</a>
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
    
    /* Projects Section */
    .projects-section {
        padding: 4rem 0;
    }
    
    .projects-intro {
        max-width: 800px;
        margin: 0 auto 4rem;
        text-align: center;
        font-size: 1.125rem;
        line-height: 1.8;
        color: var(--color-text-dark);
    }
    
    .projects-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
        gap: 2.5rem;
    }
    
    .project-card {
        background-color: #FFFFFF;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }
    
    .project-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }
    
    .project-image {
        position: relative;
        height: 220px;
        overflow: hidden;
    }
    
    .project-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .project-card:hover .project-image img {
        transform: scale(1.05);
    }
    
    .project-category {
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
    
    .project-info {
        padding: 1.5rem;
    }
    
    .project-info h3 {
        margin-bottom: 0.75rem;
        font-size: 1.25rem;
        color: var(--color-primary);
    }
    
    .project-description {
        color: var(--color-text-muted);
        margin-bottom: 1.5rem;
        font-size: 0.9375rem;
        line-height: 1.6;
    }
    
    .project-stats {
        display: flex;
        justify-content: space-between;
        margin-bottom: 1.5rem;
        padding: 1rem;
        background-color: var(--color-bg-light);
        border-radius: 6px;
    }
    
    .stat {
        text-align: center;
        flex: 1;
    }
    
    .stat-value {
        display: block;
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--color-primary);
        margin-bottom: 0.25rem;
    }
    
    .stat-label {
        font-size: 0.75rem;
        color: var(--color-text-muted);
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .project-link {
        display: inline-block;
        padding: 0.75rem 1.5rem;
        background-color: var(--color-primary);
        color: #FFFFFF;
        border-radius: 4px;
        font-weight: 500;
        transition: all 0.3s ease;
    }
    
    .project-link:hover {
        background-color: var(--color-primary-dark);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }
    
    /* Impact Stories */
    .impact-stories {
        padding: 6rem 0;
        background-color: var(--color-bg-light);
    }
    
    .stories-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
        gap: 2rem;
    }
    
    .story-card {
        background-color: #FFFFFF;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }
    
    .story-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }
    
    .story-image {
        height: 200px;
        overflow: hidden;
    }
    
    .story-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .story-card:hover .story-image img {
        transform: scale(1.05);
    }
    
    .story-content {
        padding: 1.5rem;
    }
    
    .story-content h3 {
        margin-bottom: 0.75rem;
        font-size: 1.25rem;
        color: var(--color-primary);
    }
    
    .story-text {
        color: var(--color-text-muted);
        margin-bottom: 1.5rem;
        line-height: 1.6;
    }
    
    .story-link {
        display: inline-block;
        color: var(--color-primary);
        font-weight: 500;
        position: relative;
        transition: all 0.3s ease;
    }
    
    .story-link::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        background-color: var(--color-primary);
        bottom: -3px;
        left: 0;
        transition: width 0.3s ease;
    }
    
    .story-link:hover::after {
        width: 100%;
    }
    
    /* Project Partners */
    .project-partners {
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
    
    /* Get Involved */
    .get-involved {
        padding: 6rem 0;
        background-color: var(--color-primary);
        color: #FFFFFF;
    }
    
    .get-involved-content {
        text-align: center;
    }
    
    .get-involved-content h2 {
        font-size: 2.5rem;
        margin-bottom: 1.5rem;
    }
    
    .get-involved-content p {
        font-size: 1.125rem;
        max-width: 800px;
        margin: 0 auto 3rem;
        opacity: 0.9;
    }
    
    .involvement-options {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 2rem;
    }
    
    .involvement-card {
        background-color: rgba(255, 255, 255, 0.1);
        padding: 2rem;
        border-radius: 8px;
        transition: all 0.3s ease;
    }
    
    .involvement-card:hover {
        transform: translateY(-10px);
        background-color: rgba(255, 255, 255, 0.15);
    }
    
    .involvement-icon {
        width: 70px;
        height: 70px;
        background-color: var(--color-primary-dark);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
    }
    
    .involvement-card h3 {
        font-size: 1.5rem;
        margin-bottom: 1rem;
    }
    
    .involvement-card p {
        margin-bottom: 1.5rem;
        font-size: 1rem;
        line-height: 1.6;
        opacity: 0.9;
    }
    
    .involvement-link {
        display: inline-block;
        padding: 0.75rem 1.5rem;
        background-color: #FFFFFF;
        color: var(--color-primary);
        border-radius: 4px;
        font-weight: 500;
        transition: all 0.3s ease;
    }
    
    .involvement-link:hover {
        background-color: var(--color-accent);
        color: var(--color-text-dark);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }
    
    /* Responsive Styles */
    @media (max-width: 768px) {
        .page-header h1 {
            font-size: 2.5rem;
        }
        
        .projects-grid, .stories-grid {
            grid-template-columns: 1fr;
        }
        
        .get-involved-content h2 {
            font-size: 2rem;
        }
    }
</style>
@endsection