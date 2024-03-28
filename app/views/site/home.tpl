{extends file="master.tpl"} {block name=title}My Home Page{/block} {block
name=body}
<h1>Home with Smarty</h1>

<ul>
  {foreach from=$users item=user} Nome: {$user->name}, Idade {$user->age}<br />
  {/foreach}
</ul>

<p>My name is {$name} and my age is {$age}</p>
{/block}
