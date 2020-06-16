<?php
declare(strict_types=1);

namespace Customize\EventListener\EccubeTemplate;

use Eccube\Event\TemplateEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class ProductDetailImageZoom implements EventSubscriberInterface
{

    /**
     * イベントのフックポイントの定義.
     * @return array
     */
    public static function getSubscribedEvents(){
        // 商品詳細画面のテンプレートイベントを登録
        return [
            'Product/detail.twig' => ['onTemplateProductDetail', 10],
        ];
    }

    public function onTemplateProductDetail(TemplateEvent $event)
    {
        $source = $event->getSource();

        dump($source);

        $source = str_replace('<div class="item_visual">', '<div class="item_visual testtest">', $source);

        $event->setSource($source);
    }
}
