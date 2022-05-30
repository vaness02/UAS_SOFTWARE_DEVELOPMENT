<section class="content">
    <div class="box">
        <div class="box-header">
            <?php echo $this->session->flashdata('message'); ?>
            <a href="<?php echo site_url('admin/kelas'); ?>" class="btn bg-maroon"><i class="fa fa-arrow-left"></i> Kembali</a>
            <button type="button" class="btn bg-maroon" id="btn_tambah_form"><i class="fa fa-plus-circle"></i> Tambah Form</button>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form action="<?php echo site_url('admin/kelas/simpan'); ?>" method="post">
                <table id="table" width="30%">
                    <tr>
                        <td>
                            <div class="form-group">
                                <label for="nama">Nama Jenis Voting *</label>
                                <input type="text" name="nama[]" id="nama" class="form-control" required>
                            </div>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger btn-sm" id="btn-minus" style="margin-top: 10px; margin-left: 10px" disabled><i class="fa fa-minus-circle"></i>
                            </button>
                        </td>
                    </tr>
                </table>
                <button type="reset" class="btn"><i class="fa fa-refresh"></i> Reset</button>
                <button type="submit" class="btn bg-navy"><i class="fa fa-save"></i> Simpan</button>
            </form>
        </div>
    </div>    
</section>
<script>
    $(document).ready(function() {
        $('#btn_tambah_form').on('click', function () {
            $('#table').append(`
            <tr>
                <td>
                    <div class="form-group">
                        <label for="nama">Nama Jenis Voting *</label>
                        <input type="text" name="nama[]" id="nama" class="form-control" required>
                    </div>
                </td>
                <td>
                    <button type="button" class="btn btn-danger btn-sm" id="btn-minus" style="margin-top: 10px; margin-left: 10px"><i class="fa fa-minus-circle"></i>
                    </button>
                </td>
            </tr>
            `);
        })

        $('#table').on('click', '#btn-minus', function() {
            $(this).closest("tr").remove();
        })
    });
</script>