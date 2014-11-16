<?php

	if(empty($_POST['kt_scroll_to_top_hidden']))
		{			
			$kp_scroll_to_top_display = get_option( 'kp_scroll_to_top_display' );
			$kt_scroll_to_top_themes = get_option( 'kt_scroll_to_top_themes' );		
		}

	else
		{
		
		if($_POST['kt_scroll_to_top_hidden'] == 'Y')
			{
			//Form data sent

			
			$kt_scroll_to_top_themes = $_POST['kt_scroll_to_top_themes'];
			update_option('kt_scroll_to_top_themes', $kt_scroll_to_top_themes);
			
			$kp_scroll_to_top_display = $_POST['kp_scroll_to_top_display'];
			update_option('kp_scroll_to_top_display', $kp_scroll_to_top_display);		
			
			?>
			<div class="updated"><p><strong><?php _e('Changes Saved.' ); ?></strong></p>
            </div>


<?php
			}
		} 
?>


<div class="wrap">
<?php echo "<h2>".__('Kento Scroll To Top Settings')."</h2>";?>

<form  method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
	<input type="hidden" name="kt_scroll_to_top_hidden" value="Y">
        <?php settings_fields( 'kt_scroll_to_top_plugin_options' );
				do_settings_sections( 'kt_scroll_to_top_plugin_options' );
		?>
        <table class="form-table">
           <tr valign="top">
            <th scope="row"><label for="kt_scroll_to_top_themes">Style</label></th>
                <td style="vertical-align:middle;">
                    <select name="kt_scroll_to_top_themes">
                        <option value="default" <?php if($kt_scroll_to_top_themes=='default') echo "selected"; ?> >Default</option>
                        <option value="cycle" <?php if($kt_scroll_to_top_themes=='cycle') echo "selected"; ?> >Cycle</option>
                        <option value="square" <?php if($kt_scroll_to_top_themes=='square') echo "selected"; ?> >Square</option>
                        <option value="text" <?php if($kt_scroll_to_top_themes=='text') echo "selected"; ?> >Text</option>
                        <option value="triangle" <?php if($kt_scroll_to_top_themes=='triangle') echo "selected"; ?>>Triangle</option>
                        <option value="black" <?php if($kt_scroll_to_top_themes=='black') echo "selected"; ?>>Black</option>
                        <option value="white" <?php if($kt_scroll_to_top_themes=='white') echo "selected"; ?>>White</option> 
                        
                        <option value="home" <?php if($kt_scroll_to_top_themes=='home') echo "selected"; ?>>Home</option>
                        <option value="homeone" <?php if($kt_scroll_to_top_themes=='homeone') echo "selected"; ?>>Home One</option>
                        <option value="hometwo" <?php if($kt_scroll_to_top_themes=='hometwo') echo "selected"; ?>>Home Two</option>
                        <option value="homethree" <?php if($kt_scroll_to_top_themes=='homethree') echo "selected"; ?>>Home Three</option>
                        <option value="homefour" <?php if($kt_scroll_to_top_themes=='homefour') echo "selected"; ?>>Home Four</option>
                        <option value="homefive" <?php if($kt_scroll_to_top_themes=='homefive') echo "selected"; ?>>Home Five</option>
             
                        <option value="arrowone" <?php if($kt_scroll_to_top_themes=='arrowone') echo "selected"; ?>>Arrow One</option>
                        <option value="arrowtwo" <?php if($kt_scroll_to_top_themes=='arrowtwo') echo "selected"; ?>>Arrow Two</option>
                        <option value="arrowthree" <?php if($kt_scroll_to_top_themes=='arrowthree') echo "selected"; ?>>Arrow Three</option>
                        <option value="arrowfour" <?php if($kt_scroll_to_top_themes=='arrowfour') echo "selected"; ?>>Arrow Four</option>
                        <option value="arrowfive" <?php if($kt_scroll_to_top_themes=='arrowfive') echo "selected"; ?>>Arrow Five</option>
                        <option value="arrowsix" <?php if($kt_scroll_to_top_themes=='arrowsix') echo "selected"; ?>>Arrow Six</option> 
                        
                    </select><br>
               		<span style="font-size:12px;color:#22aa5d">Use Dropdown Menu to select Different Scroll To Top Style.</span>
                </td>
		   </tr>          

          <tr valign="top">
            <th scope="row"><label for="kp_scroll_to_top_display">Display</label></th>
            <td style="vertical-align:middle;">
            <select name="kp_scroll_to_top_display">
                <option value="block" <?php if($kp_scroll_to_top_display=='block') echo "selected"; ?> >Enable</option>
                <option value="none" <?php if($kp_scroll_to_top_display=='none') echo "selected"; ?> >Disable</option>                                
            </select><br>
       		<span style="font-size:12px;color:#22aa5d">Use Dropdown Menu to Select Scroll To Top enable/disable.</span>
            </td>
		</tr>          
            
        </table>

        
        
        
        
        
         
                <p class="submit">
                    <input class="button button-primary" type="submit" name="Submit" value="<?php _e('Save Changes' ) ?>" />
                </p>

</form>


<script>


			jQuery(".back_to_top_images_list li").click(function()
				{ 	
					jQuery('.back_to_top_images_list li.bg-selected').removeClass('bg-selected');
					jQuery(this).addClass('bg-selected');
					
					var wpt_bg_img = jQuery(this).attr('data-url');
					
					jQuery('#back_to_top_images').val(wpt_bg_img);
					
				})	
				
</script>	


			<script>		
            jQuery(document).ready(function(jQuery)
                {	
                jQuery('').wpColorPicker();
                });
            </script> 

</div>
