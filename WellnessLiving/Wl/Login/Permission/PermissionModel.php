<?php

namespace WellnessLiving\Wl\Login\Permission;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that makes a purchased promotion auto-renewable.
 *
 * The POST method makes the promotion auto-renewable based on the {@link \WellnessLiving\Wl\Login\Permission\PermissionModel::$is_renew} parameter.
 */
class PermissionModel extends WlModelAbstract
{
  /**
   * If `true`, the purchased promotion has been made auto-renewable. Otherwise, this will be <tt>false</tt>.
   *
   * @post post
   * @var bool
   */
  public $is_renew = false;

  /**
   * The key of the purchased promotion.
   *
   * @post get
   * @var string
   */
  public $k_login_promotion = '0';
}

?>