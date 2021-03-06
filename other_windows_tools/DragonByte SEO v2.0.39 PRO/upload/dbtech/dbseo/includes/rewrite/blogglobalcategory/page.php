<?php if(!defined('IN_DBSEO')) die('Access denied.');

// #############################################################################
// DBSEO "BlogGlobalCategory URL" class

/**
* Lets you construct & lookup custom URLs
*/
class DBSEO_Rewrite_BlogGlobalCategory_Page extends DBSEO_Rewrite_BlogGlobalCategory
{
	public static $format = 'Blog_BlogGlobalCategory_Page';
	public static $structure = 'blog.php?blogcategoryid=%d&page=%d';

	/**
	 * Creates a SEO'd URL based on the URL fed
	 *
	 * @param string $url
	 * @param array $data
	 * 
	 * @return string
	 */
	public static function resolveUrl($urlInfo = array(), $structure = NULL)
	{
		// Determine if we have a structure
		$structure = is_null($structure) ? self::$structure : $structure;

		// Now create the URL
		return parent::resolveUrl($urlInfo, $structure);
	}

	/**
	 * Creates a SEO'd URL based on the URL fed
	 *
	 * @param string $url
	 * @param array $data
	 * 
	 * @return string
	 */
	public static function createUrl($data = array(), $format = NULL)
	{
		// Determine if we have a format
		$format = is_null($format) ? self::$format : $format;

		// Now create the URL
		return parent::createUrl($data, $format);
	}
}