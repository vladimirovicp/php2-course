<?php include 'top.php'; ?>
    <h1><?= $titlePage ?></h1>

    <?php if(isset($messages) && is_array($messages)): ?>
        <?php foreach($messages as $message):
            $type = $message['type'];    
            $text = $message['text'];    
        ?> 
            <div class="alert alert-<?= $type ?>" role="alert">
                <?= $text ?>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>

    <form action="/order" method="POST">
        <div class="mb-3">
            <label for="name" >Имя и фамилия</label>
            <input type="text"  class="form-control" name="name" id="name" value="<?= $name?>">
        </div>
        <div class="mb-3">
            <label for="address" >Адрес</label>
            <input type="text"  class="form-control" name="address" id="address" value="<?= $address?>">
        </div>
        <div class="mb-3">
            <label for="email" >Email</label>
            <input type="text"  class="form-control" name="email" id="email" value="<?= $email?>">
        </div>
        <div class="mb-3">
            <label for="phone" >Номер телефона</label>
            <input type="text"  class="form-control" name="phone" id="phone" value="<?= $phone?>">
        </div>

        <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Имя на карте</label>
              <input type="text" class="form-control" name="cc-name" id="cc-name" placeholder="" required="" value="<?= $cardName?>">
              <small class="text-muted">Полное имя с карты</small>
              <div class="invalid-feedback">
                Должно быть заполнено имя с карты
              </div>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Номер карты</label>
              <input type="text" class="form-control"  name="cc-number" id="cc-number" placeholder="" required="" value="<?= $cardNumber?>">
              <div class="invalid-feedback">
                 Должен быть заполнен номер карты
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-expiration" class="form-label">Срок действия</label>
              <input type="text" class="form-control"  name="cc-expiration" id="cc-expiration" placeholder="" required="" value="<?= $cardExpiration?>">
              <div class="invalid-feedback">
              Должен быть заполнен срок действия карты
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label">CVV</label>
              <input type="text" class="form-control" name="cc-cvv" id="cc-cvv" placeholder="" required="" value="<?= $cardCVV?>">
              <div class="invalid-feedback">
                 Должен быть заполнен CVV-код
              </div>
            </div>
          </div>


        <div class="mt-3">
            <input  class="btn btn-primary mb-3" type="submit">
        </div>

    </form>
    

<?php include 'bottom.php'; ?>