<style>
    .dvs-form{}
    .dvs-form.is-gone{
        top:0;
        left:0;
        width:100%;
        height:100%;
        /*background:url("<?php echo base_url('assets/images/shdw.png')?>") repeat;*/
        background: rgba(000,000,000,0.3);
        position:fixed;
        z-index:9999;
        display: none;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;

    }
    .dvs-form.is-visible{
        top:0;
        left:0;
        width:100%;
        height:100%;
        /*background:url("<?php echo base_url('assets/images/shdw.png')?>") repeat;*/
        background: rgba(000,000,000,0.3);
        position:fixed;
        z-index:9999;
        display: block;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;

    }

    .dvs-form-content{
        position:absolute;
        left:30%;
        top:10%;
        background:white;;
        border: solid 1px  white;;
        width:500px;
        height:80%;
        box-shadow:0px 0px 10px #000;
        z-index:1010101010;
        padding:10px;
        overflow: scroll;
        color: #ffffff;
        font-size: 1.2em;
        line-height: 20px;
        text-align: justify;
        border-radius: 2px;
        overflow: scroll;

        /* Translate -100% to move off screen */
        -webkit-transform: translateY(-200%);
        -ms-transform: translateY(-200%);
        transform: translateY(-200%);

        /* Animations */
        -webkit-transition: all 300ms ease-in-out;
        -moz-transition: all 300ms ease-in-out;
        transition: all 300ms ease-in-out;
    }
    .dvs-form-content.is-visible{
        position:absolute;
        left:30%;
        top:10%;
        background:white;;
        border: solid 1px  white;;
        width:500px;
        height:80%;
        box-shadow:0px 0px 10px #000;
        z-index:1010101010;
        padding: 50px 10% 50px 10%;
        overflow: scroll;
        color: #ffffff;
        font-size: 1.2em;
        line-height: 20px;
        text-align: justify;
        border-radius: 2px;
        overflow: scroll;
        /* Translate -100% to move off screen */
        -webkit-transform: translateY(0%);
        -ms-transform: translateY(0%);
        transform: translateY(0%);

        /* Animations */
        -webkit-transition: all 500ms ease-in-out;
        -moz-transition: all 500ms ease-in-out;
        transition: all 500ms ease-in-out;
    }
</style>
<div class="dvs-form">
    <section class="dvs-form-content">

    </section>

</div>



<!-- jQuery Version 1.11.0 -->
<script src="<?php echo base_url('assets/js/jquery-1.11.0.js')?>"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url('assets/js/plugins/metisMenu/metisMenu.min.js')?>"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url('assets/js/sb-admin-2.js')?>"></script>


<!-- DataTables JavaScript -->
<script src="<?php echo base_url('assets/js/plugins/dataTables/jquery.dataTables.js')?>"></script>
<script src="<?php echo base_url('assets/js/plugins/dataTables/dataTables.bootstrap.js')?>"></script>

<!-- DVS JavaScript -->
<script src="<?php echo base_url('assets/js/dvsJquery.js')?>"></script>
<script src="<?php echo base_url('assets/js/dvs_scripts.js')?>"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
</script>
</body>

</html>
