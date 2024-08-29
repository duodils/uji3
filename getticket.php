<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment</title>
    <link rel="stylesheet" href="asset/css/reset.css">
</head>

<body>
    <div style="display: flex; flex-direction: column; justify-content: center;align-items: center;">
        <div style="background-color: blue; width: 100vw; display: flex; justify-content: start; padding: 0 5rem 100px 5rem; align-items: center; gap: 20px;">
            <img style="width: 150px;" src="asset/img/logo.png" alt="">
            <a style="color: #fff; font-size: 20px; text-decoration: none;" href="payment.php">Payment</a>
            <a style="color: #fff; font-size: 20px; text-decoration: none; border-bottom: 2px #fff solid;" href="#">Get ticket</a>
        </div>
        <div style="display: flex; flex-direction: column; align-items: center; width: 90vw;  gap: 40px;  background-color: #fff ; padding: 4  0px 30px; position: relative; top: -120px;">
            <h1>CONGRATULATION</h1>
            <P>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius labore voluptatibus nisi adipisci similique voluptatum iusto eligendi sint nihil dolor incidunt placeat neque voluptate architecto, aperiam, esse saepe earum? Iure!</P>
            <div style="display: flex; gap: 80px;  height: 800px; justify-content: space-around ;">
                <div style="display: flex; align-items: center; justify-content: center; flex-direction: column; gap: 20px;">
                    <img style="width: 600px; height: 700px; object-fit:cover ;" src="asset/img/invoice.jpeg" alt="">
                    <a href="printinvoice.php" style="color: #fff; width: 150px; height: 40px; border-radius: 10px; background-color: blue; display: flex; justify-content: center; align-items: center;">Dowload</a>
                </div>
                <div style="display: flex; align-items: center; justify-content: center; flex-direction: column; gap: 20px;">
                    <img style="width: 600px; height: 200px; " src="asset/img/ticketfinal.png" alt="">
                    <a href="printticket.php" style="color: #fff;width: 150px; height: 40px; border-radius: 10px; background-color: blue; display: flex; justify-content: center; align-items: center;" >Dowload</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>