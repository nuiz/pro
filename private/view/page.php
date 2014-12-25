<?php $this->import('/layout/top');?>
<?php echo $params['html'];?>
<div class="clearfix">
    <a href="<?php echo \Main\Helper\URL::absolute('/edit/'.$params['page_name']);?>">Edit</a>
</div>
<?php $this->import('/layout/bottom');?>