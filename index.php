<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index,follow" />

    <!-- Open Grap Protocol là một giao thức để giao tiếp giữa 2 đối tượng, mà cụ thể là giữa website của bạn và các mạng xã
    hội như Facebook, Twitter, LinkedIn, Instagram .... -->
    <meta property="og:title" content="Tai Nguyen" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://tainguyen.asia/" />
    <meta property="og:image" content="images/structure.png" />

    <!--For Twitter-->
    <meta property="twitter:title" name="twitter:title" content="Tai Nguyen" />
    <meta name="twitter:image" content="http://tainguyen.asia/images/handsome.png" />

    <!--Sử dụng rel canonical để ngăn chặn các trang có nội dung trùng lặp xuất hiện trên nhiều URL, có thể hiểu đơn giản hơn
    là nói với Search Engines rằng url nào cần hiển thị trong kết quả tìm kiếm, URL nào là chính của bài trang này-->
    <link rel="canonical" href="https://tainguyen.asia/en/">
    <link rel="alternate" hreflang="en" href="https://tainguyen.asia/en/"/>
    <link rel="alternate" hreflang="vi" href="https://tainguyen.asia/vi/"/>
    <link rel="revision" href="https://tainguyen.asia/en/" />

    <!--Dùng dns-prefetch: khi request đến bên thứ 3, chúng ta cần chuyển đổi DNS sang IP trước khi browser request-->
    <link rel="dns-prefetch" href="https://www.google-analytics.com"/>
    <link rel="dns-prefetch" href="https://www.googletagmanager.com"/>
    <link rel="preconnect" href="https://www.googletagmanager.com"/>
    <link rel="preconnect" href="https://www.google-analytics.com"/>
    <!-- Dùng shortlink khi url của bạn quá dài, không thích họp để chia sẽ thì có thể dùng https://bitly.com/ or https://tinyurl.com/app -->
    <link rel="shortlink" href="https://tainguyen.asia/en/" />
    <link rel="shortcut icon" href="/images/structure-.png" />

    <!-- Base tag được dùng để khai báo cho những url với đường dẫn tương đối-->
    <base href="https://tainguyen.asia/">
    <!--Đối với js nên thêm thuộc tính defer rất hữu ích và tăng hiệu xuất cho website-->
    <!--Đối với css thì thêm thuộc tính rel="stylesheet" và media-->
</head>
<body>
    <header>
        <figure>
            <img src="logo.png" alt="logo"/>
        </figure>
        <nav>
            <a href="index.html">Home</a>
            <a href="services.html">Services</a>
            <a href="contact.html">Contact</a>
            <a href="about.html">About Us</a>
        </nav>
    </header>
    <main>
        <article>
            <h1>JavaScript Basics</h1>
            <p>JavaScript is a rich and expressive language...</p>
            <section>
                <h2>Syntax Basics</h2>
                <p>Understanding statements, variable naming, whitespace...</p>
            </section>
            <section>
                <h2>Operators</h2>
                <p>Operators allow you to manipulate values...</p>
            </section>
            <section>
                <h2>Conditional Code</h2>
                <p>Sometimes you only want to run a block of code under certain conditions...</p>
            </section>
            <aside>
                <p>Viewed by 1503 people</p>
                <!--Khai báo microdata-->
                <p itemscope itemtype="http://schema.org/Person">
                    Author:
                    <span itemprop="name">John Nguyen</span>,
                    <span itemprop="jobTitle">Senior Software Developer</span>
                    at
                    <span itemprop="worksFor" itemscope itemtype="https://schema.org/Corporation">
                        <span itemtype="name">Google</span>,
                    </span>
                    <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                        <span itemprop="addressLocality">Mountain View</span>,
                        <span itemprop="addressRegion">California</span>
                    </span>
                </p>
                <figure>
                    <img src="images/structure-.png" alt="Structure html5"/>
                    <img src="images/structure-.png" alt="Maggie Smith"/>
                    <img src="images/structure-.png" alt="Tom Hardy"/>
                    <figcaption>People who liked the article</figcaption>
                </figure>
            </aside>
        </article>
    </main>
    <footer>

    </footer>
</body>
</html>
