<?php
/**
 * Created by PhpStorm.
 * User: p2
 * Date: 25/12/2557
 * Time: 14:57 น.
 */

namespace Main\CTL;
use Main\Helper\URL;
use Main\View\HtmlView;
use Main\View\RedirectView;

/**
 * @Restful
 * @uri /
 */
class IndexCTL extends BaseCTL {
    /**
     * @GET
     */
    public function get(){
        $view = new HtmlView('/page', $this->reqInfo->params());
        $view->params['html'] = $this->getHtml('index');
        $view->params['page_name'] = 'index';
        return $view;
    }

    /**
     * @GET
     * @uri [:page_name]
     */
    public function getPage(){
        $view = new HtmlView('/page', $this->reqInfo->params());
        $view->params['html'] = $this->getHtml($this->reqInfo->urlParam('page_name'));
        $view->params['page_name'] = $this->reqInfo->urlParam('page_name');
        return $view;
    }

    /**
     * @GET
     * @uri edit/[:page_name]
     */
    public function editPageForm(){
        $view = new HtmlView('/edit', $this->reqInfo->params());
        $view->params['html'] = $this->getHtml($this->reqInfo->urlParam('page_name'));
        $view->params['page_name'] = $this->reqInfo->urlParam('page_name');
        return $view;
    }

    /**
     * @POST
     * @uri edit/[:page_name]
     */
    public function editPage(){
        $path = 'private/ckpage/'.$this->reqInfo->urlParam('page_name').'.php';
        file_put_contents($path, $this->reqInfo->param('html'));

        $view = new RedirectView(URL::absolute('/'.$this->reqInfo->urlParam('page_name')));
        return $view;
    }

    /**
     * @POST
     * @uri login
     */
    public function login(){
        if($_POST['password'] == '111111'){
            $_SESSION['login'] = true;
        }
        else {
            session_destroy();
        }

        $view = new RedirectView(URL::absolute('/'.$this->reqInfo->urlParam('page_name')));
        return $view;
    }

    /**
     * @POST
     * @uri logout
     */
    public function logout(){
        session_destroy();

        $view = new RedirectView(URL::absolute('/'.$this->reqInfo->urlParam('page_name')));
        return $view;
    }


    public function getHtml($name){
        $path = 'private/ckpage/'.$name.'.php';
        if(file_exists($path)){
            return file_get_contents($path);
        }
        else {
            file_put_contents($path, "");
            return "";
        }
    }
}