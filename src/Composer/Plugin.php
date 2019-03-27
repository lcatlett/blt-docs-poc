<?php

namespace Acquia\Blt\Composer;

use Acquia\Blt\Robo\Common\ArrayManipulator;
use Acquia\Blt\Update\Updater;
use Composer\Composer;
use Composer\EventDispatcher\EventSubscriberInterface;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

/**
 *
 */
class Plugin implements PluginInterface, EventSubscriberInterface {

  /**
   * @var Composer
   */
  protected $composer;
  /**
   * @var IOInterface
   */
  protected $io;

  /**
   * Apply plugin modifications to composer.
   *
   * @param Composer $composer
   * @param IOInterface $io
   */
  public function activate(Composer $composer, IOInterface $io) {

  }

  /**
   * Returns an array of event names this subscriber wants to listen to.
   */
  public static function getSubscribedEvents() {
    return array();
  }


}
