<?php

function themeConfig($form) {

    $navy_gravatar = new Typecho_Widget_Helper_Form_Element_Text('navy_gravatar', NULL, 'claymoreboy@126.com', _t('底部头像'), _t(''));
    $navy_gravatar->input->setAttribute('class', 'w-100 mono');
    $form->addInput($navy_gravatar->addRule('email', '请填写一个邮箱地址'));

    $navy_tips = new Typecho_Widget_Helper_Form_Element_Text('navy_tips', NULL, '一个高端大气上档次的网站', _t('头像提示'), _t(''));
    $form->addInput($navy_tips);

    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowRecentPosts' => _t('显示最新文章'),
    'ShowCategory' => _t('显示分类'),
    'ShowArchive' => _t('显示归档'),
    'ShowOther' => _t('显示其它杂项')),
    array('ShowRecentPosts', 'ShowCategory'), _t('侧边栏显示'));
    
    $form->addInput($sidebarBlock->multiMode());
}

function getGravatar($email, $s = 40, $d = 'mm', $g = 'g') {

    $hash = md5($email);

    $avatar = "http://gravatar.duoshuo.com/avatar/$hash?s=$s&d=$d&r=$g";

    return $avatar;

}