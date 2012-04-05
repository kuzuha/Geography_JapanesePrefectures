<?php

require_once dirname(__FILE__) . '/../../src/Geography/JapanesePrefectures.php';
require_once 'PHPUnit/Framework/Assert/Functions.php';

class Geography_JapanesePrefecturesTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @return void
     */
    function prefectures()
    {
        assertSame(47, count(Geography_JapanesePrefectures::prefectures()));
    }

    /**
     * @test
     * @return void
     */
    function regions()
    {
        assertSame(11, count(Geography_JapanesePrefectures::regions()));
    }

    /**
     * @test
     * @return void
     */
    function prefecturesIn()
    {
        $expected = array('茨城県', '栃木県', '群馬県', '埼玉県', '千葉県', '東京都', '神奈川県', '山梨県');
        assertSame($expected, Geography_JapanesePrefectures::prefecturesIn('関東'));
    }

    /**
     * @test
     * @return void
     */
    function prefecturesId()
    {
        assertSame(30, Geography_JapanesePrefectures::prefecturesId('和歌山県'));
    }

    /**
     * @test
     * @return void
     */
    function prefecturesInfos()
    {
        $info_list = Geography_JapanesePrefectures::prefecturesInfos();
        assertSame(47, count($info_list));
        assertSame(array('id', 'name', 'region', 'roman'), array_keys($info_list[0]));
        assertSame('北海道', $info_list[0]['name']);
        assertSame('Hokkaido', $info_list[0]['roman']);
    }
}
