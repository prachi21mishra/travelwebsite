<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
 
    <link rel="stylesheet" href="css/homestyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
  />
    
    
</head>
<body>
    
    <nav>
        <input type="checkbox" id="check" name="" value="">
        <label for="check" id= "hambtn"><i class="fa fa-bars"></i></label>
        <label class="logo">RUDRA TRAVELS</label>
        <UL>
            <li><a href="hpgfinal.php">home</a></li>
               <li> <a href="aboutus.php">about</a></li>
                <li><a href="package.php">package</a></li>
               <li> <a href="form.php">book </a></LI>
        </UL>
    </nav>
    <div class="formbox">
    <div class="fcontainer">
        
        <div class="form-title">Booking Form</div>
        <form action="insert.php" method="post">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">FULL NAME</span>
                    <input type="text"  name="name" placeholder="enter your full name" required>
                </div>

                <div class="input-box">
                    <span class="details">EMAIL</span>
                    <input type="text" name="email" placeholder="enter your email" required>
                </div>

                <div class="input-box">
                    <span class="details">PHONE</span>
                    <input type="text" name="phone" placeholder="enter your phone number" required>
                </div>

                <div class="input-box">
                    <span class="details">ADDRESS</span>
                    <input type="text" name="address" placeholder="enter your address" required>
                </div>

                <div class="input-box">
                    <span class="details">WHERE TO</span>
                    <input type="text" name="location" placeholder="place to visit" required>
                </div>

                <div class="input-box">
                    <span class="details">HOW MANY</span>
                    <input type="text" name="guests"   placeholder="number of guests" required>
                </div>

                <div class="input-box">
                    <span class="details">ARRIVAL</span>
                    <input type="date" name="arrival" required>
                </div>

                <div class="input-box">
                    <span class="details">LEAVING</span>
                    <input type="date"   name="leaving" required>
                </div>
                </div>
                <div class="form-button">
                    <input type="submit" name="submit" value="submit">
                </div>

        </form>
    </div>
    </div>
</body>
</html>