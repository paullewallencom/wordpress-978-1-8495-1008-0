<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        "before_widget" => "<p>",
		 "after_widget" => "</p><br/>",
		 "before_title" => "<h3>",
		 "after_title" => "</h3>",
));



wp_enqueue_script('jquery');

function jq_test(){
?>

<script type="text/javascript">

 /*jQuery(document).ready(function() {
   jQuery("p").click(function() {
     alert("Hello world!");
   });
 });*/

</script>

<?php
}
add_filter('wp_head', 'jq_test');

?>

