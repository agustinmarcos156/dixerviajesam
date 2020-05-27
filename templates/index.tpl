{include 'templates/header.tpl'}
{foreach from=$destinos item=destino}
    <li><a href="{$destino->nombre}">{$destino->nombre} </a></li>
{/foreach}





{include 'templates/footer.tpl'}