<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('.stop-conversation').css({'background-color': 'grey', 'border-color': '#545454'});
        jQuery('.tellUsHereLink').click(function(){
            jQuery('#tellUsHere').load(jQuery(this).attr('href'), null, function(){
                jQuery('#tellUsHere').modal('show');
            });
            return false;
        });
    });
    var MM_CURRENT_USER_ID = null;
</script>
<script type="text/javascript" src="/js/common-bottom.js"></script>