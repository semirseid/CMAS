
<div class="container">
             <div class="row">
<!--                 <div class="col">left</div>-->
                 <div class="col text-right"> Welcome: <?php echo $this->session->userdata('username');?></div>
             </div>

    <div class="row">
        <!--                 <div class="col">left</div>-->
        <div class="col">
            <div class="float-right">  <a href="<?php echo site_url('Authentication/logout') ?>" class="btn btn-link">Sign Out</a>
                <?php echo form_close() ?></div>
        </div>
    </div>
         </div>
    <div class='row'>
        <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
                <h4 class="card-title">Primary card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
                <h4 class="card-title">Secondary card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="card border-light mb-3" style="max-width: 20rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
                <h4 class="card-title">Light card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>

    </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">

        <script>
            $('input[data-type="date"]').datetimepicker({
                format: 'YYYY-MM-DD'
            });

        </script>
