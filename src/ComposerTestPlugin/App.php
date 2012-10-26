<?php
namespace ComposerTestPlugin;

class App
{
	private $plugin_dir;
	private $twig;

	public function init()
	{
		// Load Twig
		$twigloader = $loader = new \Twig_Loader_Filesystem($this->plugin_dir . 'templates');
		$this->twig = new \Twig_Environment($twigloader, array(
    		'cache' => $this->plugin_dir . 'cache',
		));

		add_action('template_redirect', array($this, 'doIt'), 1);
	}

	public function doIt() {
		$template = $this->twig->loadTemplate('hello.html');
		echo $template->render(array('greeting' => 'Hello, World!'));
		exit(0);
	}

	public function getPluginDir()
	{
		return $this->plugin_dir;
	}

	public function setPluginDir($plugin_dir)
	{
		$this->plugin_dir = $plugin_dir;
	}
}