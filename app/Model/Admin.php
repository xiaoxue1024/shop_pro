<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    /**
     * 关联到模型的管理员数据表
     *
     * @var string
     */
    protected $table = 'admin';

    /**
     * 管理员表主键
     *
     * @var string
     */
    protected $primaryKey = 'admin_id';

    /**
     * 管理员登录
     *
     * @param $data  表单提交的数据
     * @return mixed
     */
    public function login($data)
    {
        $one = self::first();
        return $one;
    }

    /**
     * 管理员登录
     *
     * @param $data  表单提交的数据
     * @return mixed
     */
    public function register($data)
    {
        $one = self::first();
        return $one;
    }
}
