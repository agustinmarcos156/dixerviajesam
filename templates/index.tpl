{include 'templates/header.tpl'}
<div class="container">
    <div class="row">
        <div class="col-md-2 cold-sm-1"></div>
        <div class="col-md-5 cold-sm-12">
            {foreach from=$destinos item=destino}
                <ul>
                    <li><a href="{$destino->nombre}">{$destino->nombre} </a></li>
                </ul>
            {/foreach}
        </div>
        <div class="col-md-5 cold-sm-5"></div>
        <div class="col-md-2 cold-sm-1"></div>
    </div>
</div>



{include 'templates/footer.tpl'}