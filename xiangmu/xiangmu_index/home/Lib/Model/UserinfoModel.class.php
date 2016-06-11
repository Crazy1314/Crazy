<?php
class UserinfoModel extends Model
{
    function getUinfoByUname($uname)
    {
        return $this->where("username='".$uname."'")->find();
    }
}
?>