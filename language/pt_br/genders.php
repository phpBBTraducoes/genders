<?php
/**
*
* @package - Genders language
* @copyright (c) 2015 phpBBmodders.net
* @author bonelifer (William Jacoby) bonelifer@phpbbmodders.net
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 1.1.1] (https://github.com/phpBBTraducoes)
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
    'GENDER'			    => 'Sexo',
	'GENDER_NONE'	        => 'Não especificado',
	'FA-MARS'               => 'Masculino',
	'FA-VENUS'              => 'Feminino',
	'FA-INTERSEX'           => 'Intersex',
	'FA-MARS-DOUBLE'        => 'Marte Duplo',
	'FA-MARS-STROKE'        => 'Curso de Marte',
	'FA-MARS-STROKE-H'      => 'Mars Stroke H',
	'FA-MARS-STROKE-V'      => 'Mars Stroke V',
	'FA-MERCURY'            => 'Mercúrio',
	'FA-NEUTER'             => 'Neutro',
	'FA-TRANSGENDER'        => 'Transgênero',
	'FA-TRANSGENDER-ALT'    => 'Transgender Alt',
	'FA-VENUS-DOUBLE'       => 'Venus Duplo',
	'FA-VENUS-MARS'         => 'Venus Marte',
	'FA-GENDERLESS'         => 'Sem gênero',
	'TOO_LARGE_USER_GENDER'	=> 'valor de gênero é muito grande.',
	'TOO_SMALL_USER_GENDER'	=> 'valor de gênero é muito pequeno.', 
));
