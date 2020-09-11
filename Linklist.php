<?php
/*
 * 这是一个单链表的实现
 *
 * (c) 商城组<shop-rd@boqii.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

class LinkList
{
    public $list = [];

    /**
     * 向单向链表添加一个元素
     *
     * @param $index
     * @param $value
     *
     * @return array
     */
    public function addList($value, $index = 0)
    {
        return array_splice($this->list, $index, 0, $value);
    }

    /**
     * 移除一个元素
     *
     * @param $index
     *
     * @return array
     */
    public function removeList($index)
    {
        return array_splice($this->list, $index, 1);
    }

    /**
     * 获取一个元素
     *
     * @param $index
     *
     * @return mixed
     */
    public function getList($index)
    {
        while (current($this->list)) {
            if (key($this->list) == $index) {
                $value = $this->list[$index];
            }

            next($this->list);
        }
        reset($this->list);

        return $value;
    }

    public function sizeList()
    {
        return count($this->list);
    }
}

$linkListObj = new LinkList();
$linkListObj->addList(5);
$linkListObj->addList(4);
$linkListObj->addList(3);
$linkListObj->addList(6, 1);
$linkListObj->removeList(2);
$linkListObj->addList(8, 3);

echo "<pre>";print_r($linkListObj->list);
echo "<br/>";
echo $linkListObj->getList(1);
