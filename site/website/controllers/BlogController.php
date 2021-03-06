<?php

use Website\Controller\AbstractBlogController as AbstractBlogController;

class BlogController extends AbstractBlogController
{

    /**
     * @var
     */
    protected $_blog;

    /**
     * @var Commenting
     */
    protected $_commenting;

    /**
     *
     */
    public function init()
    {
        parent::init();

        $this->_blog = new Blog();

        if (class_exists('Commenting')) {
            $this->_commenting = new Commenting();
        }

        $this->enableLayout();
        $this->view->language = (string)$this->getLocale();
        $this->language = (string)$this->getLocale();
    }

    /**
     * @throws Zend_Controller_Action_Exception
     */
    public function newsEventsAction()
    {
        $this->enableLayout();

        $eventsCategory = Object_BlogCategory::getByName('events');
        $eventsCategory = $eventsCategory->getObjects()[0];

        $this->categoryValidation($eventsCategory);

        $this->view->events = $this->_blog->getListByCategory(
            $eventsCategory,
            $this->_getParam('page', 1),
            $this->_getParam('perpage', 3)
        );

        $newsCategory = Object_BlogCategory::getByName('news');
        $newsCategory = $newsCategory->getObjects()[0];

        $this->categoryValidation($newsCategory);

        $this->view->news = $this->_blog->getListByCategory(
            $newsCategory,
            $this->_getParam('page', 1),
            $this->_getParam('perpage', 3)
        );

        $this->render('news-events');
    }

    /**
     * @throws Zend_Controller_Action_Exception
     */
    public function openDaysAction()
    {
        $this->enableLayout();

        $daysCategory = Object_BlogCategory::getByName('open days');
        $daysCategory = $daysCategory->getObjects()[0];

        $this->categoryValidation($daysCategory);

        $this->view->days = $this->_blog->getListByCategory(
            $daysCategory,
            $this->_getParam('page', 1),
            $this->_getParam('perpage', 3)
        );

        $this->render('open-days');
    }

    /**
     * @throws Zend_Controller_Action_Exception
     */
    public function testimonialsAction()
    {
        $this->enableLayout();

        $testimonialCategory = Object_BlogCategory::getByName('testimonials');
        $testimonialCategory = $testimonialCategory->getObjects()[0];

        $this->categoryValidation($testimonialCategory);

        $this->view->testimonial = $this->_blog->getListByCategory(
            $testimonialCategory,
            $this->_getParam('page', 1),
            $this->_getParam('perpage', 3)
        );

        $this->render('testimonials');
    }

    /**
     * Checks the given item to ensure that is is not null and
     * that it is an instance of the BlogCategory class
     * 
     * @param $item The category item that requires checking
     * @throws Zend_Controller_Action_Exception
     */
    private function categoryValidation($item)
    {
        if (null === $item || !($item instanceof Object_BlogCategory)) {
            throw new \Zend_Controller_Action_Exception('This page does not exist', 404);
        }
    }
}
