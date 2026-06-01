<?php include 'db.php'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Restaurant Website</title>

<style>
body {
    margin: 0;
    font-family: Arial;
    background: #f4f4f4;
}

header {
    background: #c0392b;
    color: white;
    padding: 20px;
    text-align: center;
}

nav a {
    color: white;
    text-decoration: none;
    margin: 15px;
    font-size: 18px;
}

.container {
    width: 90%;
    margin: auto;
}

.menu-section {
    margin-top: 40px;
}

.food-card {
    width: 22%;
    background: white;
    display: inline-block;
    margin: 1%;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0px 2px 5px gray;
    vertical-align: top;
}

.food-card img {
    width: 100%;
    height: 200px;
}

.food-card h3,
.food-card p {
    padding-left: 15px;
}

form {
    background: white;
    padding: 20px;
    border-radius: 10px;
    margin-top: 30px;
}

input, textarea, select {
    width: 100%;
    padding: 10px;
    margin-top: 10px;
    margin-bottom: 20px;
}

button {
    background: #c0392b;
    color: white;
    border: none;
    padding: 12px 20px;
    cursor: pointer;
}

footer {
    background: black;
    color: white;
    text-align: center;
    padding: 20px;
    margin-top: 40px;
}
</style>
</head>

<body>

<header style="position:sticky; top:0; z-index:1000;">
<h1>Foodie's Restaurant</h1>

<nav>
<a href="#home">Home</a>
<a href="#menu">Menu</a>
<a href="#order">Order</a>
<a href="#booking">Table Booking</a>
<a href="#feedback">Feedback</a>
<a href="#contact">Contact</a>
</nav>
</header>

<div id="home"></div>

<!-- HOME SECTION -->

<section id="home" style="background:url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=1600&auto=format&fit=crop'); background-size:cover; background-position:center; height:550px; display:flex; justify-content:center; align-items:center; text-align:center; color:white;">

<div style="background:rgba(0,0,0,0.7); padding:50px; border-radius:15px; width:70%;">

<h1 style="font-size:55px; margin-bottom:20px;">Welcome to Foodie's Restaurant</h1>

<p style="font-size:22px; line-height:35px;">
Experience Delicious Food, Instant Delivery and Premium Table Reservations.
</p>

<a href="#menu">
<button style="padding:15px 35px; font-size:20px; border-radius:10px;">
View Our Menu
</button>
</a>

</div>

</section>

<div class="container">

<!-- MENU SECTION -->
<div class="menu-section" id="menu">

<h2 style="text-align:center; color:#c0392b; font-size:40px;">Our Special Menu</h2>

<p style="text-align:center; font-size:18px; margin-bottom:30px;">
Choose your favorite dishes prepared by our expert chefs.
</p>

<div class="food-card">
<img src="https://images.unsplash.com/photo-1513104890138-7c749659a591" alt="Pizza" />
<h3>Cheese Pizza</h3>
<p>Price: ₹299</p>
</div>

<div class="food-card">
<img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd" alt="Burger" />
<h3>Chicken Burger</h3>
<p>Price: ₹199</p>
</div>

<div class="food-card">
<img src="https://images.unsplash.com/photo-1621996346565-e3dbc646d9a9" alt="Pasta" />
<h3>Italian Pasta</h3>
<p>Price: ₹249</p>
</div>

<div class="food-card">
<img src="https://images.unsplash.com/photo-1577805947697-89e18249d767" alt="Shake" />
<h3>Chocolate Shake</h3>
<p>Price: ₹149</p>
</div>

</div>

<!-- ORDER FORM -->
<div id="order" style="margin-top:50px;">

<h2 style="text-align:center; color:#27ae60; font-size:38px;">Online Food Order</h2>

<form action="order.php" method="post" style="border-top:5px solid #27ae60;">
<input type="text" name="customer_name" placeholder="Customer Name" required="required" />

<input type="text" name="phone" placeholder="Phone Number" required="required" />

<select name="food_item">
<option>Pizza</option>
<option>Burger</option>
<option>Pasta</option>
<option>Shake</option>
</select>

<input type="number" name="quantity" placeholder="Quantity" required="required" />

<textarea name="address" placeholder="Delivery Address"></textarea>

<button type="submit">Place Order</button>
</form>
</div>

<!-- TABLE BOOKING -->
<div id="booking" style="margin-top:50px;">

<h2 style="text-align:center; color:#8e44ad; font-size:38px;">Reserve Your Table</h2>

<form action="booking.php" method="post" style="border-top:5px solid #8e44ad; background:#faf5ff;">
<input type="text" name="customer_name" placeholder="Full Name" required="required" />

<input type="email" name="email" placeholder="Email" required="required" />

<input type="date" name="booking_date" required="required" />

<input type="time" name="booking_time" required="required" />

<input type="number" name="guests" placeholder="Number of Guests" required="required" />

<button type="submit">Book Table</button>
</form>
</div>

<!-- FEEDBACK SECTION -->
<div id="feedback" style="margin-top:50px;">

<h2 style="text-align:center; color:#e67e22; font-size:38px;">Customer Feedback</h2>

<form action="feedback.php" method="post" style="border-top:5px solid #e67e22; background:#fff7ef;">
<input type="text" name="customer_name" placeholder="Your Name" required="required" />

<textarea name="message" placeholder="Write your feedback"></textarea>

<button type="submit">Submit Feedback</button>
</form>
</div>

<!-- CONTACT -->
<div id="contact" style="margin-top:50px; background:#222; color:white; padding:40px; border-radius:10px; text-align:center;">
<h2 style="font-size:38px;">Contact Us</h2>
<p>Email: foodiesrestaurant@gmail.com</p>
<p>Phone: +91 9876543210</p>
<p>Address: Meerut, Uttar Pradesh, India</p>
<p>Opening Time: 10:00 AM - 11:00 PM</p>
</div>

</div>

<footer>
<p>© 2026 Foodie's Restaurant. All Rights Reserved.</p>
</footer>

</body>
</html>
```