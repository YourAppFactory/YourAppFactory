<div class="modal-promo--active">
    <div class="modal-promo">
        <img class="modal-promo__img only--desktop" src="/build/img/<?php echo $promo->promo;?>" alt="Promo">
        <img class="modal-promo__img only--mobile" src="/build/img/<?php echo $promo->promo_mobile;?>" alt="Promo">
        <div class="modal-promo__buttons">
            <a href="#contact" class="modal-promo__btn modal-btn">{%promo_contact_btn%}</a>
            <button class="modal-promo__btn--cancel modal-btn">{%promo_close_btn%}</button>
        </div>
        <div class="modal-promo__btn--close modal-btn">
            <i class="fas fa-times"></i> 
        </div>
    </div>
</div>