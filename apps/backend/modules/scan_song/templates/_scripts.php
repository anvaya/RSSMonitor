<script type="text/javascript">
    $(document).ready(function()
    {
        $('form', $('.sf_admin_filter')).submit(function()
        {
        <?php 
            $autocomplete_cols = array ("artist_name","song_name","album","country","genre");
            foreach($autocomplete_cols as $col):
                if(isset($form[$col])):
        ?>          
                var selector = $('#autocomplete_scan_song_filters_<?php echo $col ?>_value'); 
                
                if(selector.length > 0)
                {
                    $('#scan_song_filters_<?php echo $col ?>_value').val($('#autocomplete_scan_song_filters_<?php echo $col;?>_value').val());                    
                }              
               
                var selector2 = $('#autocomplete_scan_song_filters_<?php echo $col ?>'); 
                if(selector2.length > 0)
                {
                   $('#scan_song_filters_<?php echo $col ?>').val($(selector2).val());  
                }
                <?php endif;?>
        <?php endforeach; ?>
        return true;
        });  
        
        $('input[type="text"],select', '.sf_admin_filter' ).change(function()
        {   
            if($(this).val().length > 0)
            {
                $(this).addClass('filled');
            }
            else
            {
                $(this).removeClass('filled');
            }
        }
        )
        
    });
</script>