<?php
require_once (dirname(dirname(__FILE__))).'/include/read_configs.php';

if (!defined('XOOPS_ROOT_PATH')) {
	exit();
}
/**
 * Class for Blue Room Xcenter
 * @author Simon Roberts <simon@xoops.org>
 * @copyright copyright (c) 2009-2003 XOOPS.org
 * @package kernel
 */
class MyalbumComments extends XoopsObject
{

    function __construct($id = null)
    {
        $this->initVar('com_id', XOBJ_DTYPE_INT, null, false);
        $this->initVar('com_pid', XOBJ_DTYPE_INT, 0, false);
        $this->initVar('com_modid', XOBJ_DTYPE_INT, null, false);
        $this->initVar('com_icon', XOBJ_DTYPE_OTHER, null, false);
        $this->initVar('com_title', XOBJ_DTYPE_TXTBOX, null, true, 255, true);
        $this->initVar('com_text', XOBJ_DTYPE_TXTAREA, null, true, null, true);
        $this->initVar('com_created', XOBJ_DTYPE_INT, 0, false);
        $this->initVar('com_modified', XOBJ_DTYPE_INT, 0, false);
        $this->initVar('com_uid', XOBJ_DTYPE_INT, 0, true);
        $this->initVar('com_ip', XOBJ_DTYPE_OTHER, null, false);
        $this->initVar('com_sig', XOBJ_DTYPE_INT, 0, false);
        $this->initVar('com_itemid', XOBJ_DTYPE_INT, 0, false);
        $this->initVar('com_rootid', XOBJ_DTYPE_INT, 0, false);
        $this->initVar('com_status', XOBJ_DTYPE_INT, 0, false);
        $this->initVar('com_exparams', XOBJ_DTYPE_OTHER, null, false, 255);
        $this->initVar('dohtml', XOBJ_DTYPE_INT, 0, false);
        $this->initVar('dosmiley', XOBJ_DTYPE_INT, 0, false);
        $this->initVar('doxcode', XOBJ_DTYPE_INT, 0, false);
        $this->initVar('doimage', XOBJ_DTYPE_INT, 0, false);
        $this->initVar('dobr', XOBJ_DTYPE_INT, 0, false);
    }

}


/**
* XOOPS policies handler class.
* This class is responsible for providing data access mechanisms to the data source
* of XOOPS user class objects.
*
* @author  Simon Roberts <simon@chronolabs.coop>
* @package kernel
*/
class MyalbumCommentsHandler extends XoopsPersistableObjectHandler
{
    function __construct(&$db) 
    {
		$this->db = $db;
        parent::__construct($db, $GLOBALS['table_comments'][$GLOBALS['myalbum_number']], 'MyalbumComments', "com_id", "com_title");
    }	
}

class Myalbum0CommentsHandler extends MyalbumCommentsHandler
{
	function __construct(&$db) 
    {
		parent::__construct($db);
    }
}

class Myalbum1CommentsHandler extends MyalbumCommentsHandler
{
	function __construct(&$db) 
    {
		parent::__construct($db);
    }
}

class Myalbum2CommentsHandler extends MyalbumCommentsHandler
{
	function __construct(&$db) 
    {
		parent::__construct($db);
    }
}

?>
