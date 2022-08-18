<?php namespace ChinoVN\BBCode\Custom;

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Frontend('forum'))
  	->css(__DIR__.'/less/forum.less'),
    (new Extend\Formatter)
    ->configure(function (Configurator $config) {
         
        $config->BBCodes->addCustom('[CARD={URL} p={SIMPLETEXT}]{ANYTHING}[/CARD]', '<div class="cb-card"><img src="{URL}"><div class="cb-card-content {SIMPLETEXT}">{ANYTHING}</div></div>');
        
        $config->BBCodes->addCustom('[CARD1={URL}]{ANYTHING}[/CARD1]', '<div class="cb-card1" style="background-image: url({URL});"><div class="cb-card1-content">{ANYTHING}</div></div>');
        
        $config->BBCodes->addCustom('[CARD2={URL}]{ANYTHING}[/CARD2]', '<div class="cb-card2"><div class="cb-card2-img" style="background-image: url({URL});"></div><div class="cb-card2-content">{ANYTHING}</div></div>');
        
        $config->BBCodes->addCustom('[CARD3={URL}]{ANYTHING}[/CARD3]', '<div class="cb-card3"><div class="cb-card3-img"><img src="{URL}"></div><div class="cb-card3-content">{ANYTHING}</div></div>');
        
        $config->BBCodes->addCustom('[CARD4={URL} c={COLOR}]{ANYTHING}[/CARD4]', '<div class="cb-card4" style="background: {COLOR}"><img src="{URL}" class="cb-card4-img"><div class="cb-card4-content">{ANYTHING}</div></div>');
        $config->BBCodes->addCustom('[CARD5={URL} c={COLOR}]{ANYTHING}[/CARD5]', '<div class="cb-card5" style="background: {COLOR}"><img src="{URL}" class="cb-card5-img"><div class="cb-card5-content">{ANYTHING}</div></div>');
        
    })
];
