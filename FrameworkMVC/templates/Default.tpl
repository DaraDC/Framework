
  {include file = "Cabecera/Header.tpl"}
 
 {if isset($usuario)}
  {if $tipo=='Administrador'}
   {include file='Admin.tpl'}
  {else}
   {include file='Trabajador.tpl'}
  {/if}
 {else}
 {include file='inicio.tpl'}
 {/if}

   {include file = "Cabecera/Footer.tpl"}
