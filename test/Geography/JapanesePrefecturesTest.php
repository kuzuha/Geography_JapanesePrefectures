<?php
use \Geography\JapanesePrefectures;

class JapanesePrefecturesTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @return void
     */
    function prefectures()
    {
        $this->assertSame(47, count(JapanesePrefectures::prefectures()));
    }

    /**
     * @test
     * @return void
     */
    function regions()
    {
        $this->assertSame(11, count(JapanesePrefectures::regions()));
    }

    /**
     * @test
     * @return void
     */
    function prefecturesIn()
    {
        $expected = array('茨城県', '栃木県', '群馬県', '埼玉県', '千葉県', '東京都', '神奈川県', '山梨県');
        $this->assertSame($expected, JapanesePrefectures::prefecturesIn('関東'));
    }

    /**
     * @test
     * @return void
     */
    function prefecturesId()
    {
        $this->assertSame(30, JapanesePrefectures::prefecturesId('和歌山県'));
    }

    /**
     * @test
     * @return void
     */
    function prefecturesInfos()
    {
        $info_list = JapanesePrefectures::prefecturesInfos();
        $this->assertSame(47, count($info_list));
        $this->assertSame(array('id', 'name', 'region', 'roman'), array_keys($info_list[0]));
        $this->assertSame('北海道', $info_list[0]['name']);
        $this->assertSame('Hokkaido', $info_list[0]['roman']);
    }
}
