<?php

/* 
 *@package: DNA Expert
 * @subpackage: dnaexpert
 */
add_action('wp_head','email_script');

function email_script(){
    $output = "<script>alert('page is loading...');</script>";
    echo $output;
}
?>

<div class="contact">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <form>
                    <table></table>
                </form>
            </div>
            <div class="col-md-6">
                <address>
                    <h4>Dr. Brian Meehan</h4>
                    <label>Tel: </label><a href="tel:3362600061">(336) 260-0061</a>
                    <label>Email: </label><a href="mailto:meehbrian@hotmail.com">meehbrian@hotmail.com</a>
                </address>
            </div>
        </div>
    </div>
</div>

