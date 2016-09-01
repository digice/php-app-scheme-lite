<?php

/**
 * Test Database
 */
class TestDB extends Dbo
{

  protected static $shr;

  public static function shr() {
    if (!isset(self::$shr)) {
      self::$shr = new self();
    }
    return self::$shr;
  }

  public function __construct()
  {
    $this->dbn = 'test';
    parent::__construct();
  }

}

class TestTbl extends Tbl
{

  protected static $shr;

  public static function shr() {
    if (!isset(self::$shr)) {
      self::$shr = new self();
    }
    return self::$shr;
  }

  public function __construct()
  {
    $this->dbo = TestDb::shr();
  }

}