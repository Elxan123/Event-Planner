<!DOCTYPE html>
<html lang="en">
<?php $this->load->view("front/includes/head")?>
<body>

    <?php $this->load->view("front/includes/preloader")?>

    <div class="page-wrapper fixed-footer">

        <?php $this->load->view("front/includes/header")?>

        <?php $this->load->view("front/".$page_info['name'])?>

        <?php $this->load->view('front/includes/scroltop')?>

    </div>

    <?php $this->load->view('front/includes/footer')?>

    <?php $this->load->view('front/includes/foot')?>
</body>
</html>
