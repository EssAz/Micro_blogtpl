<?php
/* Smarty version 3.1.30, created on 2017-02-28 16:54:05
  from "C:\xampp\htdocs\www\micro_blog2\includes\bas.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b59d1dc6d6e7_98514326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b36b6c3502abf72b6914216273bdd1e497f1cf17' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\micro_blog2\\includes\\bas.tpl',
      1 => 1488257532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b59d1dc6d6e7_98514326 (Smarty_Internal_Template $_smarty_tpl) {
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
    //script JQUERY servant a afficher les messages d'erreur lors de la connexion si l'utilsateur n'a pas rentré d'adresse email ou de mot de passe
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
