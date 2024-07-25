<?php
include 'DBConnect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Website</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="logo">
                <a href="#">MyBlog</a>
            </div>
            <nav class="nav-menu">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#featured-posts">Blog</a></li>
                    <li><a href="signin.php">Sign In</a></li>
                    <li><a href="signup.php" class="sign-up">Sign Up</a></li>
                </ul>
            </nav>
            
        </div>
    </header>

    <section class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-container">
            <h1 class="hero-title">Discover Amazing Stories</h1>
            <p class="hero-subtitle">Read, write, and share your thoughts with the world.</p>
            <div class="hero-buttons">
                <a href="CreateBlog.html" class="btn primary-btn">Start Writing</a>
                <a href="#featured-posts" class="btn secondary-btn">Explore Blogs</a>
            </div>
        </div>
    </section>

    <section id="featured-posts" class="featured-posts">

        <section class="featured-posts">
            <div class="container">

                <div class="posts-grid">
                    <article class="post">
                        <div class="post-image">
                            <img src="blogimage1.jpg" alt="Post Image">
                        </div>
                        <div class="post-content">
                            <h3 class="post-title">10 Must-Read Books for Every Book Lover</h3>
                            <p class="post-excerpt">Discover a curated list of books that will ignite your passion for
                                reading and expand your literary horizons.</p>
                            <a href="#" class="btn read-more-btn">Read More</a>
                        </div>
                    </article>

                    <article class="post">
                        <div class="post-image">
                            <img src="blogimage2.png" alt="Post Image">
                        </div>
                        <div class="post-content">
                            <h3 class="post-title">Healthy Habits: Tips for a Balanced Lifestyle</h3>
                            <p class="post-excerpt">Learn practical strategies for maintaining a healthy lifestyle, from
                                nutrition and exercise to stress management and self-care.</p>
                            <a href="#" class="btn read-more-btn">Read More</a>
                        </div>
                    </article>

                    <article class="post">
                        <div class="post-image">
                            <img src="blogimage3.png" alt="Post Image">
                        </div>
                        <div class="post-content">
                            <h3 class="post-title">Travel Destinations: Hidden Gems Around the World</h3>
                            <p class="post-excerpt">Explore off-the-beaten-path travel destinations that offer unique
                                experiences and unforgettable adventures.</p>
                            <a href="#" class="btn read-more-btn">Read More</a>
                        </div>
                    </article>
                    <article class="post">
                        <div class="post-image">
                            <img src="blogimage4.png" alt="Post Image">
                        </div>
                        <div class="post-content">
                            <h3 class="post-title">Mastering Productivity: Effective Time Management Techniques</h3>
                            <p class="post-excerpt">Learn valuable time management strategies to boost your productivity
                                and achieve your goals efficiently. Discover techniques to prioritize tasks, minimize
                                distractions, and maximize your focus for optimal performance.</p>
                            <a href="#" class="btn read-more-btn">Read More</a>
                        </div>
                    </article>
                    <article class="post">
                        <div class="post-image">
                            <img src="blogimage5.png" alt="Post Image">
                        </div>
                        <div class="post-content">
                            <h3 class="post-title">Mindfulness Meditation: Cultivating Inner Peace and Clarity</h3>
                            <p class="post-excerpt">Explore the transformative power of mindfulness meditation and learn
                                how to incorporate it into your daily routine. Discover techniques to quiet the mind,
                                reduce stress, and cultivate a sense of inner peace and clarity amidst life's
                                challenges.</p>
                            <a href="#" class="btn read-more-btn">Read More</a>
                        </div>
                    </article>
                    <article class="post">
                        <div class="post-image">
                            <img src="blogimage6.png" alt="Post Image">
                        </div>
                        <div class="post-content">
                            <h3 class="post-title">Digital Detox: Unplugging for Mental Wellbeing</h3>
                            <p class="post-excerpt">Discover the benefits of taking a break from digital devices and
                                reclaiming your time for mental rejuvenation. Learn practical tips for reducing screen
                                time, setting boundaries with technology, and reconnecting with the present moment for
                                improved mental health and wellbeing.</p>
                            <a href="#" class="btn read-more-btn">Read More</a>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <section class="blog-post">
            <div class="container">
                <article class="post-content">
                    <h2 class="post-title">Unlocking Creativity: 10 Tips for Overcoming Writer's Block</h2>
                    <div class="post-meta">
                        <span class="post-author">By: Jay Bhagat</span>
                        <span class="post-date">Posted on: May 25, 2024</span>
                    </div>
                    <div class="post-body">
                        <p>"Unlocking Creativity: 10 Tips for Overcoming Writer's Block" offers invaluable insights and
                            strategies to help writers navigate and overcome creative hurdles. From practical techniques
                            to ignite inspiration to effective methods for breaking through mental barriers, this guide
                            empowers writers to reclaim their creative flow. Whether you're a seasoned author or a
                            budding writer, discover actionable advice to unleash your creativity and conquer writer's
                            block once and for all. With a blend of proven tactics and innovative approaches, this
                            resource equips writers with the tools they need to flourish in their craft and produce
                            their best work yet.</p>
                        <!-- Add more paragraphs and images as needed -->
                        <img src="yourblogimage.png" alt="Blog Image">
                    </div>
                    <div class="post-actions">
                        <a href="#" class="btn read-more-btn">Edit</a>
                        <a href="#" class="btn read-more-btn">Delete</a>
                    </div>
                </article>

                <!-- Comment Section -->



            </div>
            </div>
        </section>

    </section>




</body>

</html>