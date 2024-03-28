<?php
/* Smarty version 4.2.0, created on 2024-03-28 15:34:46
  from 'C:\Codes\2024-03-28 - SmaryModel\app\views\site\master.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_66058e163a6d90_74149712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11a003d5c007cb8175178b5b0272126df152c43a' => 
    array (
      0 => 'C:\\Codes\\2024-03-28 - SmaryModel\\app\\views\\site\\master.tpl',
      1 => 1711636151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66058e163a6d90_74149712 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<head>
  <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173061262966058e163a63b5_99066640', 'title');
?>
</title>
</head>
<body>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143493213966058e163a6a67_54707544', 'body');
?>

  <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi nostrum in
    dolore eaque suscipit neque aspernatur nam ratione saepe cumque amet non
    laudantium, aliquid natus doloremque quis soluta! Inventore, minima.
  </p>
</body>
<?php }
/* {block 'title'} */
class Block_173061262966058e163a63b5_99066640 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_173061262966058e163a63b5_99066640',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_143493213966058e163a6a67_54707544 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_143493213966058e163a6a67_54707544',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
