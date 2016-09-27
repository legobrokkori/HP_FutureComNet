<?php 
class Model_Contents extends Model {
 
    public static function getApplicant()
    {
        $ret = DB::select()->
                from('Applicants')->
                join('entrycategory', 'INNER')->
                on('Applicants.entrycategory', '=' , 'entrycategory.id')->
                order_by('Applicants.id', 'desc')->
                execute();
 
        return $ret;
    }
 
}