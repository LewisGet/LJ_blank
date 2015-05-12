<?php

// joomla default checkpoint
defined("_JEXEC") or die;

/**
 * Class LJBoot
 */
class LJBoot
{
    /**
     * loading files name
     *
     * @var array
     */
    public $loadFiles = array(
        'config',
    );

    public $joomla;

    /**
     * init
     *
     * @param JDocumentHTML $joomla
     */
    public function __construct($joomla)
    {
        // LJ template define
        define("__LJTemplate", true);

        $this->joomla = $joomla;

        $this->fileLoader();

        $config = new LJConfig();

        $this->render(
            array(
                'blockConfigs' => $config->blockConfigs,
                'baseUrl' => $this->getBaseUrl()
            )
        );
    }

    /**
     * files loader
     */
    public function fileLoader()
    {
        foreach ($this->loadFiles as $fileName)
        {
            require_once(__DIR__ . '/' . $fileName . '.php');
        }
    }

    public function getBaseUrl()
    {
        return $this->joomla->baseurl . '/templates/' . $this->joomla->template;
    }

    /**
     * display html content
     *
     * @param array $data
     */
    public function render($data = array())
    {
        require_once(__DIR__ . '/html.php');
    }
}

$LJBoot = new LJBoot($this);
