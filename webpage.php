<?php
include 'connect.php';

// Fetch menu items from the database for each category (breakfast, lunch, dinner)
$sql_breakfast = "SELECT * FROM menu_items WHERE type = 'breakfast'";
$result_breakfast = $conn->query($sql_breakfast);

$sql_lunch = "SELECT * FROM menu_items WHERE type = 'lunch'";
$result_lunch = $conn->query($sql_lunch);

$sql_dinner = "SELECT * FROM menu_items WHERE type = 'dinner'";
$result_dinner = $conn->query($sql_dinner);
?>
<!DOCTYPE html>

<html lang="en">

<body>
    <div id="hero">
        <div id="hero_content">
            <h1> The Heaven Restaurant</h1>
            <h2>Best Quality Tasty Food Point</h2>
            <a href="">Menu</a>
        </div>
    </div>
    <?php include("header.php"); ?>
    <style>
        .box .description {
            height: 75px;
            /* Adjust the height as needed */
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .description {
            line-height: 40px;
            /* Adjust the height as needed */
        }
    </style>

    <!-- Header section end -->
    <!-- Menu section Begin -->
    <div id="Menu">
        <h1 id="section">Menu</h1>
        <div id="Menu_row">
            <!-- Breakfast Menu Column -->
            <div id="Menu_col">
                <h2>Breakfast</h2>
                <!-- Bootstrap Carousel for Breakfast items -->
                <div id="carouselBreakfast" class="carousel slide" data-ride="carousel" data-interval="3000">
                    <div class="carousel-inner">
                        <?php
                        $active = true;
                        while ($row = $result_breakfast->fetch_assoc()): ?>
                            <div class="carousel-item <?php if ($active) {
                                echo 'active';
                                $active = false;
                            } ?>">
                                <!-- Breakfast item -->
                                <div class="box">
                                    <div id="image">
                                        <img src="project/images/<?php echo $row['image']; ?>"
                                            alt="<?php echo $row['name']; ?>">
                                    </div>
                                    <div>
                                        <h3>
                                            <?php echo $row['name']; ?>
                                        </h3>
                                        <h4>
                                            <?php echo $row['price']; ?>rs
                                        </h4>
                                        <h6 class="description">
                                            <?php echo $row['description']; ?>
                                        </h6>
                                        <br>
                                        <!-- Form for adding item to cart -->
                                        <form action="add_to_cart.php" method="post">
                                            <input type="hidden" name="item_id" value="<?php echo $row['id']; ?>">
                                            <input type="hidden" name="item_name" value="<?php echo $row['name']; ?>">
                                            <input type="hidden" name="item_price" value="<?php echo $row['price']; ?>">
                                            <input type="hidden" name="item_image" value="<?php echo $row['image']; ?>">
                                            <div class="form-group">
                                                <label for="quantity">Quantity:</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-outline-secondary btn-primary text-light" type="button" style="font-size:20px;font-weight:bold"
                                                            onclick="decreaseQuantity(this)">-</button>
                                                    </div>
                                                    <input type="number" id="quantity" name="quantity"
                                                        class=" text-center form-control" value="1" min="1" max="10"   style="font-size:20px;font-weight:bold">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary btn-primary text-light" type="button"  style="font-size:20px;font-weight:bold"
                                                            onclick="increaseQuantity(this)">+</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary" name="add_to_cart">Add to
                                                Cart</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <!-- Navigation buttons -->
                    <a class="carousel-control-prev" href="#carouselBreakfast" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" style="background-color: gray;"
                            aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselBreakfast" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" style="background-color: gray;"
                            aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <!-- Lunch Menu Column -->
            <div id="Menu_col">
                <h2>Lunch</h2>
                <!-- Bootstrap Carousel for Lunch items -->
                <div id="carouselLunch" class="carousel slide" data-ride="carousel" data-interval="3000">
                    <div class="carousel-inner">
                        <?php
                        $active = true;
                        while ($row = $result_lunch->fetch_assoc()): ?>
                            <div class="carousel-item <?php if ($active) {
                                echo 'active';
                                $active = false;
                            } ?>">
                                <!-- Lunch item -->
                                <div class="box">
                                    <div id="image">
                                        <img src="project/images/<?php echo $row['image']; ?>"
                                            alt="<?php echo $row['name']; ?>">
                                    </div>
                                    <div>
                                        <h3>
                                            <?php echo $row['name']; ?>
                                        </h3>
                                        <h4>
                                            <?php echo $row['price']; ?>rs
                                        </h4>
                                        <h6 class="description">
                                            <?php echo $row['description']; ?>
                                        </h6>
                                        <br>
                                        <!-- Form for adding item to cart -->
                                        <form action="add_to_cart.php" method="post">
                                            <input type="hidden" name="item_id" value="<?php echo $row['id']; ?>">
                                            <input type="hidden" name="item_name" value="<?php echo $row['name']; ?>">
                                            <input type="hidden" name="item_price" value="<?php echo $row['price']; ?>">
                                            <input type="hidden" name="item_image" value="<?php echo $row['image']; ?>">
                                            <div class="form-group">
                                                <label for="quantity">Quantity:</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-outline-secondary btn-primary text-light" type="button" style="font-size:20px;font-weight:bold"
                                                            onclick="decreaseQuantity(this)">-</button>
                                                    </div>
                                                    <input type="number" id="quantity" name="quantity"
                                                        class=" text-center form-control" value="1" min="1" max="10"   style="font-size:20px;font-weight:bold">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary btn-primary text-light" type="button"  style="font-size:20px;font-weight:bold"
                                                            onclick="increaseQuantity(this)">+</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary" name="add_to_cart">Add to
                                                Cart</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <!-- Navigation buttons -->
                    <a class="carousel-control-prev" href="#carouselLunch" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" style="background-color: gray;"
                            aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselLunch" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" style="background-color: gray;"
                            aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <!-- Dinner Menu Column -->
            <div id="Menu_col">
                <h2>Dinner</h2>
                <!-- Bootstrap Carousel for Dinner items -->
                <div id="carouselDinner" class="carousel slide" data-ride="carousel" data-interval="3000">
                    <div class="carousel-inner">
                        <?php
                        $active = true;
                        while ($row = $result_dinner->fetch_assoc()): ?>
                            <div class="carousel-item <?php if ($active) {
                                echo 'active';
                                $active = false;
                            } ?>">
                                <!-- Dinner item -->
                                <div class="box">
                                    <div id="image">
                                        <img src="project/images/<?php echo $row['image']; ?>"
                                            alt="<?php echo $row['name']; ?>">
                                    </div>
                                    <div>
                                        <h3>
                                            <?php echo $row['name']; ?>
                                        </h3>
                                        <h4>
                                            <?php echo $row['price']; ?>rs
                                        </h4>
                                        <h6 class="description">
                                            <?php echo $row['description']; ?>
                                        </h6>
                                        <br>
                                        <!-- Form for adding item to cart -->
                                        <form action="add_to_cart.php" method="post">
                                            <input type="hidden" name="item_id" value="<?php echo $row['id']; ?>">
                                            <input type="hidden" name="item_name" value="<?php echo $row['name']; ?>">
                                            <input type="hidden" name="item_price" value="<?php echo $row['price']; ?>">
                                            <input type="hidden" name="item_image" value="<?php echo $row['image']; ?>">
                                            <!-- Inside your while loop for displaying menu items -->
                                            <div class="form-group">
                                                <label for="quantity">Quantity:</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-outline-secondary btn-primary text-light" type="button" style="font-size:20px;font-weight:bold"
                                                            onclick="decreaseQuantity(this)">-</button>
                                                    </div>
                                                    <input type="number" id="quantity" name="quantity"
                                                        class=" text-center form-control" value="1" min="1" max="10"   style="font-size:20px;font-weight:bold">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary btn-primary text-light" type="button"  style="font-size:20px;font-weight:bold"
                                                            onclick="increaseQuantity(this)">+</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary" name="add_to_cart">Add to
                                                Cart</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <!-- Navigation buttons -->
                    <a class="carousel-control-prev" href="#carouselDinner" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" style="background-color: gray;"
                            aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselDinner" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" style="background-color: gray;"
                            aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Menu section end -->


    <!-- Add Bootstrap JS link -->
    <!-- Chef section Begin -->
    <div id="Chef">
        <h1 id="section">Chef</h1>
        <div id="Chef_row">
            <div class="Chef_col">
                <div id="img">
                    <img src="project/images/1.png">
                </div>
                <div>
                    <h4> Mrudul Roy</h4>
                </div>
            </div>
            <div class="Chef_col">
                <div id="img">
                    <img src="project/images/2.png">
                </div>
                <div>
                    <h4> frady Smith</h4>
                </div>
            </div>
            <div class="Chef_col">
                <div id="img">
                    <img src="project/images/3.png">
                </div>
                <div>
                    <h4> Rehul Jorge</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- Chef section end -->
    <!-- About section bigin -->
    <div id="About">
        <h1 id="section">About</h1>
        <div id="About_row">
            <div class="About_col">
                <h1>About Us</h1>
                <p>
                    Welcome to 'THe Heaven Restaurant' where culinary excellence meets warm hospitality. Our story is
                    one of passion, dedication, and a commitment to delivering an exceptional dining experience to our
                    cherished guests.
                    Our Journey.
                    At 'The Heaven Restaurant', our journey began with a simple yet profound vision – to create a haven
                    for food enthusiasts, a place where flavors come alive, and memories are made. Established in [Year
                    of Establishment], we embarked on this culinary adventure with the aim of offering a unique blend of
                    delectable cuisine, inviting ambiance, and impeccable service.
                    Our Philosophy
                    Culinary Excellence
                    We believe in the artistry of food. Our culinary team, led by Vaishnavi Shinde, is dedicated to
                    crafting dishes that tantalize the taste buds and celebrate the finest ingredients. From farm-fresh
                    produce to premium cuts of meat, we source only the best to ensure every bite is a culinary delight.
                </p>
            </div>
            <div class="About_col">
                <div id="About_img">
                    <img src="project/images/about.png">
                </div>
            </div>
        </div>
    </div>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3813.5766328467034!2d74.45643357492767!3d17.093349283744537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc16d2958cc1a3f%3A0x9c1ff74a4a34b97c!2z4KS44KS-4KSX4KSwIOCkueClieCkn-Clh-Cksg!5e0!3m2!1sen!2sin!4v1706385216994!5m2!1sen!2sin"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    <!-- About section end-->
    <!-- Contact section begin-->
    <div id="Contact">
        <h1 id="section">Contact</h1>
        <div id="Contact_row">
            <div class="Contact_col">
                <div>
                    <p>
                        <i class="fa fa-map-marker"></i>
                        Palus , District sangli ,Maharashtra
                    </p>
                    <P>
                        <a href=" mailto:theheavenresto@gmail">
                            <i class="fa fa-mmap-marker"></i>
                            theheavenresto@gmail.com
                        </a>
                    </P>
                    <p>
                        <a href="tel:+8421885454">
                            +8421885454
                        </a>
                    </p>
                </div>
            </div>
            <div class="Contact_col">
                <form>
                    <h2>Get in touch</h2>
                    <input type="text" placeholder="Name">
                    <input type="text" placeholder="Email">
                    <input type="text" Placeholder="Subject">
                    <button>Send Message</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Contact section end-->
    <!-- Footer section begin -->
    <div id="Footer">
        <div>
            <center>
                <h5 style="color: white;">Copyright &copy;2023 | <a href="" style="color: white;text-decoration: none;">
                        The Heaven</a></h5>
            </center>
        </div>
    </div>



    <!-- Footer section end-->

    <script>
        function increaseQuantity(button) {
            var input = button.parentNode.previousElementSibling;
            var newValue = parseInt(input.value) + 1;
            if (newValue <= parseInt(input.getAttribute('max'))) {
                input.value = newValue;
            }
        }

        function decreaseQuantity(button) {
            var input = button.parentNode.nextElementSibling;
            var newValue = parseInt(input.value) - 1;
            if (newValue >= parseInt(input.getAttribute('min'))) {
                input.value = newValue;
            }
        }
    </script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>