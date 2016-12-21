<?php namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Core\Configure;
use Cake\Event\Event;
use Stolz\Assets\Manager;

class AssetsComponent extends Component
{
    private $assets;

    public function initialize(array $config)
    {
        parent::initialize($config);
        Configure::load('assets');
        $this->assets = new Manager(Configure::read('assets'));
    }

    public function beforeRender(Event $event)
    {
        $event->subject()->set('css', $this->assets->css());
        $event->subject()->set('js', $this->assets->js());
    }


    public function __call($name, $arguments)
    {
        return $this->assets->$name(...$arguments);
    }
}