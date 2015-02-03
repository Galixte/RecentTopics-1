<?php

/**
*
* @package Recent Topics Extension
* @copyright (c) 2014 PayBas
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* Based on the original NV Recent Topics by Joas Schilling (nickvergessen)
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'RECENT_TOPICS'					=> 'Son Konular',
	'RECENT_TOPICS_LIST'			=> '"son konular" göster',
	'RECENT_TOPICS_LIST_EXPLAIN'	=> 'Eğer etkinleştirilmiş ise, bu forum da "son konular" eklentisi görüntülenir.',

	'RT_CONFIG'						=> 'Ayarlar',
	'RT_ANTI_TOPICS'				=> 'Dışlanan konular',
	'RT_ANTI_TOPICS_EXP'			=> 'Ayraç ", " (Örnek: 7, 9)<br />Sıfır "0" değeri bu özelliği devre dışı bırakır.',
	'RT_MIN_TOPIC_LEVEL'			=> 'Konu türü',
	'RT_MIN_TOPIC_LEVEL_EXP'		=> 'Gösterilecek konu türünü belirler.<br />(0 = Normal, 1 = Sabit, 2 = Duyuru, 3 = Genel Duyuru)',
	'RT_NUMBER'						=> 'Son Konular',
	'RT_NUMBER_EXP'					=> 'Sayfada gösterilecek konu sayısı.',
	'RT_PAGE_NUMBER'				=> 'Son konular sayfalama',
	'RT_PAGE_NUMBER_EXP'			=> 'Daha fazla konu görüntülemek için sayfalama özelliğini kullanın. Bu özelliği kapatmak için "1" giriniz. Sıfır "0" gireseniz forumdaki tüm konular gösterilecektir (tavsiye edilmez).',
	'RT_PARENTS'					=> 'Ana forumu göster',
	'RT_PARENTS_EXP'				=> 'Son Konular listesisinde konunun ait olduğu ana forumu gösterir.',
	'RT_SORT_START_TIME'			=> 'Sort by topic start time',
	'RT_SORT_START_TIME_EXP'		=> 'Enable to sort recent topics by the starting time of the topic, instead of the last post time.',
	'RT_UNREADONLY'					=> 'Sadece okunmamış konuları göster.',
	'RT_UNREADONLY_EXP'				=> 'Bu seçeneğin etkinleştirilmesi sadece okunmamış konuların görüntülenmesini sağlar. Konu türü ayrımı olmayacaktır.<br /><strong>NOT:</strong> Bu özellik giriş yapmış kullanıcılar için geçerlidir; Misafirler normal "Son Konular" listesini görecektir.',

	'RT_VIEW_ON'					=> 'Son Konuları göster:',
));