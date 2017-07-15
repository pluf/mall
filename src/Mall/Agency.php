<?php

/**
 * ساختار داده‌ای شعب یک فروشگاه را تعیین می‌کند.
 * 
 * @author hadi <mohammad.hadi.mansouri@dpq.co.ir>
 *
 */
class Mall_Agency extends Shop_Agency
{

    /**
     * @brief مدل داده‌ای را بارگذاری می‌کند.
     *
     * تمام فیلدهای مورد نیاز برای این مدل داده‌ای در این متد تعیین شده و به
     * صورت کامل ساختار دهی می‌شود.
     *
     * @see Pluf_Model::init()
     */
    function init()
    {
        parent::init();
        $this->_a['multitenant'] = false;
        $this->_a['cols'] = array_merge($this->_a['cols'], array(
            'tenant' => array(
                'type' => 'Pluf_DB_Field_Foreignkey',
                'model' => 'Pluf_Tenant',
                'blank' => false,
                'unique' => true,
                'editable' => false
            )
        ));
    }

}