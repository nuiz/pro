<?php $this->import('/layout/top');?>
<div class="container">
    <script src="//cdn.ckeditor.com/4.4.6/full/ckeditor.js"></script>
    <form method="post" action="<?php echo \Main\Helper\URL::absolute('/edit/'.$params['page_name']);?>">
        <textarea name="html" id="editor1" rows="10" cols="80"><?php echo $params['html'];?></textarea>
        <input type="hidden" name="<?php echo $params['page_name'];?>">
        <button type="submit">Submit</button>
    </form>
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'editor1' );
    </script>
</div>
<?php $this->import('/layout/bottom');?>