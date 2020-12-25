<!DOCTYPE html>
<html lang="en">
<?php $this->load->view("admin/includes/head")?>
<body>
    <div class="page-wrapper">
        <?php $this->load->view("admin/includes/aside")?>
        <div class="dash-content-wrap">
            <?php $this->load->view("admin/includes/header")?>
            <?php $this->load->view("admin/".$page_info['name'])?>
            <?php $this->load->view('admin/includes/footer')?>
        </div>
        <!--Dashboard content Wrapper ends-->
    </div>
    <?php $this->load->view('admin/includes/foot')?>
</body>
</html>
