<?php
/**
 * Created by PhpStorm.
 * User: achraf
 * Date: 16/10/17
 * Time: 01:01 ص
 */
?>

<div class="row">
	<div class="col-md-8">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('add_new_school');?>
</div>
</div>
<div class="panel-body">

    <?php echo form_open(base_url() . 'index.php?superadmin/school/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>

    <div class="form-group">
        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('name of school :');?></label>

        <div class="col-sm-5">
            <input type="text" class="form-control" name="name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus required>
        </div>
    </div>








    <div class="form-group">
        <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('address');?></label>

        <div class="col-sm-5">
            <input type="text" class="form-control" name="address" value="" >
        </div>
    </div>

    <div class="form-group">
        <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('phone');?></label>

        <div class="col-sm-5">
            <input type="text" class="form-control" name="phone" value="" >
        </div>
    </div>

    <div class="form-group">
        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('email');?></label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="email" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="">
        </div>
    </div>




    <div class="form-group">
        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('photo');?></label>

        <div class="col-sm-5">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
                    <img src="http://placehold.it/200x200" alt="...">
                </div>
                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
                <div>
									<span class="btn btn-white btn-file">
										<span class="fileinput-new">Select image</span>
										<span class="fileinput-exists">Change</span>
										<input type="file" name="userfile" accept="image/*">
									</span>
                    <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-5">
            <button type="submit" class="btn btn-info"><?php echo get_phrase('add_school');?></button>
        </div>
    </div>
    <?php echo form_close();?>
</div>
</div>
</div>
<div class="col-md-4">
    <blockquote class="blockquote-blue">
        <p>
            <strong>school Admission</strong>
        </p>
        <p>
            merci de cree des information correcte ...
        </p>
    </blockquote>
</div>

</div>

<script type="text/javascript">

    function get_class_sections(class_id) {

        $.ajax({
            url: '<?php echo base_url();?>index.php?admin/get_class_section/' + class_id ,
            success: function(response)
            {
                jQuery('#section_selector_holder').html(response);
            }
        });

    }

</script>
