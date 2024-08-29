<div style="display: flex; flex-direction: row; gap: 50px; margin:20px 50px 60px 50px; padding-top: 80px;" id="ticket">
    <div style="width: 60%;">
        <div style="display: flex; flex-direction:column; gap: 10px; margin: 30px; font-family: 'Montserrat', serif;">
            <h4 style="font-size: 30px; font-weight: 800;">Gold vip</h4>
            <img src="asset/img/tikett.jfif" alt="">
            <div style="padding: 20px; border: orange 2px solid;">
                <div style="border-bottom: 2px orange solid;">
                    <div style="align-items: center;display: flex; justify-content: space-between;">
                        <h3>Description</h3>
                        <h1>></h1>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quam nulla quae accusantium tempore iure nisi? Sit quis dicta optio cumque assumenda, tempore, accusantium consequuntur nemo numquam reiciendis vitae in?</p>
                </div>
                <div style="border-bottom: 2px orange solid; align-items: center; display: flex;justify-content: space-between;">
                    <div>
                        <p>price</p>
                        <h3>IDR 7.650.000,00</h3>
                    </div>
                    <?php
                    if (isset($_POST["qty"])) {
                        $qty = $_POST["qty"];
                    } else {
                        $qty = 0;
                    }
                    ?>
                    <form action="#ticket" method="post" style="align-items: center;display: flex;">
                        <h4><?= $qty++ ?></h4>
                        <input type="hidden" name="qty" value="<?= $qty++ ?>">
                        <button type="submit" style="cursor: pointer; height: 30px; padding: 0 20px; margin: 10px; background-color: blue; color: #fff;">+</button>
                    </form>
                </div>
                <div style="border-bottom: 2px orange solid; align-items: center; display: flex;justify-content: space-between;">
                    <div>
                        <div>
                            <p>total</p>
                            <h3>IDR 0</h3>
                        </div>
                    </div>
                    <button style=" height: 30px; padding: 0 20px; margin: 10px; background-color: blue; color: #fff;">buy now</button>
                </div>
            </div>
        </div>
    </div>
    <div style="width: 40%; display: flex; flex-direction: column; gap: 15px; font-family: 'Montserrat', serif">
        <h1 style="border-bottom: 2px orange solid; text-align: center; ">Ticket and merchandise</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quam ad omnis. Sequi, eligendi officia minima officiis quasi itaque voluptate facere vitae est!</p>
        <button data-modal="modalhowtoorder" class="modal-btn" style="float: right; margin-left: auto; height: 30px; padding: 0 20px; width: 200px; margin: 10px; background-color: blue; color: #fff;">How to order</button>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque aliquid illo alias porro doloremque. Voluptatum voluptas unde facere suscipit sequi ullam pariatur!</p>
        <div style="display: flex; flex-direction: row; gap: 20px; padding: 10px; border-bottom: gray 2px solid;">
            <img style="object-fit: cover; width: 100px;" src="asset/img/sonic.jpg" alt="">
            <img style="height:50px" src="asset/img/ticket1.png" alt="">
            <h5>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h5>
        </div>
        <div style="display: flex; flex-direction: row; gap: 20px; padding: 10px; border-bottom: gray 2px solid;">
            <img style="object-fit: cover; width: 100px;" src="asset/img/sonic.jpg" alt="">
            <img style="height:100px" src="asset/img/ticket2.png" alt="">
            <h5>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h5>
        </div>
        <div style="display: flex; flex-direction: row; gap: 20px; padding: 10px; border-bottom: gray 2px solid;">
            <img style="object-fit: cover; width: 100px;" src="asset/img/sonic.jpg" alt="">
            <img style="height:100px" src="asset/img/ticket3.png" alt="">
            <h5>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h5>
        </div>
    </div>
</div>