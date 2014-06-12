<?php

/*
 * This file is part of HtmlCompress.
 *
 ** (c) 2014 Cees-Jan Kiewiet
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace WyriHaximus\HtmlCompress\Frameworks;

use Sculpin\Core\Event\SourceSetEvent;
use WyriHaximus\HtmlCompress\Factory;
use WyriHaximus\HtmlCompress\Parser;

class SculpinListener {

    public function onAfterFormatFastest(SourceSetEvent $event) {
        $parser = Factory::constructFastest();
        $this->compress($parser, $event);
    }

    public function onAfterFormat(SourceSetEvent $event) {
        $parser = Factory::construct();
        $this->compress($parser, $event);
    }

    public function onAfterFormatSmallest(SourceSetEvent $event) {
        $parser = Factory::constructSmallest();
        $this->compress($parser, $event);
    }

    protected function compress(Parser $parser, SourceSetEvent $event) {
        foreach ($event->allSources() as $source) {
            $ext = explode('.', $source->filename());
            $ext = $ext[(count($ext) - 1)];
            if (in_array($ext, [
                'html',
                'md',
                'markdown',
            ])) {
                $source->setFormattedContent($parser->compress($source->formattedContent()));
            }
        }
    }

}