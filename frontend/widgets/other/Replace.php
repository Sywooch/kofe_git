<?php

namespace app\widgets\other;

use yii\base\Widget;

class Replace extends Widget {

    public $params = [];
    private $almashtirma = ['ya-share2'];

    public function init() {
        ob_start();
        ob_implicit_flush(false);
    }

    private function getReplacement() {
        $replacement = [];
        foreach ($this->params['regExp']['replacement'] as $r) {
            $replacement[] = str_replace('%s', $this->params['sitePrefix'], $r);
        }
        return $replacement;
    }

    /**
     * Marks the end of content to be cleaned from whitespace characters between HTML tags.
     * Stops capturing an output and echoes cleaned result.
     */
    public function run() {
        if (!empty($this->params)) {
            libxml_use_internal_errors(true);
            $html = ob_get_clean();
            $dom = new \DomDocument();
            $dom->loadHTML($html);
            $xpath = new \DomXpath($dom);
            $res = $xpath->query('//@class');
            foreach ($res as $attr) {
                $value = explode(' ', $attr->value);
                foreach ($value as &$set) {
                    if (strpos($set, 'owl') === false) {
                        if (!in_array($set, $this->almashtirma))
                            $set = $this->params['sitePrefix'] . trim($set);
                    }
                }
                unset($set);
                $attr->value = implode(' ', $value);
            }
            echo trim(preg_replace('/>\s+</', '><', html_entity_decode($dom->saveHTML(), ENT_COMPAT, 'UTF-8')));
        } else
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

}
