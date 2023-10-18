<div class="container">
    <div class="row">
         <div class="col-8">
         <form action="<?= base_url('copia/01'); ?>" method="get">
       

                <?= csrf_field() ?>
                <h2>Hacer Dump</h2>
               
                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>
        </div>
        <div class="col-2"></div>
    </div>
</div>
