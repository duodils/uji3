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
            <a style="color: #fff; font-size: 20px; text-decoration: none; border-bottom: 2px #fff solid;" href="#">Payment</a>  
            <a style="color: #fff; font-size: 20px; text-decoration: none;" href="getticket.php">Get ticket</a>
        </div>
        <div style="display: flex; flex-direction: row; align-items: center; width: 90vw; padding: 20px;  gap: 40px;  background-color: #fff ; padding: 4  0px 30px; position: relative; top: -120px;">
            <div style="width: 60%; display: flex; flex-direction: column; gap: 20px;">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, recusandae. Fugiat accusantium fugit perspiciatis reprehenderit libero, sit est. Assumenda tenetur, nobis aliquid veritatis illum obcaecati deleniti eum sint placeat aspernatur.</p>
                <div style="display: flex; gap: 20px; border-radius: 20px; overflow: hidden ; border:2px orange solid;">
                    <h3 style="width: 100px; background-color: orange; height: 40px; display: flex; justify-content: center; align-items: center;">2:00:00</h3>
                    <p style="height: 40px; display: flex; justify-content: center; align-items: center;">if the time limit exceeded. the order will be canceled</p>
                </div>
                <div style="display: flex; gap: 20px;">
                    <img src="asset/img/qrcode.jpeg" alt="" style="width: 300px;">
                    <div style="display: flex; flex-direction: column; gap: 20px;">
                        <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                        <ul style="list-style: decimal; margin-left: 20px;">
                            <li>Lorem ipsum dolor sit amet consectetur.</li>
                            <li>Lorem ipsum dolor sit amet consectetur.</li>
                            <li>Lorem ipsum dolor sit amet consectetur.</li>
                            <li>Lorem ipsum dolor sit amet consectetur.</li>
                            <li>Lorem ipsum dolor sit amet consectetur.</li>
                            <li>Lorem ipsum dolor sit amet consectetur.</li>
                            <li>Lorem ipsum dolor sit amet consectetur.</li>
                        </ul>
                        <button style="width: 200px; height: 40px; background-color: transparent; font-size: medium; font-weight: 700; border: orange 2px solid; border-radius: 20px;">Confirm payment</button>
                    </div>
                </div>
            </div>
            <div style="width: 40%; padding: 20px; background-color: #f5f5f5f5; border-radius:20px ;">
                <h3>order number</h3>
                <p style="text-align: end;">08987987</p>
                <h3 style="border-top: 2px black solid;">order detail</h3>
                <p style="text-align: end;">Bruno mars Concert Tickets</p>
                <p style="text-align: end;">Live In Jakarta - Cat 1</p>
                <p style="text-align: end;">1</p>
                <p style="text-align: end;">September 14th 2024</p>
                <h3 style="border-top: 2px black solid;">payment details</h3>
                <p style="text-align: end;">IDR 7.560.000,00</p>
                <p style="text-align: end;">QRIS</p>
            </div>
        </div>
    </div>
</body>

</html>