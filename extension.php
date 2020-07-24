<?php

class HideMarkAsReadExtension extends Minz_Extension {
    public function init() {
      Minz_View::appendScript($this->getFileUrl('script.js', 'js'),'', true, true);
    }
}
