<?php
/* Smarty version 4.2.0, created on 2024-03-28 15:45:28
  from 'C:\Codes\2024-03-28 - SmaryModel\app\views\site\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_660590982e5f68_99669056',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce4bc532a590f887d46f33ba728a717d3478cf9d' => 
    array (
      0 => 'C:\\Codes\\2024-03-28 - SmaryModel\\app\\views\\site\\home.tpl',
      1 => 1711640726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660590982e5f68_99669056 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132134945660590982dfe98_19827571', 'title');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1333094584660590982e0591_16237158', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "master.tpl");
}
/* {block 'title'} */
class Block_132134945660590982dfe98_19827571 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_132134945660590982dfe98_19827571',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
My Home Page<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_1333094584660590982e0591_16237158 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1333094584660590982e0591_16237158',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h1>Home with Smarty</h1>

<ul>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?> Nome: <?php echo $_smarty_tpl->tpl_vars['user']->value->name;?>
, Idade <?php echo $_smarty_tpl->tpl_vars['user']->value->age;?>
<br />
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<p>My name is <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 and my age is <?php echo $_smarty_tpl->tpl_vars['age']->value;?>
</p>
<?php
}
}
/* {/block 'body'} */
}
