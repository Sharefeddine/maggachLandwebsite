<section class="contactUs">
    <div class="box"><div id="map" class="map-container"></div></div>
    <div class="box">
        <h2>Contact Us</h2>
    <form action="sendMessage.php" method="post">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>
        </div>
        <input type="submit" value="Submit">
    </form>
    </div>
</section>

