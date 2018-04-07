<?php
  $subjectList = array(
    0 => 'Enquiry',
    1 => 'Testimonial',
    3 => 'Request for Quotion'
  );

  $countries =  json_decode(file_get_contents("public/json/countries.json"), true);
?>
<div class="page page_is-last" id="jsContactUs">
  <div class="page__container container">
    <h2 class="page__title"><?php echo translate('label-menu-contactus'); ?></h2>
    <page class="page__contact-container">
      <div class="page__form">
        <div class="page__form-description">
          <p>
            <?php echo translate('label-didyoulike'); ?>
          </p>
        </div>
        <form class="form">
          <div class="form__section">
            <div class="form-item">
              <div class="form-item__label fas fa-user"></div>
              <div class="form-item__input">
                <input class="input-item" placeholder="Name" type="text" name="name" id="name">
              </div>
            </div>
          </div>
          <div class="form__section">
            <div class="form-item">
              <div class="form-item__label fas fa-at"></div>
              <div class="form-item__input">
                <input class="input-item" placeholder="Email" type="text" name="name" id="name">
              </div>
            </div>
          </div>
          <div class="form__section">
            <div class="form-item">
              <div class="form-item__label fas fa-phone"></div>
              <div class="form-item__input">
                <input class="input-item" placeholder="Phone" type="text" name="name" id="name">
              </div>
            </div>
          </div>
          <div class="form__section">
            <div class="form-item">
              <div class="form-item__label far fa-address-card"></div>
              <div class="form-item__input">
                <select class="input-item" placeholder="Subject" >
                  <option value=""></option>
                  <?php foreach ($subjectList as $subject): ?>
                    <option value="<?php echo $subject ?>"><?php echo $subject ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
            <div class="form-item">
              <div class="form-item__label fas fa-globe"></div>
              <div class="form-item__input">
                <select class="input-item" placeholder="Subject" >
                  <option value=""></option>
                  <?php foreach ($countries as $country):?>
                    <option value="<?php echo $country['code'] ?>"><?php echo $country['name'] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
          </div>
          <div class="form__section">
            <div class="form-item">
              <div class="form-item__label fas fa-envelope"></div>
              <div class="form-item__input">
                <textarea class="input-item input-item_is-textarea" placeholder="Message" type="text" name="name" id="name"></textarea>
              </div>
            </div>
          </div>
          <div class="form__section">
            <div class="form__button">
              <div class="button-item">
                Submit
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="page__contact-box">
        <div class="contact-box">
          <div class="contact-box__title">
            Bayssour, Radar Street
          </div>
          <div class="contact-box__phone">
            00961 3 765495
          </div>
          <div class="contact-box__email">
            rabmalaeb@gmail.com
          </div>
        </div>
      </div>
    </page>
  </div>
</div>
