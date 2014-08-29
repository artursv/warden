<?php

namespace Deeson\SiteStatusBundle\Managers;

use Deeson\SiteStatusBundle\Document\Site;

class SiteManager extends BaseManager {

  public function siteExists($url) {
    $result = $this->getRepository()->findBy(array('url' => $url));
    return $result->count() > 0;
  }

  /**
   * @return string
   *   The type of this manager.
   *   e.g. 'Site'
   */
  public function getType() {
    return 'Site';
  }

  /**
   * Create a new empty type of the object.
   *
   * @return Site
   */
  public function makeNewItem() {
    return new Site();
  }
}