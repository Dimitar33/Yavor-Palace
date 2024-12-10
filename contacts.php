<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
    <link rel="stylesheet" href="css/root.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/contacts.css">

</head>

<body>
    <?php include "header.php" ?>

    <h2>Contact us</h2>
    <br>

    <div class="contacts-main">
        <div class="form">
            <form action="">
                <ul>
                    <li class="half"><input type="text" placeholder="Name" required></li>
                    <li class="half"><input type="email" placeholder="Email" required></li>
                    <li class="full"><input type="text" placeholder="Subject"></li>
                    <li> <textarea name="message" placeholder="Message here" required></textarea> </li>
                    <li> <input type="submit" value="SEND" class="submitButton"></li>
                </ul>
            </form>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9863.646828369521!2d27.704899146376004!3d42.693561532985804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40a69fad52a2d671%3A0xab53e760f04878ff!2sYavor%20Palace!5e0!3m2!1sen!2sie!4v1733851362177!5m2!1sen!2sie" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <footer>
        <?php include 'footer.php' ?>
    </footer>
</body>

</html>