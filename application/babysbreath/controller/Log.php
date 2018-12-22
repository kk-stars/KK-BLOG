<?php
namespace app\babysbreath\controller;

class Log extends Comm{
    public function log()
    {
        $LogCount = db('operation') -> where('status','1') -> count();
        $operation = db('operation') -> where('status','1') -> paginate(15);
        $this->assign([
            'op'   => $operation,
            'LogC' => $LogCount,
        ]);
        return view();
    }
}
?>