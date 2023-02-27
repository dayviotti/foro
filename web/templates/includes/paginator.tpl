<head>
    <link rel="stylesheet" href="http://localhost/demo/web/styles/estilos.css">
</head>
{dkp_ini}
    <nav>
        {assign var="buttonsTolerance" value=5}
        {assign var="start" value=$dkp_actual-$buttonsTolerance}
        {assign var="end" value=$dkp_actual+$buttonsTolerance}
        {if $start < 1}
            {assign var="start" value=1}
        {/if}
        {if $end > $dkp_last}
            {assign var="end" value=$dkp_last}
        {/if}
        <ul class="pagination pagination-sm">
            {if $dkp_last > 1}
                {if $dkp_actual > 1}
                    <li class="page-item page-ant"><a class="page-link pag" href="{dkp_hrefpage number=$dkp_actual-1}">&laquo;</a></li>
                {else}
                    <li class="page-item page-ant disabled"><a class="page-link pag" href="javascript:void(0);">&laquo;</a></li>
                {/if}
                {if $dkp_actual > $buttonsTolerance+1}
                    <li class="page-item page-number"><a class="page-link pag" href="{dkp_hrefpage number=1}">1</a></li>
                {/if}
                {if $dkp_actual > $buttonsTolerance+2}
                    <li class="page-item page-number"><a class="page-link pag" href="{dkp_hrefpage number=$dkp_actual-$buttonsTolerance-1}">[...]</a></li>
                {/if}
                {section name="pagbutts" start=$start loop=$end+1}
                    {if $dkp_actual == $smarty.section.pagbutts.index}
                        <li class="page-item active page-number"><a class="page-link pag" href="javascript:void(0);">{$dkp_actual}</a></li>
                    {else}
                        <li class="page-item page-number"><a class="page-link pag" href="{dkp_hrefpage number=$smarty.section.pagbutts.index}">{$smarty.section.pagbutts.index}</a>
                    {/if}
                {/section}
                {if  $dkp_last != 0}
                    {if $dkp_actual != $dkp_last}
	                    {if $dkp_actual+$buttonsTolerance+1 < $dkp_last}
	                    	<li class="page-item page-number"><a class="page-link pag" href="{dkp_hrefpage number=$dkp_actual+$buttonsTolerance+1}">[...]</a></li>
		                {/if}
		                {if $dkp_actual+$buttonsTolerance < $dkp_last}
                    		<li class="page-item page-number"><a class="page-link pag" href="{dkp_hrefpage number=$dkp_last}">{$dkp_last}</a></li>
                    	{/if}
                        <li class="page-item page-next"><a class="page-link pag" href="{dkp_hrefpage number=$dkp_actual+1}">&raquo;</a></li>
                    {else}
                        <li class="page-item page-next disabled"><a class="page-link pag" href="javascript:void(0);">&raquo;</a></li>
                    {/if}
                {else}
                    <li class="page-item disabled"><a class="page-link pag" href="javascript:void(0);">&raquo;</a></li>
                {/if}
            {/if}
        </ul>
    </nav>
{/dkp_ini}