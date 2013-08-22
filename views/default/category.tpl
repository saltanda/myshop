<h1>Товары категории {$rsCategory['name']}</h1>
{foreach $rsProducts as $item name=products}
    <div style="float:left; padding: 0px 30px 40px 0px;">
                    <a href="/product/{$item['id']}/">
                    <img src="images/product/{$item['image']}" width="100">
                    </a><br />
                   
                     <a href="/product/{$item['id']}/">{$item['name']}</a>
                    
     </div>
    {if $smarty.foreach.products.iteration mod 3 == 0}
                         <div style="clear: both"></div>
    {/if}
{/foreach}

{foreach $rsChildCats as $item name=childCats}
    <h2><a href="/category/{$item['id']}/">{$item['name']}</a></h2>
{/foreach}

    
    
    
    {*
  $smarty->assign('rsCategorie',$rsCategories);//масив основные категории товаров для Smarty
    $smarty->assign('rsProducts',$rsProducts);//масив  товаров для Smarty
    $smarty->assign('rsChildCats',$rsChildCats);//масив  под категории Smarty
*}