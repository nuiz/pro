<?php
/**
 * Created by PhpStorm.
 * User: p2
 * Date: 7/11/2557
 * Time: 13:54 น.
 */

namespace Main\View;


class HtmlView extends BaseView {
    protected $viewPath = 'private/view', $view;
    public function __construct($view, $params = [])
    {
        $this->view = $view;
        $this->params = $params;
    }

    public function import($view)
    {
        $params = $this->params;
        include($this->viewPath.$view.'.php');
    }

    public function render()
    {
        $params = $this->params;
        include($this->viewPath.$this->view.'.php');
    }
}