<?php
/* Smarty version 3.1.30, created on 2017-03-29 15:27:27
  from "C:\xampp\htdocs\www\micro_blog3\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58dbb63f973e06_27713329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91d384128491a05fff19a8ae5ca3c5d8c1a14947' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\micro_blog3\\index.tpl',
      1 => 1490794045,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:includes/haut.tpl' => 1,
    'file:includes/bas.tpl' => 1,
  ),
),false)) {
function content_58dbb63f973e06_27713329 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:includes/haut.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php if ($_smarty_tpl->tpl_vars['pseudo']->value != '') {?>
<div class="row">              
	<form method="post" action="message.php">
		<div class="col-sm-10">  
			<div class="form-group">
				<textarea id="message" name="message" class="form-control" placeholder="Message"><?php if (isset($_GET['id']) && $_GET['id'] != '') {?>
					<?php echo $_smarty_tpl->tpl_vars['contenu']->value;?>
 
					<?php }?></textarea>
				<input type="hidden" id="id" name="id" value="<?php if (isset($_GET['id']) && !empty($_GET['id'])) {?>
				<?php echo $_smarty_tpl->tpl_vars['id']->value;?>

				<?php }?>"/>		
			</div>
		</div>

		<div class="col-sm-2">
			<button type="submit"  class="btn btn-success btn-lg">Envoyer</button>
		</div>   

	</form>
</div>

<div class="row apercu hidden" id="apercu" >              
    <form>
        <div class="col-sm-10">  
            <div class="form-group">            
               <p id="apercuexpreg" name="apercuexpreg" class="form-control"></p>
               <input type="hidden" id="apercu1" name="apercu1" value="<?php echo $_smarty_tpl->tpl_vars['getID']->value;?>
"></input>     
            </div>
        </div>
                       
    </form>
</div>
<?php }?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_contenu']->value, 'contenu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['contenu']->value) {
?>

<blockquote>
	<?php echo $_smarty_tpl->tpl_vars['contenu']->value['contenu'];?>

<br/>
<?php echo $_smarty_tpl->tpl_vars['contenu']->value['date'];?>

<br/>
<?php echo $_smarty_tpl->tpl_vars['contenu']->value['pseudo'];?>

<br/>
<?php if ($_smarty_tpl->tpl_vars['pseudo']->value == $_smarty_tpl->tpl_vars['contenu']->value['pseudo']) {?>
<a role="button" class="btn btn-info btn-default " href="index.php?id=<?php echo $_smarty_tpl->tpl_vars['contenu']->value['idMessage'];?>
">Modifier</a>
<a role="button" class="btn btn-danger btn-default" href="sup_message.php?id=<?php echo $_smarty_tpl->tpl_vars['contenu']->value['idMessage'];?>
">Supprimer</a>
<?php }?>
</blockquote>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


<?php if ($_smarty_tpl->tpl_vars['nbreMessages']->value != 0) {?>
<div class="col-md-offset-4">
	<nav aria-label="Page navigation">
		<ul class="pagination pagination-lg ">

			<!-- Si l'utilisateur n'est pas sur la premiere page, affiche le bouton de page precedente-->
			<?php if (isset($_GET['page']) && $_GET['page'] != 1) {?>
			<li>
				<a href="index.php?page=<?php echo $_GET['page']-1;
if (isset($_GET['contenu'])) {?>&amp;contenu=<?php echo $_GET['contenu'];
}?>" aria-label="Previous">
					<span aria-hidden="true">&laquo;</span>
				</a>
			</li>
			<?php }?>

			<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['nbrePages']->value-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['nbrePages']->value-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
			<li>
                <a href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['i']->value+1;
if (isset($_GET['contenu'])) {?>&amp;contenu=<?php echo $_GET['contenu'];
}?>">  <?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
   </a>
            </li>
			<?php }
}
?>


			
			<?php if (!isset($_GET['page']) || $_GET['page'] < $_smarty_tpl->tpl_vars['nbrePages']->value) {?>
			<?php if ($_smarty_tpl->tpl_vars['nbreMessages']->value > $_smarty_tpl->tpl_vars['mpp']->value) {?>
			<li>
				
				<a href="index.php?page=<?php if (isset($_GET['page']) && $_GET['page'] != 1) {
echo $_GET['page']+1;
} else {
echo 2;
}
if (isset($_GET['contenu'])) {?>&amp;contenu=<?php echo $_GET['contenu'];
}?>" aria-label="Next">
		          <span aria-hidden="true">&raquo;</span>
	           </a>
</li>
<?php }
}?>
</ul>
</nav>
</div>
<?php }?>
    
<?php echo '<script'; ?>
>
    $( document ).ready(function() {
    $('message').keypress(function(){
        
    }
});
<?php echo '</script'; ?>
>



<?php $_smarty_tpl->_subTemplateRender("file:includes/bas.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        
    <?php echo '<script'; ?>
>
$(function(){
  $('#message').keyup(function(){
     $('#apercu').removeClass("hidden");
    
     var msg1 = document.getElementById('message').value;
    $.get('apercu.php',
    {
      message:msg1
    },
      function(data){
        
        document.getElementById("apercuexpreg").innerHTML = data;
       
      }
      );
  });
});
  
<?php echo '</script'; ?>
>
<?php }
}
