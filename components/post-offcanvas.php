<button class="btn btn-light rounded-circle p-0 border-0" type="button" data-bs-toggle="offcanvas"
    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><img src="../img/icon/plus.png" alt=""
        style="width: 2rem"></button>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel"><?= $title ?></h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body">
        <?php require("../components/$formType-form.php") ?>
    </div>
</div>