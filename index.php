<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Php  mailer test">
    <meta name="author" content="Ely Gian Ga" >
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <title>Contact Form</title>
</head>
<body>
    <div class="form-container">
        <h2>Contact Form</h2>
        <?php   if(isset($_GET["error"])){  ?>
            <p class="error"><?= htmlspecialchars($_GET["error"]) ?></p>
        <?php } ?>
        
        <?php   if(isset($_GET["success"])){  ?>
            <p class="success"><?= htmlspecialchars($_GET["success"]) ?></p>
        <?php } ?>
        <form action="contact.php" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <input type="text" name="subject" placeholder="Subject" required>
            <textarea name="text" id="" rows="5" placeholder="Your Message"></textarea>
            <button type="submit">Send Message</button>
        </form>
    </div>
</body>
</html>