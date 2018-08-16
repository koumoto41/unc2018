<?php
// LIVE情報項目変換
function convLiveInfo($id)
{

    $ary = array();

    $ary['link'] = esc_url(get_permalink($id));
    $ary['type'] = esc_html(get_field('live_type', $id));
    $ary['flg'] = esc_html(get_field('live_flg', $id));
    $ary['stage'] = esc_html(get_field('live_stage', $id));
    $ary['name'] = esc_html(get_field('live_name', $id));
    $ary['description'] = get_field('live_description', $id);
    $ary['youtube_embed'] = esc_url(embedYoutube(get_field('live_youtube', $id)));
    $ary['youtube'] = esc_url(normalYoutube(get_field('live_youtube', $id)));

    $ary['facebook'] = esc_url(get_field('live_facebook', $id));
    $ary['homepage'] = esc_url(get_field('live_homepage', $id));
    $ary['twitter'] = esc_url(get_field('live_twitter', $id));

    $tmp = get_field('live_image', $id);
    $ary['image_th'] = wp_get_attachment_image_src($tmp, 'thumbnail');
    $ary['image_lg'] = wp_get_attachment_image_src($tmp, 'large');
    $ary['image_th'] = esc_url(checkImage($ary['image_th'][0], 'M'));
    $ary['image_lg'] = $ary['image_lg'][0];

    return $ary;
}

// FOOD情報項目変換
function convFoodInfo($id)
{

    $ary = array();

    $ary['link'] = esc_url(get_permalink($id));
    $ary['flg'] = esc_html(get_field('food_flg', $id));
    $ary['name'] = esc_html(get_field('food_name', $id));
    $ary['description'] = get_field('food_description', $id);

    $tmp = get_field('food_image', $id);
    $ary['image_th'] = wp_get_attachment_image_src($tmp, 'thumbnail');
    $ary['image_lg'] = wp_get_attachment_image_src($tmp, 'large');
    $ary['image_th'] = esc_url(checkImage($ary['image_th'][0], 'M'));
    $ary['image_lg'] = $ary['image_lg'][0];

    $ary['ex_link'] = array();


    // LINK
    $scf = SCF::get('link', $id);
    foreach ($scf as $key => $value) {
        $tmp = array();
        $tmp['link_title'] = esc_html($value['link_title']);
        $tmp['link_url'] = esc_url($value['link_url']);

        if ($tmp['link_title'] != '' && $tmp['link_url'] != '') {
            $ary['ex_link'][] = $tmp;
        }
    }

    return $ary;
}

// MARKET情報項目変換
function convMarketInfo($id)
{

    $ary = array();

    $ary['link'] = esc_url(get_permalink($id));
    $ary['flg'] = esc_html(get_field('market_flg', $id));
    $ary['name'] = esc_html(get_field('market_name', $id));
    $ary['description'] = get_field('market_description', $id);

    $tmp = get_field('market_image', $id);
    $ary['image_th'] = wp_get_attachment_image_src($tmp, 'thumbnail');
    $ary['image_lg'] = wp_get_attachment_image_src($tmp, 'large');
    $ary['image_th'] = esc_url(checkImage($ary['image_th'][0], 'M'));
    $ary['image_lg'] = $ary['image_lg'][0];

    $ary['ex_link'] = array();


    // LINK
    $scf = SCF::get('link', $id);
    foreach ($scf as $key => $value) {
        $tmp = array();
        $tmp['link_title'] = esc_html($value['link_title']);
        $tmp['link_url'] = esc_url($value['link_url']);

        if ($tmp['link_title'] != '' && $tmp['link_url'] != '') {
            $ary['ex_link'][] = $tmp;
        }
    }

    return $ary;
}

// WORKSHOP情報項目変換
function convWorkshopInfo($id)
{

    $ary = array();

    $ary['link'] = esc_url(get_permalink($id));
    $ary['flg'] = esc_html(get_field('workshop_flg', $id));
    $ary['name'] = esc_html(get_field('workshop_name', $id));
    $ary['description'] = get_field('workshop_description', $id);
    $ary['timetable'] = get_field('workshop_timetable', $id);
    $ary['unit'] = esc_html(get_field('workshop_unit', $id));
    $ary['unitlink'] = esc_url(get_field('workshop_unitlink', $id));
    $ary['cost'] = get_field('workshop_cost', $id);
    $ary['subject'] = get_field('workshop_subject', $id);
    $ary['attention'] = get_field('workshop_attention', $id);

    $tmp = get_field('workshop_image', $id);
    $ary['image_th'] = wp_get_attachment_image_src($tmp, 'thumbnail');
    $ary['image_lg'] = wp_get_attachment_image_src($tmp, 'large');
    $ary['image_th'] = esc_url(checkImage($ary['image_th'][0], 'M'));
    $ary['image_lg'] = $ary['image_lg'][0];

    $ary['ex_link'] = array();


    // LINK
    $scf = SCF::get('link', $id);
    foreach ($scf as $key => $value) {
        $tmp = array();
        $tmp['link_title'] = esc_html($value['link_title']);
        $tmp['link_url'] = esc_url($value['link_url']);

        if ($tmp['link_title'] != '' && $tmp['link_url'] != '') {
            $ary['ex_link'][] = $tmp;
        }
    }

    return $ary;
}

// ARTWORK情報項目変換
function convArtworkInfo($id)
{

    $ary = array();

    $ary['link'] = esc_url(get_permalink($id));
    $ary['flg'] = esc_html(get_field('artwork_flg', $id));
    $ary['name'] = esc_html(get_field('artwork_name', $id));
    $ary['description'] = get_field('artwork_description', $id);

    $tmp = get_field('artwork_image', $id);
    $ary['image_th'] = wp_get_attachment_image_src($tmp, 'thumbnail');
    $ary['image_lg'] = wp_get_attachment_image_src($tmp, 'large');
    $ary['image_th'] = esc_url(checkImage($ary['image_th'][0], 'M'));
    $ary['image_lg'] = $ary['image_lg'][0];

    return $ary;
}

?>