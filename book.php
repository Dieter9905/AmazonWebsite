<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="book.css">
</head>

<body> 
    <nav>
        <a href="index.html">
            <img src="./assets/amazon_logo.png" width="100" alt="">
        </a>
        <div class="nav-country">
            <img src="./assets/location_icon.png" height="20" alt="">
            <div>
                <p>Deliver to</p>
                <h1>United Kingdom</h1>
            </div>
        </div>
        <div class="nav-search">
            <div class="nav-search-gategory">
                <p>All</p>
                <img src="./assets/dropdown_icon.png" height="12" alt="">
            </div>
            <input type="text" class="nav-search-input" placeholder="Search Amazon">
            <img src="./assets/search_icon.png" class="nav-search-icon" alt="">
        </div>
        <div class="nav-language">
            <img src="./assets/us_flag.png" width="25px" alt="">
            <p>EN</p>
            <img src="./assets/dropdown_icon.png" width="8px" alt="">
        </div>
        <div class="nav-text">
    <?php
    session_start();
    if(isset($_SESSION['user_fullname'])): ?>
        <p>Hello, <?php echo htmlspecialchars($_SESSION['user_fullname']); ?></p>
        <h1>Account & Lists <img src="./assets/dropdown_icon.png" width="8px" alt=""></h1>
    <?php else: ?>
        <p><a href="signin.php">Hello, Sign in</a></p>
        <h1>Account & Lists <img src="./assets/dropdown_icon.png" width="8px" alt=""></h1>
    <?php endif; ?>
</div>
       <div class="nav-text">
        <p>Return</p>
        <h1>& Orders</h1>
       </div>
       <a href="signin.html" class="mobile-user-icon" style="display: none;">
        <img src="./assets/user.png" alt="">
       </a>
       <a href="cart.html" class="nav-cart">
        <img src="./assets/cart_icon.png" width="35px" alt="">
        <h4>Card</h4>
       </a>

    </nav>
<div class="nav-bottom">
    <div>
        <img src="./assets/menu_icon.png" width="25px" alt="">
        <p>All</p>
    </div>
    <p>Today's Deals</p>
    <p>Customer Service</p>
    <p>Registry</p>
    <p>Gift Cards</p>
    <p> Sell</p>
</div>

<div class="nav-book">
    <ul>
        <li>Books</li>
        <li>Advanced Search</li>
        <li>New Releases</li>
        <li>Best Sellers & More</li>
        <li>Amazon Book Clubs</li>
        <li>Children's Books</li>
        <li>Textbooks</li>
        <li>Best Books of the Month</li>
    </ul>
</div>

<div class="book-container">
    <div class="book-image">
        <img src="https://images-na.ssl-images-amazon.com/images/G/01/img16/books/content-grid/header/34111_books_us_type_title_840x54_ember.png" alt="">
    </div>
    <div class="book-menu">
        <aside>
            <strong>Popular in Books</strong>
            <p>Summer Reading</p>
            <p>Read with Pride</p>
            <p>Raising Asian Voices</p>
            <p>Books by Black Authors</p>
            <p>Hispanic and Latino Stories</p>
            <p>Books in Spanish</p>
            <p>Celebrity Picks</p>
            <p>Children's Books</p>
            <p>Deals in Books</p>
            <p>Best Books of 2024 So Far</p>
            <p>Best Books of the Month</p>

            <strong>More in Books</strong>
            <p>Book Merch Shop</p>
            <p>100 Books to Read in a Lifetime</p>
            <p>Amazon Book Review</p>
            <p>Amazon Books on Facebook</p>
            <p>Amazon Books on Twitter</p>
            <p>Amazon First Reads</p>
            <p>Book Club Picks</p>
            <p>From Page to Screen</p>
            <p>Start a New Series</p>
            <p>Your Company Bookshelf</p>

            <strong>Textbooks</strong>
            <p>Textbooks Store</p>
            <p>Textbook Rentals</p>
            <p>Kindle eTextbooks</p>

            <strong>Kindle eTextbooks</strong>
            <p>Audible Audiobooks</p>
            <p>Kindle eBooks</p>
            <p>Kindle Deals</p>
            <p>Kindle Unlimited</p>
            <p>Kindle Vella</p>
            <p>Prime Reading</p>

            <strong>New Releases</strong>
            <p>Last 30 days</p>
            <p>Last 90 days</p>
            <p>Coming Soon</p>

            <strong>Department</strong>
            <strong style="display: block;">Books</strong>
            <p>Arts & Photography</p>
            <p>Biographies & Memoirs</p>
            <p>Business & Money</p>
            <p>Calendars</p>
            <p>Children's Books</p>
            <p>Christian Books & Bibles</p>
            <p>Comics & Graphic Novels</p>
            <p>Computers & Technology</p>
            <p>Cookbooks, Food & Wine/p>
            <p>Crafts, Hobbies & Home</p>
            <p>Education & Teaching</p>
            <p>Engineering &</p>
            <p>Transportation</p>
            <p>Health, Fitness & Dieting</p>
            <p>History</p>
            <p>Humor & Entertainment</p>
            <p>Law</p>
            <p>LGBTQ+ Books</p>
            <p>Literature & Fiction</p>
            <p>Medical Books</p>
            <p>Mystery, Thriller & Suspense</p>
            <p>Parenting & Relationships</p>
            <p>Politics & Social Sciences</p>
            <p>Reference</p>
            <p>Religion & Spirituality</p>
            <p>Romance</p>
            <p>Science & Math</p>
            <p>Science Fiction & Fantasy</p>
            <p>Self-Help</p>
            <p>Sports & Outdoors</p>
            <p>Teen & Young Adult</p>
            <p>Test Preparation</p>
            <p>Travel</p>

            <strong>Format</strong>
            <p>Paperback</p>
            <p>Hardcover</p>
            <p>Kindle Edition</p>
            <p>Large Print</p>
            <p>Audible Audiobook</p>
            <p>Printed Access Code</p>
            <p>Loose Leaf</p>
            <p>Audio CD</p>
            <p>Board Book</p>
            <p>Spiral-bound</p>
       
            <strong>Kindle Unlimited</strong>
            <p><input type="checkbox" id="kindle-unlimited"> Kindle Unlimited Eligible</p>
        
            <strong>Author</strong>
            <p><input type="checkbox" id="casey-means"> Casey Means MD</p>
            <p><input type="checkbox" id="candice-peckham"> Candice Peckham</p>
            <p><input type="checkbox" id="rebecca-yarros"> Rebecca Yarros</p>
            <p><input type="checkbox" id="alex-hirsch"> Alex Hirsch</p>
            <p><input type="checkbox" id="kristin-hannah"> Kristin Hannah</p>
            <p><input type="checkbox" id="colleen-hoover"> Colleen Hoover</p>
            <p><input type="checkbox" id="jonathan-haidt"> Jonathan Haidt</p>
        
            <strong>Book Series</strong>
            <p><input type="checkbox" id="the-empyrean"> The Empyrean</p>
            <p><input type="checkbox" id="beyond-suffering"> Beyond Suffering</p>
            <p><input type="checkbox" id="in-love-with-us"> In Love with Us</p>
            <p><input type="checkbox" id="in-death"> In Death</p>
            <p><input type="checkbox" id="cozy-adult-coloring"> Cozy Adult Coloring</p>
            <p><input type="checkbox" id="court-of-thorns-roses"> A Court of Thorns and Roses</p>
        
            <strong>Language</strong>
            <p><input type="checkbox" id="english"> English</p>
            <p><input type="checkbox" id="spanish"> Spanish</p>
            <p><input type="checkbox" id="french"> French</p>
            <p><input type="checkbox" id="german"> German</p>
            <p><input type="checkbox" id="chinese"> Chinese (Simplified)</p>
            <p><input type="checkbox" id="japanese"> Japanese</p>
            <p><input type="checkbox" id="arabic"> Arabic</p>
            <p><input type="checkbox" id="portuguese"> Portuguese</p>
        
            <strong>Business Type</strong>
            <p><input type="checkbox" id="small-business"> Small Business</p>
        
            <strong>More sustainable Products</strong>
            <p><input type="checkbox" id="climate-pledge-friendly"> Climate Pledge Friendly</p>
        
            <strong>Payment Plan</strong>
            <p><input type="checkbox" id="layaway-eligible"> Layaway Eligible</p>

            <strong>Award Winners</strong>
            <p><input type="checkbox" id="booker-prize"> Booker Prize</p>
            <p><input type="checkbox" id="caldecott-medal"> Caldecott Medal</p>
            <p><input type="checkbox" id="eisner-award"> Eisner Award</p>
            <p><input type="checkbox" id="national-book-award"> National Book Award</p>
            <p><input type="checkbox" id="newbery-medal"> Newbery Medal</p>

            <strong>Promotion</strong>
            <p><input type="checkbox" id="bargain-books"> Bargain Books</p>

            <strong>Avg. Customer Review</strong>
            <p><input type="checkbox" id="four-stars-up"> <span>&#9733;&#9733;&#9733;&#9733;&#9734;</span> & up</p>
            <p><input type="checkbox" id="three-stars-up"> <span>&#9733;&#9733;&#9733;&#9734;&#9734;</span> & up</p>
            <p><input type="checkbox" id="two-stars-up"> <span>&#9733;&#9733;&#9734;&#9734;&#9734;</span> & up</p>
            <p><input type="checkbox" id="one-star-up"> <span>&#9733;&#9734;&#9734;&#9734;&#9734;</span> & up</p>

            <strong>New Releases</strong>
            <p><input type="checkbox" id="last-30-days"> Last 30 days</p>
            <p><input type="checkbox" id="last-90-days"> Last 90 days</p>
            <p><input type="checkbox" id="coming-soon"> Coming Soon</p>

            <strong>Condition</strong>
            <p><input type="checkbox" id="new"> New</p>
            <p><input type="checkbox" id="used"> Used</p>
            <p><input type="checkbox" id="collectible"> Collectible</p>

            <strong>Deals & Discounts</strong>
            <p><input type="checkbox" id="all-discounts"> All Discounts</p>

            <strong>Availability</strong>
            <p><input type="checkbox" id="include-out-of-stock"> Include Out of Stock</p>
        </aside>
        <hr>

    <div class="content">
        <div class="sidebar">
            <!-- Sidebar content -->
        </div>
        <div class="main-content">
            <h2>Best sellers</h2>
            <div class="book-list">
            <div class="book">
                <img src="path_to_image.jpg" alt="Book Title">
                <p>Book Title</p>
                <p>$Price</p>
            </div>
            <div class="book">
                <img src="path_to_image.jpg" alt="Book Title">
                <p>Book Title</p>
                <p>$Price</p>
            </div>
            <div class="book">
                <img src="path_to_image.jpg" alt="Book Title">
                <p>Book Title</p>
                <p>$Price</p>
            </div>
            <div class="book">
                <img src="path_to_image.jpg" alt="Book Title">
                <p>Book Title</p>
                <p>$Price</p>
            </div>
            <div class="book">
                <img src="path_to_image.jpg" alt="Book Title">
                <p>Book Title</p>
                <p>$Price</p>
            </div>
            <div class="book">
                <img src="path_to_image.jpg" alt="Book Title">
                <p>Book Title</p>
                <p>$Price</p>
            </div>
            <div class="book">
                <img src="path_to_image.jpg" alt="Book Title">
                <p>Book Title</p>
                <p>$Price</p>
            </div>
            </div>
            <h2>Best kids' books of the month</h2>
            <div class="book-list">
                <!-- List of books -->
            </div>
        </div>
    </div>
    </div>
</div>

</body>

