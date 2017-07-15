<?php

class Mall_Service extends Shop_Service
{

    /**
     * @brief مدل داده‌ای را بارگذاری می‌کند.
     *
     * @see Pluf_Model::init()
     */
    function init()
    {
        parent::init();
        $this->_a['multitenant'] = false;
        // Merge parent columns with new columns
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
