<h1>{%admin_promos_title%}</h1>

<div class="flex">
    <div class="block">
        <h2>{%admin_promos_subtitle%}</h2>
        <img class="img-250" src="/../build/img/<?php echo $promo->promo;?>" alt="Promo">
    </div>
    <div class="block">
        <h2>{%admin_promos_subtitle_mobile%}</h2>
        <img class="img-250" src="/../build/img/<?php echo $promo->promo_mobile;?>" alt="Promo">
    </div>
</div>
<div class="align-center">
    <?php if($promo->status === '1'): ?>
        <p class="text-pink border-pink text-40">{%active%}</p>
        <!--change the status of the promo-->
        <form method="POST" class="form-promo">
            <input type="hidden" name="status" value="0">
            <input type="submit" value="{%deactivate%}" class="btn-submit">
        </form>
    <?php else: ?>
        <p class="text-gray border-gray text-40">{%inactive%}</p>
        <!--change the status of the promo-->
        <form method="POST" class="form-promo">
            <input type="hidden" name="status" value="1">
            <input type="submit" value="{%activate%}" class="btn-submit">
        </form>
    <?php endif; ?>
    <a href="/admin/promos/edit" class="btn-update">{%edit%}</a>
</div>