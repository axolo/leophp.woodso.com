<?php
namespace leophp;
use \PDO as PDO;

class Db extends Controller {

  public function index() {
    $config = App::config()['storage'];
    require_once(join(DIRECTORY_SEPARATOR, array(__DIR__, '..', 'models', $config['dbms'], 'info.php')));
    $info = new Info();
    $res = $info->index();
    return($res);
  }

  public function get($like) {
    var_dump($like);
    $config = App::config()['storage'];
    require_once(join(DIRECTORY_SEPARATOR, array(__DIR__, '..', 'models', $config['dbms'], 'info.php')));
    $info = new Info();
    $res = $info->get($like);
    return($res);
  }

}
