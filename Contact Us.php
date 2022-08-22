<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us | Earners24</title>
  <link rel="stylesheet" href="style3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <div class="wrapper">
    <header>Send us Your Message</header>
    <form action="#">
      <div class="dbl-field">
        <div class="field">
          <input type="text" name="name" placeholder="Enter Your Full Name"  required>
          <i class='fas fa-user'></i>
        </div>
        <div class="field">
          <input type="text" name="email" placeholder="Enter Your Email" required>
          <i class='fas fa-envelope'></i>
        </div>
      </div>
      <div class="dbl-field">
        <div class="field">
        </div>
      </div>
      <div class="message">
        <textarea placeholder="Write Your Message" name="message" required></textarea>
        <i class="material-icons">message</i>
      </div>
      <div class="button-area">
        <button type="submit">Send Message</button>
        <span></span>
      </div>
    </form>
  </div>

  <script src="script.js"></script>

</body>
</html>