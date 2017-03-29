<?php
/* Smarty version 3.1.30, created on 2017-03-29 18:09:13
  from "C:\xampp\htdocs\www\micro_blog3\includes\bas.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58dbdc29cf0012_75547690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdf9a8fb85e35c4396cd1d420e6f993588fff006' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\micro_blog3\\includes\\bas.tpl',
      1 => 1490803751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58dbdc29cf0012_75547690 (Smarty_Internal_Template $_smarty_tpl) {
?>

</div>
</section>


<!-- Footer -->
<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-4">
                    <h3>Location</h3>
                    <p>3481 Melrose Place
                        <br>Beverly Hills, CA 90210</p>
                    </div>
                    <div class="footer-col col-md-4">
                            <a href="https://facebook.com" class="icone facebook"></a>
                            <a href="https://twitter.com" class="icone twitter"></a>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>A propos</h3>
                        <p>Micro blog est une application PHP basée sur le thème <a href="https://startbootstrap.com/template-overviews/freelancer/">Freelancer</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Your Website 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- jQuery -->
    <?php echo '<script'; ?>
 src="vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>

    <!-- Bootstrap Core JavaScript -->
    <?php echo '<script'; ?>
 src="vendor/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>

    <!-- Plugin JavaScript -->
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"><?php echo '</script'; ?>
>

    <!-- Theme JavaScript -->
    <?php echo '<script'; ?>
 src="js/freelancer.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        $(document).ready(function() {
            $('#formConnexion').submit(function(){
                var email =$('#email').val();
                var mdp =$('#mdp').val();

                if(email==""){
                    $('#msgErreur').removeClass("hidden").addClass("visible alert alert-danger").html("Veuillez entrer un email");
                    $('#email').addClass("alert alert-danger");
                    return false;
                }
                else if(mdp==""){
                    $('#msgErreur').removeClass("hidden").addClass("visible alert alert-danger").html("Veuillez entrer un mot de passe");
                    $('#mdp').addClass("alert alert-danger");
                    return false;
                }
                else{
                    return true;
                }
                
            })
        });
    <?php echo '</script'; ?>
>
</body>

</html>
<?php }
}
