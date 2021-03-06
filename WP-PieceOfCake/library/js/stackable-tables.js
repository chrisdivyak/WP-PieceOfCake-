//*******STACKABLE TABLES**************//
(function($){$.fn.stacktable=function(options){var $tables=this,defaults={id:"stacktable",hideOriginal:false},settings=$.extend({},defaults,options),stacktable;return $tables.each(function(){var $stacktable=$('<table class="'+settings.id+'"><tbody></tbody></table>');if(typeof settings.myClass!==undefined)$stacktable.addClass(settings.myClass);var markup="";$table=$(this);$topRow=$table.find("tr").eq(0);$table.find("tr").each(function(index,value){markup+="<tr>";if(index===0)markup+='<tr><th class="st-head-row st-head-row-main" colspan="2">'+
$(this).find("th,td").eq(0).html()+"</th></tr>";else $(this).find("td").each(function(index,value){if(index===0)markup+='<tr><th class="st-head-row" colspan="2">'+$(this).html()+"</th></tr>";else if($(this).html()!==""){markup+="<tr>";if($topRow.find("td,th").eq(index).html())markup+='<td class="st-key">'+$topRow.find("td,th").eq(index).html()+"</td>";else markup+='<td class="st-key"></td>';markup+='<td class="st-val">'+$(this).html()+"</td>";markup+="</tr>"}})});$stacktable.append($(markup));$table.before($stacktable);
if(settings.hideOriginal)$table.hide()})}})(jQuery);

$(document).ready(function(){
 	$('table').stacktable({myClass:'stacktable small-only'});
});