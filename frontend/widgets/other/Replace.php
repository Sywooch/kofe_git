<?php

namespace app\widgets\other;

use yii\base\Widget;

class Replace extends Widget {

    public $params = [];

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
        if (!empty($this->params))
            echo trim(preg_replace($this->params['regExp']['pattern'], $this->getReplacement(), ob_get_clean()));
        else
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

}
