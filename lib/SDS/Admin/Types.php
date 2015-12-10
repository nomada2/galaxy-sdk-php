<?php
namespace SDS\Admin;

/**
 * Autogenerated by Thrift Compiler (0.9.2)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;


/**
 * 客户端metrics的类型
 */
final class ClientMetricType {
  /**
   * 客户端请求延迟
   */
  const Letency = 1;
  static public $__names = array(
    1 => 'Letency',
  );
}

/**
 * 客户端metrics请求延迟的类型
 */
final class LatencyMetricType {
  /**
   * 客户端执行请求花费的时间
   */
  const ExecutionTime = 1;
  static public $__names = array(
    1 => 'ExecutionTime',
  );
}

/**
 * 系统统计指标类型
 */
final class MetricKey {
  /**
   * 速率类型统计指标起始
   */
  const METER_METRIC_MIN = 0;
  /**
   * 限流检查通过的读操作
   */
  const READ_ALLOWED = 1;
  /**
   * 限流检查拒绝的读操作
   */
  const READ_THROTTLED = 2;
  /**
   * 限流检查通过的写操作
   */
  const WRITE_ALLOWED = 3;
  /**
   * 限流检查拒绝的写操作
   */
  const WRITE_THROTTLED = 4;
  /**
   * 成功调用
   */
  const ACTION_SUCCESS = 5;
  /**
   * 客户端错误导致的失败调用
   */
  const ACTION_CLIENT_ERROR = 6;
  /**
   * 系统错误导致的失败调用
   */
  const ACTION_SYSTEM_ERROR = 7;
  /**
   * 速率类型统计指标结束
   */
  const METER_METRIC_MAX = 49;
  /**
   * 直方图类型统计指标起始
   */
  const HISTOGRAM_METRIC_MIN = 50;
  /**
   * CreateTable 调用延迟
   */
  const CREATE_LATENCY = 51;
  /**
   * DropTable 调用延迟
   */
  const DROP_LATENCY = 52;
  /**
   * DescribeTable 调用延迟
   */
  const DESCRIBE_LATENCY = 53;
  /**
   * AlterTable 调用延迟
   */
  const ALTER_LATENCY = 54;
  /**
   * EnableTable 调用延迟
   */
  const ENABLE_LATENCY = 55;
  /**
   * DisableTable 调用延迟
   */
  const DISABLE_LATENCY = 56;
  /**
   * QueryMetrics 调用延迟
   */
  const METRICQUERY_LATENCY = 57;
  /**
   * Get 调用延迟
   */
  const GET_LATENCY = 58;
  /**
   * Put 调用延迟
   */
  const PUT_LATENCY = 59;
  /**
   * Increment 调用延迟
   */
  const INCREMENT_LATENCY = 60;
  /**
   * Delete(Remove) 调用延迟
   */
  const DELETE_LATENCY = 61;
  /**
   * Scan 调用延迟
   */
  const SCAN_LATENCY = 62;
  /**
   * Batch 调用延迟
   */
  const BATCH_LATENCY = 63;
  /**
   * 直方图类型统计指标结束
   */
  const HISTOGRAM_METRIC_MAX = 100;
  static public $__names = array(
    0 => 'METER_METRIC_MIN',
    1 => 'READ_ALLOWED',
    2 => 'READ_THROTTLED',
    3 => 'WRITE_ALLOWED',
    4 => 'WRITE_THROTTLED',
    5 => 'ACTION_SUCCESS',
    6 => 'ACTION_CLIENT_ERROR',
    7 => 'ACTION_SYSTEM_ERROR',
    49 => 'METER_METRIC_MAX',
    50 => 'HISTOGRAM_METRIC_MIN',
    51 => 'CREATE_LATENCY',
    52 => 'DROP_LATENCY',
    53 => 'DESCRIBE_LATENCY',
    54 => 'ALTER_LATENCY',
    55 => 'ENABLE_LATENCY',
    56 => 'DISABLE_LATENCY',
    57 => 'METRICQUERY_LATENCY',
    58 => 'GET_LATENCY',
    59 => 'PUT_LATENCY',
    60 => 'INCREMENT_LATENCY',
    61 => 'DELETE_LATENCY',
    62 => 'SCAN_LATENCY',
    63 => 'BATCH_LATENCY',
    100 => 'HISTOGRAM_METRIC_MAX',
  );
}

/**
 * 统计指标的子类型
 * (MetricKey, MetricType) 元组唯一确定一个统计指标
 */
final class MetricType {
  /**
   * 计数器，支持速率类型和直方图类型的统计指标
   */
  const COUNT = 1;
  /**
   * 1分钟CPS(Count Per Second)均值，支持速率类型的统计指标
   */
  const M1_RATE = 2;
  /**
   * 5分钟CPS(Count Per Second)均值，支持速率类型的统计指标
   */
  const M5_RATE = 3;
  /**
   * 15分钟CPS(Count Per Second)均值，支持速率类型的统计指标
   */
  const M15_RATE = 4;
  /**
   * 均值，支持直方图类型的统计指标
   */
  const MEAN = 5;
  /**
   * 标准差，支持直方图类型的统计指标
   */
  const STDDEV = 6;
  /**
   * 中位数，支持直方图类型的统计指标
   */
  const P50 = 7;
  /**
   * 75%百分位数，支持直方图类型的统计指标
   */
  const P75 = 8;
  /**
   * 95%百分位数，支持直方图类型的统计指标
   */
  const P95 = 9;
  /**
   * 98%百分位数，支持直方图类型的统计指标
   */
  const P98 = 10;
  /**
   * 99%百分位数，支持直方图类型的统计指标
   */
  const P99 = 11;
  static public $__names = array(
    1 => 'COUNT',
    2 => 'M1_RATE',
    3 => 'M5_RATE',
    4 => 'M15_RATE',
    5 => 'MEAN',
    6 => 'STDDEV',
    7 => 'P50',
    8 => 'P75',
    9 => 'P95',
    10 => 'P98',
    11 => 'P99',
  );
}

/**
 * 时间间隔单位，用于查询统计指标时的下采样
 */
final class TimeSpanUnit {
  const SECONDS = 1;
  const MINUTES = 2;
  const HOURS = 3;
  static public $__names = array(
    1 => 'SECONDS',
    2 => 'MINUTES',
    3 => 'HOURS',
  );
}

/**
 * 应用信息
 */
class AppInfo {
  static $_TSPEC;

  /**
   * 小米应用ID
   * 
   * @var string
   */
  public $appId = null;
  /**
   * 小米开发者ID (注意：不同于小米ID)
   * 
   * @var string
   */
  public $developerId = null;
  /**
   * 表到表ID的映射
   * 
   * @var array
   */
  public $tableMappings = null;
  /**
   * 应用OAuth信息, OAuth提供方到第三方OAuth应用信息(如OAuth AppID)的映射
   * 
   * @var array
   */
  public $oauthAppMapping = null;
  /**
   * 小米应用名称
   * 
   * @var string
   */
  public $appName = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'appId',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'developerId',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'tableMappings',
          'type' => TType::MAP,
          'ktype' => TType::STRING,
          'vtype' => TType::STRING,
          'key' => array(
            'type' => TType::STRING,
          ),
          'val' => array(
            'type' => TType::STRING,
            ),
          ),
        4 => array(
          'var' => 'oauthAppMapping',
          'type' => TType::MAP,
          'ktype' => TType::STRING,
          'vtype' => TType::STRING,
          'key' => array(
            'type' => TType::STRING,
          ),
          'val' => array(
            'type' => TType::STRING,
            ),
          ),
        5 => array(
          'var' => 'appName',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['appId'])) {
        $this->appId = $vals['appId'];
      }
      if (isset($vals['developerId'])) {
        $this->developerId = $vals['developerId'];
      }
      if (isset($vals['tableMappings'])) {
        $this->tableMappings = $vals['tableMappings'];
      }
      if (isset($vals['oauthAppMapping'])) {
        $this->oauthAppMapping = $vals['oauthAppMapping'];
      }
      if (isset($vals['appName'])) {
        $this->appName = $vals['appName'];
      }
    }
  }

  public function getName() {
    return 'AppInfo';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->appId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->developerId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::MAP) {
            $this->tableMappings = array();
            $_size0 = 0;
            $_ktype1 = 0;
            $_vtype2 = 0;
            $xfer += $input->readMapBegin($_ktype1, $_vtype2, $_size0);
            for ($_i4 = 0; $_i4 < $_size0; ++$_i4)
            {
              $key5 = '';
              $val6 = '';
              $xfer += $input->readString($key5);
              $xfer += $input->readString($val6);
              $this->tableMappings[$key5] = $val6;
            }
            $xfer += $input->readMapEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::MAP) {
            $this->oauthAppMapping = array();
            $_size7 = 0;
            $_ktype8 = 0;
            $_vtype9 = 0;
            $xfer += $input->readMapBegin($_ktype8, $_vtype9, $_size7);
            for ($_i11 = 0; $_i11 < $_size7; ++$_i11)
            {
              $key12 = '';
              $val13 = '';
              $xfer += $input->readString($key12);
              $xfer += $input->readString($val13);
              $this->oauthAppMapping[$key12] = $val13;
            }
            $xfer += $input->readMapEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->appName);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('AppInfo');
    if ($this->appId !== null) {
      $xfer += $output->writeFieldBegin('appId', TType::STRING, 1);
      $xfer += $output->writeString($this->appId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->developerId !== null) {
      $xfer += $output->writeFieldBegin('developerId', TType::STRING, 2);
      $xfer += $output->writeString($this->developerId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->tableMappings !== null) {
      if (!is_array($this->tableMappings)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('tableMappings', TType::MAP, 3);
      {
        $output->writeMapBegin(TType::STRING, TType::STRING, count($this->tableMappings));
        {
          foreach ($this->tableMappings as $kiter14 => $viter15)
          {
            $xfer += $output->writeString($kiter14);
            $xfer += $output->writeString($viter15);
          }
        }
        $output->writeMapEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    if ($this->oauthAppMapping !== null) {
      if (!is_array($this->oauthAppMapping)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('oauthAppMapping', TType::MAP, 4);
      {
        $output->writeMapBegin(TType::STRING, TType::STRING, count($this->oauthAppMapping));
        {
          foreach ($this->oauthAppMapping as $kiter16 => $viter17)
          {
            $xfer += $output->writeString($kiter16);
            $xfer += $output->writeString($viter17);
          }
        }
        $output->writeMapEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    if ($this->appName !== null) {
      $xfer += $output->writeFieldBegin('appName', TType::STRING, 5);
      $xfer += $output->writeString($this->appName);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

/**
 * 客户端metrics数据结构
 */
class MetricData {
  static $_TSPEC;

  /**
   * 设置/获取metrics的类型
   * 
   * @var int
   */
  public $clientMetricType = null;
  /**
   * 客户端请求调用的接口名称.实际计算的数据类型
   * e.g. createTable.ExecutionTime
   * 
   * @var string
   */
  public $metricName = null;
  /**
   * 实际计算的数值
   * 
   * @var int
   */
  public $value = null;
  /**
   * 客户端请求返回的时间戳
   * 
   * @var int
   */
  public $timeStamp = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'clientMetricType',
          'type' => TType::I32,
          ),
        2 => array(
          'var' => 'metricName',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'value',
          'type' => TType::I64,
          ),
        4 => array(
          'var' => 'timeStamp',
          'type' => TType::I64,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['clientMetricType'])) {
        $this->clientMetricType = $vals['clientMetricType'];
      }
      if (isset($vals['metricName'])) {
        $this->metricName = $vals['metricName'];
      }
      if (isset($vals['value'])) {
        $this->value = $vals['value'];
      }
      if (isset($vals['timeStamp'])) {
        $this->timeStamp = $vals['timeStamp'];
      }
    }
  }

  public function getName() {
    return 'MetricData';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->clientMetricType);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->metricName);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->value);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->timeStamp);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('MetricData');
    if ($this->clientMetricType !== null) {
      $xfer += $output->writeFieldBegin('clientMetricType', TType::I32, 1);
      $xfer += $output->writeI32($this->clientMetricType);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->metricName !== null) {
      $xfer += $output->writeFieldBegin('metricName', TType::STRING, 2);
      $xfer += $output->writeString($this->metricName);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->value !== null) {
      $xfer += $output->writeFieldBegin('value', TType::I64, 3);
      $xfer += $output->writeI64($this->value);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->timeStamp !== null) {
      $xfer += $output->writeFieldBegin('timeStamp', TType::I64, 4);
      $xfer += $output->writeI64($this->timeStamp);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

/**
 * 客户端用于传输metrics的数据结构
 */
class ClientMetrics {
  static $_TSPEC;

  /**
   * 添加/获取客户端metrics数据
   * 
   * @var \SDS\Admin\MetricData[]
   */
  public $metricDataList = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'metricDataList',
          'type' => TType::LST,
          'etype' => TType::STRUCT,
          'elem' => array(
            'type' => TType::STRUCT,
            'class' => '\SDS\Admin\MetricData',
            ),
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['metricDataList'])) {
        $this->metricDataList = $vals['metricDataList'];
      }
    }
  }

  public function getName() {
    return 'ClientMetrics';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::LST) {
            $this->metricDataList = array();
            $_size18 = 0;
            $_etype21 = 0;
            $xfer += $input->readListBegin($_etype21, $_size18);
            for ($_i22 = 0; $_i22 < $_size18; ++$_i22)
            {
              $elem23 = null;
              $elem23 = new \SDS\Admin\MetricData();
              $xfer += $elem23->read($input);
              $this->metricDataList []= $elem23;
            }
            $xfer += $input->readListEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('ClientMetrics');
    if ($this->metricDataList !== null) {
      if (!is_array($this->metricDataList)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('metricDataList', TType::LST, 1);
      {
        $output->writeListBegin(TType::STRUCT, count($this->metricDataList));
        {
          foreach ($this->metricDataList as $iter24)
          {
            $xfer += $iter24->write($output);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

/**
 * 统计指标查询请求
 */
class MetricQueryRequest {
  static $_TSPEC;

  /**
   * 需要查询的表名
   * 
   * @var string
   */
  public $tableName = null;
  /**
   * 起始时间，值为1970/0/0开始的秒数
   * 
   * @var int
   */
  public $startTime = null;
  /**
   * 结束时间，值为1970/0/0开始的秒数
   * 
   * @var int
   */
  public $stopTime = null;
  /**
   * 统计指标主类型
   * 
   * @var int
   */
  public $metricKey = null;
  /**
   * 统计指标子类型
   * 
   * @var int
   */
  public $metricType = null;
  /**
   * 下采样时间间隔, 0或者负数表示读取原始数据不进行下采样
   * 
   * @var int
   */
  public $downsampleInterval = null;
  /**
   * 下采样时间间隔单位
   * 
   * @var int
   */
  public $downsampleTimeUnit = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'tableName',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'startTime',
          'type' => TType::I64,
          ),
        3 => array(
          'var' => 'stopTime',
          'type' => TType::I64,
          ),
        4 => array(
          'var' => 'metricKey',
          'type' => TType::I32,
          ),
        5 => array(
          'var' => 'metricType',
          'type' => TType::I32,
          ),
        6 => array(
          'var' => 'downsampleInterval',
          'type' => TType::I32,
          ),
        7 => array(
          'var' => 'downsampleTimeUnit',
          'type' => TType::I32,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['tableName'])) {
        $this->tableName = $vals['tableName'];
      }
      if (isset($vals['startTime'])) {
        $this->startTime = $vals['startTime'];
      }
      if (isset($vals['stopTime'])) {
        $this->stopTime = $vals['stopTime'];
      }
      if (isset($vals['metricKey'])) {
        $this->metricKey = $vals['metricKey'];
      }
      if (isset($vals['metricType'])) {
        $this->metricType = $vals['metricType'];
      }
      if (isset($vals['downsampleInterval'])) {
        $this->downsampleInterval = $vals['downsampleInterval'];
      }
      if (isset($vals['downsampleTimeUnit'])) {
        $this->downsampleTimeUnit = $vals['downsampleTimeUnit'];
      }
    }
  }

  public function getName() {
    return 'MetricQueryRequest';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->tableName);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->startTime);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->stopTime);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->metricKey);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->metricType);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 6:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->downsampleInterval);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 7:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->downsampleTimeUnit);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('MetricQueryRequest');
    if ($this->tableName !== null) {
      $xfer += $output->writeFieldBegin('tableName', TType::STRING, 1);
      $xfer += $output->writeString($this->tableName);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->startTime !== null) {
      $xfer += $output->writeFieldBegin('startTime', TType::I64, 2);
      $xfer += $output->writeI64($this->startTime);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->stopTime !== null) {
      $xfer += $output->writeFieldBegin('stopTime', TType::I64, 3);
      $xfer += $output->writeI64($this->stopTime);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->metricKey !== null) {
      $xfer += $output->writeFieldBegin('metricKey', TType::I32, 4);
      $xfer += $output->writeI32($this->metricKey);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->metricType !== null) {
      $xfer += $output->writeFieldBegin('metricType', TType::I32, 5);
      $xfer += $output->writeI32($this->metricType);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->downsampleInterval !== null) {
      $xfer += $output->writeFieldBegin('downsampleInterval', TType::I32, 6);
      $xfer += $output->writeI32($this->downsampleInterval);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->downsampleTimeUnit !== null) {
      $xfer += $output->writeFieldBegin('downsampleTimeUnit', TType::I32, 7);
      $xfer += $output->writeI32($this->downsampleTimeUnit);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

/**
 * 统计指标时间序列
 */
class TimeSeriesData {
  static $_TSPEC;

  /**
   * 表名
   * 
   * @var string
   */
  public $tableName = null;
  /**
   * 统计指标主类型
   * 
   * @var int
   */
  public $metricKey = null;
  /**
   * 统计指标子类型
   * 
   * @var int
   */
  public $metricType = null;
  /**
   * 统计指标数据时间序列，值为{时间 => 数值}映射
   * 
   * @var array
   */
  public $data = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'tableName',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'metricKey',
          'type' => TType::I32,
          ),
        3 => array(
          'var' => 'metricType',
          'type' => TType::I32,
          ),
        4 => array(
          'var' => 'data',
          'type' => TType::MAP,
          'ktype' => TType::I64,
          'vtype' => TType::DOUBLE,
          'key' => array(
            'type' => TType::I64,
          ),
          'val' => array(
            'type' => TType::DOUBLE,
            ),
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['tableName'])) {
        $this->tableName = $vals['tableName'];
      }
      if (isset($vals['metricKey'])) {
        $this->metricKey = $vals['metricKey'];
      }
      if (isset($vals['metricType'])) {
        $this->metricType = $vals['metricType'];
      }
      if (isset($vals['data'])) {
        $this->data = $vals['data'];
      }
    }
  }

  public function getName() {
    return 'TimeSeriesData';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->tableName);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->metricKey);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->metricType);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::MAP) {
            $this->data = array();
            $_size25 = 0;
            $_ktype26 = 0;
            $_vtype27 = 0;
            $xfer += $input->readMapBegin($_ktype26, $_vtype27, $_size25);
            for ($_i29 = 0; $_i29 < $_size25; ++$_i29)
            {
              $key30 = 0;
              $val31 = 0.0;
              $xfer += $input->readI64($key30);
              $xfer += $input->readDouble($val31);
              $this->data[$key30] = $val31;
            }
            $xfer += $input->readMapEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('TimeSeriesData');
    if ($this->tableName !== null) {
      $xfer += $output->writeFieldBegin('tableName', TType::STRING, 1);
      $xfer += $output->writeString($this->tableName);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->metricKey !== null) {
      $xfer += $output->writeFieldBegin('metricKey', TType::I32, 2);
      $xfer += $output->writeI32($this->metricKey);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->metricType !== null) {
      $xfer += $output->writeFieldBegin('metricType', TType::I32, 3);
      $xfer += $output->writeI32($this->metricType);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->data !== null) {
      if (!is_array($this->data)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('data', TType::MAP, 4);
      {
        $output->writeMapBegin(TType::I64, TType::DOUBLE, count($this->data));
        {
          foreach ($this->data as $kiter32 => $viter33)
          {
            $xfer += $output->writeI64($kiter32);
            $xfer += $output->writeDouble($viter33);
          }
        }
        $output->writeMapEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

/**
 * 表快照
 */
class Snapshot {
  static $_TSPEC;

  /**
   * 快照名
   * 
   * @var string
   */
  public $snapshotName = null;
  /**
   * 快照状态
   * 
   * @var int
   */
  public $snapshotState = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'snapshotName',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'snapshotState',
          'type' => TType::I32,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['snapshotName'])) {
        $this->snapshotName = $vals['snapshotName'];
      }
      if (isset($vals['snapshotState'])) {
        $this->snapshotState = $vals['snapshotState'];
      }
    }
  }

  public function getName() {
    return 'Snapshot';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->snapshotName);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->snapshotState);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('Snapshot');
    if ($this->snapshotName !== null) {
      $xfer += $output->writeFieldBegin('snapshotName', TType::STRING, 1);
      $xfer += $output->writeString($this->snapshotName);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->snapshotState !== null) {
      $xfer += $output->writeFieldBegin('snapshotState', TType::I32, 2);
      $xfer += $output->writeI32($this->snapshotState);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

/**
 * 表的所有快照
 */
class TableSnapshots {
  static $_TSPEC;

  /**
   * 表名
   * 
   * @var string
   */
  public $tableName = null;
  /**
   * 系统自动生成的快照
   * 
   * @var \SDS\Admin\Snapshot[]
   */
  public $sysSnapshots = null;
  /**
   * 用户生成的快照
   * 
   * @var \SDS\Admin\Snapshot[]
   */
  public $userSnapshots = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'tableName',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'sysSnapshots',
          'type' => TType::LST,
          'etype' => TType::STRUCT,
          'elem' => array(
            'type' => TType::STRUCT,
            'class' => '\SDS\Admin\Snapshot',
            ),
          ),
        3 => array(
          'var' => 'userSnapshots',
          'type' => TType::LST,
          'etype' => TType::STRUCT,
          'elem' => array(
            'type' => TType::STRUCT,
            'class' => '\SDS\Admin\Snapshot',
            ),
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['tableName'])) {
        $this->tableName = $vals['tableName'];
      }
      if (isset($vals['sysSnapshots'])) {
        $this->sysSnapshots = $vals['sysSnapshots'];
      }
      if (isset($vals['userSnapshots'])) {
        $this->userSnapshots = $vals['userSnapshots'];
      }
    }
  }

  public function getName() {
    return 'TableSnapshots';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->tableName);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::LST) {
            $this->sysSnapshots = array();
            $_size34 = 0;
            $_etype37 = 0;
            $xfer += $input->readListBegin($_etype37, $_size34);
            for ($_i38 = 0; $_i38 < $_size34; ++$_i38)
            {
              $elem39 = null;
              $elem39 = new \SDS\Admin\Snapshot();
              $xfer += $elem39->read($input);
              $this->sysSnapshots []= $elem39;
            }
            $xfer += $input->readListEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::LST) {
            $this->userSnapshots = array();
            $_size40 = 0;
            $_etype43 = 0;
            $xfer += $input->readListBegin($_etype43, $_size40);
            for ($_i44 = 0; $_i44 < $_size40; ++$_i44)
            {
              $elem45 = null;
              $elem45 = new \SDS\Admin\Snapshot();
              $xfer += $elem45->read($input);
              $this->userSnapshots []= $elem45;
            }
            $xfer += $input->readListEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('TableSnapshots');
    if ($this->tableName !== null) {
      $xfer += $output->writeFieldBegin('tableName', TType::STRING, 1);
      $xfer += $output->writeString($this->tableName);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->sysSnapshots !== null) {
      if (!is_array($this->sysSnapshots)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('sysSnapshots', TType::LST, 2);
      {
        $output->writeListBegin(TType::STRUCT, count($this->sysSnapshots));
        {
          foreach ($this->sysSnapshots as $iter46)
          {
            $xfer += $iter46->write($output);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    if ($this->userSnapshots !== null) {
      if (!is_array($this->userSnapshots)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('userSnapshots', TType::LST, 3);
      {
        $output->writeListBegin(TType::STRUCT, count($this->userSnapshots));
        {
          foreach ($this->userSnapshots as $iter47)
          {
            $xfer += $iter47->write($output);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

/**
 * 存在快照的表视图
 */
class SnapshotTableView {
  static $_TSPEC;

  /**
   * 表名
   * 
   * @var string
   */
  public $tableName = null;
  /**
   * 表是否存在
   * 
   * @var bool
   */
  public $tableExist = null;
  /**
   * 表的删除时间
   * 
   * @var int
   */
  public $deleteTime = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'tableName',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'tableExist',
          'type' => TType::BOOL,
          ),
        3 => array(
          'var' => 'deleteTime',
          'type' => TType::I64,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['tableName'])) {
        $this->tableName = $vals['tableName'];
      }
      if (isset($vals['tableExist'])) {
        $this->tableExist = $vals['tableExist'];
      }
      if (isset($vals['deleteTime'])) {
        $this->deleteTime = $vals['deleteTime'];
      }
    }
  }

  public function getName() {
    return 'SnapshotTableView';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->tableName);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->tableExist);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->deleteTime);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('SnapshotTableView');
    if ($this->tableName !== null) {
      $xfer += $output->writeFieldBegin('tableName', TType::STRING, 1);
      $xfer += $output->writeString($this->tableName);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->tableExist !== null) {
      $xfer += $output->writeFieldBegin('tableExist', TType::BOOL, 2);
      $xfer += $output->writeBool($this->tableExist);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->deleteTime !== null) {
      $xfer += $output->writeFieldBegin('deleteTime', TType::I64, 3);
      $xfer += $output->writeI64($this->deleteTime);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}


