<?php foreach ($gallery as $item){ ?>
    <tr>
        <td>
            Sekil adi
        </td>
        <td style="text-align: center">
            <img style="object-fit: cover" width="200px" height="120px" src="<?php echo base_url("uploads/providers/$item[img]")?>" alt="">
        </td>
        <td style="text-align: center">

            <a href="<?php echo base_url("providers/gallery-delete/$item[id]")?>" class="btn btn-danger btn-sm btn-icon icon-left c_delete_btn">
                Delete
            </a>

        </td>
    </tr>
<?php }?>