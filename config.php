<?php

defined("__LJTemplate") or die;

class LJConfig
{
    /**
     * 區塊的預設設定
     *
     * array(
     *   順序 => array('type' => '形態', 'name' => '位置名稱', 'size' => 'grid 大小')
     * )
     *
     * @var array
     */
    public $blockConfigs = array(
        array(
            'type' => 'rowStart'
        ),
        array(
            'type' => 'modules',
            'name' => 'position-1',
            'size' => 'col-md-3'
        ),
        array(
            'type' => 'component',
            'size' => 'col-md-6'
        ),
        array(
            'type' => 'modules',
            'name' => 'position-2',
            'size' => 'col-md-3'
        ),
        array(
            'type' => 'rowEnd'
        ),
    );

    public function __construct()
    {
        //todo: 依照後台參數 新增, 刪除 與 編輯 $blockConfigs
    }
}