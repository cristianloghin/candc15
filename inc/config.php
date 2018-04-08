<?php

/*-----------------------------
Menu configuration
------------------------------*/
	$bus_submenu = array(
		array(	'name'		=> 'Operations Review',
				'slug'		=> 'operations-review',
				'id'		=> '01'
		),
		array(	'name'		=> 'Chairman&rsquo;s Statement',
				'slug'		=> 'chairman-statement',
				'id'		=> '02'
		),
		array(	'name'		=> 'Group Chief Executive Officer&rsquo;s Review',
				'slug'		=> 'ceo-review',
				'id'		=> '03'
		),
		array(	'name'		=> 'Group Chief Financial Officer&rsquo;s Review',
				'slug'		=> 'cfo-review',
				'id'		=> '04'
		),
		array(	'name'		=> 'Strategic Report',
				'slug'		=> 'strategic-report',
				'id'		=> '05'
		),
		array(	'name'		=> 'Corporate Responsibility',
				'slug'		=> 'corporate-responsibility',
				'id'		=> '06'
		)
	);

	$gov_submenu = array(
		array(	'name'		=> 'Board of Directors',
				'slug'		=> 'board-directors',
				'id'		=> '01'
		),
		array(	'name'		=> 'Director&rsquo;s Report',
				'slug'		=> 'director-report',
				'id'		=> '02'
		),
		array(	'name'		=> 'Director&rsquo;s Statement of Corporate Governance',
				'slug'		=> 'director-statement-governance',
				'id'		=> '03'
		),
		array(	'name'		=> 'Report of the Remuneration Committee on Director&rsquo;s Remuneration',
				'slug'		=> 'report-director-remuneration',
				'id'		=> '04'
		),
		array(	'name'		=> 'Statement of Director&rsquo;s Responsibilities',
				'slug'		=> 'director-responsibilities',
				'id'		=> '05'
		)
	);

	$acc_submenu = array(
		array(	'name'		=> 'Independent Auditor&rsquo;s Report',
				'slug'		=> 'auditor-report',
				'id'		=> '01'
		),
		array(	'name'		=> 'Group Income Statement',
				'slug'		=> 'group-income',
				'id'		=> '02'
		),
		array(	'name'		=> 'Group Statement of Comprehensive Income',
				'slug'		=> 'group-comprehensive-income',
				'id'		=> '03'
		),
		array(	'name'		=> 'Group Balance Sheet',
				'slug'		=> 'group-balance-sheet',
				'id'		=> '04'
		),
		array(	'name'		=> 'Group Cash Flow Statement',
				'slug'		=> 'group-cash-flow',
				'id'		=> '05'
		),
		array(	'name'		=> 'Group Statement of Changes in Equity',
				'slug'		=> 'group-changes-equity',
				'id'		=> '06'
		),
		array(	'name'		=> 'Company Balance Sheet',
				'slug'		=> 'company-balance-sheet',
				'id'		=> '07'
		),
		array(	'name'		=> 'Company Cash Flow Statement',
				'slug'		=> 'company-cash-flow',
				'id'		=> '08'
		),
		array(	'name'		=> 'Company Statement of Changes In Equity',
				'slug'		=> 'company-changes-equity',
				'id'		=> '09'
		),
		array(	'name'		=> 'Statement of Accounting Policies',
				'slug'		=> 'accounting-policies',
				'id'		=> '10'
		),
		array(	'name'		=> 'Notes Forming Part of the Financial Statements',
				'slug'		=> 'notes',
				'id'		=> '11'
		),
		array(	'name'		=> 'Financial Definitions',
				'slug'		=> 'financial-definitions',
				'id'		=> '12'
		)
	);

	$structure = array(
		array(	'name'		=> 'Business &amp; Strategy',
				'type'    	=> 'multi',
				'slug'		=> 'business-and-strategy',
				'folder'	=> 'bus',
				'submenu'	=> $bus_submenu
		), 
		array(	'name'		=> 'Corporate Governance',
				'type'		=> 'multi',
				'slug'		=> 'corporate-governance',
				'folder'	=> 'gov',
				'submenu'	=> $gov_submenu
		),
		array(	'name'		=> 'Financial Statements',
				'type'		=> 'multi',
				'slug'		=> 'financial-statements',
				'folder'	=> 'acc',
				'submenu'	=> $acc_submenu
		),
		array(	'name'		=> 'Shareholder Information',
				'type'		=> 'single',
				'slug'		=> 'shareholder-information',
				'folder'	=> 'info'
		)
	);

	$folders = array();

	foreach ($structure as $item)
	{
		if ( $item[type] == 'single' )
		{
			$folders[$item['slug']] = array(
				$item['folder']
			);
		}
		else
		{
			$array = array();
			foreach ($item['submenu'] as $sub_item)
			{
				$array[$sub_item['slug']] = $sub_item['id'];
			}

			$folders[$item['slug']] = array(
				$item['folder'],
				$array
			);
		}
	}

/*-----------------------------
PHP Functions
------------------------------*/

function get_body_class()
{
	if(!isset($_GET['cat']))
	{
		echo 'class="home"';
	}
	else if( !isset($_GET['id']))
	{
		echo 'class="' . $_GET['cat'] . '"';
	}
	else
	{
		echo 'class="' . $_GET['id'] . '"';
	}
}

function get_active_menu($slug)
{
	if(!isset($_GET['cat']) && $slug == 'home')
	{
		return ' class="current"';
	}
	else if( $_GET['cat'] == $slug )
	{
		return ' class="current"';
	}
}

?>