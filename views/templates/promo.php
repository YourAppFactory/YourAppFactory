<?php
 $lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'en';
?>

<div class="modal-promo--active">
    <div class="modal-promo">
        <img class="modal-promo__img only--desktop" src="/build/img/<?php echo $promo->promo;?>" alt="Promo">
        <img class="modal-promo__img only--mobile" src="/build/img/<?php echo $promo->promo_mobile;?>" alt="Promo">
        <div class="modal-promo__buttons">
            <a href="<?php echo $lang == 'es' ? "https://wa.me/12028679694?text=%C2%A1Lo%20quiero!%20SUMMER%20CHALLENGE.%20%C2%A1Vamos" : "https://wa.me/12028679694?text=Hi!%20I'd%20love%20to%20claim%20my%20spot%20in%20the%20SUMMER%20CHALLENGE." ?>" class="modal-promo__btn modal-btn">{%promo_contact_btn%}</a>
            <button class="modal-promo__btn--cancel modal-btn">{%promo_close_btn%}</button>
        </div>
        <div class="modal-promo__btn--close modal-btn">
            <i class="fas fa-times"></i> 
        </div>
    </div>
</div>